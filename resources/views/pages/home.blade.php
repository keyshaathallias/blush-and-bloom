@extends('layouts.layout')

@section('content')
  {{-- Hero Section --}}
  <div
    class="bg-gradient-to-br from-[#442C26] via-[#745248] to-[#523932] pl-10 py-5 flex justify-center items-center flex-col md:flex-row">

    <div class="w-[356px] md:w-[537px] flex flex-col gap-5">

      <h1 class="font-lato text-gold md:text-[40px] md:leading-[50px] font-italic text-[32px] text-center md:text-left">
        Find the Perfect <br>
        <span class="font-bold font-playfair-display font-italic">Products & Treatments </span> <br>
        for Your Skin
      </h1>
      <p class="text-center text-cream md:text-left">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed ratione
        dolore ducimus
        praesentium delectus pariatur maiores earum eligendi iure voluptatum.</p>

      <div class="flex flex-wrap gap-5 mt-5">
        <a href=""
          class="text-base md:text-lg px-6 py-3 text-secondary md:rounded-2xl rounded-[10px] text-center font-medium bg-gradient-to-br from-[#FABC3F] via-[#FFCF6D] to-[#EEAB25] shadow-xl shadow-[#583B34]">
          Explore Products</a>
        <a href=""
          class="text-base md:text-lg px-6 py-3 md:rounded-2xl rounded-[10px] text-center font-medium border-gold border-2 text-gold shadow-xl shadow-[#583B34] bg-transparent">
          View Treatments</a>
      </div>

    </div>

    <div class="">
      <img src="/asset/illustration/hero-image.svg" alt="Image">
    </div>
  </div>

  {{-- Products Section --}}
  <div class="container px-10 mx-auto my-16">

    {{-- Heading --}}
    <div class="flex justify-between text-secondary">
      <h2 class="text-4xl font-italic">Our <span class="font-bold font-playfair-display font-italic">Products</span>
      </h2>
      <a href="/product" class="text-base">View All →</a>
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

    </div>

  </div>

  {{-- Treatment Section --}}
  <div class="px-10 py-12 bg-white ">

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

  {{-- Testimonial Section --}}
  <div class="px-10 my-16">

    {{-- Heading --}}
    <div class="flex flex-col items-center gap-5 text-center text-secondary">
      <h2 class="text-4xl font-italic">Testimonials <br>from <span class="font-bold font-playfair-display font-italic">Our
          Customers</span>
      </h2>
      <p class="text-lg text-gray w-[484px]">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem iure
        maiores ipsam exercitationem sapiente.</p>
    </div>

    {{-- Cards Top --}}
    <div class="flex items-center justify-center gap-12 my-12">

      <div class="bg-white w-[480px] rounded-lg py-5 px-6 flex gap-6 justify-center shadow-lg">
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
          <h3 class="text-2xl font-semibold">Iswa Salsabila</h3>
          <p class="text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, officia dolor impedit
            necessitatibus recusandae est.</p>
        </div>
      </div>
      <div class="bg-white w-[480px] rounded-lg py-5 px-6 flex gap-6 justify-center shadow-lg">
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
          <h3 class="text-2xl font-semibold">Iswa Salsabila</h3>
          <p class="text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, officia dolor impedit
            necessitatibus recusandae est.</p>
        </div>
      </div>
      <div class="bg-white w-[480px] rounded-lg py-5 px-6 flex gap-6 justify-center shadow-lg">
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
          <h3 class="text-2xl font-semibold">Iswa Salsabila</h3>
          <p class="text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, officia dolor impedit
            necessitatibus recusandae est.</p>
        </div>
      </div>

    </div>

    {{-- Cards Bottom --}}
    <div class="flex items-center justify-center gap-12">

      <div class="bg-white w-[480px] rounded-lg py-5 px-6 flex gap-6 justify-center shadow-lg">
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
          <h3 class="text-2xl font-semibold">Iswa Salsabila</h3>
          <p class="text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, officia dolor impedit
            necessitatibus recusandae est.</p>
        </div>
      </div>
      <div class="bg-white w-[480px] rounded-lg py-5 px-6 flex gap-6 justify-center shadow-lg">
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
          <h3 class="text-2xl font-semibold">Iswa Salsabila</h3>
          <p class="text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, officia dolor impedit
            necessitatibus recusandae est.</p>
        </div>
      </div>
      <div class="bg-white w-[480px] rounded-lg py-5 px-6 flex gap-6 justify-center shadow-lg">
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
          <h3 class="text-2xl font-semibold">Iswa Salsabila</h3>
          <p class="text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, officia dolor impedit
            necessitatibus recusandae est.</p>
        </div>
      </div>

    </div>

  </div>

  {{-- Specialist Section --}}
  <div class="container px-10 py-12 mx-auto ">

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

  {{-- Reservation Section --}}
  <div class="px-10">

    {{-- Heading --}}
    <div class="text-center text-secondary">
      <h2 class="text-5xl font-italic">Make a <span
          class="font-bold font-playfair-display font-italic">Reservation</span>
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

  {{-- Contact --}}
  <div class="py-12">
    <div
      class="flex flex-col items-center justify-center gap-6 px-10 py-10 mx-8 mb-6 shadow-lg md:flex-row lg:mx-auto lg:py-6 rounded-2xl lg:rounded-3xl w-fit bg-gradient-to-br from-[#FABC3F] via-[#FFCF6D] to-[#EEAB25] lg:m-0 lg:mb-10">
      <div class="pb-3 heading md:w-[300px] xl:w-[500px]">

        {{-- Heading --}}
        <div class="flex flex-col gap-5 text-secondary w-[517px]">
          <h2 class="text-5xl font-italic">Have any <span class="font-bold font-playfair-display font-italic">Questions
              ?</span>
          </h2>
          <p class="text-lg text-gray">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem iure
            maiores ipsam exercitationem sapiente.</p>
        </div>

        <a href=""
          class="flex items-center justify-center px-6 py-3 mx-auto mt-5 text-center transition-all duration-300 ease-out bg-transparent border-2 shadow-sm rounded-xl border-secondary text-secondary md:mx-0 w-fit gap-x-2 hover:gap-x-4 hover:pr-4">
          <span class="font-semibold text-[14px] lg:text-base">Chat with Us</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#493628" class="bi bi-whatsapp"
            viewBox="0 0 16 16">
            <path
              d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
          </svg>
        </a>
      </div>
      <div>
        <img src="/asset/illustration/mail-sent-animate.svg" alt="Contact Us" class="w-[410px] md:w-[300px] xl:w-full">
      </div>
    </div>
  </div>
@endsection
