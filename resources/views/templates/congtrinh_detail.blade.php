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
                <h1 class="name_detail">{{$news_detail->name}}</h1>
                <div class="content_detail_post">
                    {!! $news_detail->content !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection