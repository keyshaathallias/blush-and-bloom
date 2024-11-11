@extends('admin.layouts.adminLayout')

@section('content')
  <div class="mb-0 page-heading">
    <div class="container-fluid">
      <nav aria-label="breadcrumb" class="breadcrumb-header float-start">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('email.dashboard') }}">Email Message</a></li>
          <li class="breadcrumb-item" aria-current="page">Edit Email</li>
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
                  <h4 class="card-title">Edit Category</h4>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <form action="{{ route('email.update', $email->id) }}" method="post"
                      class="form form-horizontal">
                      @csrf
                      @method('put')
                      <div class="form-body">
                        <div class="row">
                          <div class="col-md-4">
                            <label for="subject">Subject</label>
                          </div>
                          <div class="col-md-8 form-group">
                            <input type="text" value="{{ $email->subject }}" id="subject" class="form-control"
                              name="subject" placeholder="Subject">
                            @error('subject')
                              <small>{{ $message }}</small>
                            @enderror
                          </div>
                        <div class="row">
                          <div class="col-md-4">
                            <label for="body">Body</label>
                          </div>
                          <div class="col-md-8 form-group">
                            <textarea class="form-control" name="body" id="description" cols="20" rows="5">{{ $email->body }}</textarea>
                            @error('body')
                              <small>{{ $message }}</small>
                            @enderror
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
