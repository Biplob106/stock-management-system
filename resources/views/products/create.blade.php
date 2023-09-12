@extends('products.layout')
@section('content')
<div class="card">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>
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
<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
     <div class="row">
        <div class="mb-3 mt-3">
            <label for="category" class="form-label"><strong>Category</strong></label>
            <select id="category" class="form-select">
              <option>Category</option>
              <option>Category1</option>
            </select>
        </div>
        <div class="mb-3 mt-3">
            <div class="form-group">
                <strong>Product Name</strong>

                <input type="text" name="name" class="form-control" placeholder=" Product Name" >
            </div>
        </div>
        <div class="mb-3 mt-3">
            <div class="form-group">
                <strong>Quantity</strong>

                <input type="number" name="quantity" class="form-control" placeholder="quantity" >
            </div>
        </div>
        <div class="mb-3 mt-3">
            <div class="form-group">
                <strong>description</strong>
                <textarea type="text" name="description" class="form-control"></textarea>
            </div>
        </div>
        <div class="mb-3 mt-3">
            <div class="form-group">
                <strong>price</strong>
                <input type="number" name="price" class="form-control" placeholder="price" >
            </div>
        </div>
        <div class="mb-3 mt-3">
            <div class="form-group">
                <strong>Gallery Image</strong>
                <input type="file" name="image" class="form-control" placeholder="image" >
            </div>
        </div>
        <div class="mb-3 mt-3">
            <div class="form-group">
                <strong>Feature Image</strong>
                <input type="file" name="image" class="form-control" placeholder="image" >
            </div>
        </div>

        <div class=" mb-3 mt-3 text-center">
                <button type="submit" class="btn btn-primary">Sumbit</button>
        </div>
    </div>

</form>
</div>
@endsection
