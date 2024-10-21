<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blush & Bloom</title>
  @vite('resources/css/app.css')

  {{-- Fonts Lato and Playfair Display --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@1,400..900&display=swap"
    rel="stylesheet">

</head>

<body class="bg-light font-lato">
  @include('partials.navbar')
  @yield('content')
  @include('partials.footer')
</body>

</html>
