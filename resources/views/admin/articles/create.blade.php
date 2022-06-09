@extends('admin.layouts.master')
@section('title','Create Articles')
@section('content')
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
                <form method="POST" action="{{url("/admin/articles/")}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="image">Article Image</label>
                        <input type="file" name="title_image" id="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title_tr">Article Title (TR)</label>
                        <input type="text" name="title_tr" id="title_tr" class="form-control" required value="{{old("title_tr")}}">
                    </div>
                    <div class="form-group">
                        <label for="title_en">Article Title (EN)</label>
                        <input type="text" name="title_en" id="title_en" class="form-control" required  value="{{old("title_en")}}">
                    </div>
                    <div class="form-group">
                        <label for="title_ar">Article Title (AR)</label>
                        <input type="text" name="title_ar" id="title_ar" class="form-control" required  value="{{old("title_ar")}}">
                    </div>
                    <div class="form-group">
                        <label for="title_ru">Article Title (RU)</label>
                        <input type="text" name="title_ru" id="title_ru" class="form-control" required  value="{{old("title_ru")}}">
                    </div>
                    <div class="form-group">
                        <label for="subcontent_tr">Article Subcontent (TR)</label>
                        <textarea name="subcontent_tr" id="subcontent_tr" class="form-control" rows="4" required>{{old("subcontent_tr")}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="subcontent_en">Article Subcontent (EN)</label>
                        <textarea name="subcontent_en" id="subcontent_en" class="form-control" rows="4" required>{{old("subcontent_en")}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="subcontent_ar">Article Subcontent (AR)</label>
                        <textarea name="subcontent_ar" id="subcontent_ar" class="form-control" rows="4" required>{{old("subcontent_ar")}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="subcontent_ru">Article Subcontent (RU)</label>
                        <textarea name="subcontent_ru" id="subcontent_ru" class="form-control" rows="4" required>{{old("subcontent_ru")}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="content_tr">Content (TR)</label>
                        <textarea name="content_tr" id="content_tr" class="form-control" rows="4" required>{{old("content_tr")}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="content_en">Content (EN)</label>
                        <textarea name="content_en" id="content_en" class="form-control" rows="4" required>{{old("content_en")}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="content_ar">Content (AR)</label>
                        <textarea name="content_ar" id="content_ar" class="form-control" rows="4" required>{{old("content_ar")}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="content_ru">Content (RU)</label>
                        <textarea name="content_ru" id="content_ru" class="form-control" rows="4" required>{{old("content_ru")}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="keywords_tr">Keywords (TR)</label>
                        <textarea name="keywords_tr" class="form-control" rows="4" required>{{old("keywords_tr")}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="keywords_en">Keywords (EN)</label>
                        <textarea name="keywords_en" class="form-control" rows="4" required>{{old("keywords_en")}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="keywords_ar">Keywords (AR)</label>
                        <textarea name="keywords_ar" class="form-control" rows="4" required>{{old("keywords_ar")}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="keywords_ru">Keywords (RU)</label>
                        <textarea name="keywords_ru" class="form-control" rows="4" required>{{old("keywords_ru")}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="descriptions_tr">Descriptions (TR)</label>
                        <textarea name="descriptions_tr" class="form-control" rows="4" required>{{old("descriptions_tr")}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="descriptions_en">Descriptions (EN)</label>
                        <textarea name="descriptions_en" class="form-control" rows="4" required>{{old("descriptions_en")}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="descriptions_ar">Descriptions (AR)</label>
                        <textarea name="descriptions_ar" class="form-control" rows="4" required>{{old("descriptions_ar")}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="descriptions_ru">Descriptions (RU)</label>
                        <textarea name="descriptions_ru" class="form-control" rows="4" required>{{old("descriptions_ru")}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="descriptions_ru">Status</label>
                        <select name="is_active" class="form-control" id="">
                            <option value="true">Active</option>
                            <option value="false">Deactive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Article Slides</label>
                        <input type="file" name="slides[]" id="image" class="form-control" multiple>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Create Article</button>
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

            CKEDITOR.replace( "subcontent_tr");
            CKEDITOR.replace( "subcontent_en");
            CKEDITOR.replace( "subcontent_ar");
            CKEDITOR.replace( "subcontent_ru");


        });
    </script>
@endsection

