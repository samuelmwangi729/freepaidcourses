<!DOCTYPE html>
<html lang="en">
@include('layouts.styles')
<body>
@include('layouts.nav')
<div class="container text-center" style="margin-top:70px">
    <h3 class="text-center">
        {{ $crack->CrackTitle }}
    </h3>
        <img src="{{ asset($crack->FeaturedImage) }}" style="width: 600px" class="img-fluid img-responsive">
        <br><span style="font-weight:bold">
         {{$crack->IntroText}}
        </span>
       <br> <span style="font-weight:bold">
            Category: {{ $crack->Category }}
        </span>
        <span style="font-weight:bold">
            {!! $crack->Description !!}
         </span>
</div>
</body>
</html>
