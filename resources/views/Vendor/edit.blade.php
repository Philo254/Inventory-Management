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

                    <li class="breadcrumb-item active">Edit Vendor</li>
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
                <h3 class="card-title">Edit Vendor</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="POST" action="{{ route('vendors.edit',$data[0]->id) }}">
                @method('PUT')
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <div class="col-md-8">

                         <label for="name" class="col-sm-6 col-form-label">Name</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control"  id="name" value="{{ $data[0]->name }}" name="name" placeholder="Name">
                    </div>

                    <label for="address" class="col-sm-6 col-form-label">Address</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control"  id="address" value="{{ $data[0]->address }}" name="address" placeholder="Address">
                    </div>

                    <label for="contactperson" class="col-sm-6 col-form-label">Contact Person</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control"  id="contactperson" value="{{ $data[0]->contactperson }}" name="contactperson" placeholder="Contact Person">
                    </div>


                </div>

                  </div>

                </div>

                <div class="form-group row">
                    <div class="col-md-8">

                         <label for="phone" class="col-sm-6 col-form-label">Phone No</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control"  id="phone" value="{{ $data[0]->phone}}" name="phone" placeholder="Phone No">
                    </div>

                    <label for="status" class="col-sm-4 col-form-label">Status</label>
                    <div class="col-sm-8">
                        <select class="form-control" id="active" name="active">
                            <option value="1" {{ $data[0]->active ===1 ? 'selected' :'' }}>Active</option>
                            <option value="0" {{ $data[0]->active ===0 ? 'selected' :'' }}>Inctive</option>
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
