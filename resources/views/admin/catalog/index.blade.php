@extends('layouts.admin')
@section('header', 'Catalog')

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ url('catalogs/create') }}" class="btn btn-sm btn-primary pull-right">Create new catalog</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>Name</th>
            <th>Total books</th>
            <th>Created AT</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($catalogs as $key => $catalog)
                
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $catalog->name }}</td>
                <td>7</>
                {{-- <td>{{ count($catalogs->books) }}</td> --}}
                <td>{{ $catalog->created_at }}</td>
                <td class="text-center">
                    <a href="{{ url('catalogs/'.$catalog->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ url('catalogs',['id' => $catalog->id]) }}" method="post">
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