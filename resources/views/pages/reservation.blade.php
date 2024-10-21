@extends('layouts.layout')

@section('content')
  {{-- Reservation Section --}}
  <div class="py-10 lg:px-10 px-7 md:py-16">

    {{-- Heading --}}
    <div class="text-center text-secondary">
      <h2 class="text-2xl md:text-4xl lg:text-5xl font-italic">Make a <span
          class="font-bold font-playfair-display font-italic">Reservation</span>
      </h2>
    </div>

    {{-- Form --}}
    <form action="" method="" class="container flex flex-col items-center justify-center mx-auto mt-5 lg:mt-7">

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
        class="mt-7 text-base lg:text-lg px-6 py-3 lg:rounded-2xl rounded-[10px] text-center font-medium bg-gradient-to-br text-secondary from-[#FABC3F] via-[#FFCF6D] to-[#EEAB25] shadow-xl">Make
        Reservation
      </button>

    </form>

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