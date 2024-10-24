@extends('admin.layouts.adminLayout')

@section('content')
  <div class="mb-0 page-heading">
    <div class="container-fluid">
      <nav aria-label="breadcrumb" class="breadcrumb-header float-start">
        <ol class="breadcrumb">
          <li class="breadcrumb-item" aria-current="page"><a href="">Reservation</a></li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="page-content">
    <!-- Table Data Reservation -->
    <section class="section">
      <div class="row" id="table-striped">
        <div class="col-12">
          <div class="card">
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
                      <th>Action</th>
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
                        <td>
                          <a href="{{ route('reservation.edit', $reservation->id) }}">Edit</a>
                          <form action="{{ route('reservation.destroy', $reservation->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                          </form>
                        </td>
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
                      <th>Action</th>
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
                        <td>
                          <a href="{{ route('reservation.edit', $reservation->id) }}">Edit</a>
                          <form action="{{ route('reservation.destroy', $reservation->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                          </form>
                        </td>
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
                      <th>Action</th>
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
                        <td>
                          <a href="{{ route('reservation.edit', $reservation->id) }}">Edit</a>
                          <form action="{{ route('reservation.destroy', $reservation->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                          </form>
                        </td>
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
