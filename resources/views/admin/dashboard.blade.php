@extends('admin.layouts.master')
@section('title','Dashboard')
@section('content')


                <!-- Content Row -->
                <div class="row justify-content-around">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Articles Count</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$articles_count}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="far fa-newspaper" style="font-size: 50px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Services Count</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$services_count}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-car-side" style="font-size: 50px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Image Count</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$slides}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="far fa-image" style="font-size: 50px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->
                <div class="row">



                    <div class="mb-4 w-100" style="display: inline-flex; justify-content: space-around; align-items: center;">





                    

                        <!-- Illustrations -->
                        @if($articles_count !== 0)
                        <div class="card shadow mb-4" style="width: 40%;">
                            <div class="card-header py-3">
                                <h5>Last Article</h5>
                                <h6 class="m-0 font-weight-bold text-primary">{{$last_article->title_en}}</h6>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                         src="{{asset($last_article->title_image)}}" alt="...">

                                </div>
                                {!!$last_article->subcontent_en!!}
                            </div>
                        </div>
                        @endif
                        @if($services_count !== 0)
                        <div class="card shadow mb-4" style="width: 40%;">
                            <div class="card-header py-3">
                                <h5>Last Service</h5>
                                <h6 class="m-0 font-weight-bold text-primary">{{$last_service->title_en}}</h6>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                         src="{{asset($last_service->title_image)}}" alt="...">
                                </div>
                                {!!$last_service->subcontent_en!!}
                            </div>
                        </div>

                        @endif









                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

@endsection
