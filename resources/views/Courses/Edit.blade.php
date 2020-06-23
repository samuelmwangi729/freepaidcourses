<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>{{ config('app.name') }}</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<body>
    <div class="container">
        @if($errors->all())
        <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        @foreach($errors->all() as $error)
        <span>{{ $error }}</span><br>
        @endforeach
        </div>
        @endif
        @if(Session::has('success'))
        <div class="alert alert-success" style="background-color:green;color:white !important">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>{{ Session::get('success') }}</strong>
        </div>
        @endif
        @if(Session::has('error'))
        <div class="alert alert-danger"style="background-color:red;color:white !important">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>{{ Session::get('error') }}</strong>
        </div>
        @endif
        <form method="post" enctype="multipart/form-data" action="{{ route('course.update',[$course->id]) }}">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="label-control" for="Course title">Course title</label>
                        <input type="text" class="form-control" name="CourseTitle" value="{{ $course->CourseTitle }}">
                    </div>
                    <div class="form-group">
                        <label class="label-control" for="">Instructor</label>
                        <input type="text" class="form-control" name="Instructor" value="{{ $course->Instructor }}">
                    </div>
                    <div class="form-group">
                        <label class="label-control" for="">Rating</label>
                        <input type="text" class="form-control" name="Rating" value="{{ $course->Rating }}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="label-control" for="">Students Number</label>
                        <input type="text" class="form-control" name="Students" value="{{ $course->Students }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Image Link</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="text" class="form-control" id="exampleInputFile"  name="CourseBanner" value="{{ $course->CourseBanner }}">
                          </div>
                        </div>
                      </div>
                    <div class="form-group">
                        <label class="label-control" for="">Course Link</label>
                        <input type="text" class="form-control" name="CourseLink" value="{{ $course->CourseLink }}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="label-control" for="">Course Category</label>
                <select name="Category" class="form-control">
                    <option label="Choose Course Category"></option>
                    @foreach($menus as $menu)
                    <option value="{{ $menu->Name }}" @if( $course->Category == $menu->Name) selected @endif >{{ $menu->Name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="label-control" for="">Prerequisites</label>
                <div class="mb-3">
                    <textarea name="Prerequisites" id="summernote" class="textarea" placeholder="Place some text here"
                              style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                             {!! $course->Prerequisites !!}
                    </textarea>
                  </div>
            </div>
            <div class="form-group">
                <label class="label-control" for="">Description</label>
                <div class="mb-3">
                    <textarea name="Description" class="summernote" placeholder="Place some text here"
                              style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                              {!! $course->Description !!}
                    </textarea>
                  </div>
            </div>
            <button type="submit" class="btn btn-success">Update Course</button>
            <a href="/home" class="btn btn-primary">Back</a>
            <a href="{{ route('courses') }}" class="btn btn-primary">View Courses</a>
        </form>
    </div>
  <script>
    $(document).ready(function() {
        $('#summernote').summernote();
        $('.summernote').summernote();
    });
  </script>
</body>
</html>