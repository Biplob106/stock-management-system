@extends('products.layout')
@section('content')

<div class="tables-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('product.create') }}"> Create New Product</a>
        </div>
          <div class="table-wrapper table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th class="lead-info">
                    <h6>Product Name</h6>
                  </th>
                  <th class="lead-email">
                    <h6>Category </h6>
                  </th>
                  <th class="lead-email">
                    <h6>Quantity</h6>
                  </th>
                  <th class="lead-email">
                    <h6>description</h6>
                  </th>
                  <th class="lead-email">
                    <h6>Price</h6>
                  </th>
                  <th class="lead-email">
                    <h6>Unique Code</h6>
                  </th>
                  <th class="lead-email">
                    <h6>Image gallery</h6>
                  </th>
                  <th class="lead-email">
                    <h6>Feature image</h6>
                  </th>
                  <th>
                    <h6>Action</h6>
                  </th>
                </tr>
                <!-- end table row-->
              </thead>
              <tbody>
                <tr>
                  <td class="min-width">
                    <p>name</p>
                  </td>
                  <td class="min-width">
                    <p>category</p>
                  </td>
                  <td class="min-width">
                    <p>Qunantity</p>
                  </td>
                  <td class="min-width">
                    <p>desc</p>
                  </td>
                  <td class="min-width">
                    <p>price</p>
                  </td>
                  <td class="min-width">
                    <p>unique code</p>
                  </td>
                  <td class="min-width">
                    <div class="lead">
                      <div class="lead-image">
                        <img src="" width="100px" alt="" />
                      </div>
                    </div>
                  </td>
                  <td class="min-width">
                    <div class="lead">
                      <div class="lead-image">
                        <img src="" width="100px" alt="" />
                      </div>
                    </div>
                  </td>
                  <td>
                        <a class="btn btn-info" href="">Show</a>

                        <a class="btn btn-primary" href="">Edit</a>

                    <form action="" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </td>
                </tr>
                <!-- end table row -->
              </tbody>
            </table>
            <!-- end table -->
          </div>
        </div>
        <!-- end card -->
      </div>
      <!-- end col -->
    </div>
    <!-- end row -->
@endsection