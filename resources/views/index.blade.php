@extends("layouts.master")
@section("content")
    @if($sliders->count() > 0)
    <div id="carousel" class="carousel slider slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach($sliders as $key => $value)
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="{{$key}}" @if($key == 0)class="active"@endif aria-current="true"
                        aria-label="Slide {{$key + 1}}"></button>
            @endforeach
        </div>
        <div class="carousel-inner slider">
            @foreach($sliders as $key => $slider)
                <div class="carousel-item @if($key == 0) active @endif">
                    <img src="{{asset("/$slider->url")}}" loading="lazy" class="d-block" alt="...">
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    @endif
    <div class="container content">
        <div class="row corporate">
            <div class="col-md-6 corporate_content">
                {{-- TODO burayı localization yap--}}
                <h1>{{__("home.corporate")}}</h1>
                <h3>{{__("home.home_about_title")}}</h3>
                <p>{{__("home.home_about")}}</p>
                <a class="continue_btn" href="{{url(app()->getLocale()."/corporate")}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                                   fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                    </svg>
                    {{__("home.read_more")}}</a>
            </div>
            <div class="col-md-6">
                <img src="{{asset("/img")}}/corporate_title_image.jpg" alt="{{__("home.corporate")}}" loading="lazy">
            </div>
        </div>
        <div class="posts services">
            <h1>{{__("home.our_vip_services")}}</h1>
            <!--Single Service Post-->
            @foreach($services as $service)
                @switch(app()->getLocale())
                    @case("tr")
                        <div class="row service_post">
                            <div class="col-md-3">
                                <img src="{{asset("/$service->title_image")}}" alt="{{$service->title_tr}}" loading="lazy">
                            </div>
                            <div class="col-md-9">
                                <h2>{{$service->title_tr}}</h2>
                                {!!$service->subcontent_tr!!}
                                <a class="continue_btn" href="{{url(app()->getLocale()."/services/$service->slug_en/$service->id")}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                                                     fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                    </svg>
                                    {{__("home.read_more")}}</a>
                            </div>
                        </div>
                        @break
                    @case("en")
                        <div class="row service_post">
                            <div class="col-md-3">
                                <img src="{{asset("/$service->title_image")}}" alt="{{$service->title_en}}" loading="lazy">
                            </div>
                            <div class="col-md-9">
                                <h2>{{$service->title_en}}</h2>
                                {!!$service->subcontent_en!!}
                                <a class="continue_btn" href="{{url(app()->getLocale()."/services/$service->slug_en/$service->id")}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                                                     fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                    </svg>
                                    {{__("home.read_more")}}</a>
                            </div>
                        </div>
                        @break
                    @case("ar")
                        <div class="row service_post">
                            <div class="col-md-3">
                                <img src="{{asset("/$service->title_image")}}" alt="{{$service->title_ar}}" loading="lazy">
                            </div>
                            <div class="col-md-9">
                                <h2>{{$service->title_ar}}</h2>
                                {!!$service->subcontent_ar!!}
                                <a class="continue_btn" href="{{url(app()->getLocale()."/services/$service->slug_en/$service->id")}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                                                     fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                    </svg>
                                    {{__("home.read_more")}}</a>
                            </div>
                        </div>
                        @break
                    @case("ru")
                        <div class="row service_post">
                            <div class="col-md-3">
                                <img src="{{asset("/$service->title_image")}}" alt="{{$service->title_ru}}" loading="lazy">
                            </div>
                            <div class="col-md-9">
                                <h2>{{$service->title_ru}}</h2>
                                {!!$service->subcontent_ru!!}
                                <a class="continue_btn" href="{{url(app()->getLocale()."/services/$service->slug_en/$service->id")}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                                                     fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                    </svg>
                                    {{__("home.read_more")}}</a>
                            </div>
                        </div>
                    @break
                @endswitch
            @endforeach
            <!--Single Service Post End-->
        </div>
        {{--todo buraları kontrol et localization olarak --}}
        <div class="row footer_nav">
            <div class="col-md-4 nav_services">
                <img src="{{asset("/img")}}/index_services.jpeg" alt="" loading="lazy">
                <h2>{{__("home.services_desc_title")}}</h2>
                <p>{{__("home.services_desc")}}</p>
                <a class="continue_btn" href="{{url(app()->getLocale()."/services")}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                                  fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                    </svg> {{__("home.read_more")}}</a>
            </div>
            <div class="col-md-4 nav_references">
                <img src="{{asset("/img")}}/index_references.jpg" alt="" loading="lazy">
                <h2>{{__("home.references_desc_title")}}</h2>
                <p>{{__("home.references_desc")}}</p>
                <a class="continue_btn" href="{{url(app()->getLocale()."/references")}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                                    fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                    </svg> {{__("home.read_more")}}</a>
            </div>
            <div class="col-md-4 nav_blog">
                <img src="{{asset("/img")}}/index_blog.jpg" alt="" loading="lazy">
                <h2>{{__("home.blog_desc_title")}}</h2>
                <p>{{__("home.blog_desc")}}</p>
                <a class="continue_btn" href="{{url(app()->getLocale()."/blog")}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                              fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                    </svg> {{__("home.read_more")}}</a>
            </div>
        </div>
    </div>
@endsection
