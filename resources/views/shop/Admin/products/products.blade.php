@extends('shop.Admin.common.common')
@section('content')
    <div class="col-xs-12 col-sm-9 col-md-10">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
            <table  class="table table-striped table-border table-bordered table-bg ">
                <thead>
                <tr>
                    <th scope="col" colspan="4" style="text-align: center">商品列表</th>
                </tr>
                <tr>
                    <th >商品名</th>
                    <th>商品码</th>
                    <th>是否有货</th>
                    <th>操作</th>
                </tr>
                </thead>

                <tbody>
                {{--@foreach($admins as $admin)--}}
                <tr>
                    <td class="col-md-3">x</td>
                    <td class="col-md-6">x</td>
                    <td class="col-md-1">x</td>
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

