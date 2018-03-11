<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name='TTUNION_verify' content='b846c3c2b85efabc496d2a2b8399cd62'>
    <meta name="baidu_union_verify" content="cac58ed2e3155eda17d13f99c687243a">
    <meta name="sogou_site_verification" content="gI1bINaJcL"/>
    <meta name="360-site-verification" content="37ae9186443cc6e270d8a52943cd3c5a"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="author" content="AUI, a-ui.com">
    <meta name="baidu-site-verification" content="ZVPGgtpUfW"/>
    <title>易购商城后台 @yield('title')</title>
    <link rel="icon" type="{{asset('image/x-icon')}}" href="favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="edge"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/common.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{asset('static/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('static/bootstrap/js/bootstrap.min.js')}}"></script>
    {{--<script src="js/jquery-1.8.3.min.js"></script>--}}
    <script src="{{asset('js/shop/jquery.fly.min.js')}}"></script>
    <script src="{{asset('js/shop/public.js')}}"></script>
    <script src="{{asset('js/shop/base.js')}}"></script>
    <script src="{{asset('js/shop/slider.js')}}"></script>
    <script>
        document.createElement("top")
    </script>
    <script>
        document.createElement("search")
    </script>
    <script>
        document.createElement("light")
    </script>
    <script>
        document.createElement("light1")
    </script>

    @section('style')

    @show
</head>

<body>
<div class="container-fluid">
    <h1>后台管理页面</h1>
</div>
<hr style="height:3px;border:none;border-top:3px groove deepskyblue;" />

<div class="container-fluid">
    <div class="row">
        <div class="span2 col-xs-4 col-sm-3 col-md-2">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="/admin/index">主页</a></li>
                <li><a href="{{ url('/admin/admins') }}">管理员管理</a></li>
                <li><a href="{{ url('/admin/users') }}">用户管理</a></li>
                <li><a href="{{ url('/admin/products') }}">商品修改</a></li>
                <li><a href="{{ url('/admin/orders') }}">订单管理</a></li>
                <li><a href="{{ url('/admin/cate') }}">商品类别修改</a></li>
                <li><a href="{{ url('/admin/props') }}">商品属性修改</a></li>
            </ul>
        </div>
        {{--<div class="col-xs-12 col-sm-9 col-md-10">--}}
        {{--<div class="col-xs-12 col-sm-6 col-md-3" style="border:1px solid;">--}}
        {{--aaaaa--}}
        {{--</div>--}}
        {{--<div class="col-xs-12 col-sm-6 col-md-3" style="border:1px solid;">--}}
        {{--aaaaa--}}
        {{--</div>--}}
        {{--<div class="col-xs-12 col-sm-6 col-md-3" style="border:1px solid;">--}}
        {{--aaaaa--}}
        {{--</div>--}}
        {{--<div class="col-xs-12 col-sm-6 col-md-3" style="border:1px solid;">--}}
        {{--aaaaa--}}
        {{--</div>--}}
        {{--</div>--}}
        <div>
            @yield('content')
            </div>


    </div>
</div>

<hr style="height:3px;border:none;border-top:3px groove deepskyblue;" />

<div class="container-fluid">
    @yield('footer')
    这里可以放底部
</div>
</body>
</html>