@extends('layouts.admin')
@section('header', 'Author')
@section('css')

@endsection


@section('content')
<div id="conttroler">

 <div class="card">

    <div class="card-header">
        <a href="#" data-target="#modal-default" data-toggle="modal" class="btn btn-sm btn-primary pull-right">Create new </a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>Name</th>
            <th>email</th>
            <th>phone number</th>
            <th>addres</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach ($authors as $key => $author)
                
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $author->name }}</td>
                <td>{{ $author->email }}</td>
                <td>{{ $author->phone_number }}</td>
                <td>{{ $author->addres }}</td>
                <td class="text-center">
                  <a href="{{ url('authors/'.$author->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                  <form action="{{ url('authors',['id' => $author->id]) }}" method="post">
                      <input class="btn btn-danger btn-sm" type="submit" value="Delete" onclick="return confirm('Are you sure?')">
                      @method('delete')
                      @csrf
              </td>
            
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>

    <!-- /.card-body -->
    <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <div class="modal-content">
          <form method="post" action="{{ url('authors') }}" autocomplete="off">
          {{-- <form action="{{ url('publishers') }}" method="post">
              @csrf --}}
            <div class="modal-header">
              <h4 class="modal-title">author</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              @csrf

              <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control"  placeholder="Enter Name" required="">
                <label for="exampleInputEmail1">email</label>
                <input type="email" name="email" class="form-control"  placeholder="Enter Email" required="">
                <label for="exampleInputEmail1">phone number</label>
                <input type="text" name="phone_number" class="form-control"  placeholder="Enter Number" required="">
                <label for="exampleInputEmail1">addres</label>
                <input type="text" name="addres" class="form-control"  placeholder="Enter addres" required="">
            </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="sumbit" class="btn btn-primary">Save changes</button>
          </div>
        </from>
        </div>
      </div>
    </div>
 </div>
</div>

@endsection
@section('js')

@endsection