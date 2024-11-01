<footer class="px-10 pt-10 pb-5 bg-gradient-to-b from-secondary to-primary">
  <div class="flex flex-col items-center">
    <div class="flex flex-col gap-7 md:gap-32 md:flex-row">
      {{-- Logo --}}
      <div class="w-[280px] flex flex-col gap-2 mx-auto md:mx-0">
        <a href="/">
          <img src="/asset/illustration/logo-light.svg" alt="Blush & Bloom">
        </a>
        <p class="text-xl text-center text-cream md:text-left">Find the Perfect Products & Treatments for Your Skin</p>
      </div>

      {{-- Links --}}
      <div
        class="flex flex-wrap justify-between text-white gap-y-6 md:gap-x-20 md:gap-y-8 md:flex-row md:justify-normal">

        <div class="flex flex-col gap-4 md:gap-5">
          <h4 class="text-lg font-bold md:text-xl lg:text-2xl">Quick Links</h4>
          <div class="flex flex-col gap-2 text-base lg:text-xl md:text-lg">
            <a href="/" class="transition duration-200 ease-in-out hover:text-gold">Home</a>
            <a href="/product" class="transition duration-200 ease-in-out hover:text-gold">Products</a>
            <a href="/treatment" class="transition duration-200 ease-in-out hover:text-gold">Treatments</a>
            <a href="/specialist" class="transition duration-200 ease-in-out hover:text-gold">Our Specialists</a>
            <a href="/reservation" class="transition duration-200 ease-in-out hover:text-gold">Reservation</a>
          </div>
        </div>
        <div class="flex flex-col gap-4 md:gap-5">
          <h4 class="text-lg font-bold md:text-xl lg:text-2xl">Treatments</h4>
          <div class="flex flex-col gap-2 text-base lg:text-xl md:text-lg">
            <a href="{{ route('treatment.show') }}" class="transition duration-200 ease-in-out hover:text-gold">Acne Free Program</a>
            <a href="{{ route('treatment.show') }}" class="transition duration-200 ease-in-out hover:text-gold">Body Care Spa</a>
          </div>
        </div>
        <div class="flex flex-col gap-4 md:gap-5">
          <h4 class="text-lg font-bold md:text-xl lg:text-2xl">Location</h4>
          <div class="flex flex-col gap-2 text-base lg:text-xl md:text-lg">
            <p>South Jakarta</p>
            <p>Bandung</p>
            <p>Surabaya</p>
          </div>
        </div>

      </div>
    </div>

  </div>

  <div class="w-full px-2 mt-10 mb-5 border border-gold"></div>

  <div class="container flex flex-col-reverse items-center justify-between gap-4 mx-auto md:flex-row md:gap-0">
    <p class="text-sm font-semibold text-white">Copyright © 2024 Blush & Bloom | All Reserved</p>

    <div class="flex justify-end gap-3">
      <a href="" class="p-2 bg-white rounded-xl">
        <svg fill="#493628" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20px" height="20px">
          <path
            d="M 8 3 C 5.239 3 3 5.239 3 8 L 3 16 C 3 18.761 5.239 21 8 21 L 16 21 C 18.761 21 21 18.761 21 16 L 21 8 C 21 5.239 18.761 3 16 3 L 8 3 z M 18 5 C 18.552 5 19 5.448 19 6 C 19 6.552 18.552 7 18 7 C 17.448 7 17 6.552 17 6 C 17 5.448 17.448 5 18 5 z M 12 7 C 14.761 7 17 9.239 17 12 C 17 14.761 14.761 17 12 17 C 9.239 17 7 14.761 7 12 C 7 9.239 9.239 7 12 7 z M 12 9 A 3 3 0 0 0 9 12 A 3 3 0 0 0 12 15 A 3 3 0 0 0 15 12 A 3 3 0 0 0 12 9 z" />
        </svg>
      </a>
      <a href="" class="p-2 bg-white rounded-xl">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#493628" class="bi bi-facebook"
          viewBox="0 0 16 16">
          <path
            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
        </svg>
      </a>
      <a href="" class="p-2 bg-white rounded-xl">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#493628" class="bi bi-twitter"
          viewBox="0 0 16 16">
          <path
            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
        </svg>
      </a>
      <a href="" class="p-2 bg-white rounded-xl">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#493628" class="bi bi-tiktok"
          viewBox="0 0 16 16">
          <path
            d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
        </svg>
      </a>
    </div>
  </div>
</footer>
