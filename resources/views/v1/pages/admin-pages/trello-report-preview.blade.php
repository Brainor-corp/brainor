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
        <form action="" method="">
            @foreach($resultArray as $companyName => $tasks)
                @if($companyName!='errors')
                    <div class="company my-3" id="{{'company-' . $companyName}}">
                        <div class="company-header" id="{{'heading' . $companyName}}">
                            <h5 class="mb-0">
                                <button class="btn collapse-btn btn-link" type="button" data-toggle="collapse" data-parent="#{{'company-' . $companyName}}" aria-controls="{{$companyName}}">
                                    {{$companyName}}
                                </button>
                            </h5>
                        </div>

                        <div id="{{$companyName}}" class="collapse p-3 row" aria-labelledby="{{'heading' . $companyName}}">
                            @foreach($tasks as $key => $task)
                                <div class="company-inputs @if($key%2!=0) even @endif col-12">
                                    <input class="m-1 w-100" id="task{{$key}}-text" type="text" name="text" value="{{$task['text']}}">

                                    <label for="task{{$key}}-date">Дата выполнения</label>
                                    <input class="m-3" id="task{{$key}}-date" type="date" name="date" value="{{(new Carbon\Carbon($task['date']))->format('Y-m-d')}}">

                                    <label for="task{{$key}}-time">Время выполнения(мин.)</label>
                                    <input class="m-3" id="task{{$key}}-time" type="number" step="5" name="time" value="{{$task['time']}}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            @endforeach
            <button class="btn btn-primary" type="submit">Скачать отчеты</button>
        </form>
    </div>
@else
    <h2>
        Или в таком промежутке не найдено тасков, или произошла ошибка. <br>
        Выбери другой промежуток, или обратись к своему любимому программисту, пусть дебажит.
    </h2>
@endif