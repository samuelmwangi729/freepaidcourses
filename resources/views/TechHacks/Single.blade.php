<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
</body>
@include('layouts.nav')
<div class="container text-center" style="margin-top:70px">
    <img class="img-responsive" src="{{ asset($single->FeaturedImage) }}" class="img-responsive" style="width: 50%">
    <br><h1 style="font-weight:bold;" class="text-center"> {{ $single->Title }}</h1>
    <br><h5 style="font-weight:bold" class="text-center">Category:  {{ $single->Category }}</h5>
    <br><h4 style="font-weight:bold" class="text-center"> {{ $single->IntroText }}</h4>
</div>
<div class="card container" style="width:auto">
    {!! $single->Description !!}

</div>
</html>
