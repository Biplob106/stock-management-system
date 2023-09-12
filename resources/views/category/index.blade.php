@extends('category.layout')
@section('content')

<div class="tables-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="card-style mb-30">
          <h6 class="mb-10">Category</h6>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('category.create') }}"> Create New Product</a>
        </div>
          <div class="table-wrapper table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th class="lead-info">
                    <h6>Category Image</h6>
                  </th>
                  <th class="lead-email">
                    <h6>Category name</h6>
                  </th>
                  <th>
                    <h6>Action</h6>
                  </th>
                </tr>
                <!-- end table row-->
              </thead>
              <tbody>
                @foreach ( $categorys as $category)
                <tr>
                  <td class="min-width">
                    <div class="lead">
                      <div class="lead-image">
                        <img src="{{ asset('images/'.$category->image) }}" width="100px" alt="{{ $category->image  }}" />
                      </div>
                    </div>
                  </td>
                  <td class="min-width">
                    <p>{{$category->name}}</p>
                  </td>
                  <td>


                        <a class="btn btn-info" href="{{ route('category.show',$category->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('category.edit',$category->id) }}">Edit</a>

                    <form action="" method="POST">
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
  </div>
@endsection
