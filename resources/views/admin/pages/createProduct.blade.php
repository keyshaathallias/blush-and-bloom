@extends('admin.layouts.adminLayout')

@section('content')
  <div class="mb-0 page-heading">
    <div class="container-fluid">
      <nav aria-label="breadcrumb" class="breadcrumb-header float-start">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Product</a></li>
          <li class="breadcrumb-item active" aria-current="page">Add Product</li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="page-content">
    <!-- table striped -->
    <section class="section">
      <div class="card-body card-content">
        <section id="basic-horizontal-layouts">
          <div class="row match-height">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Add Product</h4>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <form action="{{ route('product.store') }}" method="post" class="form form-horizontal"
                      enctype="multipart/form-data">
                      @csrf
                      <div class="form-body">
                        <div class="row">
                          <div class="col-md-4">
                            <label for="image">Image</label>
                          </div>
                          <div class="col-md-8 form-group">
                            <input type="file" id="image" class="form-control" name="image"
                              placeholder="Upload the image">
                            @error('image')
                              <small>{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="col-md-4">
                            <label for="name">Product Name</label>
                          </div>
                          <div class="col-md-8 form-group">
                            <input type="text" id="name" class="form-control" name="name"
                              placeholder="Product Name">
                            @error('name')
                              <small>{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="col-md-4">
                            <label for="price">Price</label>
                          </div>
                          <div class="col-md-8 form-group">
                            <input type="number" id="price" class="form-control" name="price"
                              placeholder="Price">
                            @error('price')
                              <small>{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="col-md-4">
                            <label for="description">Description</label>
                          </div>
                          <div class="col-md-8 form-group">
                            <textarea name="description" class="form-control" id="description" cols="20" rows="5"></textarea>
                          </div>
                          @error('description')
                            <small>{{ $message }}</small>
                          @enderror
                          <div class="col-md-4">
                            <label for="categories_id">Category</label>
                          </div>
                          <div class="col-md-8 form-group">
                            <select name="categories_id" id="categories_id" class="form-control">
                                <option selected>Choose Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                                @endforeach
                            </select>
                          </div>
                          @error('categories_id')
                            <small>{{ $message }}</small>
                          @enderror
                          <div class="col-sm-12 d-flex justify-content-end">
                            <button type="submit" class="mb-1 btn btn-primary me-1">Submit</button>
                            <button type="reset" class="mb-1 btn btn-light-secondary me-1">Reset</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
  </div>
@endsection
