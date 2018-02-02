@extends('shop.common.center')
@section('content')

    <div style="margin:8% 20% 10% 30%; width: auto;height: auto;">
        <form action="{{asset('/center/updateinfo')}}" method="POST" name="infoForm">
            {{csrf_field()}}

            <div>
                姓名：<input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" required autofocus>
            </div>

            <div>
                邮箱：<input id="email" type="text" class="form-control" name="name" value="{{$user->email}}" disabled="disabled" required autofocus>
            </div>
            <div>
                电话：<input id="phone" type="text" class="form-control" name="phone" value="{{$user->phone}}" required autofocus>
            </div>
            <div>
                年龄：<input id="age" type="text" class="form-control" name="name" value="{{$user->age}}" required autofocus>
            </div><br/>

            <div >
                性别:
                <input type="radio" name="sex" value="1" {{ $user->sex == 1 ? 'checked' : '' }} data-am-ucheck> 男
                <input type="radio" name="sex" value="0"  {{ $user->sex == 0 ? 'checked' : '' }} data-am-ucheck> 女
                </div><br/>

            <div>
                收货地址：<input id="address" type="text" class="form-control" name="address" value="{{$user->address}}" required autofocus>
            </div><br/><br/>
            <div class="form-group">
                <div class="col-md-d6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        确认修改
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection


{{--<div style="margin: auto";>--}}
