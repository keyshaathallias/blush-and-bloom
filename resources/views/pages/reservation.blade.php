@extends('layouts.layout')

@section('content')
  {{-- Reservation Section --}}
  <div class="container px-10 py-12 mx-auto">

    {{-- Heading --}}
    <div class="text-center text-secondary">
      <h2 class="text-4xl font-italic">Make a <span class="font-bold font-playfair-display font-italic">Reservation</span>
      </h2>
    </div>

    {{-- Form --}}
    <form action="" method="" class="container flex flex-col items-center justify-center mx-auto mt-7">

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
        class="mt-7 text-base md:text-lg px-6 py-3 md:rounded-2xl rounded-[10px] text-center font-medium bg-gradient-to-br text-secondary from-[#FABC3F] via-[#FFCF6D] to-[#EEAB25] shadow-xl">Make
        Reservation
      </button>

    </form>

  </div>
@endsection
