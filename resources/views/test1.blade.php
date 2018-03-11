{{--<p> {{$name}}</p>--}}
{{--<p>{{date('Y:m:d H:m:s',time())}}</p>--}}

{{--<p>{{var_dump($array)}}</p>--}}
{{--<p>--}}
    {{--{{isset($array) ? 'yes' : 'no'}}--}}
{{--</p>--}}
{{--<p>{{$name or 'default'}}</p>--}}
{{--<!-- 引入子视图  >--}}
{{--@include('layouts.common',['message'=>'hahaha'])--}}
        {{--<div>--}}
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>

    </title>
    <style>
        .test{
            height: 100px;
            background: rebeccapurple;}

        .box {
            display: -webkit-flex;
            display: flex;
            flex-direction: row;
            flex-wrap:nowrap;
            justify-content: flex-start;
            align-items: stretch;
            align-content: flex-start;
        }
        .flex-box{
            height:200px;
            width:500px;
            background-color:#ddd;
            border:1px solid #fff;
        }
        .box1 .flex-box{
            background-color:#E0BCDB;
        }
        .box2 .flex-box{
            background-color:#E0B6B6;
            width:800px;
        }
        .left{
            flex-shrink:0;//空间不足时不允许左侧缩小
        }
        .box3 .flex-box{
            background-color:#ABD9E0;
            width:900px;
        }
        .box4{
            flex-wrap: wrap;//空间不足换行
        }
        .box4 .flex-box{
            background-color:#dadada;
        }

    </style>
    <link rel="stylesheet" type="text/css" href="{{asset('css/common.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{asset('static/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('static/bootstrap/js/bootstrap.min.js')}}"></script>
</head>

<body>

    <div>
        <p class="h1">p标签测试！默认14px 高14px 底部外边距10px！</p>
        <p class="h2">p标签测试！默认14px 高14px 底部外边距10px！</p>
        <p class="h3">p标签测试！默认14px 高14px 底部外边距10px！</p>
        <p class="h4">p标签测试！默认14px 高14px 底部外边距10px！</p>
        <p class="h5">p标签测试！默认14px 高14px 底部外边距10px！</p>
        <p class="h6">p标签测试！默认<del>14px</del> 高14px 底部外边距10px！</p>
        <p>p标签测试！默认14px 高14px 底部外边距10px！</p>

        <p class="text-center">p center</p>
        <p class="text-capitalize">p 首字母大写</p>
        <p class="text-hide">p hide</p>
        <p class="text-left">p left</p>
        <p class="text-right">p  right！</p>
        <p class="text-uppercase">xxxx  小写转大写</p>
        <p class="text-lowercase">XXXXX  大写转小写</p>
    </div>

    {{--
    table-striped 斑马线效果
    table-bordered 边框效果
    table-hover 鼠标经过产生变色
    产生红色 <tr class="danger, warning, info, success,active">
        --}}
    <h2>表格</h2>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>一</th>
                <th>二</th>
                <th>三</th>
                <th>四</th>
            </tr>
        </thead>
        <tbody>
        <tr class="danger">
            <td>content 1</td>
            <td>content 1</td>
            <td>content 1</td>
            <td>content 1</td>
            <td>content 1</td>
        </tr>
        <tr class="success">
            <td>content 1</td>
            <td>content 1</td>
            <td>content 1</td>
            <td>content 1</td>
            <td>content 1</td>
        </tr>
        <tr class="warning">
            <td>content 1</td>
            <td>content 1</td>
            <td>content 1</td>
            <td>content 1</td>
            <td>content 1</td>
        </tr>
        <tr class="info">
            <td>content 1</td>
            <td>content 1</td>
            <td>content 1</td>
            <td>content 1</td>
            <td>content 1</td>
        </tr>
        </tbody>
    </table>

<h2> 表单 </h2>
    <p>form-control 控件，class="form-inline" 水平排列, input-lg：输入框变大，label不显示 </p>
    <form class="form-inline">
    <div class="form-group ">
        <label class="control-label" for="">这是一个输入框：</label>
        <input type="text" class="form-control input-lg" placeholder="输入姓名！">
    </div>
        <div class="form-group ">
            <label class="control-label" for="">这是选择框：</label>
            <select class="form-control" name="" id="">
                <option value=""> 1</option>
                <option value=""> 2</option>
                <option value=""> 3</option>
                <option value=""> 4</option>
            </select>
        </div>

        <div class="form-group has-success">
            <label class="control-label" for="">这是一个文本框：</label>
            <textarea class="form-control" name="" id="" cols="30" rows="10" ></textarea>
        </div>

         {{--按钮效果--}}
        <div>
        <button class="btn btn-default  btn-lg">submit -lg</button>
        <button class="btn btn-default  btn-success">submitd -success</button>
        <button class="btn btn-default  btn-info">submit -info</button>
        <button class="btn btn-default  btn-danger">submit -danger</button>
        <button class="btn btn-default  btn-warning">submit -warning</button>
        <button class="btn btn-default  btn-block">submit btn-block 全屏按钮</button>
        <button class="btn btn-default  btn-link">submit -link</button>
        <button class="btn btn-default  btn-sm">submit sm 小</button>
        <button class="btn btn-default  btn-md">submit md 中</button>
        <button class="btn btn-default  btn-active">submit active 按下去的效果</button>
        <button class="btn btn-default" disabled="disabled">submit 禁止</button>
            <a class="btn btn-warning" href="">a标签按钮</a>
        </div>
    </form>

     {{--bootsrap中的图片 .img-rounded 圆角  .img- circle 圆形 .img-thumbnail 带有边框的圆角图形--}}
     <div>

     </div>

     <h2>booestrap渐进</h2>

     <h2> 栅格案例 </h2>
     <div class="test col-lg-3 col-md-4 col-sm-6 col-xs-12">

     </div>

    <div class="test col-lg-3 col-md-4 col-sm-6 col-xs-12 col-lg-offset-3 col-md-offset-2">

    </div>

     <h2>图标</h2>
    <div>
     <span  class="glyphicon glyphicon-triangle-left"></span>
        <span  class="glyphicon glyphicon glyphicon-menu-right"></span>
        <span  class="glyphicon glyphicon glyphicon-triangle-bottom"></span>
        <span  class="glyphicon glyphicon-triangle-left"></span>

        <button class="btn btn-default">
            <span  class="glyphicon glyphicon-star">五角星</span>
        </button>
    </div>

    <h2>组件</h2>
    <span>下拉菜单</span>
    <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
                按钮<span class="caret"></span>
            </button>
        <ul class="dropdown-menu">
            <li>
                <a href="http://www.baidu.com">baidu</a>
            </li>
            <li>
                <a href="http://www.baidu.com">baidu</a>
            </li>
            <li>
                <a href="http://www.baidu.com">baidu</a>
            </li>
        </ul>
    </div>
    <div class="input-group">
        <span class="input-group-addon">写下内容</span>
        <input type="text" class="form-control">
    </div>

   <h3>导航</h3>
