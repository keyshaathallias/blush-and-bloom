@extends('admin.layouts.adminLayout')

@section('content')
  <div class="mb-0 page-heading">
    <div class="container-fluid">
      <nav aria-label="breadcrumb" class="breadcrumb-header float-start">
        <ol class="breadcrumb">
          <li class="breadcrumb-item" aria-current="page"><a href="">Customer</a></li>
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
                <h3>Customer</h3>
              </div>
              <div class="order-last col-12 col-md-6 order-md-2">
                <form action="{{ route('customer.sendPromotion') }}" method="POST" class="float-start float-lg-end">
                  @csrf
                  <button type="submit" class="float-right m-auto btn btn-primary">Share All</button>
                </form>
              </div>
            </div>
            <div class="card-body card-content">
              <div class="table-responsive">
                <table class="table mb-0 table-striped table-bordered table-hover">
                  <thead class="table-responsive">
                    <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>Email</th>
                    </tr>
                  </thead>
                  <tbody class="table-responsive">
                    @if ($customers->isEmpty())
                      <tr>
                        <td colspan="3" class="text-center">
                          <div class="flex flex-col items-center justify-center text-center">
                            <p>No Customer Available Yet</p>
                          </div>
                        </td>
                      </tr>
                    @else
                      @foreach ($customers as $customer)
                        <tr>
                          <td>{{ $loop->iteration }}.</td>
                          <td>{{ $customer->first_name }} {{ $customer->last_name }}</td>
                          <td>{{ $customer->email }}</td>
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
