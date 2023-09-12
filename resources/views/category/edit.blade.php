@extends('category.layout')
@section('content')
<div class="card">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('category.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{  url('/category/edit/'.$category->id)}}"  enctype="multipart/form-data"  method="POST">
    @csrf
    @method('PUT')
     <div class="row">
        <div class="mb-3 mt-3">
            <div class="form-group">
                <strong>Category Name</strong>

                <input type="text" name="name" class="form-control" placeholder=" Category Name"  value="{{ $category->name }}">
            </div>
        </div>
        <div class="mb-3 mt-3">
            <div class="form-group">
                <strong>Category Image</strong>
                <input type="file" name="image" class="form-control" placeholder="image" value="{{ $category->image }}">
            </div>
        </div>

        <div class=" mb-3 mt-3 text-center">
                <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>

</form>
</div>
@endsection
