@extends('layout')
@push('css')
<!-- DataTables -->

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

                    <li class="breadcrumb-item active">Create Vendor</li>
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
                <h3 class="card-title">Create Vendor</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="POST" action="{{ route('vendors.store') }}">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <div class="col-md-8">

                         <label for="name" class="col-sm-6 col-form-label">Name</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control"  id="name" name="name" placeholder="Name">
                    </div>

                    <label for="address" class="col-sm-6 col-form-label">Address</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control"  id="address" name="address" placeholder="Address">
                    </div>

                    <label for="contactperson" class="col-sm-6 col-form-label">Contact Person</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control"  id="contactperson" name="contactperson" placeholder="Contact Person">
                    </div>


                </div>

                  </div>

                </div>

                <div class="form-group row">
                    <div class="col-md-8">

                         <label for="phone" class="col-sm-6 col-form-label">Phone No</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control"  id="phone" name="phone" placeholder="Phone No">
                    </div>

                    <label for="status" class="col-sm-4 col-form-label">Status</label>
                    <div class="col-sm-8">
                        <select class="form-control" id="active" name="active">
                            <option value="1">Active</option>
                            <option value="0">Inctive</option>
                        </select>


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
