@extends('admin.layouts.master')
@section('title','All Articles')
@section('content')

        <div class="card shadow mb-4">
            <div class="card-header py-3" style="display: flex; justify-content: space-between; align-items: center;">
                <h6 class="m-0 font-weight-bold text-primary">{{$articles->count()}} Articles Found</h6>
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
                            <th>Article Title</th>
                            <th>Article Subcontent</th>
                            <th>Article Status</th>
                            <th>Created at</th>
                            <th>Events</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Article Title</th>
                            <th>Article Subcontent</th>
                            <th>Article Status</th>
                            <th>Created at</th>
                            <th>Events</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($articles as $article)
                            <tr>
                                <td>{{$article->title_en}}</td>
                                <td>{!!$article->subcontent_en!!}</td>
                                <td>@if($article->is_active)Active @else Deactive @endif</td>
                                <td>{{$article->created_at}}</td>
                                <td class="d-flex flex-row justify-content-around">
                                    <a target="_blank" href="{{url(app()->getLocale()."/blog/$article->slug_en/$article->id")}}" title="view" class="btn btn-sm btn-success" style="margin-right: 10px;"><i class="fa fa-eye"></i></a>
                                    <a href="{{url("/admin/articles/$article->id/edit")}}" title="edit" class="btn btn-sm btn-primary" style="margin-right: 10px;"><i class="fa fa-pen"></i></a>
                                    <form action="{{url("/admin/articles/")}}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <input type="hidden" name="id" value="{{$article->id}}">
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
@endsection
