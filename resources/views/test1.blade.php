<p> {{$name}}</p>
<p>{{date('Y:m:d H:m:s',time())}}</p>

<p>{{var_dump($array)}}</p>
<p>
    {{isset($array) ? 'yes' : 'no'}}
</p>
<p>{{$name or 'default'}}</p>
<!-- 引入子视图  >
{{--@include('layouts.common',['message'=>'hahaha'])--}}
        <div>

