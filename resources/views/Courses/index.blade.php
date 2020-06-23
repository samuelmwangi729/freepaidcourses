@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Courses Available</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Instructor</th>
                    <th>Category</th>
                    <th>Link</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($courses as $course)
                  <tr>
                    <td><img src="{{ asset($course->CourseBanner) }}" height="30px" width="30px" style="border-radius:50px"></td>
                    <td>{{ $course->CourseTitle }}</td>
                    <td>{{ $course->Instructor }}</td>
                    <td>{{ $course->Category }}</td>
                    <td><a href="{{ $course->CourseLink }}" target="_blank"><button class="btn btn-primary btn-sm">Click Here</button></a></td>
                    <td>
                        <a href="{{ route('course.edit',[$course->id]) }}" class="fa fa-edit" style="color:blue"></a>&nbsp;
                        <a href="{{ route('course.view',[$course->slug]) }}" class="fa fa-eye" style="color:green"></a>&nbsp;
                        <a href="{{ route('course.delete',[$course->id]) }}" class="fa fa-trash" style="color:red"></a>&nbsp;
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
</div>
@endsection