@if(isset($resultArray))
    <div id="companies">
        @foreach($resultArray as $companyName => $tasks)
            <div class="company">
                <div class="company-header" id="{{'heading' . $companyName}}">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#{$companyName}}" aria-expanded="true" aria-controls="{{$companyName}}">
                            {{$companyName}}
                        </button>
                    </h5>
                </div>

                <div id="{$companyName}}" class="collapse show" aria-labelledby="{{'heading' . $companyName}}" data-parent="#companies">
                    <div class="company-inputs">
                        asdasdasdasdas
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@else
    <h1>Или ничего не прилетело, или произошла ошибка.</h1>
@endif