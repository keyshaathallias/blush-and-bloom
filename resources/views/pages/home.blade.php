@extends('layouts.layout')

@section('content')
  {{-- Hero Section --}}
  <div
    class="bg-gradient-to-br from-[#442C26] via-[#745248] to-[#523932] lg:pl-10 md:pl-7 py-8 md:py-16 lg:py-5 flex justify-center items-center flex-col-reverse md:flex-row gap-y-4 md:gap-y-0">

    <div class="w-[356px] lg:w-[537px] flex flex-col lg:gap-5 md:w-[700px]">

      <h1 class="font-lato text-gold lg:text-[40px] lg:leading-[50px] font-italic text-[32px] text-center md:text-left">
        Find the Perfect <br>
        <span class="font-bold font-playfair-display font-italic">Products & Treatments </span> <br>
        for Your Skin
      </h1>
      <p class="text-center text-cream md:text-left">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed ratione
        dolore ducimus
        praesentium delectus pariatur maiores earum eligendi iure voluptatum.</p>

      <div class="flex flex-wrap items-center justify-center gap-5 mt-5 md:justify-start">
        {{-- <a href=""
          class="text-base lg:text-lg px-6 py-3 text-secondary lg:rounded-2xl rounded-[10px] text-center font-medium bg-gold shadow-xl shadow-[#583B34] hover:bg-gradient-to-br hover:from-[#FABC3F] hover:via-[#FFCF6D] hover:to-[#EEAB25] hover:text-secondary transition duration-200 ease-in-out hover:border-gold">
          Explore Products</a> --}}
        <a href=""
          class="text-base lg:text-lg px-6 py-3 lg:rounded-2xl rounded-[10px] text-center font-medium border-gold border-2 text-gold shadow-xl shadow-[#583B34] bg-transparent hover:bg-gradient-to-br hover:from-[#FABC3F] hover:via-[#FFCF6D] hover:to-[#EEAB25] hover:text-secondary transition duration-200 ease-in-out hover:border-gold">
          Explore <span class="font-bold font-playfair-display">Products</span></a>
        <a href=""
          class="text-base lg:text-lg px-6 py-3 lg:rounded-2xl rounded-[10px] text-center font-medium border-gold border-2 text-gold shadow-xl shadow-[#583B34] bg-transparent hover:bg-gradient-to-br hover:from-[#FABC3F] hover:via-[#FFCF6D] hover:to-[#EEAB25] hover:text-secondary transition duration-200 ease-in-out hover:border-gold">
          View <span class="font-bold font-playfair-display">Treatments</span></a>
      </div>

    </div>

    <div class="">
      <img src="/asset/illustration/hero-image.svg" alt="Image">
    </div>
  </div>

  {{-- Products Section --}}
  <div class="container mx-auto my-10 px-7 lg:px-10 md:my-16">

    {{-- Heading --}}
    <div class="flex items-center justify-between text-secondary">
      <h2 class="text-2xl lg:text-4xl font-italic">Our <span
          class="font-bold font-playfair-display font-italic">Products</span>
      </h2>
      <a href="/product" class="text-xs lg:text-base hover:text-[#694c37] transition duration-200 ease-in-out">View All →</a>
    </div>

    {{-- Categories --}}
    <div class="flex gap-3 my-5 overflow-x-auto lg:gap-10 lg:my-7">
      <a href=""
        class="py-1 text-sm rounded-full px-7 lg:text-xl lg:py-1 lg:px-10 font-playfair-display font-italic text-secondary bg-cream">All</a>
      <a href=""
        class="py-1 text-sm border rounded-full px-7 lg:text-xl lg:py-1 lg:px-10 font-playfair-display font-italic text-secondary border-secondary">Face</a>
      <a href=""
        class="py-1 text-sm border rounded-full px-7 lg:text-xl lg:py-1 lg:px-10 font-playfair-display font-italic text-secondary border-secondary">Body</a>
    </div>

    {{-- Cards --}}
    <div class="flex flex-wrap justify-center gap-4 mx-auto lg:gap-7 text-primary">

      <div
        class="w-[150px] lg:w-[250px] bg-white rounded-lg flex gap-1 lg:gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out">
        <img src="/asset/product/acne-spot.png" alt="Acne Spot">
        <h3 class="lg:text-2xl font-semibold lg:w-[240px] w-[140px]">Acne Spot</h3>
        <div class="flex flex-wrap items-center justify-between gap-1">
          <p class="text-sm lg:text-lg">$12.00</p>
          <a href="" class="transition duration-200 ease-in-out hover:text-[#694c37]">
            <p class="text-xs lg:text-base">ADD TO BUY</p>
          </a>
        </div>
      </div>
      <div
        class="w-[150px] lg:w-[250px] bg-white rounded-lg flex gap-1 lg:gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out">
        <img src="/asset/product/acne-spot.png" alt="Acne Spot">
        <h3 class="lg:text-2xl font-semibold lg:w-[240px] w-[140px]">Acne Spot</h3>
        <div class="flex flex-wrap items-center justify-between gap-1">
          <p class="text-sm lg:text-lg">$12.00</p>
          <a href="" class="transition duration-200 ease-in-out hover:text-[#694c37]">
            <p class="text-xs lg:text-base">ADD TO BUY</p>
          </a>
        </div>
      </div>
      <div
        class="w-[150px] lg:w-[250px] bg-white rounded-lg flex gap-1 lg:gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out">
        <img src="/asset/product/acne-spot.png" alt="Acne Spot">
        <h3 class="lg:text-2xl font-semibold lg:w-[240px] w-[140px]">Acne Spot</h3>
        <div class="flex flex-wrap items-center justify-between gap-1">
          <p class="text-sm lg:text-lg">$12.00</p>
          <a href="" class="transition duration-200 ease-in-out hover:text-[#694c37]">
            <p class="text-xs lg:text-base">ADD TO BUY</p>
          </a>
        </div>
      </div>
      <div
        class="w-[150px] lg:w-[250px] bg-white rounded-lg flex gap-1 lg:gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out">
        <img src="/asset/product/acne-spot.png" alt="Acne Spot">
        <h3 class="lg:text-2xl font-semibold lg:w-[240px] w-[140px]">Acne Spot</h3>
        <div class="flex flex-wrap items-center justify-between gap-1">
          <p class="text-sm lg:text-lg">$12.00</p>
          <a href="" class="transition duration-200 ease-in-out hover:text-[#694c37]">
            <p class="text-xs lg:text-base">ADD TO BUY</p>
          </a>
        </div>
      </div>

    </div>

  </div>

  {{-- Treatment Section --}}
  <div class="py-10 bg-white lg:py-12 px-7 lg:px-10">

    {{-- Heading --}}
    <div class="flex flex-col items-center gap-3 text-center lg:gap-5 text-secondary">
      <h2 class="text-2xl lg:text-4xl font-italic">Our <span
          class="font-bold font-playfair-display font-italic">Treatments</span>
      </h2>
      <p class="text-base lg:text-lg text-gray md:w-[484px] w-full">Lorem ipsum dolor sit, amet consectetur adipisicing
        elit. Voluptatem iure
        maiores ipsam exercitationem sapiente.</p>
    </div>

    {{-- Cards --}}
    <div class="flex flex-wrap justify-center gap-7 mt-7">

      <div
        class="w-full md:w-[350px] lg:w-[518px] bg-white p-5 border border-light rounded-lg hover:shadow-lg transition duration-200 ease-in-out">
        <img src="/asset/treatment/whitening-program.png" alt="Whitening Program">
        <div class="flex flex-wrap items-center justify-between pt-3 lg:pt-6">
          <h3 class="text-xl lg:text-2xl font-semibold text-primary lg:w-[318px]">Whitening Program</h3>
          <a href="" class="text-sm lg:text-base text-secondary hover:text-[#694c37] transition duration-200 ease-in-out">Details →</a>
        </div>
      </div>
      <div
        class="w-full lg:w-[518px] md:w-[350px] bg-white p-5 border border-light rounded-lg hover:shadow-lg transition duration-200 ease-in-out">
        <img src="/asset/treatment/whitening-program.png" alt="Whitening Program">
        <div class="flex flex-wrap items-center justify-between pt-3 lg:pt-6">
          <h3 class="text-xl lg:text-2xl font-semibold text-primary lg:w-[318px]">Whitening Program</h3>
          <a href="" class="text-sm lg:text-base text-secondary hover:text-[#694c37] transition duration-200 ease-in-out">Details →</a>
        </div>
      </div>
      <div
        class="w-full lg:w-[518px] md:w-[350px] bg-white p-5 border border-light rounded-lg hover:shadow-lg transition duration-200 ease-in-out">
        <img src="/asset/treatment/whitening-program.png" alt="Whitening Program">
        <div class="flex flex-wrap items-center justify-between pt-3 lg:pt-6">
          <h3 class="text-xl lg:text-2xl font-semibold text-primary lg:w-[318px]">Whitening Program</h3>
          <a href="" class="text-sm lg:text-base text-secondary hover:text-[#694c37] transition duration-200 ease-in-out">Details →</a>
        </div>
      </div>
      <div
        class="w-full lg:w-[518px] md:w-[350px] bg-white p-5 border border-light rounded-lg hover:shadow-lg transition duration-200 ease-in-out">
        <img src="/asset/treatment/whitening-program.png" alt="Whitening Program">
        <div class="flex flex-wrap items-center justify-between pt-3 lg:pt-6">
          <h3 class="text-xl lg:text-2xl font-semibold text-primary lg:w-[318px]">Whitening Program</h3>
          <a href="" class="text-sm lg:text-base text-secondary hover:text-[#694c37] transition duration-200 ease-in-out">Details →</a>
        </div>
      </div>

    </div>
  </div>

  {{-- Testimonial Section --}}
  <div class="my-10 md:my-16">

    {{-- Heading --}}
    <div class="flex flex-col items-center gap-3 text-center lg:gap-5 text-secondary px-7 lg:px-0">
      <h2 class="text-2xl lg:text-4xl font-italic">Testimonials <br>from <span
          class="font-bold font-playfair-display font-italic">Our
          Customers</span>
      </h2>
      <p class="lg:text-lg text-base text-gray md:w-[484px] w-full">Lorem ipsum dolor sit, amet consectetur adipisicing
        elit.
        Voluptatem iure
        maiores ipsam exercitationem sapiente.</p>
    </div>

    {{-- Cards Top --}}
    <div class="flex gap-12 mt-12 overflow-hidden group">
      <div class="flex items-center justify-center gap-12 animate-loop-scroll-left group-hover:paused">

        <div
          class="bg-white w-[300px] md:w-[400px] lg:w-[480px] rounded-lg py-5 px-6 flex gap-6 justify-center shadow-lg">
          <div class="flex flex-col gap-2">
            <img src="/asset/testimonial/person-1.png" alt="Person 1">
            <div class="flex items-center gap-2 px-3 py-1 rounded-full bg-light">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FABC3F"
                class="bi bi-star-fill" viewBox="0 0 16 16">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>
              <p>5</p>
            </div>
          </div>
          <div class="text-gray">
            <h3 class="text-xl font-semibold lg:text-2xl">Iswa Salsabila</h3>
            <p class="text-base lg:text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, officia
              dolor impedit
              necessitatibus recusandae est.</p>
          </div>
        </div>
        <div
          class="bg-white w-[300px] md:w-[400px] lg:w-[480px] rounded-lg py-5 px-6 flex gap-6 justify-center shadow-lg">
          <div class="flex flex-col gap-2">
            <img src="/asset/testimonial/person-1.png" alt="Person 1">
            <div class="flex items-center gap-2 px-3 py-1 rounded-full bg-light">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FABC3F"
                class="bi bi-star-fill" viewBox="0 0 16 16">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>
              <p>5</p>
            </div>
          </div>
          <div class="text-gray">
            <h3 class="text-xl font-semibold lg:text-2xl">Iswa Salsabila</h3>
            <p class="text-base lg:text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, officia
              dolor impedit
              necessitatibus recusandae est.</p>
          </div>
        </div>
        <div
          class="bg-white w-[300px] md:w-[400px] lg:w-[480px] rounded-lg py-5 px-6 flex gap-6 justify-center shadow-lg">
          <div class="flex flex-col gap-2">
            <img src="/asset/testimonial/person-1.png" alt="Person 1">
            <div class="flex items-center gap-2 px-3 py-1 rounded-full bg-light">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FABC3F"
                class="bi bi-star-fill" viewBox="0 0 16 16">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>
              <p>5</p>
            </div>
          </div>
          <div class="text-gray">
            <h3 class="text-xl font-semibold lg:text-2xl">Iswa Salsabila</h3>
            <p class="text-base lg:text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, officia
              dolor impedit
              necessitatibus recusandae est.</p>
          </div>
        </div>

      </div>
      <div class="flex items-center justify-center gap-12 animate-loop-scroll-left group-hover:paused"
        aria-hidden="true">

        <div
          class="bg-white w-[300px] md:w-[400px] lg:w-[480px] rounded-lg py-5 px-6 flex gap-6 justify-center shadow-lg">
          <div class="flex flex-col gap-2">
            <img src="/asset/testimonial/person-1.png" alt="Person 1">
            <div class="flex items-center gap-2 px-3 py-1 rounded-full bg-light">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FABC3F"
                class="bi bi-star-fill" viewBox="0 0 16 16">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>
              <p>5</p>
            </div>
          </div>
          <div class="text-gray">
            <h3 class="text-xl font-semibold lg:text-2xl">Iswa Salsabila</h3>
            <p class="text-base lg:text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, officia
              dolor impedit
              necessitatibus recusandae est.</p>
          </div>
        </div>
        <div
          class="bg-white w-[300px] md:w-[400px] lg:w-[480px] rounded-lg py-5 px-6 flex gap-6 justify-center shadow-lg">
          <div class="flex flex-col gap-2">
            <img src="/asset/testimonial/person-1.png" alt="Person 1">
            <div class="flex items-center gap-2 px-3 py-1 rounded-full bg-light">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FABC3F"
                class="bi bi-star-fill" viewBox="0 0 16 16">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>
              <p>5</p>
            </div>
          </div>
          <div class="text-gray">
            <h3 class="text-xl font-semibold lg:text-2xl">Iswa Salsabila</h3>
            <p class="text-base lg:text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, officia
              dolor impedit
              necessitatibus recusandae est.</p>
          </div>
        </div>
        <div
          class="bg-white w-[300px] md:w-[400px] lg:w-[480px] rounded-lg py-5 px-6 flex gap-6 justify-center shadow-lg">
          <div class="flex flex-col gap-2">
            <img src="/asset/testimonial/person-1.png" alt="Person 1">
            <div class="flex items-center gap-2 px-3 py-1 rounded-full bg-light">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FABC3F"
                class="bi bi-star-fill" viewBox="0 0 16 16">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>
              <p>5</p>
            </div>
          </div>
          <div class="text-gray">
            <h3 class="text-xl font-semibold lg:text-2xl">Iswa Salsabila</h3>
            <p class="text-base lg:text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, officia
              dolor impedit
              necessitatibus recusandae est.</p>
          </div>
        </div>

      </div>
    </div>

    {{-- Cards Bottom --}}
    <div class="flex gap-12 mt-10 overflow-hidden group">
      <div class="flex items-center justify-center gap-12 animate-loop-scroll-right group-hover:paused">

        <div
          class="bg-white w-[300px] md:w-[400px] lg:w-[480px] rounded-lg py-5 px-6 flex gap-6 justify-center shadow-lg">
          <div class="flex flex-col gap-2">
            <img src="/asset/testimonial/person-1.png" alt="Person 1">
            <div class="flex items-center gap-2 px-3 py-1 rounded-full bg-light">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FABC3F"
                class="bi bi-star-fill" viewBox="0 0 16 16">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>
              <p>5</p>
            </div>
          </div>
          <div class="text-gray">
            <h3 class="text-xl font-semibold lg:text-2xl">Iswa Salsabila</h3>
            <p class="text-base lg:text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, officia
              dolor impedit
              necessitatibus recusandae est.</p>
          </div>
        </div>
        <div
          class="bg-white w-[300px] md:w-[400px] lg:w-[480px] rounded-lg py-5 px-6 flex gap-6 justify-center shadow-lg">
          <div class="flex flex-col gap-2">
            <img src="/asset/testimonial/person-1.png" alt="Person 1">
            <div class="flex items-center gap-2 px-3 py-1 rounded-full bg-light">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FABC3F"
                class="bi bi-star-fill" viewBox="0 0 16 16">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>
              <p>5</p>
            </div>
          </div>
          <div class="text-gray">
            <h3 class="text-xl font-semibold lg:text-2xl">Iswa Salsabila</h3>
            <p class="text-base lg:text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, officia
              dolor impedit
              necessitatibus recusandae est.</p>
          </div>
        </div>
        <div
          class="bg-white w-[300px] md:w-[400px] lg:w-[480px] rounded-lg py-5 px-6 flex gap-6 justify-center shadow-lg">
          <div class="flex flex-col gap-2">
            <img src="/asset/testimonial/person-1.png" alt="Person 1">
            <div class="flex items-center gap-2 px-3 py-1 rounded-full bg-light">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FABC3F"
                class="bi bi-star-fill" viewBox="0 0 16 16">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>
              <p>5</p>
            </div>
          </div>
          <div class="text-gray">
            <h3 class="text-xl font-semibold lg:text-2xl">Iswa Salsabila</h3>
            <p class="text-base lg:text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, officia
              dolor impedit
              necessitatibus recusandae est.</p>
          </div>
        </div>


      </div>
      <div class="flex items-center justify-center gap-12 animate-loop-scroll-right group-hover:paused"
        aria-hidden="true">

        <div
          class="bg-white w-[300px] md:w-[400px] lg:w-[480px] rounded-lg py-5 px-6 flex gap-6 justify-center shadow-lg">
          <div class="flex flex-col gap-2">
            <img src="/asset/testimonial/person-1.png" alt="Person 1">
            <div class="flex items-center gap-2 px-3 py-1 rounded-full bg-light">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FABC3F"
                class="bi bi-star-fill" viewBox="0 0 16 16">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>
              <p>5</p>
            </div>
          </div>
          <div class="text-gray">
            <h3 class="text-xl font-semibold lg:text-2xl">Iswa Salsabila</h3>
            <p class="text-base lg:text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, officia
              dolor impedit
              necessitatibus recusandae est.</p>
          </div>
        </div>
        <div
          class="bg-white w-[300px] md:w-[400px] lg:w-[480px] rounded-lg py-5 px-6 flex gap-6 justify-center shadow-lg">
          <div class="flex flex-col gap-2">
            <img src="/asset/testimonial/person-1.png" alt="Person 1">
            <div class="flex items-center gap-2 px-3 py-1 rounded-full bg-light">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FABC3F"
                class="bi bi-star-fill" viewBox="0 0 16 16">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>
              <p>5</p>
            </div>
          </div>
          <div class="text-gray">
            <h3 class="text-xl font-semibold lg:text-2xl">Iswa Salsabila</h3>
            <p class="text-base lg:text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, officia
              dolor impedit
              necessitatibus recusandae est.</p>
          </div>
        </div>
        <div
          class="bg-white w-[300px] md:w-[400px] lg:w-[480px] rounded-lg py-5 px-6 flex gap-6 justify-center shadow-lg">
          <div class="flex flex-col gap-2">
            <img src="/asset/testimonial/person-1.png" alt="Person 1">
            <div class="flex items-center gap-2 px-3 py-1 rounded-full bg-light">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FABC3F"
                class="bi bi-star-fill" viewBox="0 0 16 16">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>
              <p>5</p>
            </div>
          </div>
          <div class="text-gray">
            <h3 class="text-xl font-semibold lg:text-2xl">Iswa Salsabila</h3>
            <p class="text-base lg:text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, officia
              dolor impedit
              necessitatibus recusandae est.</p>
          </div>
        </div>

      </div>
    </div>

  </div>

  {{-- Specialist Section --}}
  <div class="container py-10 mx-auto md:py-16 px-7 lg:px-10">

    {{-- Heading --}}
    <div
      class="flex flex-col mx-auto text-left lg:text-center lg:items-center lg:gap-5 gap-3 text-secondary lg:w-[517px] w-full mb-5">
      <h2 class="text-3xl lg:text-4xl font-italic">Meet <br><span
          class="font-bold font-playfair-display font-italic">Our
          Specialists</span>
      </h2>
      <p class="text-base lg:text-lg text-gray">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem iure
        maiores ipsam exercitationem sapiente.</p>
    </div>

    {{-- Cards --}}
    <div class="flex flex-wrap justify-center gap-4 mx-auto md:gap-5 lg:gap-7 text-primary">

      <div
        class="w-[150px] lg:w-[250px] md:w-[200px] bg-white rounded-lg flex gap-1 lg:gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out border border-light">
        <img src="/asset/specialist/specialist-1.png" alt="Dr. Sophia Hartwell">
        <h3 class="lg:text-xl text-base font-semibold lg:w-[240px] w-[130px]">Dr. Sophia Hartwell</h3>
        <p class="text-xs lg:text-base lg:w-[240px] w-[130px]">Specialist in Acne Treatment & Skincare</p>
      </div>
      <div
        class="w-[150px] lg:w-[250px] md:w-[200px] bg-white rounded-lg flex gap-1 lg:gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out border border-light">
        <img src="/asset/specialist/specialist-2.png" alt="Dr. Grace Williams">
        <h3 class="lg:text-xl text-base font-semibold lg:w-[240px] w-[130px]">Dr. Grace Williams</h3>
        <p class="text-xs lg:text-base lg:w-[240px] w-[130px]">Whitening & Anti-aging Facial Care</p>
      </div>
      <div
        class="w-[150px] lg:w-[250px] md:w-[200px] bg-white rounded-lg flex gap-1 lg:gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out border border-light">
        <img src="/asset/specialist/specialist-3.png" alt="Dr. Michael Lawson">
        <h3 class="lg:text-xl text-base font-semibold md:w-[190px] lg:w-[240px] w-[130px]">Dr. Michael Lawson</h3>
        <p class="text-xs lg:text-base md:w-[190px] lg:w-[240px] w-[130px]">Specialist in Acne & Skincare Solutions</p>
      </div>
      <div
        class="w-[150px] lg:w-[250px] md:w-[200px] bg-white rounded-lg flex gap-1 lg:gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out border border-light">
        <img src="/asset/specialist/specialist-4.png" alt="Dr. Isabella Monroe">
        <h3 class="lg:text-xl text-base font-semibold md:w-[190px] lg:w-[240px] w-[130px]">Dr. Isabella Monroe</h3>
        <p class="text-xs lg:text-base md:w-[190px] lg:w-[240px] w-[130px]">Facial Treatments & Anti-aging</p>
      </div>
      <div
        class="w-[150px] lg:w-[250px] md:w-[200px] bg-white rounded-lg flex gap-1 lg:gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out border border-light">
        <img src="/asset/specialist/specialist-5.png" alt="Dr. Noah Patel">
        <h3 class="lg:text-xl text-base font-semibold md:w-[190px] lg:w-[240px] w-[130px]">Dr. Noah Patel</h3>
        <p class="text-xs lg:text-base md:w-[190px] lg:w-[240px] w-[130px]">Specialist in Whitening & Brightening
          Programs</p>
      </div>
      <div
        class="w-[150px] lg:w-[250px] md:w-[200px] bg-white rounded-lg flex gap-1 lg:gap-6 flex-col p-3 hover:shadow-lg transition duration-200 ease-in-out border border-light">
        <img src="/asset/specialist/specialist-6.png" alt="Dr. Elena Rivera">
        <h3 class="lg:text-xl text-base font-semibold md:w-[190px] lg:w-[240px] w-[130px]">Dr. Elena Rivera</h3>
        <p class="text-xs lg:text-base md:w-[190px] lg:w-[240px] w-[130px]">Body Care & Spa Treatments</p>
      </div>

    </div>

  </div>

  {{-- Reservation Section --}}
  <div class="lg:px-10 px-7">

    {{-- Heading --}}
    <div class="text-center text-secondary">
      <h2 class="text-2xl md:text-4xl lg:text-5xl font-italic">Make a <span
          class="font-bold font-playfair-display font-italic">Reservation</span>
      </h2>
    </div>

    {{-- Form --}}
    <form action="" method=""
      class="container flex flex-col items-center justify-center mx-auto mt-5 lg:mt-7">

      <div class="flex flex-wrap justify-center gap-2 xl:gap-4 lg:gap-3">
        <div class="pt-2 xl:w-[500px] lg:w-[400px] md:w-[350px] w-[300px] pb-2 lg:pb-0 text-sm lg:text-base">
          {{-- <label for="" class="label-name ml-[18px]">First Name<span style="color: red">*</span></label> --}}
          <input class="w-full px-6 py-4 bg-white border border-cream rounded-xl" type="text" name="firstName"
            id="first_name" placeholder="First Name*" required>
        </div>
        <div class="md:pt-2 xl:w-[500px] lg:w-[400px] md:w-[350px] w-[300px] pb-2 lg:pb-0 text-sm lg:text-base">
          {{-- <label for="" class="label-lastName ml-[18px]">Last Name<span style="color: red">*</span></label> --}}
          <input class="w-full px-6 py-4 bg-white border border-cream rounded-xl" type="text" name="lastName"
            id="last_name" placeholder="Last Name*" required>
        </div>
      </div>
      <div class="flex flex-wrap justify-center gap-2 xl:gap-4 lg:gap-3">
        <div class="pt-2 xl:w-[500px] lg:w-[400px] md:w-[350px] w-[300px] pb-2 lg:pb-0 text-sm lg:text-base">
          {{-- <label for="" class="label-phoneNum ml-[18px]">Phone Number<span style="color: red">*</span></label> --}}
          <input class="w-full px-6 py-4 bg-white border border-cream rounded-xl" type="number" name="phoneNumber"
            id="phone_number" placeholder="Phone Number*" required>
        </div>
        <div class="md:pt-2 xl:w-[500px] lg:w-[400px] md:w-[350px] w-[300px] pb-2 lg:pb-0 text-sm lg:text-base">
          {{-- <label for="" class="label-email ml-[18px]">Email<span style="color: red">*</span></label> --}}
          <input class="w-full px-6 py-4 bg-white border border-cream rounded-xl" type="email" name="emailAddress"
            id="email" placeholder="Email*" required>
        </div>
      </div>
      <div class="flex flex-wrap justify-center gap-2 xl:gap-4 lg:gap-3">
        <div class="pt-2 xl:w-[500px] lg:w-[400px] md:w-[350px] w-[300px] pb-2 lg:pb-0 text-sm lg:text-base">
          <input class="w-full px-6 py-4 bg-white border border-cream rounded-xl" type="date" name="date"
            id="date" placeholder="Date*" required>
        </div>
        <div class="md:pt-2 xl:w-[500px] lg:w-[400px] md:w-[350px] w-[300px] pb-2 lg:pb-0 text-sm lg:text-base">
          <select name="treatment" id="treatment" name="treatment"
            class="w-full px-6 py-4 bg-white border border-cream rounded-xl">
            <option selected>Choose Treatment*</option>
            <option value="Whitening Program">Whitening Program</option>
            <option value="Facial Treatment">Facial Treatment</option>
            <option value="Acne Free Program">Acne Free Program</option>
            <option value="Body Care Spa">Body Care Spa</option>
          </select>
        </div>
      </div>
      <div class="flex flex-wrap justify-center gap-2 xl:gap-4 lg:gap-3">
        <div class="pt-2 xl:w-[1010px] lg:w-[803px] md:w-[702px] w-[300px] text-sm lg:text-base">
          {{-- <label for="" class="label-text ml-[18px]">Message<span style="color: red">*</span></label> --}}
          <textarea class="w-full px-6 py-4 bg-white border border-cream rounded-xl" name="clientMessage" id="message"
            cols="30" rows="10" placeholder="Message"></textarea>
        </div>
      </div>
      <button type="submit"
        class="mt-7 text-base lg:text-lg px-6 py-3 lg:rounded-2xl rounded-[10px] text-center font-medium border-secondary border-2 text-secondary shadow-xl bg-white hover:bg-gradient-to-br hover:from-[#FABC3F] hover:via-[#FFCF6D] hover:to-[#EEAB25] hover:text-secondary transition duration-200 ease-in-out hover:border-gold active:border-[#e4a935]">Make
        Reservation
      </button>

    </form>

  </div>

  {{-- Contact --}}
  <div class="py-10 md:py-12 mx-7 lg:mx-0">
    <div
      class="flex mx-auto lg:mx-auto flex-col items-center justify-center gap-2 lg:gap-6 md:px-10 px-5 py-8 mb-6 shadow-lg md:flex-row md:py-4 lg:py-6 w-fit rounded-2xl lg:rounded-3xl bg-gradient-to-br from-[#FABC3F] via-[#FFCF6D] to-[#EEAB25] lg:m-0 lg:mb-10">
      <div class="pb-3 heading lg:w-[300px] xl:w-[500px] flex flex-col justify-start">

        {{-- Heading --}}
        <div class="flex flex-col gap-5 text-secondary md:w-[350px] lg:w-[517px] w-full">
          <h2 class="text-3xl lg:text-5xl font-italic">Have any <span
              class="font-bold font-playfair-display font-italic">Questions
              ?</span>
          </h2>
          <p class="text-base lg:text-lg text-gray">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem
            iure
            maiores ipsam exercitationem sapiente.</p>
        </div>

        <a href=""
          class="flex items-center justify-center px-6 py-3 mt-5 text-center transition-all duration-300 ease-out bg-transparent border-2 shadow-sm w-fit rounded-2xl border-secondary text-secondary gap-x-2 hover:gap-x-4 hover:pr-4 hover:bg-secondary hover:text-gold group active:border-gold">
          <span class="font-semibold text-[14px] lg:text-base">Chat with Us</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="size-5 group-hover:fill-gold" fill="#493628"
            class="bi bi-whatsapp" viewBox="0 0 16 16">
            <path
              d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
          </svg>
        </a>
      </div>
      <div>
        <img src="/asset/illustration/mail-sent-animate.svg" alt="Contact Us" class="w-full lg:w-[300px] xl:w-full">
      </div>
    </div>
  </div>
@endsection
