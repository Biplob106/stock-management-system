@extends('category.layout')

@section('content')
<div>
   <div>
    <a class="btn btn-success" href="{{ route('category.index') }}"> Back</a>
   </div>
    <table class="table">
        <thead>
          <tr>
            <th class="lead-info">
              <h6>Category Name</h6>
            </th>
            <th class="lead-email">
              <h6>Category Image</h6>
            </th>
          </tr>
          <!-- end table row-->
        </thead>
        <tbody>
          <tr>
            <td class="min-width">
              <p>{{$category->name}}</p>
            </td>
            <td class="min-width">
                <div class="lead">
                  <div class="lead-image">
                    <img src="{{ asset('images/'.$category->image) }}" width="100px" alt="{{ $category->image  }}" />
                  </div>
                </div>
              </td>
          </tr>
          <!-- end table row -->
        </tbody>
      </table>
      <!-- end table -->
 </div>
        </tbody>
      </table>

@endsection
