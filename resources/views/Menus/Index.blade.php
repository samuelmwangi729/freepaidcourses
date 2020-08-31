@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Add Menus</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="{{ route('menu.add') }}">
                    @csrf
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Menu Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="Name" placeholder="Eg. IT & Software">
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Add Menu</button>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>
        </div>
        <div class="col-sm-6">
            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Menus</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Menu</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($menus as $menu)
                            <tr>
                                <td>{{ $menu->Name }}</td>
                                <td><a href="{{ route('menu.delete',[$menu->id]) }}"><i class="fa fa-trash" style="color:red"></i></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
