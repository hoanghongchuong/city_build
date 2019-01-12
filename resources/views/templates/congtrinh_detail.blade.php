@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $sliders = DB::table('slider')->select()->where('status',1)->where('com','gioi-thieu')->orderBy('created_at','desc')->get();
?>
<div class="breadcrumb">
    <div class="container">
        <div class="row">
            <ul>
                <li><a href="{{url('')}}">Trang chủ / </a></li>
                <li><a href="{{url('anh-cong-trinh')}}">Công trình /</a></li>
                <li>{{$news_detail->name}}</li>
            </ul>
        </div>
    </div>
</div>
<div class="content_detail">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12 right">
                <h1 class="name_detail">Chi tiết bài viết 1</h1>
                <div class="content_detail_post">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection