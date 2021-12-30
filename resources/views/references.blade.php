@extends("layouts.master")
@section("content")
<img class="banner" src="{{asset("img/")}}/references_title_image.jpg" alt="">
    <div class="container content corporate_file">
        <div class="row">
            <div class="col-md-3 sidebar">
                <h4>{{__("home.references")}}</h4>
                <ul>
                    <li>
                        <a href="#about_section">{{__("home.references")}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                          </svg></a>
                    </li>
                </ul>
            </div>
            <div class="posts col-md-9">
                <div class="mini_url"><a href="{{url("/")}}">{{__("home.home")}}</a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;<a href="{{url()->current()}}">{{__("home.references")}}</a></div>
                <h2>{{__("home.reference_context")}}</h2>
            </div>
        </div>
    </div>
@endsection