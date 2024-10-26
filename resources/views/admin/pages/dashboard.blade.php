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
          <div class="card ">
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
          <div class="card ">
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
          <div class="card ">
            <div class="px-4 card-body py-4-5">
              <div class="flex items-center justify-center text-center row">
                <div class="flex justify-center col-md-4 col-lg-12 col-xl-12 col-xxl-5">
                  <div class="mb-2 stats-icon blue">
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
          <div class="card ">
            <div class="px-4 card-body py-4-5">
              <div class="flex items-center justify-center text-center row">
                <div class="flex justify-center col-md-4 col-lg-12 col-xl-12 col-xxl-5">
                  <div class="mb-2 stats-icon red">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                      class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                      <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                    </svg>
                  </div>
                </div>
                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                  <h6 class="font-semibold text-muted">Account</h6>
                  <h6 class="mb-0 font-extrabold">{{ number_format($totalUser) }}</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="card ">
            <div class="px-4 card-body py-4-5">
              <div class="flex items-center justify-center text-center row">
                <div class="flex justify-center col-md-4 col-lg-12 col-xl-12 col-xxl-5">
                  <div class="mb-2 stats-icon purple">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                      class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z" />
                      <path
                        d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466" />
                    </svg>
                  </div>
                </div>
                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                  <h6 class="font-semibold text-muted">Pending Reservation</h6>
                  <h6 class="mb-0 font-extrabold">{{ number_format($totalPendingReservations) }}</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card ">
            <div class="px-4 card-body py-4-5">
              <div class="flex items-center justify-center text-center row">
                <div class="flex justify-center col-md-4 col-lg-12 col-xl-12 col-xxl-5">
                  <div class="mb-2 stats-icon purple">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                      class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8z" />
                      <path
                        d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2" />
                      <path
                        d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z" />
                    </svg>
                  </div>
                </div>
                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                  <h6 class="font-semibold text-muted">Confirmed Reservation</h6>
                  <h6 class="mb-0 font-extrabold">{{ number_format($totalConfirmedReservations) }}</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card ">
            <div class="px-4 card-body py-4-5">
              <div class="flex items-center justify-center text-center row">
                <div class="flex justify-center col-md-4 col-lg-12 col-xl-12 col-xxl-5">
                  <div class="mb-2 stats-icon purple">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white"
                      class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                      <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </svg>
                  </div>
                </div>
                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                  <h6 class="font-semibold text-muted">Completed Reservation</h6>
                  <h6 class="mb-0 font-extrabold">{{ number_format($totalCompletedReservations) }}</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

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
                  <table class="table mb-3 table-striped table-bordered table-hover">
                    <thead class="table-responsive">
                      <tr>
                        <th>No.</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Category</th>
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
                              <img src="{{ asset('storage/img/' . $product->image) }}" alt="{{ $product->name }}"
                                width="250">
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>{{ 'Rp ' . number_format($product->price, 2, ',', '.') }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->categories->category }}</td>
                          </tr>
                        @endforeach
                      @endif
                    </tbody>
                  </table>
                  <a href="{{ route('product.index') }}" class="text-sm">See more data →</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Table Data Specialist -->
      <section class="section">
        <div class="row" id="table-striped">
          <div class="col-12">
            <div class="card ">
              <div class="flex flex-wrap card-header">
                <div class="order-first col-12 col-md-6 order-md-1">
                  <h3>Specialist</h3>
                </div>
                <div class="order-last col-12 col-md-6 order-md-2">
                  <div class="float-start float-lg-end">
                    <a href="{{ route('specialist.create') }}" class="float-right m-auto btn btn-primary">Add
                      Specialist</a>
                  </div>
                </div>
              </div>
              <div class="card-body card-content">
                <div class="table-responsive">
                  <table class="table mb-3 table-striped table-bordered table-hover">
                    <thead class="table-responsive">
                      <tr>
                        <th>No.</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                      </tr>
                    </thead>
                    <tbody class="table-responsive">
                      @if ($specialists->isEmpty())
                        <tr>
                          <td colspan="5" class="text-center">
                            <div class="flex flex-col items-center justify-center text-center">
                              {{-- <img src="/img/Specialist-animate.svg" alt="No Specialist Yet" width="300"> --}}
                              <p>No Specialists Available Yet</p>
                            </div>
                          </td>
                        </tr>
                      @else
                        @foreach ($specialists as $specialist)
                          <tr>
                            <td>{{ $loop->iteration }}.</td>
                            <td>
                              <img src="{{ asset('storage/img/' . $specialist->image) }}"
                                alt="{{ $specialist->name }}" width="250">
                            </td>
                            <td>{{ $specialist->name }}</td>
                            <td>{{ $specialist->description }}</td>
                          </tr>
                        @endforeach
                      @endif
                    </tbody>
                  </table>
                  <a href="{{ route('specialist.index') }}" class="text-sm">See more data →</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Table Data Treatment -->
      <section class="section">
        <div class="row" id="table-striped">
          <div class="col-12">
            <div class="card ">
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
                  <table class="table mb-3 table-striped table-bordered table-hover">
                    <thead class="table-responsive">
                      <tr>
                        <th>No.</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
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
                              <img src="{{ asset('storage/img/' . $treatment->image) }}" alt="{{ $treatment->name }}"
                                width="250">
                            </td>
                            <td>{{ $treatment->name }}</td>
                            <td>{{ $treatment->description }}</td>
                          </tr>
                        @endforeach
                      @endif
                    </tbody>
                  </table>
                  <a href="{{ route('treatment.index') }}" class="text-sm">See more data →</a>
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
            <div class="card ">
              <div class="flex flex-wrap card-header">
                <div class="order-first col-12 col-md-6 order-md-1">
                  <h3>Account</h3>
                </div>
                <div class="order-last col-12 col-md-6 order-md-2">
                  <div class="float-start float-lg-end">
                    <a href="{{ route('account.create') }}" class="float-right m-auto btn btn-primary">Add
                      Account</a>
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
                      </tr>
                    </thead>
                    <tbody class="table-responsive">
                      @if ($users->isEmpty())
                        <tr>
                          <td colspan="5" class="text-center">
                            <div class="flex flex-col items-center justify-center text-center">
                              <p>No Accounts Available Yet</p>
                            </div>
                          </td>
                        </tr>
                      @else
                        @foreach ($users as $user)
                          <tr>
                            <td>{{ $loop->iteration }}.</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->roles }}</td>
                          </tr>
                        @endforeach
                      @endif
                    </tbody>
                  </table>
                  <a href="{{ route('account.index') }}" class="text-sm">See more data →</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Table Data Reservation -->
      <section class="section">
        <div class="row" id="table-striped">
          <div class="col-12">
            <div class="card ">
              <div class="flex flex-wrap card-header">
                <div class="order-first col-12 col-md-6 order-md-1">
                  <h3>Reservation</h3>
                </div>
              </div>
              <div class="card-body card-content">
                <div class="table-responsive">
                  <!-- Tabel Pending -->
                  <h5>Pending Reservations</h5>
                  <table class="table mb-0 table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Treatment</th>
                        <th>Message</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($pendingReservations as $reservation)
                        <tr>
                          <td>{{ $loop->iteration }}.</td>
                          <td>{{ $reservation->first_name }}</td>
                          <td>{{ $reservation->last_name }}</td>
                          <td>{{ $reservation->phone_number }}</td>
                          <td>{{ $reservation->email }}</td>
                          <td>{{ $reservation->date }}</td>
                          <td>{{ $reservation->treatment->name }}</td>
                          <td>{{ $reservation->message }}</td>
                          <td>{{ $reservation->status }}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>

                  <!-- Tabel Confirmed -->
                  <h5 class="mt-5">Confirmed Reservations</h5>
                  <table class="table mb-5 table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Treatment</th>
                        <th>Message</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($confirmedReservations as $reservation)
                        <tr>
                          <td>{{ $loop->iteration }}.</td>
                          <td>{{ $reservation->first_name }}</td>
                          <td>{{ $reservation->last_name }}</td>
                          <td>{{ $reservation->phone_number }}</td>
                          <td>{{ $reservation->email }}</td>
                          <td>{{ $reservation->date }}</td>
                          <td>{{ $reservation->treatment->name }}</td>
                          <td>{{ $reservation->message }}</td>
                          <td>{{ $reservation->status }}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>

                  <!-- Tabel Completed -->
                  <h5>Completed Reservations</h5>
                  <table class="table mb-0 table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Treatment</th>
                        <th>Message</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($completedReservations as $reservation)
                        <tr>
                          <td>{{ $loop->iteration }}.</td>
                          <td>{{ $reservation->first_name }}</td>
                          <td>{{ $reservation->last_name }}</td>
                          <td>{{ $reservation->phone_number }}</td>
                          <td>{{ $reservation->email }}</td>
                          <td>{{ $reservation->date }}</td>
                          <td>{{ $reservation->treatment->name }}</td>
                          <td>{{ $reservation->message }}</td>
                          <td>{{ $reservation->status }}</td>
                        </tr>
                      @endforeach
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
