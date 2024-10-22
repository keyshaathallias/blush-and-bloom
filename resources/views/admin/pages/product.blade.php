@extends('admin.layouts.adminLayout')

@section('content')
  <div class="mb-0 page-heading">
    <div class="container-fluid">
      <nav aria-label="breadcrumb" class="breadcrumb-header float-start">
        <ol class="breadcrumb">
          <li class="breadcrumb-item" aria-current="page"><a href="">Product</a></li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="page-content">
    <!-- Table Data Product -->
    <section class="section">
      <div class="row" id="table-striped">
        <div class="col-12">
          <div class="card">
            <div class="flex flex-wrap card-header">
              <div class="order-first col-12 col-md-6 order-md-1">
                <h3>Product</h3>
              </div>
              <div class="order-last col-12 col-md-6 order-md-2">
                <div class="float-start float-lg-end">
                  <a href="{{ route('product.create') }}" class="float-right m-auto btn btn-primary">Add
                    Product</a>
                </div>
              </div>
            </div>
            <div class="card-body card-content">
              <div class="table-responsive">
                <table class="table mb-0 table-striped table-bordered table-hover">
                  <thead class="table-responsive">
                    <tr>
                      <th>No.</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Description</th>
                      <th>Category</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="table-responsive">
                    @if ($products->isEmpty())
                      <tr>
                        <td colspan="7" class="text-center">
                          <div class="flex flex-col items-center justify-center text-center">
                            {{-- <img src="/img/Product-animate.svg" alt="No Product Yet" width="300"> --}}
                            <p>No Products Available Yet</p>
                          </div>
                        </td>
                      </tr>
                    @else
                      @foreach ($products as $product)
                        <tr>
                          <td>{{ $loop->iteration }}.</td>
                          <td>
                            <img src="{{ asset('storage/img/' . $product->image) }}" alt="{{ $product->name }}" width="250">
                          </td>
                          <td>{{ $product->name }}</td>
                          <td>{{ 'Rp ' . number_format($product->price, 2, ',', '.') }}</td>
                          <td>{{ $product->description }}</td>
                          <td>{{ $product->categories->category }}</td>
                          <td>
                            <a href="{{ route('product.edit', $product->slug) }}">Edit</a>
                            <form action="{{ route('product.destroy', $product->slug) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
