@extends('admin.layouts.adminLayout')

@section('content')
  <div class="mb-0 page-heading">
    <div class="container-fluid">
      <nav aria-label="breadcrumb" class="breadcrumb-header float-start">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('reservation.dashboard') }}">Reservation</a></li>
          <li class="breadcrumb-item" aria-current="page">Edit Reservation</li>
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
                  <h4 class="card-title">Edit Reservation</h4>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <form action="{{ route('reservation.update', $reservation->id) }}" enctype="multipart/form-data"
                      method="post" class="form form-horizontal">
                      @csrf
                      @method('PUT')
                      <div class="form-body">
                        <div class="row">
                          <div class="col-md-4">
                            <label for="name">Reservation Name</label>
                          </div>
                          <div class="col-md-8 form-group">
                            <select name="status" id="status" class="form-control" required>
                              <option disabled selected>Update Status</option>
                              <option value="pending" {{ $reservation->status == 'pending' ? 'selected' : '' }}>Pending
                              </option>
                              <option value="confirmed" {{ $reservation->status == 'confirmed' ? 'selected' : '' }}>
                                Confirmed</option>
                              <option value="completed" {{ $reservation->status == 'completed' ? 'selected' : '' }}>
                                Completed</option>
                            </select>
                          </div>

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
