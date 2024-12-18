@extends('layouts.layout')

@section('content')
  {{-- Treatment Section --}}
  <div class="py-10 md:py-12 px-7 lg:px-10">

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
      @foreach ($treatments as $treatment)
        <div
          class="w-full md:w-[350px] lg:w-[518px] bg-white p-5 border border-light rounded-lg hover:shadow-lg transition duration-200 ease-in-out">
          <img src="{{ asset('storage/img/' . $treatment->image) }}" alt="{{ $treatment->name }}" class="rounded-md">
          <div class="flex flex-wrap items-center justify-between pt-3 lg:pt-6">
            <h3 class="text-xl lg:text-2xl font-semibold text-primary lg:w-[318px]">{{ $treatment->name }}</h3>
            <a href="{{ route('detail.treatment.show', $treatment->slug) }}"
              class="text-sm lg:text-base text-secondary">Details →</a>
          </div>
        </div>
      @endforeach
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
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FABC3F" class="bi bi-star-fill"
                viewBox="0 0 16 16">
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
            <img src="/asset/testimonial/person-2.png" alt="Person 2">
            <div class="flex items-center gap-2 px-3 py-1 rounded-full bg-light">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FABC3F" class="bi bi-star-fill"
                viewBox="0 0 16 16">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>
              <p>5</p>
            </div>
          </div>
          <div class="text-gray">
            <h3 class="text-xl font-semibold lg:text-2xl">Grace Walls</h3>
            <p class="text-base lg:text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, officia
              dolor impedit
              necessitatibus recusandae est.</p>
          </div>
        </div>
        <div
          class="bg-white w-[300px] md:w-[400px] lg:w-[480px] rounded-lg py-5 px-6 flex gap-6 justify-center shadow-lg">
          <div class="flex flex-col gap-2">
            <img src="/asset/testimonial/person-3.png" alt="Person 3">
            <div class="flex items-center gap-2 px-3 py-1 rounded-full bg-light">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FABC3F" class="bi bi-star-fill"
                viewBox="0 0 16 16">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>
              <p>5</p>
            </div>
          </div>
          <div class="text-gray">
            <h3 class="text-xl font-semibold lg:text-2xl">Keysha Athallia</h3>
            <p class="text-base lg:text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, officia
              dolor impedit
              necessitatibus recusandae est.</p>
          </div>
        </div>

      </div>
      <div class="flex items-center justify-center gap-12 animate-loop-scroll-left group-hover:paused" aria-hidden="true">

        <div
          class="bg-white w-[300px] md:w-[400px] lg:w-[480px] rounded-lg py-5 px-6 flex gap-6 justify-center shadow-lg">
          <div class="flex flex-col gap-2">
            <img src="/asset/testimonial/person-4.png" alt="Person 4">
            <div class="flex items-center gap-2 px-3 py-1 rounded-full bg-light">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FABC3F" class="bi bi-star-fill"
                viewBox="0 0 16 16">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>
              <p>5</p>
            </div>
          </div>
          <div class="text-gray">
            <h3 class="text-xl font-semibold lg:text-2xl">Mimi</h3>
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
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FABC3F" class="bi bi-star-fill"
                viewBox="0 0 16 16">
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
            <img src="/asset/testimonial/person-2.png" alt="Person 2">
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
            <h3 class="text-xl font-semibold lg:text-2xl">Grace Walls</h3>
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
            <img src="/asset/testimonial/person-2.png" alt="Person 2">
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
            <h3 class="text-xl font-semibold lg:text-2xl">Grace Walls</h3>
            <p class="text-base lg:text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, officia
              dolor impedit
              necessitatibus recusandae est.</p>
          </div>
        </div>
        <div
          class="bg-white w-[300px] md:w-[400px] lg:w-[480px] rounded-lg py-5 px-6 flex gap-6 justify-center shadow-lg">
          <div class="flex flex-col gap-2">
            <img src="/asset/testimonial/person-3.png" alt="Person 3">
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
            <h3 class="text-xl font-semibold lg:text-2xl">Keysha Athallia</h3>
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
            <img src="/asset/testimonial/person-4.png" alt="Person 4">
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
            <h3 class="text-xl font-semibold lg:text-2xl">Mimi</h3>
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
            <img src="/asset/testimonial/person-2.png" alt="Person 2">
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
            <h3 class="text-xl font-semibold lg:text-2xl">Grace Walls</h3>
            <p class="text-base lg:text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, officia
              dolor impedit
              necessitatibus recusandae est.</p>
          </div>
        </div>

      </div>
    </div>

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

        <a href="https://wa.me/6285156536864" target="_blank"
          class="flex items-center justify-center px-6 py-3 mt-5 text-center transition-all duration-300 ease-out bg-transparent border-2 shadow-sm w-fit rounded-2xl border-secondary text-secondary gap-x-2 hover:gap-x-4 hover:pr-4 hover:bg-secondary hover:text-gold group focus:ring-primary focus:border-primary focus:ring-1 focus:outline-none">
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
