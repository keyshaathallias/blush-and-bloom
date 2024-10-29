<!DOCTYPE html>
<html>

<head>
  <title>Reservation Status</title>
</head>

<body>
  <p><strong>Dear {{ $reservation->first_name }} {{ $reservation->last_name }},</strong></p>

  <p>{{ $statusMessage }}</p>

  <p><strong>Reservation Date:</strong> {{ $reservation->date->format('j F Y') }}</p>
  <p><strong>Treatment:</strong> {{ $reservation->treatment->name }}</p>

  <p>{{ $greetingMessage }}</p>

</body>

</html>
