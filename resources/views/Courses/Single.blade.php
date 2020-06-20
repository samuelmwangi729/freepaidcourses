@extends('layouts.admin')
@section('content')
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card card-solid">
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-sm-6">
            <div class="col-12">
              <img src="{{ $course->CourseBanner }}" class="product-image" alt="Product Image">
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <h3 class="my-3" style="font-weight:bold">{{ $course->CourseTitle }}</h3>
            <p>{!!  $course->Prerequisites !!}</p>

            <hr>
          </div>
        </div>
        <div class="row mt-4">
          <div class="tab-content p-3" id="nav-tabContent">
            <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                {!! $course->Description !!}
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
@endsection