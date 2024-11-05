@extends('admin.layouts.adminLayout')

@section('content')
  <div class="mb-0 page-heading">
    <div class="container-fluid">
      <nav aria-label="breadcrumb" class="breadcrumb-header float-start">
        <ol class="breadcrumb">
          <li class="breadcrumb-item" aria-current="page"><a href="">Treatment</a></li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="page-content">
    <!-- Table Data Treatment -->
    <section class="section">
      <div class="row" id="table-striped">
        <div class="col-12">
          <div class="card">
            <div class="flex flex-wrap card-header">
              <div class="order-first col-12 col-md-6 order-md-1">
                <h3>Treatment</h3>
              </div>
              <div class="order-last col-12 col-md-6 order-md-2">
                <div class="float-start float-lg-end">
                  <a href="{{ route('treatment.create') }}" class="float-right m-auto btn btn-primary">Add
                    Treatment</a>
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
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="table-responsive">
                    @if ($treatments->isEmpty())
                      <tr>
                        <td colspan="5" class="text-center">
                          <div class="flex flex-col items-center justify-center text-center">
                            {{-- <img src="/img/Treatment-animate.svg" alt="No Treatment Yet" width="300"> --}}
                            <p>No Treatments Available Yet</p>
                          </div>
                        </td>
                      </tr>
                    @else
                      @foreach ($treatments as $treatment)
                        <tr>
                          <td>{{ $loop->iteration }}.</td>
                          <td>
                            <img src="{{ asset('storage/img/' . $treatment->image) }}" alt="{{ $treatment->name }}" width="250">
                          </td>
                          <td>{{ $treatment->name }}</td>
                          <td>{!! $treatment->description !!}</td>
                          <td>
                            <a href="{{ route('treatment.edit', $treatment->slug) }}">Edit</a>
                            <form action="{{ route('treatment.destroy', $treatment->slug) }}" method="post">
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
