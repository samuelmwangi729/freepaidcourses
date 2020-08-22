@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <form method="post" action="{{ route('Techs.update',[$Hack->id]) }}" enctype="multipart/form-data">
        @method('PATCH')
        @include('TechHacks.Fields')
        <div class="col-sm-6 offset-sm-4">
            <button class="btn btn-success" type="submit">Update Hack</button>
        </div>
    </form>
</div>
@endsection