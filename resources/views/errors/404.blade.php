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

<body class="mt-10 bg-light font-lato">
  <div class="container flex flex-col items-center gap-4 mx-auto">
    <h5 class="text-xl text-secondary">You mustn’t be here!</h5>
    <img src="/asset/illustration/404.svg" alt="404" width="900">
    <a href="/"
      class="flex gap-2 items-center mt-7 text-base lg:text-lg px-6 py-3 lg:rounded-2xl rounded-[10px] text-center font-medium border-secondary border-2 text-secondary shadow-xl bg-white hover:bg-gradient-to-br hover:from-[#FABC3F] hover:via-[#FFCF6D] hover:to-[#EEAB25] hover:text-secondary transition duration-200 ease-in-out hover:border-gold active:border-[#e4a935]">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#493628"
        class="bi bi-arrow-left-short" viewBox="0 0 16 16">
        <path fill-rule="evenodd"
          d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
      </svg>Go
      Home</a>
  </div>
</body>

</html>
