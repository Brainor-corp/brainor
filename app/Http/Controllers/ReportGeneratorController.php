<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\IOFactory;
use clsTinyButStrong;
use clsOpenTBS;


class ReportGeneratorController extends Controller
{

    public function generateReport(Request $request)
    {
        $vals = array();
        global $vars;
        $vars = array();
        $c=0;
        $vals['reporter'] = $request->name;
        $vals['report_date'] = $request->date;

        File::delete(File::allfiles(storage_path('app/uploads/')));

        $template_path = storage_path('app/template/') . 'report template.docx';

        if(isset($request->template) && isset($request->replace)){
            copy($template_path, storage_path('app/template/') . 'report template(backup).docx' );
            $request->template->storeAs('template', 'report template.docx');
        }
        else if(!isset($request->template) && isset($request->replace)){
            return "Если нужно заменить шаблон, то выбери шаблон!";
        }

        foreach ($request->upload as $upload) {
            $upload->storeAs('uploads', $upload->getClientOriginalName());

            $inputFileName = storage_path('app/uploads/') . $upload->getClientOriginalName();

            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            $reader->setReadDataOnly(false);
            $spreadsheet = $reader->load($inputFileName);

            $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

            $project_name = '';
            foreach ($sheetData as $row => $col) {

                if($row == 1){
                    $project_name = $col['B'];
                }
                elseif ($row == 2){
                    $vals['projects'][$project_name]['week_start'] = $col['B'];
                    $vals['projects'][$project_name]['week_end'] = date_create($vals['projects'][$project_name]['week_start']);
                    date_add($vals['projects'][$project_name]['week_end'], date_interval_create_from_date_string('6 days'));
                    $vals['projects'][$project_name]['week_end'] = date_format($vals['projects'][$project_name]['week_end'], 'd.m.Y');
                    $vals['projects'][$project_name]['tasks'][$c]['date'] = date('d.m.Y', strtotime($col['D']));
                    $vals['projects'][$project_name]['tasks'][$c]['minutes'] = $col['E'];
                    $vals['projects'][$project_name]['tasks'][$c]['description'] = $col['F'];
                    $c++;
                }
                else {
                    if($col['D']!=null) {
                        $vals['projects'][$project_name]['tasks'][$c]['date'] = date('d.m.Y', strtotime($col['D']));
                        $vals['projects'][$project_name]['tasks'][$c]['minutes'] = $col['E'];
                        $vals['projects'][$project_name]['tasks'][$c]['description'] = $col['F'];
                        $c++;
                    }
                }
            }

            usort($vals['projects'][$project_name]['tasks'], function ($a, $b) {
                $t1 = strtotime($a['date']);
                $t2 = strtotime($b['date']);
                return $t1 - $t2;
            });

            $vals['projects'][$project_name]['minutes_summary'] = array_sum(array_column($vals['projects'][$project_name]['tasks'], 'minutes'));
            $vals['projects'][$project_name]['hours_summary'] = intval($vals['projects'][$project_name]['minutes_summary']) / 60;
        }

        foreach ($vals['projects'] as $name => $values){
            $TBS = new clsTinyButStrong;
            $TBS->Plugin(TBS_INSTALL, clsOpenTBS::class);

            $TBS->LoadTemplate($template_path);

            $TBS->SetOption('charset', false);
            $TBS->SetOption('render', TBS_OUTPUT);

            $TBS->MergeField('project_name', $name);
            $TBS->MergeField('reporter', $vals['reporter']);
            $TBS->MergeField('report_date', $vals['report_date']);
            $TBS->MergeField('week_start', $values['week_start']);
            $TBS->MergeField('week_end', $values['week_end']);
            $TBS->MergeField('minutes_summary', $values['minutes_summary']);
            $TBS->MergeField('hours_summary', $values['hours_summary']);
            $TBS->MergeBlock('a', $values['tasks']);

            $doc_title = 'Отчет ' . $name . ' ' . date_format(date_create($values['week_start']), 'd.m.Y') . '.docx';


            $TBS->Show(OPENTBS_FILE, storage_path('app/uploads/') . $doc_title);
        }

        $phar = new \PharData(storage_path('app/uploads/') . 'Отчеты ' . date("d.m.Y") . '.tar.gz');
        $phar->buildFromDirectory(storage_path('app/uploads/'), '/\.docx$/');

        return response()->download(storage_path('app/uploads/') .'Отчеты ' . date("d.m.Y") . '.tar.gz');
    }
}
