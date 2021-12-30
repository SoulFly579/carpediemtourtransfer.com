@extends("layouts.master")
@section("content")
    <img class="banner" src="{{asset("/img")}}/blog_title_image.jfif" alt="">
    <div class="container content corporate_file">
        <div class="row">
            <div class="col-md-3 sidebar">
                <h4>{{__("home.blog")}}</h4>
                <ul>
                    @foreach($articles as $side_article)
                        @switch(app()->getLocale())
                            @case("tr")
                            <li>
                                <a href="{{url(app()->getLocale()."/blog/$side_article->slug_en/$side_article->id")}}">{{$side_article->title_tr}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    </svg></a>
                            </li>
                            @break
                            @case("en")
                            <li>
                                <a href="{{url(app()->getLocale()."/blog/$side_article->slug_en/$side_article->id")}}">{{$side_article->title_en}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    </svg></a>
                            </li>
                            @break
                            @case("ar")
                            <li>
                                <a href="{{url(app()->getLocale()."/blog/$side_article->slug_en/$side_article->id")}}">{{$side_article->title_ar}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    </svg></a>
                            </li>
                            @break
                            @case("ru")
                            <li>
                                <a href="{{url(app()->getLocale()."/blog/$side_article->slug_en/$side_article->id")}}">{{$side_article->title_ru}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    </svg></a>
                            </li>
                            @break
                        @endswitch
                    @endforeach
                </ul>
            </div>
            <div class="posts col-md-9" @if(app()->getLocale() == "ar") style="text-align: right;" @endif>
                <div class="mini_url"><a href="{{url("/".app()->getLocale())}}">{{__("home.home")}}</a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;<a href="{{url("/".app()->getLocale()."/blog")}}">{{__("home.blog")}}</a></div>
                <!--Single Service Post-->
                @switch(app()->getLocale())
                    @case("tr")
                    <h2>{{$article->title_tr}}</h2>
                    {!! $article->subcontent_tr!!}
                    {!!$article->content_tr!!}
                    @break
                    @case("en")
                    <h2>{{$article->title_en}}</h2>
                    {!! $article->subcontent_en!!}
                    {!!$article->content_en!!}
                    @break
                    @case("ar")
                    {{$article->title_ar}}
                    {!! $article->subcontent_ar!!}
                    {!!$article->content_ar!!}
                    @break
                    @case("ru")
                    {{$article->title_ru}}
                    {!! $article->subcontent_ru!!}
                    {!!$article->content_ru!!}
                    @break
                @endswitch
                
                <div class="single_post_gallery">
                    @foreach ($article->getGallery as $slider)
                    <button type="button" class="picture" data-bs-toggle="modal" data-bs-target="#slider{{$slider->id}}">
                        <img src="{{asset($slider->image)}}" alt="">
                        <div class="modal fade" id="slider{{$slider->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <img src="{{asset($slider->image)}}" alt="">
                            </div>
                        </div>
                    </button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection