@extends('admin.layouts.adminLayout')

@section('content')
  <div class="mb-0 page-heading">
    <div class="container-fluid">
      <nav aria-label="breadcrumb" class="breadcrumb-header float-start">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('account.index') }}">Account</a></li>
          <li class="breadcrumb-item active" aria-current="page">Add Account</li>
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
                  <h4 class="card-title">Add Account</h4>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <form action="{{ route('account.store') }}" method="post" class="form form-horizontal">
                      @csrf
                      <div class="form-body">
                        <div class="row">
                          <div class="col-md-4">
                            <label for="name">Name</label>
                          </div>
                          <div class="col-md-8 form-group">
                            <input type="text" id="name" class="form-control" name="name" placeholder="Name">
                            @error('name')
                              <small>{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="col-md-4">
                            <label for="email">Email</label>
                          </div>
                          <div class="col-md-8 form-group">
                            <input type="email" id="email" class="form-control" name="email" placeholder="Email">
                            @error('email')
                              <small>{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="col-md-4">
                            <label for="password">Password</label>
                          </div>
                          <div class="col-md-8 form-group">
                            <input type="password" id="password" class="form-control" name="password"
                              placeholder="Must be at least 6 characters.">
                            <i class="bi bi-eye-fill absolute top-[44%] right-10 transform cursor-pointer text-secondary"
                              id="togglePassword"></i>
                            @error('password')
                              <small>{{ $message }}</small>
                            @enderror
                          </div>
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
