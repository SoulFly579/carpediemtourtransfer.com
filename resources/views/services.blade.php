@extends("layouts.master")
@section("content")
    <img class="banner" src="{{asset("/img")}}/services_title_image.jpg" alt="">
    <div class="container content corporate_file">
        <div class="row">
            <div class="col-md-3 sidebar">
                <h4>{{__("home.services")}}</h4>
                <ul>
                    @foreach($services as $service)
                        @switch(app()->getLocale())
                            @case("tr")
                            <li>
                                <a href="{{url(app()->getLocale()."/services/$service->slug_en/$service->id")}}">{{$service->title_tr}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    </svg></a>
                            </li>
                            @break
                            @case("en")
                            <li>
                                <a href="{{url(app()->getLocale()."/services/$service->slug_en/$service->id")}}">{{$service->title_en}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    </svg></a>
                            </li>
                            @break
                            @case("ar")
                            <li>
                                <a href="{{url(app()->getLocale()."/services/$service->slug_en/$service->id")}}">{{$service->title_ar}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    </svg></a>
                            </li>
                            @break
                            @case("ru")
                            <li>
                                <a href="{{url(app()->getLocale()."/services/$service->slug_en/$service->id")}}">{{$service->title_ru}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    </svg></a>
                            </li>
                            @break
                        @endswitch
                    @endforeach
                </ul>
            </div>
            <div class="posts col-md-9">
                <div class="mini_url"><a href="{{url("/".app()->getLocale())}}">{{__("home.home")}}</a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;<a href="{{url("/".app()->getLocale()."/services")}}">{{__("home.services")}}</a></div>
                <!--Single Service Post-->
                @foreach($services as $service)
                    @switch(app()->getLocale())
                        {{--TODO burda sadece bir adet slug bırak o yüzden bunları düzelt--}}
                        @case("tr")
                            <div class="row service_post" id="{{$service->title_tr}}">
                                <div class="col-md-3">
                                    <img src="{{asset("/").$service->title_image}}" alt="{{$service->title_tr}}">
                                </div>
                                <div class="col-md-9">
                                    <h2>{{$service->title_tr}}</h2>
                                    {!!$service->subcontent_tr!!}
                                    <a class="continue_btn" href="{{url(app()->getLocale()."/services/$service->slug_en/$service->id")}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                                                             fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                  d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                        </svg> {{__("home.read_more")}}</a>
                                </div>
                            </div>
                            <!--Single Service Post End-->
                        @break
                        @case("en")
                        <div class="row service_post" id="{{$service->title_en}}">
                            <div class="col-md-3">
                                <img src="{{asset("/").$service->title_image}}" alt="{{$service->title_en}}">
                            </div>
                            <div class="col-md-9">
                                <h2>{{$service->title_en}}</h2>
                                {!!$service->subcontent_en!!}
                                <a class="continue_btn" href="{{url(app()->getLocale()."/services/$service->slug_en/$service->id")}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                                                         fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                    </svg> {{__("home.read_more")}}</a>
                            </div>
                        </div>
                        <!--Single Service Post End-->
                        @break
                        @case("ar")
                        <div class="row service_post" id="{{$service->title_ar}}">
                            <div class="col-md-3">
                                <img src="{{asset("/").$service->title_image}}" alt="{{$service->title_ar}}">
                            </div>
                            <div class="col-md-9">
                                <h2>{{$service->title_ar}}</h2>
                                {!!$service->subcontent_ar!!}
                                <a class="continue_btn" href="{{url(app()->getLocale()."/services/$service->slug_en/$service->id")}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                                                         fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                    </svg> {{__("home.read_more")}}</a>
                            </div>
                        </div>
                        <!--Single Service Post End-->
                        @break
                        @case("ru")
                        <div class="row service_post" id="{{$service->title_ru}}">
                            <div class="col-md-3">
                                <img src="{{asset("/").$service->title_image}}" alt="{{$service->title_ru}}">
                            </div>
                            <div class="col-md-9">
                                <h2>{{$service->title_ru}}</h2>
                                {!!$service->subcontent_ru!!}
                                <a class="continue_btn" href="{{url(app()->getLocale()."/services/$service->slug_en/$service->id")}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                                                         fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                    </svg> {{__("home.read_more")}}</a>
                            </div>
                        </div>
                        <!--Single Service Post End-->
                        @break
                    @endswitch
                @endforeach
            </div>
        </div>
    </div>
@endsection