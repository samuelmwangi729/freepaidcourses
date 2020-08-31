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
    <div class="container-fluid">
        @include('layouts.nav')
        <div class="container-fluid" style="margin-top:70px">
            <div class="row">
                <div class="col-sm-8">
                    <h2 class="text-center">{{ $course->CourseTitle }}</h2>
                    <img src="{{$course->CourseBanner}}" width="100%">
                    {!! $course->Description !!}
                </div>
                <div class="col-sm-4">
                    {!! $course->Prerequisites !!}
                    <br><h2><span>Category: {{ $course->Category }}</span></h2>
                    <br><span>Instructor : {{ $course->Instructor }}</span>
                    <br><span>Students Enrolled:  {{ $course->Students }} Students {{  $course->Rating }}</span>
                    <br><span>Rating
                        @if($course->Rating==1)
                        <i class="fa fa-star" style="color:gold"></i>
                        @elseif($course->Rating==2)
                        <i class="fa fa-star" style="color:gold"></i>
                        <i class="fa fa-star" style="color:gold"></i>
                        @elseif($course->Rating==3)
                        <i class="fa fa-star" style="color:gold"></i>
                        <i class="fa fa-star" style="color:gold"></i>
                        <i class="fa fa-star" style="color:gold"></i>
                        @elseif($course->Rating==4)
                        <i class="fa fa-star" style="color:gold"></i>
                        <i class="fa fa-star" style="color:gold"></i>
                        <i class="fa fa-star" style="color:gold"></i>
                        <i class="fa fa-star" style="color:gold"></i>
                        @else($course->Rating==5)
                        <i class="fa fa-star" style="color:gold"></i>
                        <i class="fa fa-star" style="color:gold"></i>
                        <i class="fa fa-star" style="color:gold"></i>
                        <i class="fa fa-star" style="color:gold"></i>
                        <i class="fa fa-star" style="color:gold"></i>
                        @endif
                        {{ $course->Rating}} (Stars) Rating
                    </span>
                    <br><span>
                        <button class="btn btn-danger mt-5" onclick="window.open('{{ $course->CourseLink }}','_parent')">Check Course</button>
                    </span>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
