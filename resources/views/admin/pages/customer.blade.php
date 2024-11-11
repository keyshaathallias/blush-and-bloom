@extends('admin.layouts.adminLayout')

@section('content')
  <div class="mb-0 page-heading">
    <div class="container-fluid">
      <nav aria-label="breadcrumb" class="breadcrumb-header float-start">
        <ol class="breadcrumb">
          <li class="breadcrumb-item" aria-current="page"><a href="">Send Email</a></li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="page-content">
    <!-- Table Data Customer -->
    <section class="section">
      <div class="row" id="table-striped">
        <div class="col-12">
          <div class="card">
            <div class="flex flex-wrap card-header">
              <div class="order-first col-12 col-md-6 order-md-1">
                <h3>Customer List</h3>
              </div>
              <div class="order-last col-12 col-md-6 order-md-1">
                <form action="{{ route('customer.sendPromotion') }}" method="POST" class="float-start float-lg-end">
                  @csrf
                  <button type="submit" class="float-right m-auto btn btn-primary">Share Email to All</button>
                </form>
              </div>
            </div>
            <div class="card-body card-content">
              <div class="table-responsive">
                <form action="{{ route('customer.sendSelectedEmails') }}" method="POST">
                  @csrf
                  <table class="table mb-0 table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Select</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($customers as $customer)
                        <tr>
                          <td>{{ $loop->iteration }}.</td>
                          <td>{{ $customer->first_name }} {{ $customer->last_name }}</td>
                          <td>{{ $customer->email }}</td>
                          <td>
                            <input type="checkbox" name="selected_customers[]" value="{{ $customer->email }}">
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <div class="flex justify-end mt-3">
                    <button type="submit" class="btn btn-primary">Send to Selected Emails</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
