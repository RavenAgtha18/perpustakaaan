@extends('layouts.admin')
@section('header', 'Publisher')

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ url('publishers/create') }}" class="btn btn-sm btn-primary pull-right">Create new </a>
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
            @foreach ($publishers as $key => $publisher)
                
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $publisher->name }}</td>
                <td>{{ $publisher->email }}</td>
                <td>{{ $publisher->phone_number }}</td>
                <td>{{ $publisher->addres }}</td>
                <td class="text-center">
                    <a href="{{ url('publishers/'.$publisher->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ url('publishers',['id' => $publisher->id]) }}" method="post">
                        <input class="btn btn-danger btn-sm" type="submit" value="Delete" onclick="return confirm('Are you sure?')">
                        @method('delete')
                        @csrf
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item"><a class="page-link" href="#">«</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">»</a></li>
      </ul>
    </div>
  </div> 
@endsection