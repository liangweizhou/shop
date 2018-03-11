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
<!--公共头部-->
@section('top-header')
<top>
    <section class="seck">
        <div class="dis_add">
            <em style="float:left">送货至：</em>
            <span style="float:left">北京</span>
            <img src="images/jt_t.png" style="display:block;width:7px;height:4px; float:left; margin-top:19px; margin-left:3px">
            <div class="hide_add">
                <ul>
                    <li>
                        <a href="javascript:void(0)" class="selected">北京</a>
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
                        <a href="javascript:void(0)">山东</a>
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
            <a href="center">我的中心</a>
            <a href="#">帮助</a>
        </div>
    </section>
</top>
@show

<!--header-->
<div class="maxbj1">
    @section('search')
    <header>
        <h1 class="logo logo-size">
            <a href="/"><img src="images/logo.png"></a>
        </h1>
        <search>
            <form method="post" action="">
                <input type="text" placeholder="快点来寻找你的商品吧！" required style=" width:610px; height:34px; text-indent:2em; float:left; box-shadow:none">
                <input type="button" value="搜索" required style="width:116px; height: 34px;text-indent: 2em; border: 1px solid;">
              px
            </form>
        </search>
        <div class="sping_car">
            <b></b>
            <em>我的购物车</em>
        </div>
    </header>
        @show
