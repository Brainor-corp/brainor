@if(isset($resultArray))
    <div id="companies">
        @if(isset($resultArray['errors']))
            <div class="company my-3" id="errors">
                <div class="company-header" id="heading-errors">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-parent="#errors" aria-controls="errors">
                            errors
                        </button>
                    </h5>
                </div>
                <div id="errors" class="collapse" aria-labelledby="heading-errors">
                    @foreach($resultArray['errors'] as $key => $error)
                        <div class="company-inputs @if($key%2!=0) even @endif p-3">
                            <label for="error{{$key}}">Ошибка #{{$key+1}}</label>
                            <input id="error{{$key}}" type="text" readonly class="my-2 w-100" value="{{$error['text']}}">
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        <form action="{{route('generateTrelloReportDownload')}}" method="post">
            {{ csrf_field() }}
            @foreach($resultArray as $companyName => $tasks)
                @php($key = 0)
                @if($companyName!='errors')
                    <div class="company my-3" id="{{'company-' . $companyName}}">
                        <div class="company-header" id="{{'heading' . $companyName}}">
                            <h5 class="mb-0">
                                <button class="btn collapse-btn btn-link" type="button" data-toggle="collapse" data-parent="#{{'company-' . $companyName}}" aria-controls="{{$companyName}}">
                                    {{$companyName}}
                                </button>
                            </h5>
                        </div>

                        <div id="{{$companyName}}" class="collapse p-3" aria-labelledby="{{'heading' . $companyName}}">
                            <div class="task-place mb-3 row">
                                @foreach($tasks as $taskName => $task)
                                    @php($key++)
                                    <div id="task{{$key}}" class="{{$companyName}} @if($key%2!=0) even @endif @if(isset($task['late'])) late @endif col-12" data-index="{{$key}}">
                                        <input class="mt-3 p-1 w-100" id="task{{$key}}-text" type="text" name="{{$companyName}}[{{$key}}][description]" value="{{$task['text']}}">

                                        <label for="task{{$key}}-date">Дата выполнения</label>
                                        <input class="m-3 p-1" id="task{{$key}}-date" type="date" name="{{$companyName}}[{{$key}}][date]" value="{{(new Carbon\Carbon($task['date']))->format('Y-m-d')}}">

                                        <label for="task{{$key}}-time">Время выполнения(мин.)</label>
                                        <input class="m-3 p-1" id="task{{$key}}-time" type="number" step="5" name="{{$companyName}}[{{$key}}][minutes]" value="{{$task['time']}}">
                                        <button type="button" class="delete-task btn btn-danger" data-task="task{{$key}}">Удалить таск</button>
                                    </div>
                                @endforeach
                            </div>
                            <button type="button" class="create-task btn btn-primary" data-target="{{$companyName}}">Добавить таск</button>
                        </div>
                    </div>
                @endif
            @endforeach
            <hr>
            <div class="row">
                <div class="col-3">
                    <div class="row">
                        <div class="col-12 my-2">
                            <label for="reporter-name">Введи имя того, кто будет в отчете</label>
                            <input class="w-100" id="reporter-name" name="reporter-name" type="text" value="Выходцев Антон Игоревич">
                        </div>
                        <div class="col-12 my-2">
                            <label for="report-date">Введи дату, которая будет в отчете</label>
                            <input class="w-100" id="report-date" name="report-date" type="date" value="{{\Carbon\Carbon::now()->format('Y-m-d')}}">
                        </div>
                    </div>
                </div>
            </div>

            <button class="btn btn-success mt-5" type="submit">Скачать отчеты</button>
            <input id="report-start" name="report-start" type="hidden" value="">
            <input id="report-end" name="report-end" type="hidden" value="">
        </form>
    </div>
@else
    <h2>
        Или в таком промежутке не найдено тасков, или произошла ошибка. <br>
        Выбери другой промежуток, или обратись к своему любимому программисту, пусть дебажит.
    </h2>
@endif