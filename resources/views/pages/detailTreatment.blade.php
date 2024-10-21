@extends('layouts.layout')

@section('content')
  {{-- Detail Treatment --}}
  <div class="container py-10 mx-auto md:py-12 px-7 lg:px-10">
    <h1 class="lg:text-[32px] text-2xl font-bold text-center text-secondary lg:mb-9 mb-5">Whitening Program</h1>
    <div class="flex flex-col items-center justify-center gap-5 lg:items-start md:gap-7 lg:flex-row">
      <img src="/asset/treatment/whitening-program.png" alt="Whitening Program">
      <p class="text-lg text-gray">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit
        amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
        <br>
        <br>
        - Lorem ipsum dolor sit amet. <br>
        - Consectetur adipiscing elit. <br>
        - Sed do eiusmod tempor incididunt. <br>
        <br>
        <br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit
        amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
      </p>
    </div>
  </div>

  {{-- Contact --}}
  <div class="pb-10 md:pb-12 mx-7 lg:mx-0">
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
          class="flex items-center justify-center px-6 py-3 mt-5 text-center transition-all duration-300 ease-out bg-transparent border-2 shadow-sm w-fit rounded-xl border-secondary text-secondary gap-x-2 hover:gap-x-4 hover:pr-4">
          <span class="font-semibold text-[14px] lg:text-base">Chat with Us</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#493628" class="bi bi-whatsapp"
            viewBox="0 0 16 16">
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