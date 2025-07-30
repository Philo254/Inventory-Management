@extends('layout')
@push('css')
<!-- DataTables -->
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}} ">
  <!-- Date -->
  <link rel="stylesheet" href="{{asset('assets/plugins/jquery-ui/jquery-ui.css')}} ">





@endpush

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Purchases</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item ">Master</li>

                    <li class="breadcrumb-item active">Purchase</li>
                </ol>
            </div>
            </div>
            </div>
            </div>

             <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-15">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Purchases List</h3>
              <a class= "btn btn-info btn-sm float-right"  href="{{route('purchase-order.create')}}" title="create">Create</a>
            </div>
            <!-- /.card-header -->
            <form class="form-horizontal" method="GET" role="form" autocomplete="off">
            @csrf
            <div class="form-group row">
                <div class="col-md-12>">
                    <label for="status" class="col-sm-8 col-form-label">Status</label>
                    <div class="col-sm-12">
                        <select class="form-control" id="status" name="status">
                            <option value="0">All</option>
                            <option value="order">Order</option>
                            <option value="received">Received</option>

                        </select>

                    </div>
            </div>
            </div>
            <div class="form-group row">

                <div class="col-md-6">

                         <label for="startDate" class="col-sm-6 col-form-label">Start Date</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control"  id="startDate" name="startDate">
                    </div>
            </div>
            <div class="col-md-6">

                         <label for="endDate" class="col-sm-6 col-form-label">End Date</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="endDate"  id="endDate" >
                    </div>
            </div>
            <div class="form-group row">
                <!--checkbox-->
            </div>
           <div class="col-md-4">
              <div class="form-group clearfix">
                <div class="icheck-primary d-inline ">
                    <input type="checkbox" id="show-all" name="mode" value="all">
                    <label for="show-all">Show All
              </label>
                </div>
              </div>
            </div>
            </div>
                <button type="submit" class= "btn btn-default float-right">Submit</button>


           </form>


            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped" style="width-100%">

                <thead>
                <tr>
                  <th>Name</th>
                  <th>Purchase-order</th>
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
      width: 200,
     responsive:true,
     processing:true,
     pagingtype:'full_numbers',
     stateSave:false,
     scrollY:true,
     scrollX:true,
     ajax:"",
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
                if(data=='0'){
                    return '<span class="badge badge-warning">Inactive</span>';
                }
            },
        },

        {data:'action',name:'action', searchable:false, sortable:false}





     ]


});

  });
</script>


    <script>

      $(function(){
       $('#startDate').datepicker({
        autoclose:true,
        dateFormat:'dd-mm-yy',

       });

       $('#endDate').datepicker({
        autoclose:true,
        format:'dd-mm-yy',

       });


    })


        </script>


@endpush
