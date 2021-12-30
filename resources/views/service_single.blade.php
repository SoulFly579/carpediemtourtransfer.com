@extends("layouts.master")
@section("content")
    <img class="banner" src="{{asset($service->title_image)}}" alt="">
    <div class="container content corporate_file">
        <div class="row">
            <div class="col-md-3 sidebar">
                <h4>{{__("home.services")}}</h4>
                <ul>
                    @foreach($services as $one_service)
                        @switch(app()->getLocale())
                            @case("tr")
                            <li>
                                <a href="{{url(app()->getLocale()."/services/$one_service->slug_en/$one_service->id")}}">{{$one_service->title_tr}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    </svg></a>
                            </li>
                            @break
                            @case("en")
                            <li>
                                <a href="{{url(app()->getLocale()."/services/$one_service->slug_en/$one_service->id")}}">{{$one_service->title_en}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    </svg></a>
                            </li>
                            @break
                            @case("ar")
                            <li>
                                <a href="{{url(app()->getLocale()."/services/$one_service->slug_en/$one_service->id")}}">{{$one_service->title_ar}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    </svg></a>
                            </li>
                            @break
                            @case("ru")
                            <li>
                                <a href="{{url(app()->getLocale()."/services/$one_service->slug_en/$one_service->id")}}">{{$one_service->title_ru}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                    </svg></a>
                            </li>
                            @break
                        @endswitch
                    @endforeach
                </ul>
            </div>
            <div class="row posts col-md-9">
                <div class="mini_url"><a href="{{url("/".app()->getLocale())}}">{{__("home.home")}}</a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;<a href="{{url("/".app()->getLocale()."/services")}}">{{__("home.services")}}</a></div>
                <div class="col-md-4">
                    <img src="{{asset($service->title_image)}}" alt="">
                </div>
                @switch(app()->getLocale())
                    @case("tr")
                        <div class="services_post col-md-8">
                            <h2>{{$service->title_tr}}</h2>
                            <p>{!!$service->subcontent_tr!!}</p>
                            <a class="get_price_btn" target="_blank" href="https://api.whatsapp.com/send?phone=905422312446&amp;text=Merhaba,%20size%20web%20sitenizden%20ula%C5%9F%C4%B1yorum.">{{__("service.take_price")}}</a>
                        </div>
                        <div class="services_desc">
                            {!! $service->content_tr !!}
                        </div>
                    @break
                    @case("en")
                    <div class="services_post col-md-8">
                        <h2>{{$service->title_en}}</h2>
                        <p>{!!$service->subcontent_en!!}</p>
                        <a class="get_price_btn" target="_blank" href="https://api.whatsapp.com/send?phone=905422312446&amp;text=Merhaba,%20size%20web%20sitenizden%20ula%C5%9F%C4%B1yorum.">{{__("service.take_price")}}</a>
                    </div>
                    <div class="services_desc">
                        {!! $service->content_en !!}
                    </div>
                    @break
                    @case("ar")
                    <div class="services_post col-md-8">
                        <h2>{{$service->title_ar}}</h2>
                        <p>{!!$service->subcontent_ar!!}</p>
                        <a class="get_price_btn" target="_blank" href="https://api.whatsapp.com/send?phone=905422312446&amp;text=Merhaba,%20size%20web%20sitenizden%20ula%C5%9F%C4%B1yorum.">{{__("service.take_price")}}</a>
                    </div>
                    <div class="services_desc">
                        {!! $service->content_ar !!}
                    </div>
                    @break
                    @case("ru")
                    <div class="services_post col-md-8">
                        <h2>{{$service->title_ru}}</h2>
                        <p>{!!$service->subcontent_ru!!}</p>
                        <a class="get_price_btn" target="_blank" href="https://api.whatsapp.com/send?phone=905422312446&amp;text=Merhaba,%20size%20web%20sitenizden%20ula%C5%9F%C4%B1yorum.">{{__("service.take_price")}}</a>
                    </div>
                    <div class="services_desc">
                        {!! $service->content_ru !!}
                    </div>
                    @break
                @endswitch


                <div class="single_post_gallery">
                    @foreach($service->getGallery as $gallery)
                        <button type="button" class="picture" data-bs-toggle="modal" data-bs-target="#slider{{$gallery->id}}">
                            <img src="{{asset($gallery->image)}}" alt="">
                            <div class="modal fade" id="slider{{$gallery->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <img src="{{asset($gallery->image)}}" alt="">
                                </div>
                            </div>
                        </button>
                    @endforeach
                </div>
                <div class="post_social_media">
                    <a target="_blank" href="https://www.facebook.com/carpediemtourtransfer" class="fb"><svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                                width="20" height="20" viewBox="0 0 470.513 470.513"
                                                style="enable-background:new 0 0 470.513 470.513;" xml:space="preserve">
                        <g>
                            <path
                                d="M271.521,154.17v-40.541c0-6.086,0.28-10.8,0.849-14.13c0.567-3.335,1.857-6.615,3.859-9.853   c1.999-3.236,5.236-5.47,9.706-6.708c4.476-1.24,10.424-1.858,17.85-1.858h40.539V0h-64.809c-37.5,0-64.433,8.897-80.803,26.691   c-16.368,17.798-24.551,44.014-24.551,78.658v48.82h-48.542v81.086h48.539v235.256h97.362V235.256h64.805l8.566-81.086H271.521z"
                                fill="currentcolor" />
                        </g>
                    </svg></a>
                    <a target="_blank" href="https://twitter.com/carpe_diem_tour" class="tw"><svg class="twitter_icon" xmlns="http://www.w3.org/2000/svg"
                                                width="20" height="20" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg></a>
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=905422312446&amp;text=Merhaba,%20size%20web%20sitenizden%20ula%C5%9F%C4%B1yorum." class="wp"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg></a>
                </div>
            </div>
        </div>
    </div>
@endsection
