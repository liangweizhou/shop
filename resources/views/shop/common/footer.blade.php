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
        document.createElement("footer")
    </script>

<body>
@section('footer')

        <div class="pc-footer-top"style=" height:100px;width:100%;position:absolute;bottom:0;left:0;">
            <div class="center">
                <ul class="clearfix">
                    <li>
                        <span>关于我们</span>
                        <a href="#">关于我们</a>
                        <a href="#">诚聘英才</a>
                        <a href="#">用户服务协议</a>
                        <a href="#">网站服务条款</a>
                        <a href="#">联系我们</a>
                    </li>
                    <li class="lw">
                        <span>购物指南</span>
                        <a href="#">新手上路</a>
                        <a href="#">订单查询</a>
                        <a href="#">会员介绍</a>
                        <a href="#">网站服务条款</a>
                        <a href="#">帮助中心</a>
                    </li>
                    <li class="lw">
                        <span>消费者保障</span>
                        <a href="#">人工验货</a>
                        <a href="#">退货退款政策</a>
                        <a href="#">运费补贴卡</a>
                        <a href="#">无忧售后</a>
                        <a href="#">先行赔付</a>
                    </li>
                    <li class="lw">
                        <span>商务合作</span>
                        <a href="#">人工验货</a>
                        <a href="#">退货退款政策</a>
                        <a href="#">运费补贴卡</a>
                        <a href="#">无忧售后</a>
                        <a href="#">先行赔付</a>
                    </li>

                </ul>
            </div>
            <div class="pc-footer-lin">
                <div class="center">
                    <p>
                        copy by zlw
                    </p>
                    {{--<p style="padding-bottom:30px"> copy  </p>--}}
                </div>
            </div>
        </div>

@show
</body>
</html>