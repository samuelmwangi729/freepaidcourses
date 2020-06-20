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