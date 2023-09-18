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
                  <th>
                    <h6>Action</h6>
                  </th>
                </tr>
                <!-- end table row-->
              </thead>
              <tbody>
                @foreach ($product as $products)

                <tr>
                  <td class="min-width">
                    <p>{{ $products->category->name }}</p>
                  </td>
                  <td class="min-width">
                    <p>{{ $products->name }}</p>
                  </td>
                  <td class="min-width">
                    <p>{{ $products->quantity }}</p>
                  </td>
                  <td class="min-width">
                    <p>{{ $products->description}}</p>
                  </td>
                  <td class="min-width">
                    <p>{{ $products->price }}</p>
                  </td>
                  <td class="min-width">
                    <p>{{ $products->unique_code }}</p>
                  </td>
                  <td class="min-width">
                    <div class="lead">
                      <div class="lead-image">
                        <img src="{{asset('images/'.$products->feature_image)}}" width="200px" alt="" />

                      </div>
                    </div>
                  </td>
                  <td>
                        <a class="btn btn-info" href="{{ route('product.show',$products->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('product.edit',$products->id) }}">Edit</a>

                    <form action="{{ route('product.delete',$products->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
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
