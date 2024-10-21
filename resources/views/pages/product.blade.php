@extends('layouts.layout')

@section('content')
  {{-- Products Section --}}
  <div class="container px-10 mx-auto my-16 ">

    {{-- Heading --}}
    <div class="flex justify-between text-secondary">
      <h2 class="text-4xl font-italic">Our <span class="font-bold font-playfair-display font-italic">Products</span></h2>
      <a href="/product" class="flex items-center gap-2 text-2xl">
        Cart
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#493628" class="bi bi-cart2"
          viewBox="0 0 16 16">
          <path
            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
        </svg>
      </a>
    </div>

    {{-- Categories --}}
    <div class="flex gap-10 my-7">
      <a href=""
        class="px-10 py-1 text-xl rounded-full font-playfair-display font-italic text-secondary bg-cream">All</a>
      <a href=""
        class="px-10 py-1 text-xl border rounded-full font-playfair-display font-italic text-secondary border-secondary">Face</a>
      <a href=""
        class="px-10 py-1 text-xl border rounded-full font-playfair-display font-italic text-secondary border-secondary">Body</a>
    </div>

    {{-- Cards --}}
    <div class="flex flex-wrap justify-center mx-auto gap-7 text-primary">

      <div
        class="w-[250px] bg-white rounded-lg flex gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out">
        <img src="/asset/product/acne-spot.png" alt="Acne Spot">
        <h3 class="text-2xl font-semibold w-[200px]">Acne Spot</h3>
        <div class="flex justify-between">
          <p class="text-lg">$12.00</p>
          <p class="text-base">ADD TO BUY</p>
        </div>
      </div>
      <div
        class="w-[250px] bg-white rounded-lg flex gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out">
        <img src="/asset/product/acne-spot.png" alt="Acne Spot">
        <h3 class="text-2xl font-semibold w-[200px]">Acne Spot</h3>
        <div class="flex justify-between">
          <p class="text-lg">$12.00</p>
          <p class="text-base">ADD TO BUY</p>
        </div>
      </div>
      <div
        class="w-[250px] bg-white rounded-lg flex gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out">
        <img src="/asset/product/acne-spot.png" alt="Acne Spot">
        <h3 class="text-2xl font-semibold w-[200px]">Acne Spot</h3>
        <div class="flex justify-between">
          <p class="text-lg">$12.00</p>
          <p class="text-base">ADD TO BUY</p>
        </div>
      </div>
      <div
        class="w-[250px] bg-white rounded-lg flex gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out">
        <img src="/asset/product/acne-spot.png" alt="Acne Spot">
        <h3 class="text-2xl font-semibold w-[200px]">Acne Spot</h3>
        <div class="flex justify-between">
          <p class="text-lg">$12.00</p>
          <p class="text-base">ADD TO BUY</p>
        </div>
      </div>
      <div
        class="w-[250px] bg-white rounded-lg flex gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out">
        <img src="/asset/product/acne-spot.png" alt="Acne Spot">
        <h3 class="text-2xl font-semibold w-[200px]">Acne Spot</h3>
        <div class="flex justify-between">
          <p class="text-lg">$12.00</p>
          <p class="text-base">ADD TO BUY</p>
        </div>
      </div>
      <div
        class="w-[250px] bg-white rounded-lg flex gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out">
        <img src="/asset/product/acne-spot.png" alt="Acne Spot">
        <h3 class="text-2xl font-semibold w-[200px]">Acne Spot</h3>
        <div class="flex justify-between">
          <p class="text-lg">$12.00</p>
          <p class="text-base">ADD TO BUY</p>
        </div>
      </div>
      <div
        class="w-[250px] bg-white rounded-lg flex gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out">
        <img src="/asset/product/acne-spot.png" alt="Acne Spot">
        <h3 class="text-2xl font-semibold w-[200px]">Acne Spot</h3>
        <div class="flex justify-between">
          <p class="text-lg">$12.00</p>
          <p class="text-base">ADD TO BUY</p>
        </div>
      </div>
      <div
        class="w-[250px] bg-white rounded-lg flex gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out">
        <img src="/asset/product/acne-spot.png" alt="Acne Spot">
        <h3 class="text-2xl font-semibold w-[200px]">Acne Spot</h3>
        <div class="flex justify-between">
          <p class="text-lg">$12.00</p>
          <p class="text-base">ADD TO BUY</p>
        </div>
      </div>
      <div
        class="w-[250px] bg-white rounded-lg flex gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out">
        <img src="/asset/product/acne-spot.png" alt="Acne Spot">
        <h3 class="text-2xl font-semibold w-[200px]">Acne Spot</h3>
        <div class="flex justify-between">
          <p class="text-lg">$12.00</p>
          <p class="text-base">ADD TO BUY</p>
        </div>
      </div>
      <div
        class="w-[250px] bg-white rounded-lg flex gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out">
        <img src="/asset/product/acne-spot.png" alt="Acne Spot">
        <h3 class="text-2xl font-semibold w-[200px]">Acne Spot</h3>
        <div class="flex justify-between">
          <p class="text-lg">$12.00</p>
          <p class="text-base">ADD TO BUY</p>
        </div>
      </div>
      <div
        class="w-[250px] bg-white rounded-lg flex gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out">
        <img src="/asset/product/acne-spot.png" alt="Acne Spot">
        <h3 class="text-2xl font-semibold w-[200px]">Acne Spot</h3>
        <div class="flex justify-between">
          <p class="text-lg">$12.00</p>
          <p class="text-base">ADD TO BUY</p>
        </div>
      </div>
      <div
        class="w-[250px] bg-white rounded-lg flex gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out">
        <img src="/asset/product/acne-spot.png" alt="Acne Spot">
        <h3 class="text-2xl font-semibold w-[200px]">Acne Spot</h3>
        <div class="flex justify-between">
          <p class="text-lg">$12.00</p>
          <p class="text-base">ADD TO BUY</p>
        </div>
      </div>

    </div>

  </div>
@endsection
