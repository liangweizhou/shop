<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>zsgc @yield('title')</title>
    <link rel="stylesheet" href="{{asset('static/bootstrap/css/bootstrap.min.css)}}">
</head>
<body>
<!--头部信息-->
@section('header')
    <div class="jumbotron">
        <div class="container">
        <h3>THE FIRST TASK</h3>
        </div>
    </div>

    <div class="container">
        <!--侧边栏信息-->
        @show
        <div class="row">
            <div class="col-md-3">
                <div class="student-droup">
                    <a href="{{url('/user/index')}}">学生列表</a>
                    <a href="{{url('/user/create')}}">新增学生</a>
                </div>
            </div>
        @show
        <!--中间内容信息-->
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>
    <!--尾部信息 -->
@section('footer')
    <div class="jumbotron" style="margin:0;">
        <div class="container">
            <span>  @2018 copy by zlw</span>
        </div>
    </div>
@show

<!-- jQuery 文件 -->
<script src="{{asset('static/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap JavaScript 文件 -->
<script src="{{asset('static/bootstrap/js/bootstrap.min.js')}}"></script>

@section('javascript')
@show
</body>
</html>