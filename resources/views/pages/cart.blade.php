@extends('layouts.layout')

@section('content')
  <div class="py-12 px-7 md:px-10">

    {{-- Heading --}}
    <div class="">
      <h2 class="flex items-center gap-2 lg:text-[32px] md:text-2xl text-xl font-bold text-secondary">Cart
        <svg xmlns="http://www.w3.org/2000/svg" class="lg:size-[32px] md:size-6 size-5" fill="#493628" class="bi bi-cart2"
          viewBox="0 0 16 16">
          <path
            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
        </svg>
      </h2>
    </div>

    {{-- Cart --}}
    <div class="flex flex-wrap justify-start gap-4 mx-auto my-8 lg:gap-7 text-primary">

      <div
        class="w-[150px] lg:w-[250px] bg-white rounded-lg flex gap-1 lg:gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out">
        <img src="/asset/product/acne-spot.png" alt="Acne Spot">
        <h3 class="lg:text-2xl font-semibold lg:w-[240px] w-[140px]">Acne Spot</h3>
        <div class="flex flex-wrap items-center justify-between gap-1">
          <p class="text-sm lg:text-lg">$12.00</p>
          <p class="text-xs lg:text-base">ADD TO BUY</p>
        </div>
      </div>
      <div
        class="w-[150px] lg:w-[250px] bg-white rounded-lg flex gap-1 lg:gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out">
        <img src="/asset/product/acne-spot.png" alt="Acne Spot">
        <h3 class="lg:text-2xl font-semibold lg:w-[240px] w-[140px]">Acne Spot</h3>
        <div class="flex flex-wrap items-center justify-between gap-1">
          <p class="text-sm lg:text-lg">$12.00</p>
          <p class="text-xs lg:text-base">ADD TO BUY</p>
        </div>
      </div>
      <div
      class="w-[150px] lg:w-[250px] bg-white rounded-lg flex gap-1 lg:gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out">
      <img src="/asset/product/acne-spot.png" alt="Acne Spot">
      <h3 class="lg:text-2xl font-semibold lg:w-[240px] w-[140px]">Acne Spot</h3>
      <div class="flex flex-wrap items-center justify-between gap-1">
        <p class="text-sm lg:text-lg">$12.00</p>
        <p class="text-xs lg:text-base">ADD TO BUY</p>
      </div>
    </div>
      
    </div>

    {{-- Total --}}
    <div class="flex flex-col items-start justify-start md:items-center md:justify-between md:flex-row">
      <div class="flex gap-5 text-left lg:gap-10 md:items-center text-secondary md:gap-8">
        <h2 class="font-bold lg:text-[32px] md:text-2xl text-xl">Total :</h2>
        <p class="text-lg lg:text-2xl md:text-xl">$36.00</p>
      </div>
      <a href="" class="mt-4 md:mt-7 text-base md:text-lg px-6 py-3 md:rounded-2xl rounded-[10px] text-center font-medium bg-gradient-to-br text-secondary from-[#FABC3F] via-[#FFCF6D] to-[#EEAB25] shadow-xl">Check Out</a>
    </div>

  </div>
@endsection
