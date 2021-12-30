@extends("layouts.master")
@section("content")
    <img class="banner" src="{{asset("/img")}}/blog_title_image.jfif" alt="">
    <div class="container content corporate_file">
        <div class="row">
            <div class="col-md-3 sidebar">
                <h4>{{__("home.blog")}}</h4>
                <ul>
                    @foreach($articles as $article)
                        @switch(app()->getLocale())
                            @case("tr")
                            <li>
                                <a href="{{url(app()->getLocale()."/blog/$article->slug_en/$article->id")}}">{{$article->title_tr}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    </svg></a>
                            </li>
                            @break
                            @case("en")
                            <li>
                                <a href="{{url(app()->getLocale()."/blog/$article->slug_en/$article->id")}}">{{$article->title_en}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    </svg></a>
                            </li>
                            @break
                            @case("ar")
                            <li>
                                <a href="{{url(app()->getLocale()."/blog/$article->slug_en/$article->id")}}">{{$article->title_ar}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    </svg></a>
                            </li>
                            @break
                            @case("ru")
                            <li>
                                <a href="{{url(app()->getLocale()."/blog/$article->slug_en/$article->id")}}">{{$article->title_ru}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    </svg></a>
                            </li>
                            @break
                        @endswitch
                    @endforeach
                </ul>
            </div>
            <div class="posts col-md-9">
                <div class="mini_url"><a href="{{url("/".app()->getLocale())}}">{{__("home.home")}}</a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;<a href="{{url("/".app()->getLocale()."/blog")}}">{{__("home.blog")}}</a></div>
                @foreach($articles as $article)
                    @switch(app()->getLocale())
                        {{--TODO burda sadece bir adet slug bırak o yüzden bunları düzelt--}}
                        @case("tr")
                        <div class="post">
                            <div class="post_image">
                                <img src="{{asset($article->title_image)}}" alt="{{$article->title_en}}">
                            </div>
                            <div class="post_title">
                                <h2>{{$article->title_tr}}</h2>
                            </div>
                            <p>{!!$article->subcontent_tr!!}</p>
                            <a class="continue_btn" href="{{url(app()->getLocale()."/blog/$article->slug_en/$article->id")}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg> {{__("home.read_more")}}</a>
                        </div>
                        @break
                        @case("en")
                        <div class="post">
                            <div class="post_image">
                                <img src="{{asset($article->title_image)}}" alt="{{$article->title_ar}}">
                            </div>
                            <div class="post_title">
                                <h2>{{$article->title_en}}</h2>
                            </div>
                            <p>{!!$article->subcontent_en!!}</p>
                            <a class="continue_btn" href="{{url(app()->getLocale()."/blog/$article->slug_en/$article->id")}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg> {{__("home.read_more")}}</a>
                        </div>
                        @break
                        @case("ar")
                            <div class="post">
                                <div class="post_image">
                                    <img src="{{asset($article->title_image)}}" alt="{{$article->title_ru}}">
                                </div>
                                <div class="post_title">
                                    <h2>{{$article->title_ar}}</h2>
                                </div>
                                <p>{!!$article->subcontent_ar!!}</p>
                                <a class="continue_btn" href="{{url(app()->getLocale()."/blog/$article->slug_en/$article->id")}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg> {{__("home.read_more")}}</a>
                            </div>
                        @break
                        @case("ru")
                            <div class="post">
                                <div class="post_image">
                                    <img src="{{asset($article->title_image)}}" alt="{{$article->title_ru}}">
                                </div>
                                <div class="post_title">
                                    <h2>{{$article->title_ru}}</h2>
                                </div>
                                <p>{!!$article->subcontent_ru!!}</p>
                                <a class="continue_btn" href="{{url(app()->getLocale()."/blog/$article->slug_en/$article->id")}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg> {{__("home.read_more")}}</a>
                            </div>
                        @break
                    @endswitch
                @endforeach
            </div>
        </div>
    </div>
@endsection