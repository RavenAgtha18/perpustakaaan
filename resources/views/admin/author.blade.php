@extends('layouts.admin')
@section('header', 'Author')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

@endsection

@section('content')
<div id="controller">
  <div class="row">
    <div class="col-12">
    
    <div class="card">
        <div class="card-header"> <a href="#" @click="addData()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">crete new </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="datatable" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Name</th>
                <th>email</th>
                <th>phone number</th>
                <th>addres</th>
                <th>created_at</th>
                <th>option</th>

                
              </tr>
            </thead>
           
          </table>
        </div>
    <!-- /.card-body -->
    <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <div class="modal-content">
          <form method="post" :action="actionUrl" autocomplete="off" @submit="submitForm($event, data.id)">
         
            <div class="modal-header">
              <h4 class="modal-title">author</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              @csrf

              <input type="hidden" name="_method" value="PUT" v-if="editStatus">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" name="name" class="form-control" :value="data.name" required="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">email</label>
                      <input type="text" name="email" class="form-control" :value="data.email" required="">
                    </div>
                    <div class="form-group"> 
                      <label for="exampleInputEmail1">phone number</label>
                      <input type="text" name="phone_number" class="form-control" :value="data.phone_number" required="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">addres</label>
                      <input type="text" name="addres" class="form-control" :value="data.addres" required="">
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<!-- DataTables  & Plugins -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>



<script type="text/javascript">
var actionUrl = '{{ url('authors') }}';
        var apiUrl = '{{ url('api/authors') }}';
        var columns = [  
            {data: 'DT_RowIndex', class: 'text-center', orderable: true},   
            {data: 'name', class: 'text-center', orderable: true},
            {data: 'email', class: 'text-center', orderable: true},
            {data: 'phone_number', class: 'text-center', orderable: true},
            {data: 'addres', class: 'text-center', orderable: true},
            {data: 'date', class: 'text-center', orderable: true},
            {
                render: function(index, row, data, meta) {
                    return `
                <a href="#" class="btn btn-primary btn-sm bi bi-pencil-square" onclick="controller.editData(event, ${meta.row})">
                  Edit
                </a>
                <a href="#" class="btn btn-danger btn-sm bi bi-trash" onclick="controller.deleteData(event, ${data.id})">
                  Delete
                </a>`;
                },
                orderable: false,
                width: '200px',
                class: 'text-center'
            },
        ];

       

</script>

<script src="{{ asset('js/data.js') }}"></script>



@endsection
