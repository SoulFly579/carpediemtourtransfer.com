@extends('admin.layouts.master')
@section('title','All Images')
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
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3" style="display: flex; justify-content: space-between; align-items: center;">
                    <h6 class="m-0 font-weight-bold text-primary">Add Image</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{url("/admin/gallery/")}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="image">Image Title</label>
                            <input type="text" name="title" id="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="image">Image Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Add Image</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3" style="display: flex; justify-content: space-between; align-items: center;">
                    <h6 class="m-0 font-weight-bold text-primary">{{$galleries->count()}} Image Found</h6>
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
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>
                                    <button class="btn btn-outline-danger deleteSelectedButton">Delete selected</button>
                                </th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Created at</th>
                                <th>Events</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>
                                    <button class="btn btn-outline-danger deleteSelectedButton">Delete selected</button>
                                </th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Created at</th>
                                <th>Events</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($galleries as $gallery)
                                <tr>
                                    <td>
                                        <div class="switch_box box_1">
                                            <input type="checkbox" class="switch_1 all_checkbox" name="checked_image"
                                                   value="{{$gallery->id}}">
                                        </div>
                                    </td>
                                    <td>@if($gallery->title){{$gallery->title}}@elseif($gallery->service_id){{$gallery->getService->title_en}}@elseif($gallery->article_id){{$gallery->getArticle->title_en}}@endif</td>
                                    <td>@if($gallery->title)Gallery @elseif($gallery->service_id)Service @elseif($gallery->article_id)Article @endif</td>
                                    <td><img style="object-fit: cover;" src="{{asset($gallery->image)}}" width="453" height="185" loading="lazy"></td>
                                    <td>{{$gallery->created_at}}</td>
                                    <td >
                                        <form action="{{url("/admin/gallery/")}}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <input type="hidden" name="id" value="{{$gallery->id}}">
                                            <button title="delete" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button>
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
    </div>

@endsection

@section("js")
    <script type="text/javascript">
        $(document).ready(function() {
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
                    url: "{{url("/admin/gallery/gallery_selected_delete")}}",
                    type: "POST",
                    data: {ids: ids, "_token": "{{csrf_token()}}"},
                    success: function () {
                        location.reload()
                    }
                })
            })

        });
    </script>
@endsection
