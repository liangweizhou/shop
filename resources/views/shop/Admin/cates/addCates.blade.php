@extends('shop.Admin.common.common')

@section('content')
    <form class="form-horizontal" action="" method="POST">
        <div class="form-group">
            <label class="control-label">类别名：</label>
            <input type="text" class="form-control" id="name" >
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