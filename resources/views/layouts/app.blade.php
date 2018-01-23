<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>shop @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@section('style')

@show
</head>
<body>
    <div id="app">
        <nav class="navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        shop
                    </a>
                    <!--换成图片也可以-->
                    {{--<img class="" src="{{asset('')}}" href="{{'/'}}">--}}
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
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
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div style="width:95%; height: 50px; background-color:#ffffff;">
                <input id="" class="">
            </div>
            <div class="row">
                <!-- 左侧菜单区域   -->
                <div class="col-md-3">
                    @section('leftmenu')
                        <div class="list-group">
                            <li class="cate_menu_item" data-index="1" clstag="h|keycount|head|category_01a">
                                <a target="_blank" class="cate_menu_lk" href="{{'http://shop.app/dianzi'}}">家用电器</a>
                            </li>
                            <li class="cate_menu_item" data-index="1" clstag="h|keycount|head|category_01a">
                                <a target="_blank" class="cate_menu_lk" href="{{'http://shop.app/shouji'}}">家用电器</a>
                            </li>
                            <li class="cate_menu_item" data-index="1" clstag="h|keycount|head|category_01a">
                                <a target="_blank" class="cate_menu_lk" href="{{'http://shop.app/shouji'}}">家用电器</a>
                            </li>
                            <li class="cate_menu_item" data-index="1" clstag="h|keycount|head|category_01a">
                                <a target="_blank" class="cate_menu_lk" href="{{'http://shop.app/shouji'}}">家用电器</a>
                            </li>
                            <li class="cate_menu_item" data-index="1" clstag="h|keycount|head|category_01a">
                                <a target="_blank" class="cate_menu_lk" href="{{'http://shop.app/shouji'}}">家用电器</a>
                            </li>
                            <li class="cate_menu_item" data-index="1" clstag="h|keycount|head|category_01a">
                                <a target="_blank" class="cate_menu_lk" href="{{'http://shop.app/shouji'}}">家用电器</a>
                            </li>


                            {{--<a target="_blank" href="//shop.app">电子产品</a>--}}
                            {{--<a href="{{url(''}}" class="">穿着</a>--}}
                            {{--<a href="{{url('')}}" class="">日用百货</a>--}}
                        </div>
                </div>
            @show

            <!-- 右侧内容区域 -->
                <div class="col-md-9">

                    @yield('content')

                </div>
            </div>
        </div>

    </div>

</body>
@section('footer')
    <div class="jumbotron" style="position:absolute;bottom:0;width:100%;height: 5%;background-color: #f5f5f5; ">
        <div class="container">
            <span>  @2018 copy by zlw</span>
        </div>
    </div>
@show
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</html>
