@extends('admin.layouts.adminLayout')

@section('content')
  <div class="mb-0 page-heading">
    <div class="container-fluid">
      <nav aria-label="breadcrumb" class="breadcrumb-header float-start">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Product</a></li>
          <li class="breadcrumb-item" aria-current="page">Edit Product</li>
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
            <div class="col">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Edit Product</h4>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <form action="{{ route('product.update', $product->slug) }}" enctype="multipart/form-data"
                      method="post" class="form form-horizontal">
                      @csrf
                      @method('PUT')
                      <div class="form-body">
                        <div class="row">
                          <div class="col-md-4">
                            <label for="image">Product Image</label>
                          </div>
                          <div class="col-md-8 form-group">
                            <small>Current Image:</small>
                            <br>
                            <img src="{{ asset('storage/img/' . $product->image) }}" alt="{{ $product->name }}"
                              width="300" style="margin: 8px 15px 15px 0; border-radius: 8px">
                            <input type="file" id="image" class="form-control" name="image"
                              placeholder="Product Image">
                            @error('image')
                              <small>{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="col-md-4">
                            <label for="name">Product Name</label>
                          </div>
                          <div class="col-md-8 form-group">
                            <input type="text" value="{{ $product->name }}" id="name" class="form-control"
                              name="name" placeholder="Product Name">
                            @error('name')
                              <small>{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="col-md-4">
                            <label for="price"> Price</label>
                          </div>
                          <div class="col-md-8 form-group">
                            <input type="number" value="{{ $product->price }}" id="price" class="form-control"
                              name="price" placeholder=" Price">
                            @error('price')
                              <small>{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="col-md-4">
                            <label for="description">Description</label>
                          </div>
                          <div class="col-md-8 form-group">
                            <textarea class="form-control" name="description" id="description" cols="20" rows="5">{{ $product->description }}</textarea>
                            @error('description')
                              <small>{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="col-md-4">
                            <label for="categories_id">Category</label>
                          </div>
                          <div class="col-md-8 form-group">
                            <select name="categories_id" id="categories_id" class="form-control">
                              <option selected>Choose Category</option>
                              @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                  {{ $product->categories_id == $category->id ? 'selected' : '' }}>
                                  {{ $category->category }}
                                </option>
                              @endforeach
                            </select>
                            {{-- <select name="categories_id" id="categories_id" class="form-control">
                              <option selected>Choose Category</option>
                              <option value="Face" {{ $product->categories->category == 'Face' ? 'selected' : '' }}>Face
                              </option>
                              <option value="Body" {{ $product->categories->category == 'Body' ? 'selected' : '' }}>Body
                              </option>
                            </select> --}}
                          </div>
                          @error('categories_id')
                            <small>{{ $message }}</small>
                          @enderror
                          <div class="col-sm-12 d-flex justify-content-end">
                            <button type="submit" class="mb-1 btn btn-primary me-1">Edit</button>
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
