<div class="row m-3">
    <form action="{{route('generateTrelloReport')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="col-5 p-2">
            <input class="w-100 form-control" name="dateFrom" type="date" value="{{\Carbon\Carbon::now()->format('Y-m-d')}}"><span>Введи дату начала</span>
        </div>
        <div class="col-5 p-2">
            <input class="w-100 form-control" name="dateTo" type="date" value="{{\Carbon\Carbon::now()->format('Y-m-d')}}"><span>Введи дату, которая будет в отчете</span>
        </div>
        <div class="col-12 p-2">
            <button type="submit" class="btn btn-success"><span>Сгенерировать</span></button>
        </div>
    </form>
</div>