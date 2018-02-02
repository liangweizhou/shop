<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name='TTUNION_verify' content='b846c3c2b85efabc496d2a2b8399cd62'>
    <meta name="baidu_union_verify" content="cac58ed2e3155eda17d13f99c687243a">
    <meta name="sogou_site_verification" content="gI1bINaJcL"/>
    <meta name="360-site-verification" content="37ae9186443cc6e270d8a52943cd3c5a"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="author" content="AUI, a-ui.com">
    <meta name="baidu-site-verification" content="ZVPGgtpUfW"/>
    <title>易购商城 @yield('title')</title>
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

</head>
<body>
    <section class="seck">
        <div class="dis_add">
            <em style="float:left">送货至：</em>
            <span style="float:left">北京</span>
            <img src="images/jt_t.png" style="display:block;width:7px;height:4px; float:left; margin-top:19px; margin-left:3px">
            <div class="hide_add">
                <ul>
                    <li>
                        <a href="javascript:void(0)">北京</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">上海</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">天津</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">重庆</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">河北</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">山西</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">河南</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">辽宁</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">吉林</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">黑龙江</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">内蒙古</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">江苏</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="selected">山东</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">安徽</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">浙江</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">浙江</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">福建</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">湖北</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">湖南</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">广东</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">广西</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">江西</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">四川</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">海南</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">贵州</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">云南</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">西藏</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">陕西</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">甘肃</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">青海</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">宁夏</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">新疆</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">台湾</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">香港</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">澳门</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="register_login">

            <!-- Authentication Links -->
            @guest
                <a href="{{ route('login') }}">登录</a>
                <a href="{{ route('register') }}">注册</a>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
        </div>
        <div class="vip_center">
            <a href="#">我的中心</a>
            <a href="#">帮助</a>
        </div>
    </section>
</body>