</div>
<!--导航-->
@section('category')
<section class="dao_hang">
    <nav>
        <!--全部商品分类-->
        <div class="important" >
            <img src="images/all_list.png" style=" margin-top:13px">
            全部商品分类
            <aside style="top:42px;">
                <ul>
                    <li class="cates" mt-ct="list01">
                        <h3>电子产品</h3>
                        <p>
                            <a href="#">手机</a>
                            <a href="#">耳机</a>
                            <a href="#">3c配件</a>
                            <i style="font-family:'宋体';color:#666; line-height:23px; padding-right:20px; font-size:14px; float:right">></i>
                        </p>
                    </li>
                    <li class="cates" mt-ct="list02">
                        <h3>服装</h3>
                        <p>
                            <a href="#">男装</a>
                            <a href="#">女装</a>
                            <a href="#">儿童</a>
                            <i style="font-family:'宋体';color:#666; line-height:23px; padding-right:20px; font-size:14px; float:right">></i>
                        </p>
                    </li>
                    <li class="cates" mt-ct="list03">
                        <h3>居家必备</h3>
                        <p>
                            <a href="#">厨房用品</a>
                            <a href="#">卫生用品</a>
                            <a href="#">小物品</a>
                            <i style="font-family:'宋体';color:#666; line-height:23px; padding-right:20px; font-size:14px; float:right">></i>
                        </p>
                    </li>
                    <li class="cates" mt-ct="list04">
                        <h3>零食</h3>
                        <p>
                            <a href="#">儿童</a>
                            <a href="#">出游零食</a>
                            <a href="#">辣条</a>
                            <i style="font-family:'宋体';color:#666; line-height:23px; padding-right:20px; font-size:14px; float:right">></i>
                        </p>
                    </li>
                    <li class="cates" mt-ct="list05">
                        <h3>鞋子</h3>
                        <p>
                            <a href="#">男鞋</a>
                            <a href="#">女鞋</a>
                            <a href="#">儿童</a>
                            <i style="font-family:'宋体';color:#666; line-height:23px; padding-right:20px; font-size:14px; float:right">></i>
                        </p>
                    </li>

                </ul>
            </aside>
            <div>
                <div class="import_list b-list01">
                    <dt>手机：</dt>
                    <dd>
                        <a href="#">全部手机</a>
                        <a href="#">iPhone</a>
                        <a href="#">小米</a>
                        <a href="#">荣耀</a>
                        <a href="#">华为</a>
                        <a href="#">魅族</a>
                        <a href="#">美图</a>
                        <a href="#">努比亚</a>
                        <a href="#">诺基亚</a>
                        <a href="#">手机维修</a>
                        <a href="#">以旧换新</a>
                    </dd>

                </div>
                <div class="import_list b-list02">
                    <dt>厨房大电：</dt>
                    <dd>
                        <a href="#">全部手机</a>
                        <a href="#">iPhone</a>
                        <a href="#">小米</a>
                        <a href="#">荣耀</a>
                        <a href="#">华为</a>
                        <a href="#">魅族</a>
                        <a href="#">美图</a>
                        <a href="#">努比亚</a>
                        <a href="#">诺基亚</a>
                        <a href="#">手机维修</a>
                        <a href="#">以旧换新</a>
                    </dd>
                </div>
                <div class="import_list b-list03">
                    <dt>手机通讯：</dt>
                    <dd>
                        <a href="#">荣耀</a>
                        <a href="#">华为</a>
                        <a href="#">魅族</a>
                        <a href="#">美图</a>
                        <a href="#">努比亚</a>
                        <a href="#">诺基亚</a>
                        <a href="#">手机维修</a>
                        <a href="#">以旧换新</a>
                    </dd>
                </div>
                <div class="import_list b-list04">
                    <dt>手机通讯：</dt>
                    <dd>
                        <a href="#">全部手机</a>
                        <a href="#">iPhone</a>
                        <a href="#">小米</a>
                        <a href="#">荣耀</a>
                        <a href="#">努比亚</a>
                        <a href="#">诺基亚</a>
                        <a href="#">手机维修</a>
                        <a href="#">以旧换新</a>
                    </dd>
                </div>
                <div class="import_list b-list05">
                    <dt>手机通讯：</dt>
                    <dd>
                        <a href="#">全部手机</a>
                        <a href="#">iPhone</a>
                        <a href="#">小米</a>
                        <a href="#">美图</a>
                        <a href="#">努比亚</a>
                        <a href="#">诺基亚</a>
                        <a href="#">手机维修</a>
                        <a href="#">以旧换新</a>
                    </dd>
                </div>
                <div class="import_list b-list06">
                    <dt>手机通讯：</dt>
                    <dd>
                        <a href="#">全部手机</a>
                        <a href="#">iPhone</a>
                        <a href="#">小米</a>
                        <a href="#">荣耀</a>
                        <a href="#">华为</a>
                        <a href="#">魅族</a>
                        <a href="#">美图</a>
                        <a href="#">手机维修</a>
                        <a href="#">以旧换新</a>
                    </dd>
                </div>
                <div class="import_list b-list07">
                    <dt>手机通讯：</dt>
                    <dd>
                        <a href="#">iPhone</a>
                        <a href="#">小米</a>
                        <a href="#">荣耀</a>
                        <a href="#">美图</a>
                        <a href="#">努比亚</a>
                        <a href="#">诺基亚</a>
                        <a href="#">手机维修</a>
                        <a href="#">以旧换新</a>
                    </dd>
                </div>
            </div>
        </div>
        <!--结束-->
        @section('top-nav')
        <div class="dao_list">
            <a href="/">首页</a>
            <a href="#">大优惠</a>
            <a href="#">xx</a>
            <a href="#">xx</a>
            <a href="#">xx</a>
            <a href="#">xx</a>
            <a href="#">xx</a>
            <a href="#">xx</a>
            <a href="#">易购专区</a>
        </div>
        @show

        <!--中间的大广告栏图片-->
        @yield('content')

        {{--<div id="banner_tabs" class="flexslider">--}}
            {{--<ul class="slides">--}}
                {{--<li>--}}
                    {{--<a title="" target="_blank" href="#">--}}
                        {{--<img width="1920" height="500" alt="" style="background:#e1211e url(images/ba1.jpg) no-repeat center;" src="images/alpha.png">--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a title="" href="#">--}}
                        {{--<img width="1920" height="500" alt="" style="background:#900 url(images/ba2.jpg) no-repeat center;" src="images/alpha.png">--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a title="" target="_blank" href="#">--}}
                        {{--<img width="1920" height="500" alt="" style="background:#e1211e url(images/ba1.jpg) no-repeat center;" src="images/alpha.png">--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a title="" href="#">--}}
                        {{--<img width="1920" height="500" alt="" style="background:#900 url(images/ba2.jpg) no-repeat center;" src="images/alpha.png">--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
            {{--<ul class="flex-direction-nav">--}}
                {{--<li>--}}
                    {{--<a class="flex-prev" href="javascript:;">Previous</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a class="flex-next" href="javascript:;">Next</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
            {{--<ol id="bannerCtrl" class="flex-control-nav flex-control-paging">--}}
                {{--<li class="active">--}}
                    {{--<a>1</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a>2</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a>2</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a>2</a>--}}
                {{--</li>--}}
            {{--</ol>--}}
        {{--</div>--}}

        {{--右下角的楼层导航栏--}}
        <div class="fixed_position">
            <div class="fixed_position_1">
                <ul>
                    <li>优惠</li>
                    <li>热卖手机</li>
                    <li>零食精选</li>
                    <li>儿童服装</li>
                    <li>生活必备</li>
                    <li>推荐商品</li>
                </ul>
            </div>
        </div>
    </nav>
</section>

@section('footer')
<footer>
    <div class="pc-footer-top"style=" height:100px;width:100%;position:absolute;bottom:0;left:0;">
        <div class="pc-footer-lin">
            <div class="center">
                <p>
                    copy by zlw
                </p>
                {{--<p style="padding-bottom:30px"> copy  </p>--}}
            </div>
        </div>
    </div>
</footer>
@show
<!--右下角的便捷栏-->
@section('toolbar')
<div class="toolbar">
    <a href="###" class="toolbar-item toolbar-item-weixin" style=" position:relative">
        <em style=" position:absolute; display:block; line-height:20px; font-size:12px; color:#f00; top:-20px; left:0">(0)</em>
        <!--<span class="toolbar-layer"></span>-->
    </a>
    <a href="###" class="toolbar-item toolbar-item-feedback"></a>
    <a href="###" class="toolbar-item toolbar-item-app">
        <span class="toolbar-layer"></span>
    </a>
    <a href="javascript:scroll(0,0)" id="top" class="toolbar-item toolbar-item-top"></a>
</div>
@show
</body>
</html>
