@extends('layouts.admin')
@section('header', 'Catalog')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-6">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">create new catalog</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ url('catalogs') }}" method="post">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" name="name" class="form-control"  placeholder="Enter Name" required="">
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