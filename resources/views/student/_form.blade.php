<form class="form-horizontal" method="post" action="">
    {{csrf_field()}}
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">姓名</label>

        <div class="col-sm-5">
            <input type="text" name="name" class="form-control" id="name" placeholder="请输入学生姓名">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('Student.name')}}</p>
        </div>
    </div>
    <div class="form-group">
        <label for="age" class="col-sm-2 control-label">年龄</label>

        <div class="col-sm-5">
            <input type="text" name='age' class="form-control" id="age"
                   placeholder="请输入学生年龄">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('Student.age')}}</p>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">性别</label>

                <label class="radio-inline">
                   男：<input type="radio" name='man'>
                </label>
                 <label class="radio-inline">
                女： <input type="radio" name='woman'>
                 </label>

    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">提交</button>
        </div>
    </div>
</form>