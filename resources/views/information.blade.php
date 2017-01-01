@extends('layouts.app')
@section('content')

<div class="row">
<div class="col-md-6">
<form  action="{{url('information/create')}}" method="post" class="form-horizontal">

{{csrf_field()}}
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" name="address" class="form-control" id="address" placeholder="Enter Address">
    </div>
    <div class="form-group">
      <label for="phone_no">Phone No</label>
      <input type="text" name="phone_no" class="form-control" id="phone_no" placeholder="Enter phpneno">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  </div>
  <div class="col-md-6">list of information</div>
</div>
@endsection