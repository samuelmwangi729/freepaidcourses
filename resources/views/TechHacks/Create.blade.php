@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    @if(Session::has('success'))
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        {{ Session::get('success') }}
    </div>
    @endif
<div class="row">
    <div class="col-sm-8">
        <h3 class="text-center">Add A Hack</h3>
        <div class="form">
            <form method="post" action="{{ route('Techs.store') }}" enctype="multipart/form-data">
              @include('TechHacks.Fields')
              <div class="col-sm-6 offset-sm-4">
                <button class="btn btn-success" type="submit">Create Hack</button>
            </div>
            </form>
        </div>
    </div>
    <div class="col-sm-4">
        <h3>Tech Hacks Available</h3>
        <getHacks-component></getHacks-component>
    </div>
</div>
</div>
@stop
