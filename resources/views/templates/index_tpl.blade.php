@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$sliders = DB::table('slider')->select()->where('status',1)->where('com','gioi-thieu')->orderBy('created_at','desc')->get();
?>
@include('templates.layout.slider')
<div class="project">
    <div class="container">
        <div class="row">
            <h3 class="title_home">Dự án đã thực hiện</h3>
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thiết kế nội thất</a></li>
                    <li><a href="#tab_2" data-toggle="tab" aria-expanded="true">Thiết kế ngoại thất</a></li>
                    <li><a href="#tab_3" data-toggle="tab" aria-expanded="true">Ảnh công trình</a></li>
                </ul>
                <div class="tab-content ">
                    <div class="tab-pane active " id="tab_1">
                        <div class="list-hot-item">
                            <div class="col-md-8 left">
                                <div class="box-item col-md-6">
                                    <a href="" title="">
                                        <p><img src="images/sv1.png"></p>
                                        <div class="short-des-home">
                                            <div class="name_vk">Thiết kế căn hộ CC Carillon phường Tân Bình, HCM</div>
                                            <div class="readmore">
                                                <span>Xem thêm</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="box-item col-md-6">
                                    <a href="" title="">
                                        <p><img src="images/sv1.png"></p>
                                        <div class="short-des-home">
                                            <div class="name_vk">Thiết kế căn hộ CC Carillon phường Tân Bình, HCM</div>
                                            <div class="readmore">
                                                <span>Xem thêm</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="box-item col-md-6">
                                    <a href="" title="">
                                        <p><img src="images/sv1.png"></p>
                                        <div class="short-des-home">
                                            <div class="name_vk">Thiết kế căn hộ CC Carillon phường Tân Bình, HCM</div>
                                            <div class="readmore">
                                                <span>Xem thêm</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="box-item col-md-6">
                                    <a href="" title="">
                                        <p><img src="images/sv1.png"></p>
                                        <div class="short-des-home">
                                            <div class="name_vk">Thiết kế căn hộ CC Carillon phường Tân Bình, HCM</div>
                                            <div class="readmore">
                                                <span>Xem thêm</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 right">
                                <a href="" title="">
                                    <p><img src="images/p1.png"></p>
                                    <div class="short-des-home right_banner">
                                        <div class="name_vk">Thiết kế căn hộ CC Carillon phường Tân Bình, HCM</div>
                                        <div class="readmore">
                                            <span>Xem thêm</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_2">
                        <div class="list-hot-item">
                            <div class="col-md-8 left">
                                <div class="box-item col-md-6">
                                    <a href="" title="">
                                        <p><img src="images/sv1.png"></p>
                                        <div class="short-des-home">
                                            <div class="name_vk">Thiết kế căn hộ CC Carillon phường Tân Bình, HCM 2</div>
                                            <div class="readmore">
                                                <span>Xem thêm</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="box-item col-md-6">
                                    <a href="" title="">
                                        <p><img src="images/sv1.png"></p>
                                        <div class="short-des-home">
                                            <div class="name_vk">Thiết kế căn hộ CC Carillon phường Tân Bình, HCM</div>
                                            <div class="readmore">
                                                <span>Xem thêm</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="box-item col-md-6">
                                    <a href="" title="">
                                        <p><img src="images/sv1.png"></p>
                                        <div class="short-des-home">
                                            <div class="name_vk">Thiết kế căn hộ CC Carillon phường Tân Bình, HCM</div>
                                            <div class="readmore">
                                                <span>Xem thêm</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="box-item col-md-6">
                                    <a href="" title="">
                                        <p><img src="images/sv1.png"></p>
                                        <div class="short-des-home">
                                            <div class="name_vk">Thiết kế căn hộ CC Carillon phường Tân Bình, HCM</div>
                                            <div class="readmore">
                                                <span>Xem thêm</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 right">
                                <a href="" title="">
                                    <img src="images/p1.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_3">
                        3
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="service">
    <div class="container">
        <div class="row">
            <h3 class="title_home">Dịch vụ của chúng tôi</h3>
            <div class="box-service-home">
                <div class="col-md-6 col-xs-12">
                    <p><a href="" title=""><img src="images/sv1.png"></a></p>
                    <p class="name_service_home"><a href="" title="">Thiết kế nội thất</a></p>
                    <div class="short-des-service">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <p><a href="" title=""><img src="images/sv2.png"></a></p>
                    <p class="name_service_home"><a href="" title="">Thiết kế công trình</a></p>
                    <div class="short-des-service">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about_home">
    <div class="container">
        <div class="row" style="background: url('{{asset('upload/hinhanh/'.$about->photo)}}') no-repeat right;">
            <div class="col-md-5 col-xs-12">
                <div class="box-about-home">
                    <p class="title-about-home">{{$about->name}}</p>
                    <div class="short-des-about">
                        {!! $about->mota !!}
                    </div>
                    <a href="{{url('gioi-thieu')}}" title=""><p class="readmore"><span>Xem thêm</span></p></a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="news_home">
    <div class="container">
        <div class="row">
            <p class="title-about-home">Tin tức</p>
            <div class="box-news-home">
                @foreach($news as $item_news)
                <div class="col-md-6 col-xs-12 mb-20">
                    <div class="col-md-6 col-xs-12 pdr-0">
                        <a href="{{url('tin-tuc/'.$item_news->alias.'.html')}}" title="{{$item_news->name}}">
                            <img src="{{asset('upload/news/'.$item_news->photo)}}">
                        </a>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="name_news_home"><a href="{{url('tin-tuc/'.$item_news->alias.'.html')}}" title="{{$item_news->name}}">{{$item_news->name}}</a></div>
                        <div class="short-news">{!! $item_news->mota !!}</div>
                        <p class="readmore" style="margin-top: 20px;"><a href="{{url('tin-tuc/'.$item_news->alias.'.html')}}" title="{{$item_news->name}}"><span>Xem thêm</span></a></p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="video">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {!! $video->link !!}
            </div>
        </div>
    </div>
</div>
<div class="box-contact-home">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <p class="title-about-home">Liên hệ</p>
                <p class="p1">Bạn đang muốn thiết kế không gian sống</p>
                <p class="p2">Hãy liên hệ với chúng tôi</p>
                <form action="{{route('postContact')}}" method="post" id="form-contact" accept-charset="utf-8">
                	{{csrf_field()}}
                    <div class="col-md-6">
                        <input type="text" name="name" required="" class="form-control" value="" placeholder="Họ tên">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="phone" required="" class="form-control" value="" placeholder="Số điện thoại">
                    </div>
                     <div class="col-md-6">
                        <input type="email" name="email" required="" class="form-control" value="" placeholder="Email">
                    </div>
                     <div class="col-md-6">
                        <input type="text" name="address" required="" class="form-control" value="" placeholder="Địa chỉ">
                    </div>
                    <div class="col-md-12">
                        <textarea name="content" class="form-control" rows="5" placeholder="Nội dung"></textarea>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-send">Gửi</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="box-map">
                    {!! $setting->iframemap !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
