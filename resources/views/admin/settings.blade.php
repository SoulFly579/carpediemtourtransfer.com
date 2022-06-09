@extends('admin.layouts.master')
@section('title', "Setting")
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
                <form method="POST" action="{{url("/admin/settings/")}}">
                    @csrf
                    <div class="row py-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="youtube_link">Youtube Link</label>
                                <input type="text" id="youtube_link" class="form-control" name="youtube_link" value="{{$settings->youtube_link}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="twitter_link">Twitter Link</label>
                                <input type="text" id="twitter_link" class="form-control" name="twitter_link" value="{{$settings->twitter_link}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="instagram_link">Instagram Link</label>
                                <input type="text" id="instagram_link" class="form-control" name="instagram_link" value="{{$settings->instagram_link}}"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tiktok_link">Tiktok Link</label>
                                <input type="text" id="tiktok_link" class="form-control" name="tiktok_link" value="{{$settings->tiktok_link}}"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="whatsapp_link">Whatsapp Link</label>
                                <input type="text" id="whatsapp_link" class="form-control" name="whatsapp_link" value="{{$settings->whatsapp_link}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="facebook_link">Facebook Link</label>
                                <input type="text" id="facebook_link" class="form-control" name="facebook_link" value="{{$settings->facebook_link}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_number">Contact Number</label>
                                <input type="text" id="contact_number" class="form-control" name="contact_number" value="{{$settings->contact_number}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="maintenance">Maintenance</label>
                                <select name="maintenance" id="maintenance" class="form-control">
                                    <option value="true" @if($settings->maintenance) selected @endif>Open</option>
                                    <option value="false" @if(!$settings->maintenance) selected @endif>Close</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Update Settings</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

