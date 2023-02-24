@extends('layouts.admin')
@section('header', 'Publisher')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-6">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">create new</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ url('publishers') }}" method="post">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" name="name" class="form-control"  placeholder="Enter Name" required="">
              <label for="exampleInputEmail1">email</label>
              <input type="email" name="email" class="form-control"  placeholder="Enter Email" required="">
              <label for="exampleInputEmail1">phone number</label>
              <input type="text" name="phone_number" class="form-control"  placeholder="Enter Number" required="">
              <label for="exampleInputEmail1">addres</label>
              <input type="text" name="addres" class="form-control"  placeholder="Enter addres" required="">
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.card -->
@endsection