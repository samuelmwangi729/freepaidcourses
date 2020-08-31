@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <h2 class="text-center">Edit Blog Post</h2>
    <form method="POST" action="{{ route('blog.update',[$Blog->id]) }}" enctype="multipart/form-data">
        @method('PATCH')
        @include('Blogs.Fields')
        <div class="container text-center">
            <button class="btn btn-success mb-5 mt-3">
                Update Post
            </button>
        </div>
    </form>
</div>
@stop
