@extends('shop.Admin.common.common')

@section('content')
        <form role="form" class="form-horizontal" method="POST" action="">
           <div class="form-group">
                <label class="control-lable" for="name">商品名</label>
                <input type="text" class="form-control" id="name" placeholder="请输入商品名">
            </div>

            <div class="form-group">
                <label class="control-lable" for="code">商品编码</label>
                <input type="text" class="form-control" id="code" placeholder="请输入商品编码">
            </div>

            <div  class="form-group">
                <label class="control-label" for="cate">类别：</label>
                <select class="" name="" id="">
                    <option value="1"> 电子产品</option>
                    <option value="2"> 服装</option>
                    <option value="3"> 居家必备</option>
                    <option value="4"> 零食</option>
                    <option value="5"> 鞋子</option>
                </select>
            </div>

            <div class="form-group ">
                <label class="control-label" for="props">属性：</label>

            </div>

            <div class="form-group ">
                <label class="control-label" for="props">价格：</label>
                <input type="text" class="form-control" id="price" placeholder="输入价格数字">
            </div>

            <div cass="form-group">
                <label class="control-lable" for="image">上传图片：</label>

                <input type="file" id="image">
            </div>

            <div cass="form-group">
               <label class="control-lable">添加商品描述：</label>
                <textarea class="form-control" name="" id="" cols="30" rows="10" ></textarea>
            </div>

            <div class="form-group">
                <div class="col-md-d6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary btn-lg btn-success">
                        提交
                    </button>
                </div>
            </div>
        </form>

@endsection