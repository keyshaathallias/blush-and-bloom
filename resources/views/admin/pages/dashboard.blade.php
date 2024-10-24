@extends('admin.layouts.adminLayout')

@section('content')
  <div class="mb-0 page-heading">
    <div class="container-fluid">
      <nav aria-label="breadcrumb" class="breadcrumb-header float-start">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="page-content">
    <section>
      <div class="row">

        <div class="col">
          <div class="card">
            <div class="px-4 card-body py-4-5">
              <div class="flex items-center justify-center text-center row">
                <div class="flex justify-center col-md-4 col-lg-12 col-xl-12 col-xxl-5">
                  <div class="mb-2 stats-icon red">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                      class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003zM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z" />
                    </svg>
                  </div>
                </div>
                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                  <h6 class="font-semibold text-muted">Product</h6>
                  <h6 class="mb-0 font-extrabold">{{ number_format($totalProduct) }}</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col">
          <div class="card">
            <div class="px-4 card-body py-4-5">
              <div class="flex items-center justify-center text-center row">
                <div class="flex justify-center col-md-4 col-lg-12 col-xl-12 col-xxl-5">
                  <div class="mb-2 stats-icon blue">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                      class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                      <path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/>
                    </svg>
                  </div>
                </div>
                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                  <h6 class="font-semibold text-muted">Category</h6>
                  <h6 class="mb-0 font-extrabold">{{ number_format($totalCategory) }}</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col">
          <div class="card">
            <div class="px-4 card-body py-4-5">
              <div class="flex items-center justify-center text-center row">
                <div class="flex justify-center col-md-4 col-lg-12 col-xl-12 col-xxl-5">
                  <div class="mb-2 stats-icon purple">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                      class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003zM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z" />
                    </svg>
                  </div>
                </div>
                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                  <h6 class="font-semibold text-muted">Treatment</h6>
                  <h6 class="mb-0 font-extrabold">{{ number_format($totalTreatment) }}</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col">
          <div class="card">
            <div class="px-4 card-body py-4-5">
              <div class="flex items-center justify-center text-center row">
                <div class="flex justify-center col-md-4 col-lg-12 col-xl-12 col-xxl-5">
                  <div class="mb-2 stats-icon green">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                      class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003zM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z" />
                    </svg>
                  </div>
                </div>
                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                  <h6 class="font-semibold text-muted">Specialist</h6>
                  <h6 class="mb-0 font-extrabold">{{ number_format($totalSpecialist) }}</h6>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <div class="px-4 card-body py-4-5">
              <div class="flex items-center justify-center text-center row">
                <div class="flex justify-center col-md-4 col-lg-12 col-xl-12 col-xxl-5 ">
                  <div class="mb-2 stats-icon red">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                      class="bi bi-person-fill" viewBox="0 0 16 16">
                      <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                  </div>
                </div>
                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                  <h6 class="font-semibold text-muted">Account</h6>
                  <h6 class="mb-0 font-extrabold"></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

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
                    <a href="" class="float-right m-auto btn btn-primary">Add
                      Category</a>
                  </div>
                </div>
              </div>
              <div class="card-body card-content">
                <div class="table-responsive">
                  <table class="table mb-3 table-striped table-bordered table-hover">
                    <thead class="table-responsive">
                      <tr>
                        <th>No.</th>
                        <th>Name</th>
                      </tr>
                    </thead>
                    <tbody class="table-responsive">
                      @foreach ($categories as $category)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <a href="" class="text-sm">See more data →</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Table Data Payment -->
      <section class="section">
        <div class="row" id="table-striped">
          <div class="col-12">
            <div class="card">
              <div class="flex flex-wrap card-header">
                <h3>Payment</h3>
              </div>
              <div class="card-body card-content">
                <div class="table-responsive">
                  <table class="table mb-3 table-striped table-bordered table-hover">
                    <thead class="table-responsive">
                      <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Destination</th>
                        <th>Ticket Price</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-responsive">
                      {{-- @if ($payment->isEmpty())
                        <tr>
                          <td colspan="9" class="text-center">
                            <div class="flex flex-col items-center justify-center text-center">
                              <img src="/img/no-data-animate.svg" alt="No Payment Yet" width="300">
                              <p>No Payments Available Yet</p>
                            </div>
                          </td>
                        </tr>
                      @else
                        @if ($payment->isEmpty())
                          <tr>
                            <td colspan="10" class="text-center">
                              <div class="flex flex-col items-center justify-center text-center">
                                <img src="/img/no-data-animate.svg" alt="No Payment Yet" width="300">
                                <p>No Payments Has Been Made Yet</p>
                              </div>
                            </td>
                          </tr>
                        @else
                          @foreach ($payment as $payment)
                            <tr>
                              <td>{{ $loop->iteration }}.</td>
                              <td>{{ $payment->user->name }}</td>
                              <td>{{ $payment->user->email }}</td>
                              <td>{{ $payment->destination->name }}</td>
                              <td>{{ 'Rp ' . number_format($payment->destination->ticket_price, 2, ',', '.') }}</td>
                              <td>{{ $payment->cart->quantity }}</td>
                              <td>{{ 'Rp ' . number_format($payment->cart->total(), 2, ',', '.') }}</td>
                              <td>{{ $payment->status }}</td>
                              <td>
                                <a href="{{ route('payment.show', $payment->id) }}" class="btn btn-primary"><i
                                    class="bi bi-eye-fill"></i></a>
                              </td>
                            </tr>
                          @endforeach
                        @endif
                      @endif --}}
                    </tbody>
                  </table>
                  <a href="" class="text-sm">See more data →</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Table Data Account -->
      <section class="section">
        <div class="row" id="table-striped">
          <div class="col-12">
            <div class="card">
              <div class="flex flex-wrap card-header">
                <div class="order-first col-12 col-md-6 order-md-1">
                  <h3>Account</h3>
                </div>
                <div class="order-last col-12 col-md-6 order-md-2">
                  <div class="float-start float-lg-end">
                    <a href="#" class="float-right m-auto btn btn-primary">Add Account</a>
                  </div>
                </div>
              </div>
              <div class="card-body card-content">
                <div class="table-responsive">
                  <table class="table mb-3 table-striped table-bordered table-hover">
                    <thead class="table-responsive">
                      <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="table-responsive">
                      {{-- @if ($users->isEmpty())
                        <tr>
                          <td colspan="5" class="text-center">
                            <div class="flex flex-col items-center justify-center text-center">
                              <img src="/img/no-data-animate.svg" alt="No Data Yet" width="300">
                              <p>No Accounts Available Yet</p>
                            </div>
                          </td>
                        </tr>
                      @else
                        @foreach ($user as $user)
                          <tr>
                            <td>{{ $loop->iteration }}.</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->roles }}</td>
                            <td>
                              <a href="/" class="btn btn-warning"><i
                                  class="bi bi-pencil-fill"></i></a>
                              <a href="/" class="btn btn-danger lg:ms-2"
                                data-confirm-delete="true">
                                <i class="bi bi-trash3-fill"></i></a>
                            </td>
                          </tr>
                        @endforeach
                      @endif --}}
                    </tbody>
                  </table>
                  <a href="#" class="text-sm">See more data →</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  </div>
@endsection
