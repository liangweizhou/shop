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
    <title>商城</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="edge"/>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link href="{{ asset('common/app.css') }}" rel="stylesheet">
    <script src="js/jquery-1.8.3.min.js"></script>
    {{--<script src="js/jquery.fly.min.js"></script>--}}
    {{--<script src="js/public.js"></script>--}}
    <script src="{{ asset('js/app.js') }}"></script>
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
</head>
<body>
<!--头部-->
<top>
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
            <em>您好，</em>
            <a href="#">请登录</a>
            <a href="#">快速注册</a>
        </div>
        <div class="vip_center">
            <a href="#">我的中心</a>
            <a href="#">帮助</a>
        </div>
    </section>
</top>
<!--header-->
<div class="maxbj1">
    <header>
        <h1 class="logo logo-size">
            <img src="images/logo.png">
        </h1>
        <search>
            <form>
                <input type="text" placeholder="快点来寻找你的商品吧！" required style=" width:610px; height:34px; text-indent:2em; float:left; box-shadow:none">
                <button>搜索</button>
            </form>
        </search>
        <div class="sping_car">
            <b></b>
            <em>我的购物车</em>
        </div>
    </header>
</div>
<!--导航-->
<section class="dao_hang">
    <nav>
        <!--全部商品分类-->
        <div class="important">
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
        <div class="dao_list">
            <a href="#">首页</a>
            <a href="#">大聚惠</a>
            <a href="#">易购商城</a>
            <a href="#">电器城</a>
            <a href="#">生活家电</a>
            <a href="#">时尚服装</a>
            <a href="#">海淘购</a>
            <a href="#">特卖</a>
            <a href="#">易购专区</a>

        </div>
    </nav>
</section>


<div class="btnl">《</div>
<div class="btnr">》</div>
<h4 class="guanfangremai">推荐商品</h4>
</div>
<footer>
    <div class="pc-footer-top"style="height:100px;width:100%;position:absolute;bottom:0;left:0;">
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
                <p style="padding-bottom:30px"> copy  </p>
            </div>
        </div>
    </div>
</footer>
<!--侧边栏-->
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

</body>
</html>
