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
        <h3 class="text-center">Add A Blog Post</h3>
        <div class="form">
            <form method="post" action="{{ route('blog.store') }}" enctype="multipart/form-data">
              @include('Blogs.Fields')
              <div class="col-sm-6 offset-sm-4">
                <button class="btn btn-success" type="submit">Create Blog Post</button>
            </div>
            </form>
        </div>
    </div>
    <div class="col-sm-4">
        <h3>My Blog Posts</h3>
        <getBlogs-component></getBlogs-component>
    </div>
</div>
</div>
@stop
