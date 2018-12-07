@if(isset($resultArray))
    <div id="companies">
        <div class="company my-3" id="errors">
            <div class="company-header" id="heading-errors">
                <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-parent="#errors" aria-controls="errors">
                        errors
                    </button>
                </h5>
            </div>
            @if(isset($resultArray['errors']))
                <div id="errors" class="collapse" aria-labelledby="heading-errors">
                    <div class="company-inputs p-3">
                        @foreach($resultArray['errors'] as $key => $error)
                            <label for="error{{$key}}">Ошибка #{{$key+1}}</label>
                            <input id="error{{$key}}" type="text" class="my-2 w-100" value="{{$error['text']}}">
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
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
                            <div class="company-inputs col-12">
                                <label for="task{{$key}}-text">Название таска</label>
                                <input class="m-3" id="task{{$key}}-text" type="text" name="text" value="{{$task['text']}}">

                                <label for="task{{$key}}-date">Дата выполнения</label>
                                <input class="m-3" id="task{{$key}}-date" type="date" name="date" value="{{(new Carbon\Carbon($task['date']))->format('Y-m-d')}}">

                                <label for="task{{$key}}-time">Время выполнения(мин.)</label>
                                <input class="m-3" id="task{{$key}}-time" type="number" name="time" value="{{$task['time']}}">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@else
    <h1>Или ничего не прилетело, или произошла ошибка.</h1>
@endif