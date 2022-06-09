@extends('admin.layouts.master')
@section('title', "About")
@section('content')
    {{--TODO BURAYI MUTLAKA KONTROL ET--}}
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
            </div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </div>
                @endif
                @if(Session::get("success"))
                    <div class="alert alert-success">
                        {{Session::get("success")}}
                    </div>
                @endif
                <form method="POST" action="{{url("/admin/about/")}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="content_tr">Content (TR)</label>
                        <textarea name="content_tr" id="content_tr" class="form-control" rows="4" required>@if($about){{ $about->content_tr}} @endif</textarea>
                    </div>
                    <div class="form-group">
                        <label for="content_en">Content (EN)</label>
                        <textarea name="content_en" id="content_en" class="form-control" rows="4" required>@if($about){{ $about->content_en }}@endif</textarea>
                    </div>
                    <div class="form-group">
                        <label for="content_ar">Content (AR)</label>
                        <textarea name="content_ar" id="content_ar" class="form-control" rows="4" required>@if($about){{ $about->content_ar  }}@endif</textarea>
                    </div>
                    <div class="form-group">
                        <label for="content_ru">Content (RU)</label>
                        <textarea name="content_ru" id="content_ru" class="form-control" rows="4" required>@if($about){{ $about->content_ru  }}@endif</textarea>
                    </div>
                    <div class="form-group">
                        <label for="keywords_tr">Keywords (TR)</label>
                        <textarea name="keywords_tr" class="form-control" rows="4" required>@if($about){{ $about->keywords_tr}}@endif</textarea>
                    </div>
                    <div class="form-group">
                        <label for="keywords_en">Keywords (EN)</label>
                        <textarea name="keywords_en" class="form-control" rows="4" required>@if($about){{ $about->keywords_en}}@endif</textarea>
                    </div>
                    <div class="form-group">
                        <label for="keywords_ar">Keywords (AR)</label>
                        <textarea name="keywords_ar" class="form-control" rows="4" required>@if($about){{ $about->keywords_ar}}@endif</textarea>
                    </div>
                    <div class="form-group">
                        <label for="keywords_ru">Keywords (RU)</label>
                        <textarea name="keywords_ru" class="form-control" rows="4" required>@if($about){{ $about->keywords_ru}}@endif</textarea>
                    </div>
                    <div class="form-group">
                        <label for="descriptions_tr">Descriptions (TR)</label>
                        <textarea name="descriptions_tr" class="form-control" rows="4" required>@if($about){{ $about->descriptions_tr}}@endif</textarea>
                    </div>
                    <div class="form-group">
                        <label for="descriptions_en">Descriptions (EN)</label>
                        <textarea name="descriptions_en" class="form-control" rows="4" required>@if($about){{ $about->descriptions_en}}@endif</textarea>
                    </div>
                    <div class="form-group">
                        <label for="descriptions_ar">Descriptions (AR)</label>
                        <textarea name="descriptions_ar" class="form-control" rows="4" required>@if($about){{ $about->descriptions_ar}}@endif</textarea>
                    </div>
                    <div class="form-group">
                        <label for="descriptions_ru">Descriptions (RU)</label>
                        <textarea name="descriptions_ru" class="form-control" rows="4" required>@if($about){{ $about->descriptions_ru}}@endif</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Edit About</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section("js")
    <script type="text/javascript">
        $(document).ready(function() {
            CKEDITOR.replace( "content_tr");
            CKEDITOR.replace( "content_en");
            CKEDITOR.replace( "content_ar");
            CKEDITOR.replace( "content_ru");
        });
    </script>
@endsection

