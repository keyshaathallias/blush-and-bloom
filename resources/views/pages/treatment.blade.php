@extends('layouts.layout')

@section('content')
  {{-- Treatment Section --}}
  <div class="container px-10 py-12 mx-auto">

    {{-- Heading --}}
    <div class="flex flex-col items-center gap-5 text-center text-secondary">
      <h2 class="text-4xl font-italic">Our <span class="font-bold font-playfair-display font-italic">Treatments</span>
      </h2>
      <p class="text-lg text-gray w-[484px]">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem iure
        maiores ipsam exercitationem sapiente.</p>
    </div>

    {{-- Cards --}}
    <div class="flex flex-wrap justify-center gap-7 mt-7">

      <div
        class="w-[518px] bg-white p-5 border border-light rounded-lg hover:shadow-lg transition duration-200 ease-in-out">
        <img src="/asset/treatment/whitening-program.png" alt="Whitening Program">
        <div class="flex justify-between py-6">
          <h3 class="text-2xl font-semibold text-primary w-[318px]">Whitening Program</h3>
          <a href="" class="text-base text-secondary">Details →</a>
        </div>
      </div>
      <div
        class="w-[518px] bg-white p-5 border border-light rounded-lg hover:shadow-lg transition duration-200 ease-in-out">
        <img src="/asset/treatment/whitening-program.png" alt="Whitening Program">
        <div class="flex justify-between py-6">
          <h3 class="text-2xl font-semibold text-primary w-[318px]">Whitening Program</h3>
          <a href="" class="text-base text-secondary">Details →</a>
        </div>
      </div>
      <div
        class="w-[518px] bg-white p-5 border border-light rounded-lg hover:shadow-lg transition duration-200 ease-in-out">
        <img src="/asset/treatment/whitening-program.png" alt="Whitening Program">
        <div class="flex justify-between py-6">
          <h3 class="text-2xl font-semibold text-primary w-[318px]">Whitening Program</h3>
          <a href="" class="text-base text-secondary">Details →</a>
        </div>
      </div>
      <div
        class="w-[518px] bg-white p-5 border border-light rounded-lg hover:shadow-lg transition duration-200 ease-in-out">
        <img src="/asset/treatment/whitening-program.png" alt="Whitening Program">
        <div class="flex justify-between py-6">
          <h3 class="text-2xl font-semibold text-primary w-[318px]">Whitening Program</h3>
          <a href="" class="text-base text-secondary">Details →</a>
        </div>
      </div>

    </div>
  </div>
@endsection
