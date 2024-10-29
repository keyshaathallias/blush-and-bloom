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
              <!-- Tabs -->
              <ul class="mb-4 nav nav-underline">
                <li class="nav-item">
                  <a class="nav-link" href="#" data-tab="pending">Pending Reservation</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-tab="confirmed">Confirmed Reservation</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-tab="completed">Completed Reservation</a>
                </li>
              </ul>

              <div class="table-responsive">

                <!-- Tabel Pending -->
                <div id="pending" class="tab-content">
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
                      @if ($pendingReservations->isEmpty())
                        <tr>
                          <td colspan="10" class="text-center">
                            <div class="flex flex-col items-center justify-center text-center">
                              <p>No Pending Reservations Available Yet</p>
                            </div>
                          </td>
                        </tr>
                      @else
                        @foreach ($pendingReservations as $reservation)
                          <tr>
                            <td>{{ $loop->iteration }}.</td>
                            <td>{{ $reservation->first_name }}</td>
                            <td>{{ $reservation->last_name }}</td>
                            <td>{{ $reservation->phone_number }}</td>
                            <td>{{ $reservation->email }}</td>
                            <td>{{ $reservation->date->format('j F Y') }}</td>
                            <td>{{ $reservation->treatment->name }}</td>
                            <td>{{ $reservation->message }}</td>
                            <td>{{ $reservation->status }}</td>
                            <td>
                              <a href="{{ route('reservation.edit', $reservation->id) }}">Edit</a>
                            </td>
                          </tr>
                        @endforeach
                      @endif

                    </tbody>
                  </table>
                </div>

                <!-- Tabel Confirmed -->
                <div id="confirmed" class="tab-content" style="display:none;">
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
                      @if ($confirmedReservations->isEmpty())
                        <tr>
                          <td colspan="10" class="text-center">
                            <div class="flex flex-col items-center justify-center text-center">
                              <p>No Confirmed Reservations Available Yet</p>
                            </div>
                          </td>
                        </tr>
                      @else
                        @foreach ($confirmedReservations as $reservation)
                          <tr>
                            <td>{{ $loop->iteration }}.</td>
                            <td>{{ $reservation->first_name }}</td>
                            <td>{{ $reservation->last_name }}</td>
                            <td>{{ $reservation->phone_number }}</td>
                            <td>{{ $reservation->email }}</td>
                            <td>{{ $reservation->date->format('j F Y') }}</td>
                            <td>{{ $reservation->treatment->name }}</td>
                            <td>{{ $reservation->message }}</td>
                            <td>{{ $reservation->status }}</td>
                            <td>
                              <a href="{{ route('reservation.edit', $reservation->id) }}">Edit</a>
                            </td>
                          </tr>
                        @endforeach
                      @endif

                    </tbody>
                  </table>
                </div>

                <!-- Tabel Completed -->
                <div id="completed" class="tab-content" style="display:none;">
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
                      @if ($completedReservations->isEmpty())
                        <tr>
                          <td colspan="10" class="text-center">
                            <div class="flex flex-col items-center justify-center text-center">
                              <p>No Completed Reservations Available Yet</p>
                            </div>
                          </td>
                        </tr>
                      @else
                        @foreach ($completedReservations as $reservation)
                          <tr>
                            <td>{{ $loop->iteration }}.</td>
                            <td>{{ $reservation->first_name }}</td>
                            <td>{{ $reservation->last_name }}</td>
                            <td>{{ $reservation->phone_number }}</td>
                            <td>{{ $reservation->email }}</td>
                            <td>{{ $reservation->date->format('j F Y') }}</td>
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
                      @endif

                    </tbody>
                  </table>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script>
    // Reservation
    document.addEventListener('DOMContentLoaded', function() {
      const navLinks = document.querySelectorAll('.nav-link');

      function showTab(tabId) {
        // Sembunyikan semua konten tab
        document.querySelectorAll('.tab-content').forEach(function(content) {
          content.style.display = 'none';
        });

        // Tampilkan konten yang dipilih
        const selectedTabContent = document.getElementById(tabId);
        if (selectedTabContent) {
          selectedTabContent.style.display = 'block';
        }

        // Hapus kelas 'active' dari semua tautan
        navLinks.forEach(function(link) {
          link.classList.remove('active');
        });
      }

      // 'Pending Reservation' sebagai tab default
      showTab('pending');
      document.querySelector(".nav-link[data-tab='pending']").classList.add('active');

      // Tambahkan event listener ke setiap nav-link
      navLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
          event.preventDefault();

          // Dapatkan tabId dari data-tab di setiap link
          const tabId = this.getAttribute('data-tab');

          // Tampilkan tab yang dipilih
          showTab(tabId);

          // Tambahkan kelas 'active' ke tautan yang diklik
          this.classList.add('active');
        });
      });
    });
  </script>
@endsection
