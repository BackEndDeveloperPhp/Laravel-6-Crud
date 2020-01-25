@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
   <div class="container mt-5">
    <div class="row">
      <div class="col-sm-12">
        <a class="btn btn-secondary float-right" href="{{url('/products')}}">Product page</a>
      </div>
    </div>
  </div>
<div class="card uper">
  <div class="card-header">
    Update Product
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form method="post" action="{{ route('products.update', $product->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Product Name:</label>
              <input type="text" class="form-control" name="name" value="{{ $product->name }}"/>
          </div>
          <div class="form-group">
              <label for="price">Product Description :</label>
              <input type="text" class="form-control" name="description" value="{{ $product->description }}"/>
          </div>
          <div class="form-group">
            <label for="quantity">Product Price :</label>
            <input type="text" class="form-control" name="price" value="{{ $product->price }}"/>
        </div>
          <div class="form-group">
              <label for="price">Product IMDB Rating :</label>
              <input type="text" class="form-control" name="imdb_rating" value="{{ number_format($product->imdb_rating, 2) }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Product</button>
      </form>
  </div>
</div>
@endsection