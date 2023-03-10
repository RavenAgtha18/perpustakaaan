@extends('layouts.admin')
@section('header', 'Author')
@section('css')

@endsection

@section('content')
<div id="controller">
  <div class="row">

    <div class="card">
        <div class="card-header"> <a href="#" @click="addData()" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">crete new </a>
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
                      <a href="#" @click="editData({{ $author }})" class="btn btn-sm btn-warning" >Edit</a>
                      <a href="#" @click="deleteData({{ $author->id }})" class="btn btn-sm btn-danger">Delete</a>
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
          <form method="post" :action="actionUrl" autocomplete="off">
         
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
          </from>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
  var controller = new Vue({
         el : "#controller",
         data: {
             data : {},
             actionUrl : '{{ url('authors') }}',
             editStatus : false
         },
         methods: {
             addData() {
              this.data = {};
              this.editStatus = false;
              this.actionUrl = '{{ url('authors') }}';
              $('#modal-default').modal();
               
             },
             editData(data) {
             this.data = data;
             this.editStatus = true;
             this.actionUrl = '{{ url('authors') }}'+'/'+data.id;
              $('#modal-default').modal();
              
             },
             deleteData(id) {
                 // console.log(id);
                 this.actionUrl =  '{{ url('authors') }}'+'/'+id ;
                 if(confirm("Are you sure ?"))
                 {
                     axios.post(this.actionUrl, {_method: 'DELETE'}).then(response => { location.reload();
                      });
                 }
             },
         }
     })
   </script>

@endsection