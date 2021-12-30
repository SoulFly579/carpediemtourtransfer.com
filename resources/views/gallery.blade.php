@extends("layouts.master")
@section("content")
<img class="banner" src="{{asset("/img")}}/gallery_title_image.jfif" alt="">
<div class="container content corporate_file">
    <div class="row">
        <div class="col-md-3 sidebar">
            <h4>{{__("home.pictures")}}</h4>
            <ul>
                <li>
                    <a href="">{{__("home.pictures")}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                        </svg></a>
                </li>
            </ul>
        </div>
        <div class="posts gallery_posts col-md-9">
            <div class="mini_url"><a href="{{url("/".app()->getLocale())}}">{{__("home.home")}}</a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;<a
                    href="{{url()->current()}}">{{__("home.pictures")}}</a></div>
            <h2>{{__("home.pictures")}}</h2>
            @foreach ($slides as $slide)
            <button type="button" class="picture" data-bs-toggle="modal" data-bs-target="#slide{{$slide->id}}">
                <img src="{{asset($slide->image)}}" alt="">
                <div class="modal fade" id="slide{{$slide->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <img src="{{asset($slide->image)}}" alt="">
                    </div>
                </div>
                {{$slide->title}}
            </button>
            @endforeach
        </div>
    </div>
</div>
@endsection
