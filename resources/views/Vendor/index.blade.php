@extends('layout')
@push('css')
<!-- DataTables -->
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">

@endpush

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Vendors</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item ">Master</li>

                    <li class="breadcrumb-item active">Vendor</li>
                </ol>
            </div>
            </div>
            </div>
            </div>

             <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Vendors List</h3>
              <a class= "btn btn-info btn-sm float-right"  href="{{route('vendors.create')}}" title="create">Create Vendor</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Address</th>
                  <th>cp(contact person)</th>
                  <th>Phone </th>
                  <th>Status</th>
                  <th>Action</th>

                </tr>
                </thead>


                <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Address</th>
                  <th>cp(Contact person)</th>
                  <th>Phone </th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

            @endsection
            @push('js')
            <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
     responsive:true,
     processing:true,
     pagingtype:'full_numbers',
     stateSave:false,
     scrollY:true,
     scrollX:true,
     ajax:"{{ route('vendor.datatable') }}",
     order:[0,'desc'],
     columns:[
        {data:'name', name:'name'},
        {data:'address', name:'address'},
        {data:'cp', name:'cp'},
        {data:'phone',name:'phone'},
        {data:'active',
            render: function (data){
                if(data=='1'){
                    return '<span class="badge badge-success">Active</span>';
                }
                if(data=='2'){
                    return '<span class="badge badge-error">Inactive</span>';
                }
            },
        },

        {data:'action',name:'action', searchable:false, sortable:false}


     ]


});

  });
</script>


@endpush
