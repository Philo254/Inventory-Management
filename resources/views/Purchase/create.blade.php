@extends('layout')
@push('css')
<!-- DataTables -->

@endpush

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Purchase Order</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item ">Master</li>

                    <li class="breadcrumb-item active">Create Purchase-order</li>
                </ol>
            </div>
            </div>
            </div>
            </div>


            <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">

            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Create Purchase-order</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="POST" action="{{ route('purchase-order.store') }}">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <div class="col-md-8">

                         <label for="date" class="col-sm-6 col-form-label">Date</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control"  id="date" name="date">
                    </div>

                    <label for="invoice_no" class="col-sm-6 col-form-label">Invoice No.</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control"  id="invoice_no" name="invoice_no" placeholder="Invoice No">
                    </div>

                    <div class="form-group row">
                    <div class="col-md-12">

                         <label for="info" class="col-sm-6 col-form-label">Information</label>
                         <div class="col-sm-12">
                            <textarea name="information" class="form-control" rows="4"></textarea>
                         </div>
                    </div>
                    </div>

                    <div class="form-group row">
                    <div class="col-md-12">

                         <label for="id_ven" class="col-sm-6 col-form-label">Supplier Name</label>
                         <div class="col-sm-6">
                            <input type="text" name="id_ven" id="id_ven" class="form-control" placeholder="Supplier Name">
                         </div>
                    </div>
                    </div>

                    <div class="form-group row">
                    <div class="col-md-12">

                         <label for="id_raw_product" class="col-sm-6 col-form-label">Product Name</label>
                         <div class="col-sm-6">
                            <input type="text" name="id_raw_product[]" id="id_raw_product_1" class="form-control" placeholder="Product Name">
                         </div>
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-sm-4">
                        <input type="text" name="price[]" id="price_1" class="form-control" placeholder="Price">
                    </div>

                    <div class="col-sm-4">
                        <input type="text" name="total[]" id="total_1" class="form-control" placeholder="Total">
                    </div>
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" class="btn btn-primary" title="Add Row"> <i class="fas fa-plus"></i></a>
                    </div>
                    </div>
                    </div>




                </div>

                  </div>

                </div>



                </div>



                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-default float-right">Submit</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->


        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->



@endsection
