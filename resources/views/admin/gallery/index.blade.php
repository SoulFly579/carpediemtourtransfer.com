@extends('admin.layouts.master')
@section('title','All Images')
@section('content')
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
                                <th>Image Title</th>
                                <th>Image Image</th>
                                <th>Created at</th>
                                <th>Events</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Image Title</th>
                                <th>Image Image</th>
                                <th>Created at</th>
                                <th>Events</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($galleries as $gallery)
                                <tr>
                                    <td>{{$gallery->title}}</td>
                                    <td><img style="object-fit: cover;" src="{{asset($gallery->image)}}" width="453" height="185"></td>
                                    <td>{{$gallery->created_at}}</td>
                                    <td class="d-flex flex-row justify-content-around">
                                        {{--TODO buraya bakılcak--}}
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
