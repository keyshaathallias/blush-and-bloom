@extends('admin.layouts.adminLayout')

@section('content')
  <div class="mb-0 page-heading">
    <div class="container-fluid">
      <nav aria-label="breadcrumb" class="breadcrumb-header float-start">
        <ol class="breadcrumb">
          <li class="breadcrumb-item" aria-current="page"><a href="">Categories</a></li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="page-content">
    <!-- Table Data Categories -->
    <section class="section">
      <div class="row" id="table-striped">
        <div class="col-12">
          <div class="card">
            <div class="flex flex-wrap card-header">
              <div class="order-first col-12 col-md-6 order-md-1">
                <h3>Categories</h3>
              </div>
              <div class="order-last col-12 col-md-6 order-md-2">
                <div class="float-start float-lg-end">
                  <a href="{{ route('categories.create') }}" class="float-right m-auto btn btn-primary">Add
                    Category</a>
                </div>
              </div>
            </div>
            <div class="card-body card-content">
              <div class="table-responsive">
                <table class="table mb-0 table-striped table-bordered table-hover">
                  <thead class="table-responsive">
                    <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="table-responsive">
                    @if ($categories->isEmpty())
                      <tr>
                        <td colspan="3" class="text-center">
                          <div class="flex flex-col items-center justify-center text-center">
                            {{-- <img src="/img/Categories-animate.svg" alt="No Categories Yet" width="300"> --}}
                            <p>No Categories Available Yet</p>
                          </div>
                        </td>
                      </tr>
                    @else
                      @foreach ($categories as $category)
                        <tr>
                          <td>{{ $loop->iteration }}.</td>
                          <td>{{ $category->category }}</td>
                          <td>
                            <a href="{{ route('categories.edit', $category->slug) }}">Edit</a>
                            <form action="{{ route('categories.destroy', $category->slug) }}" method="post">
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
