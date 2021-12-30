@extends("layouts.master")
@section("content")
<img class="banner" src="{{asset("/img")}}/corporate_title_image.jpg" alt="">
<div class="container content corporate_file">
    <div class="row">
        <div class="col-md-3 sidebar">
            <h4>{{__("home.corporate")}}</h4>
            <ul>
                <li>
                    <a href="#about_section">{{__("home.corporate")}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                      </svg></a>
                </li>
            </ul>
        </div>
        <div class="posts col-md-9">
            <div class="mini_url"><a href="{{url("/".app()->getLocale())}}">{{__("home.home")}}</a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;<a href="{{url("/".app()->getLocale()."/corporate")}}">{{__("home.corporate")}}</a></div>
            <section class="about" id="about_section">
                <h2>{{__("home.corporate")}}</h2>
                @switch(app()->getLocale())
                    @case("tr")
                        {!! $about->content_tr !!}
                        @break
                    @case("en")
                        {!! $about->content_en !!}
                        @break
                    @case("ar")
                        {!! $about->content_ar !!}
                        @break
                    @case("ru")
                        {!! $about->content_ru !!}
                        @break
                @endswitch
            </section>
        </div>
    </div>
</div>
@endsection
