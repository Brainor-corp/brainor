<div class="row m-3">
    <form action="{{route('generateReport')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="col-5 m-2">
            <div class="row">
                <input class="p-2 col-12 border border-info" name="upload[]" type="file" multiple="multiple" required><span class="text-secondary">Выбери файлы для отчета</span>
                <input class="p-2 col-12 border border-info" name="template" type="file"><span class="text-secondary"><span class="text-danger">Необязательно!</span> Выбери шаблон</span>
                <span class="checkbox col-12">
                    <span>
                        <input name="replace" id="check" type="checkbox" value="1">
                        <label for="check"><span>Заменить исходный шаблон <span class="text-danger">(подумать 2 раза)</span></span></label>
                    </span>
                </span>
            </div>
        </div>
        <div class="col-5 p-2">
            <input class="w-100 form-control" name="name" type="text" value="Выходцев Антон Игоревич"><span>Введи имя того, кто будет в отчете</span>
        </div>
        <div class="col-5 p-2">
            <input class="w-100 form-control" name="date" type="date" value="{{\Carbon\Carbon::now()->format('Y-m-d')}}"><span>Введи дату, которая будет в отчете</span>
        </div>
        <div class="col-12 p-2">
            <button type="submit" class="btn btn-success"><span>Сгенерировать</span></button>
        </div>
    </form>
</div>