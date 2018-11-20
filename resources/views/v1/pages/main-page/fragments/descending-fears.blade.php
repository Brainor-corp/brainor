<div class="container-fluid descend-fears-section py-5 px-3">
    <div class="section-name my-5 text-center">
        <h1>Развенчаем Ваши страхи</h1>
    </div>
    <div class="row mx-lg-5">
        <div class="col-lg-4 col-12">
            <ul class="nav flex-column" id="myTab" role="tablist">
                @php($i=0)
                @foreach($fears as $fear)
                    <li class="nav-item fear-block">
                        <a class="nav-link py-5 d-flex flex-row  @if($i==0) active @endif flex-md-nowrap flex-wrap" id="tab{{$fear->id}}" data-toggle="tab" href="#fear{{$fear->id}}" role="tab" aria-controls="fear{{$fear->id}}" aria-selected="true">
                            <span class="text-nowrap mr-3">Страх #
                                <span class="descend-fears-fear-number">{{++$i}}</span>:
                            </span>
                            <span class="descend-fears-fear">{!! html_entity_decode(strip_tags($fear->fear_title)) !!}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
<<<<<<< HEAD
        <div class="col-12 col-lg-8 d-flex flex-column justify-content-between">
            <div class="tab-content" id="myTabContent">
                @php($i=1)
                @foreach($fears as $fear)
                    <div class="tab-pane fade py-5 @if($i==1) show active @endif" id="fear{{$fear->id}}" role="tabpanel" aria-labelledby="tab{{$fear->id}}">
                        {!! html_entity_decode(strip_tags($fear->fear_answer)) !!}
                    </div>
                    @php($i++)
                @endforeach
            </div>
            <div class="row px-3">
                <button class="btn green-btn col-12 col-md-6">Просчитать стоимость проекта</button>
            </div>
=======
        <div class="col-lg-8 col-12">
            <span id="fears-insertable-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Metus vulputate eu scelerisque felis imperdiet proin. Dictum non consectetur a erat. Tellus rutrum tellus pellentesque eu. Amet nisl purus in mollis nunc sed id. Potenti nullam ac tortor vitae purus. Varius duis at consectetur lorem donec massa sapien faucibus. Sapien et ligula ullamcorper malesuada proin. Iaculis urna id volutpat lacus laoreet non. Facilisis mauris sit amet massa vitae tortor. Feugiat vivamus at augue eget arcu dictum varius. Sapien pellentesque habitant morbi tristique. Dui accumsan sit amet nulla facilisi. Sagittis nisl rhoncus mattis rhoncus. Integer eget aliquet nibh praesent tristique. Enim ut sem viverra aliquet eget sit amet. Sed egestas egestas fringilla phasellus. Cras fermentum odio eu feugiat pretium. Lobortis feugiat vivamus at augue eget arcu. Convallis aenean et tortor at risus viverra adipiscing at in.
Sed velit dignissim sodales ut eu sem integer vitae justo. Blandit massa enim nec dui nunc mattis enim ut tellus. Quisque sagittis purus sit amet volutpat consequat mauris nunc congue. Porttitor rhoncus dolor purus non enim praesent elementum facilisis leo. Tristique risus nec feugiat in fermentum posuere urna. Ullamcorper morbi tincidunt ornare massa eget egestas purus viverra accumsan. Vulputate dignissim suspendisse in est ante in nibh. Ipsum a arcu cursus vitae. Volutpat commodo sed egestas egestas. Magna ac placerat vestibulum lectus mauris. Amet aliquam id diam maecenas. Maecenas volutpat blandit aliquam etiam erat velit.</span>
            <br>
            <a href="#" class="btn hvr-bounce-to-bottom col-12 col-md-auto mt-5 ">Просчитать стоимость проекта</a>
>>>>>>> hotfix/fix_hrefs_buttons
        </div>
    </div>
</div>