@extends('layouts.admin')
@section('content')
<div class="container">
    <h3 class="text-center">
        Edit Crack
    </3>
    <form method="POST" action="{{ route('cracks.update',[$Crack->id]) }}">
        @method('patch')
        @include('Cracks.Fields')
        <button class="btn btn-success">
            Update Crack
        </button>
    </form>
</div>
@stop
