@extends('admin.layouts.master')
@section('title',$service->title_en." Service")
@section('content')
    <style>
        .switch_box{
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }
        input[type="checkbox"].switch_1{
            font-size: 20px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            width: 3.5em;
            height: 1.5em;
            background: #ddd;
            border-radius: 3em;
            position: relative;
            cursor: pointer;
            outline: none;
            -webkit-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
        }

        input[type="checkbox"].switch_1:checked{
            background: #0ebeff;
        }

        input[type="checkbox"].switch_1:after{
            position: absolute;
            content: "";
            width: 1.5em;
            height: 1.5em;
            border-radius: 50%;
            background: #fff;
            -webkit-box-shadow: 0 0 .25em rgba(0,0,0,.3);
            box-shadow: 0 0 .25em rgba(0,0,0,.3);
            -webkit-transform: scale(.7);
            transform: scale(.7);
            left: 0;
            -webkit-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
        }

        input[type="checkbox"].switch_1:checked:after{
            left: calc(100% - 1.5em);
        }
    </style>
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
                <form method="POST" action="{{url("/admin/services/$service->id")}}" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label for="image">Service Image</label>
                        <input type="file" name="title_image" id="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title_tr">Service Title (TR)</label>
                        <input type="text" name="title_tr" id="title_tr" class="form-control" required
                               value="{{$service->title_tr}}">
                    </div>
                    <div class="form-group">
                        <label for="title_en">Service Title (EN)</label>
                        <input type="text" name="title_en" id="title_en" class="form-control" required
                               value="{{$service->title_en}}">
                    </div>
                    <div class="form-group">
                        <label for="title_ar">Service Title (AR)</label>
                        <input type="text" name="title_ar" id="title_ar" class="form-control" required
                               value="{{$service->title_ar}}">
                    </div>
                    <div class="form-group">
                        <label for="title_ru">Service Title (RU)</label>
                        <input type="text" name="title_ru" id="title_ru" class="form-control" required
                               value="{{$service->title_ru}}">
                    </div>
                    <div class="form-group">
                        <label for="subcontent_tr">Service Subcontent (TR)</label>
                        <textarea name="subcontent_tr" id="subcontent_tr" class="form-control" rows="4"
                                  required>{{$service->subcontent_tr}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="subcontent_en">Service Subcontent (EN)</label>
                        <textarea name="subcontent_en" id="subcontent_en" class="form-control" rows="4"
                                  required>{{$service->subcontent_en}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="subcontent_ar">Service Subcontent (AR)</label>
                        <textarea name="subcontent_ar" id="subcontent_ar" class="form-control" rows="4"
                                  required>{{$service->subcontent_ar}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="subcontent_ru">Service Subcontent (RU)</label>
                        <textarea name="subcontent_ru" id="subcontent_ru" class="form-control" rows="4"
                                  required>{{$service->subcontent_ru}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="content_tr">Content (TR)</label>
                        <textarea name="content_tr" id="content_tr" class="form-control" rows="4"
                                  required>{{$service->content_tr}} </textarea>
                    </div>
                    <div class="form-group">
                        <label for="content_en">Content (EN)</label>
                        <textarea name="content_en" id="content_en" class="form-control" rows="4"
                                  required>{{ $service->content_en }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="content_ar">Content (AR)</label>
                        <textarea name="content_ar" id="content_ar" class="form-control" rows="4"
                                  required>{{$service->content_ar  }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="content_ru">Content (RU)</label>
                        <textarea name="content_ru" id="content_ru" class="form-control" rows="4"
                                  required>{{$service->content_ru  }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="keywords_tr">Keywords (TR)</label>
                        <textarea name="keywords_tr" class="form-control" rows="4"
                                  required>{{$service->keywords_tr}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="keywords_en">Keywords (EN)</label>
                        <textarea name="keywords_en" class="form-control" rows="4"
                                  required>{{$service->keywords_en}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="keywords_ar">Keywords (AR)</label>
                        <textarea name="keywords_ar" class="form-control" rows="4"
                                  required>{{$service->keywords_ar}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="keywords_ru">Keywords (RU)</label>
                        <textarea name="keywords_ru" class="form-control" rows="4"
                                  required>{{$service->keywords_ru}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="descriptions_tr">Descriptions (TR)</label>
                        <textarea name="descriptions_tr" class="form-control" rows="4"
                                  required>{{$service->descriptions_tr}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="descriptions_en">Descriptions (EN)</label>
                        <textarea name="descriptions_en" class="form-control" rows="4"
                                  required>{{$service->descriptions_en}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="descriptions_ar">Descriptions (AR)</label>
                        <textarea name="descriptions_ar" class="form-control" rows="4"
                                  required>{{$service->descriptions_ar}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="descriptions_ru">Descriptions (RU)</label>
                        <textarea name="descriptions_ru" class="form-control" rows="4"
                                  required>{{$service->descriptions_ru}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="descriptions_ru">Status</label>
                        <select name="is_active" class="form-control">
                            @if($service->is_active)
                                <option value="true" selected>Active</option>
                                <option value="false">Deactive</option>
                            @else
                                <option value="true">Active</option>
                                <option value="false" selected>Deactive</option>
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Service Slides</label>
                        <input type="file" name="slides[]" id="image" class="form-control" multiple>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Edit Service</button>
                    </div>
                </form>

                <hr class="m-5"/>
                <div class="table-responsive mb-5">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>
                                <button class="btn btn-outline-danger deleteSelectedButton">Delete selected</button>
                            </th>
                            <th>Service Image</th>
                            <th>Created at</th>
                            <th>Events</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>
                                <button class="btn btn-outline-danger deleteSelectedButton">Delete selected</button>
                            </th>
                            <th>Service Image</th>
                            <th>Created at</th>
                            <th>Events</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($service->getGallery as $gallery)
                            <tr>
                                <td>
                                    <div class="switch_box box_1">
                                        <input type="checkbox" class="switch_1 all_checkbox" name="checked_image" type="checkbox"
                                               value="{{$gallery->id}}">
                                    </div>
                                </td>
                                <td><img src="{{asset("/$gallery->image")}}" alt="" loading="lazy" width="400"
                                         height="200"></td>
                                <td>{{$gallery->created_at->diffForHumans()}}</td>
                                <td>
                                    <form action="{{url("/admin/services/gallery_single_delete")}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <input type="hidden" name="id" value="{{$gallery->id}}">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
@section("js")
    <script type="text/javascript">
        $(document).ready(function () {
            CKEDITOR.replace("content_tr");
            CKEDITOR.replace("content_en");
            CKEDITOR.replace("content_ar");
            CKEDITOR.replace("content_ru");


            CKEDITOR.replace("subcontent_tr");
            CKEDITOR.replace("subcontent_en");
            CKEDITOR.replace("subcontent_ar");
            CKEDITOR.replace("subcontent_ru");

        });

        $(".deleteSelectedButton").click(() => {
            var ids = [];
            var all = document.getElementsByClassName("all_checkbox")
            for (var i = 0; all[i]; i++) {
                if (all[i].checked) {
                    ids.push(all[i].value)
                }
            }
            if (ids.length <= 0) {
                alert("Please select which image you want to delete...")
                return false;
            }

            $.ajax({
                url: "{{url("/admin/services/gallery_selected_delete")}}",
                type: "POST",
                data: {ids: ids, "_token": "{{csrf_token()}}"},
                success: function () {
                    location.reload()
                }
            })
        })
    </script>
@endsection

