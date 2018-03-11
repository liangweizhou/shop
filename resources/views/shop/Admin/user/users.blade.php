@extends('shop.Admin.common.common')
@section('content')
    <div class="col-xs-12 col-sm-9 col-md-10">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
            <table  class="table table-striped table-border table-bordered table-bg ">
                <thead>
                <tr>
                    <th scope="col" colspan="5" style="text-align: center">用户列表</th>
                </tr>
                <tr>
                    <th>姓名</th>
                    <th>邮箱</th>
                    <th>电话</th>
                    <th>收货地址</th>
                    <th>操作</th>
                </tr>
                </thead>

                <tbody>
                {{--@foreach($users as $user)--}}
                <tr>
                    <td class="col-md-1"></td>
                    <td class="col-md-3"></td>
                    <td class="col-md-2"></td>
                    <td class="col-md-4"></td>
                    <td class="td-manage col-md-2" style="text-align: center">
                        <a><i>编辑</i></a>
                        <a><i>删除</i></a>
                    </td>
                </tr>
                {{--@endforeach--}}
                </tbody>
            </table>

            <nav style="text-align: center">
                <ul class="pagination pagination-lg">
                    <li class="">
                        <a href=""><<</a>
                    </li>
                    <li class="active">
                        <a href="">1</a>
                    </li>
                    <li>
                        <a href="">2</a>
                    </li>
                    <li>
                        <a href="">3</a>
                    </li>
                    <li>
                        <a href="">4</a>
                    </li>
                    <li>
                        <a href="">...</a>
                    </li>
                    <li>
                        <a href="">x</a>
                    </li>
                    <li class="">
                        <a href="">>></a>
                    </li>
                </ul>

            </nav>
        </div>
    </div>
@endsection