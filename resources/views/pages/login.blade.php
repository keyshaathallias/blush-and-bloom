<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blush & Bloom - Login</title>
  @vite('resources/css/app.css')

  {{-- Fonts Lato and Playfair Display --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@1,400..900&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <link rel="shortcut icon" href="/asset/illustration/favicon.svg" type="image/x-icon">

</head>

<body class="font-poppins bg-light">
  <nav
    class="fixed top-0 z-10 flex items-center justify-between w-full gap-2 py-5 bg-white shadow-sm lg:gap-0 px-7 lg:px-10 lg:py-6">

    <div class="hidden lg:block">
      <ul class="flex items-center justify-between gap-10 text-lg text-secondary">
        <a href="/" class="transition duration-200 ease-in-out hover:text-gold">
          <li>Home</li>
        </a>
        <a href="/product" class="transition duration-200 ease-in-out hover:text-gold">
          <li>Products</li>
        </a>
        <a href="/treatment" class="transition duration-200 ease-in-out hover:text-gold">
          <li>Treatments</li>
        </a>
      </ul>
    </div>

    <a href="/">
      <img src="/asset/illustration/logo.svg" alt="Blush & Bloom" class="mx-auto">
    </a>

    <div class="hidden lg:block">
      <ul class="flex items-center justify-between gap-10 text-lg text-secondary">
        <a href="/specialist" class="transition duration-200 ease-in-out hover:text-gold">
          <li>Our Specialists</li>
        </a>
        <a href="/reservation" class="transition duration-200 ease-in-out hover:text-gold">
          <li>Reservation</li>
        </a>
      </ul>
    </div>

    <div class="block ml-5 lg:hidden">
      <svg id="hamburger" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#493628"
        class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd"
          d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
      </svg>
    </div>

  </nav>

  <div class="flex flex-col justify-center mt-20 lg:flex-row md:mt-30">
    <div class="container flex justify-center">
      <form action="{{ route('login.login') }}" method="POST"
        class="lg:w-[803px] md:w-[702px] w-[300px] bg-white lg:p-10 md:p-7 p-5">
        @csrf
        <div class="heading">
          <h1 class="text-2xl font-semibold lg:text-3xl text-secondary">Sign In</h1>
          <p class="text-sm font-medium leading-6 text-gray">Please enter your email and password.</p>
        </div>
        <div class="relative pt-5">
          <input type="email" name="email" id="email"
            class="w-full px-6 py-2 bg-white border border-cream rounded-xl focus:ring-yellow-500 focus:border-yellow-500 focus:ring-1 focus:outline-none"
            placeholder="Input your email">
        </div>

        <div class="relative pt-2">
          <input type="password" name="password" id="password"
            class="w-full px-6 py-2 bg-white border border-cream rounded-xl focus:ring-yellow-500 focus:border-yellow-500 focus:ring-1 focus:outline-none"
            placeholder="Input your password">
          <i class="bi bi-eye-fill absolute top-[33%] right-3 transform cursor-pointer text-secondary"
            id="togglePassword"></i>
        </div>

        <div class="flex flex-col w-full gap-3 mx-auto mt-5 mb-3 text-center">
          <button type="submit"
            class="text-base lg:text-lg px-6 py-2 lg:rounded-2xl rounded-[10px] text-center font-medium border-secondary border-2 text-secondary shadow-xl bg-white hover:bg-gradient-to-br hover:from-[#FABC3F] hover:via-[#FFCF6D] hover:to-[#EEAB25] hover:text-secondary transition duration-200 ease-in-out hover:border-gold active:border-[#e4a935] focus:ring-yellow-500 focus:border-yellow-500 focus:ring-1 focus:outline-none">Sign
            In</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    document.getElementById('togglePassword').addEventListener('click', function() {
      const passwordField = document.getElementById('password');
      const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordField.setAttribute('type', type);

      this.classList.toggle('bi-eye-fill');
      this.classList.toggle('bi-eye-slash-fill');
    });

    document.getElementById('togglePassword2').addEventListener('click', function() {
      const passwordField = document.getElementById('confirmpassword');
      const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordField.setAttribute('type', type);

      this.classList.toggle('bi-eye-fill');
      this.classList.toggle('bi-eye-slash-fill');
    });
  </script>
</body>
{{-- @include('sweetalert::alert') --}}

</html>
