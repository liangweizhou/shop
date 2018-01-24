@extends('shop.common.layouts')
@section('content')
    <div id="banner_tabs" class="flexslider">
        <ul class="slides">
            <li>
                <a title="" target="_blank" href="#">
                    <img width="1920" height="500" alt="" style="background:#e1211e url(images/ba1.jpg) no-repeat center;" src="images/alpha.png">
                </a>
            </li>
            <li>
                <a title="" href="#">
                    <img width="1920" height="500" alt="" style="background:#900 url(images/ba2.jpg) no-repeat center;" src="images/alpha.png">
                </a>
            </li>
            <li>
                <a title="" target="_blank" href="#">
                    <img width="1920" height="500" alt="" style="background:#e1211e url(images/ba1.jpg) no-repeat center;" src="images/alpha.png">
                </a>
            </li>
            <li>
                <a title="" href="#">
                    <img width="1920" height="500" alt="" style="background:#900 url(images/ba2.jpg) no-repeat center;" src="images/alpha.png">
                </a>
            </li>
        </ul>
        <ul class="flex-direction-nav">
            <li>
                <a class="flex-prev" href="javascript:;">Previous</a>
            </li>
            <li>
                <a class="flex-next" href="javascript:;">Next</a>
            </li>
        </ul>
        <ol id="bannerCtrl" class="flex-control-nav flex-control-paging">
            <li class="active">
                <a>1</a>
            </li>
            <li>
                <a>2</a>
            </li>
            <li>
                <a>2</a>
            </li>
            <li>
                <a>2</a>
            </li>
        </ol>
    </div>
@endsection

