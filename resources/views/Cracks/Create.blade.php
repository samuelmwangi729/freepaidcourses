@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <form method="post" action="{{ route('cracks.store') }}" enctype="multipart/form-data">
        @include('Cracks.Fields')
        <div class="container text-center">
            <button class="btn btn-success">Add Crack</button>
        </div>
    </form>
</div>
@stop
