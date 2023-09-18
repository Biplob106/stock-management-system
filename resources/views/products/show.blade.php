@extends('products.layout')
@section('content')

<div class="tables-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('product.index') }}"> Back </a>
        </div>
          <div class="table-wrapper table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th class="lead-info">
                    <h6>Category </h6>
                  </th>
                  <th class="lead-email">
                    <h6>Product Name</h6>
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
                    <h6>Feature image</h6>
                  </th>

                </tr>
                <!-- end table row-->
              </thead>
              <tbody>
                <tr>
                  <td class="min-width">
                    <p>{{ $product->category->name }}</p>
                  </td>
                  <td class="min-width">
                    <p>{{ $product->name }}</p>
                  </td>
                  <td class="min-width">
                    <p>{{ $product->quantity }}</p>
                  </td>
                  <td class="min-width">
                    <p>{{ $product->description}}</p>
                  </td>
                  <td class="min-width">
                    <p>{{ $product->price }}</p>
                  </td>
                  <td class="min-width">
                    <p>{{ $product->unique_code}}</p>
                  </td>
                  <td class="min-width">
                    <div class="lead">
                      <div class="lead-image">
                        <img src="{{asset('images/'.$product->feature_image)}}" width="100px" alt="" />
                      </div>
                    </div>
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
