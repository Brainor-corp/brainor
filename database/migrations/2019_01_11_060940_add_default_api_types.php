<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;

class AddDefaultApiTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $types = array(
            array('name' => 'Сотрудник подошёл к рабочему месту', 'slug' => 'employee_approached_the_workplace', 'description' => null, 'class' => 'api_action'),
            array('name' => 'Сотрудник отошёл от рабочего места', 'slug' => 'employee_left_the_workplace', 'description' => null, 'class' => 'api_action'),
        );

        DB::table('types')->insert($types);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('types')->where('class', 'api_action')->delete();
    }
}
