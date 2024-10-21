@extends('layouts.layout')

@section('content')
  {{-- Specialist Section --}}
  <div class="container px-10 py-12 mx-auto">

    {{-- Heading --}}
    <div class="flex flex-col mx-auto text-center items-center gap-5 text-secondary w-[517px]">
      <h2 class="text-4xl font-italic">Meet <br><span class="font-bold font-playfair-display font-italic">Our
          Specialists</span>
      </h2>
      <p class="text-lg text-gray">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem iure
        maiores ipsam exercitationem sapiente.</p>
    </div>

    {{-- Cards --}}
    <div class="flex flex-wrap justify-center mx-auto mt-10 gap-7 text-primary">

      <div
        class="w-[250px] bg-white rounded-lg flex gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out border border-light">
        <img src="/asset/specialist/specialist-1.png" alt="Dr. Sophia Hartwell">
        <h3 class="text-xl font-semibold w-[200px]">Dr. Sophia Hartwell</h3>
        <p class="text-base">Specialist in Acne Treatment & Skincare</p>
      </div>
      <div
        class="w-[250px] bg-white rounded-lg flex gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out border border-light">
        <img src="/asset/specialist/specialist-2.png" alt="Dr. Grace Williams">
        <h3 class="text-xl font-semibold w-[200px]">Dr. Grace Williams</h3>
        <p class="text-base">Whitening & Anti-aging Facial Care</p>
      </div>
      <div
        class="w-[250px] bg-white rounded-lg flex gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out border border-light">
        <img src="/asset/specialist/specialist-3.png" alt="Dr. Michael Lawson">
        <h3 class="text-xl font-semibold w-[200px]">Dr. Michael Lawson</h3>
        <p class="text-base">Specialist in Acne & Skincare Solutions</p>
      </div>
      <div
        class="w-[250px] bg-white rounded-lg flex gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out border border-light">
        <img src="/asset/specialist/specialist-4.png" alt="Dr. Isabella Monroe">
        <h3 class="text-xl font-semibold w-[200px]">Dr. Isabella Monroe</h3>
        <p class="text-base">Facial Treatments & Anti-aging</p>
      </div>
      <div
        class="w-[250px] bg-white rounded-lg flex gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out border border-light">
        <img src="/asset/specialist/specialist-5.png" alt="Dr. Noah Patel">
        <h3 class="text-xl font-semibold w-[200px]">Dr. Noah Patel</h3>
        <p class="text-base">Specialist in Whitening & Brightening Programs</p>
      </div>
      <div
        class="w-[250px] bg-white rounded-lg flex gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out border border-light">
        <img src="/asset/specialist/specialist-6.png" alt="Dr. Elena Rivera">
        <h3 class="text-xl font-semibold w-[200px]">Dr. Elena Rivera</h3>
        <p class="text-base">Body Care & Spa Treatments</p>
      </div>

    </div>

  </div>
@endsection