<ul class="nav nav-tabs">
    <li class="active"><a href="http://baidu.com">baidu</a></li>
    <li><a href="http://baidu.com">baidu</a></li>
    <li><a href="http://baidu.com">baidu</a></li>
</ul>
    <ul class="nav nav-pills">
        <li class="active"><a href="http://baidu.com">baidu</a></li>
        <li><a href="http://baidu.com">baidu</a></li>
        <li><a href="http://baidu.com">baidu</a></li>
    </ul>
    <ul class="nav nav-justified">
        <li class="active"><a href="http://baidu.com">baidu</a></li>
        <li><a href="http://baidu.com">baidu</a></li>
        <li><a href="http://baidu.com">baidu</a></li>
    </ul>
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="http://baidu.com">baidu</a></li>
        <li><a href="http://baidu.com">baidu</a></li>
        <li><a href="http://baidu.com">baidu</a></li>
    </ul>

<h3>分页</h3>
<nav>

    <ul class="pagination pagination-lg">
        <li class="active">
            <a href="http://baidu.com">1</a>
        </li>
        <li>
            <a href="http://baidu.com">2</a>
        </li>
        <li>
            <a href="http://baidu.com">3</a>
        </li>
        <li>
            <a href="http://baidu.com">4</a>
        </li>
    </ul>
    {{--添加左右按钮--}}
    <ul class="pager">
        <li  class="previous">
            <a href="">
                上一页
            </a>
        </li>
        <li class="next">
            <a href="">
                下一页
            </a>
        </li>
    </ul>
</nav>

<h3>列表</h3>
<ul class="list-group">
    <li class="list-group-item active">
        什么什么数量等等
        <span class="badge">11</span>
    </li>
    <li class="list-group-item disabled">
        什么什么数量等等
        <span class="badge">11</span>
    </li>
    <li class="list-group-item list-group-item-success">
        什么什么数量等等
        <span class="badge">11</span>
    </li>
</ul>

<h3>面板</h3>
<div class="panel panel-default">
    <div class="panel-heading">
        弹出层
    </div>
    <div class="panel-body">
        内容
    </div>
    <div class="panel-footer">
        脚注
    </div>
</div>

    <div class="panel panel-primary">
        <div class="panel-heading">
            弹出层
        </div>
        <div class="panel-body">
            内容
        </div>
        <div class="panel-footer">
            脚注
        </div>
    </div>

    <div class="panel panel-warning">
        <div class="panel-heading">
            弹出层
        </div>
        <div class="panel-body">
            内容
        </div>
        <div class="panel-footer">
            脚注
        </div>
    </div>




    <h1>不等宽不等高（定宽） </h1>
    <div class="box box1">
        <div class="flex-box" style="width:100px;height:100px;">1</div>
        <div class="flex-box" style="width:250px;height:250px;">3</div>
        <div class="flex-box" style="width:200px;height:200px;">2</div>
        <div class="flex-box" style="width:350px;height:350px;">5</div>
        <div class="flex-box" style="width:400px;height:400px;">4</div>
        <div class="flex-box" style="width:500px;height:500px;">7</div>
        <div class="flex-box" style="width:450px;height:450px;">6</div>
    </div>
    <h1>不 等宽 等高（ 定宽+变宽）</h1>
    <div class="box box2">
        <div class="left flex-box">left</div>
        <div class="center flex-box">center</div>
        <div class="right flex-box">right</div>
    </div>
    <h1>等宽 等高（变宽） </h1>
    <div class="box box3">
        <div class="flex-box">1</div>
        <div class="flex-box">2</div>
        <div class="flex-box">3</div>
    </div>
    <h1>等宽不等高 （定宽） </h1>
    <div class="box box4">
        <div class="flex-box" style="height:100px;">1</div>
        <div class="flex-box" style="height:250px;">2</div>
        <div class="flex-box" style="height:400px;">3</div>
        <div class="flex-box" style="height:350px;">4</div>
        <div class="flex-box" style="height:300px;">5</div>
        <div class="flex-box" style="height:500px;">6</div>
        <div class="flex-box" style="height:450px;">7</div>
    </div>






</body>
</html>
