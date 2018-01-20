<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <title>bootstrap test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="http://cdn.bootstrap.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css" type="text/css">
</head>
<body>
    <div class="container">
        <div>
            <h2 class="btn btn-success btn-lg"><i class="glyphicon glyphicon-user">this is h2</i></h2>
        </div>

    </div>
</body>

<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
</html>