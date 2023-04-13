@extends('layouts.app')

@section('content')
  <hr class="xl:w-[80%] lg:w-[80%] sm:w-[100%] md:w-[100%] h-px my-8 bg-[#66C7C8] border-0">

<div class="flex flex-row">
  <div class=" xl:w-[80%] lg:w-[80%] sm:w-[100%] md:w-[100%]">
      <div class="flex flex-col sm:flex-col md:flex-row lg:flex-row xl:flex-row xl:space-x-[24px] md:space-x-6 sm:space-x-0 lg:space-x-4
      bg-[#062D49]">
          <!-- card 1 -->
          <card class="rounded-xl md:h-[600px] lg:h-[600px] md:w-[45%] lg:w-[35%] flex flex-col 
          text-black">
              <!-- Pricing -->
              <div
                  class="flex flex-row items-center justify-center pt-8 pb-8 rounded-t-[20px] bg-red gap-3">
                  <div class="flex flex-row justify-center">
                      <img src="@asset('images/Frame 25 (1).png')" alt="">
                  </div>

              </div>
              <!-- Pricing Additional Description -->
              <div class="grid grid-cols-12 bg-white 
              px-4 rounded-b-[20px]
              gap-y-3 pt-10 h-full">
                  <!-- Details 1 -->


                  <div class="col-span-11 text-2xl flex
                      items-center
                       pl-2 text-black ">
                      <h1>Full tBSI Membership</h1>
                  </div>
                  <!-- Line -->
                  <div class="col-span-12 h-[1px] bg-white
                      "></div>
                  <!-- Details 2 -->

                  <div>
                      <svg xmlns="http://www.w3.org/2000/svg" class="text-red h-5 w-5" fill="none"
                          viewBox="0 0 24
                              24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                  13l4 4L19
                                  7" />
                      </svg>
                  </div>

                  <div class="col-span-11  flex
                              items-center text-lg pl-2 text-black ">10+
                      free
                      guests per file or folder</div>

                  <!-- Details 4 -->
                  <div>
                      <svg xmlns="http://www.w3.org/2000/svg" class=" text-red  h-5 w-5" fill="none"
                          viewBox="0 0 24
                                  24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                      13l4 4L19
                                      7" />
                      </svg>
                  </div>

                  <div class="col-span-11  flex
                                  items-center pl-2 text-black ">10+
                      free
                      guests per file or folder</div>



                  <!-- Details 5 -->
                  <div>
                      <svg xmlns="http://www.w3.org/2000/svg" class=" text-red h-5 w-5" fill="none"
                          viewBox="0 0 24
                                      24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                          13l4 4L19
                                          7" />
                      </svg>
                  </div>

                  <div class="col-span-11  flex
                                      items-center pl-2 text-black ">10+
                      free
                      guests per file or folder</div>

                  <!-- Details 5 -->
                  <div>
                      <svg xmlns="http://www.w3.org/2000/svg" class=" text-red h-5 w-5" fill="none"
                          viewBox="0 0 24
                                      24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                          13l4 4L19
                                          7" />
                      </svg>
                  </div>

                  <div class="col-span-11  flex
                                      items-center pl-2 text-black ">10+
                      free
                      guests per file or folder</div>


                  <!-- CTA Button -->
                  <div class="col-span-12 lg:mt-[54px] md:mt[0px] 
                                      mb-5 
                                      text-white">
                      <hr class="w-[100%] h-px bg-red border-0 mb-2">
                      <div class=" flex justify-center text-4xl text-black">
                          <h1 class="text-4xl">240,00€</h1>
                      </div>
                      <hr class="w-[100%] h-px bg-red border-0 mt-2">
                      <button id="open" class="rounded mt-6
                                          
                                          bg-red
                                          w-full py-3"><a href="javascript:history.back()">Back</a></button>

                  </div>

              </div>
          </card>
          <!-- form section -->
          <form class="w-[100%] md:w-[55%] lg:w-[65%] relative ">
              <h1
                  class="text-[24px] md:text-[30px] lg:text-[38px] sm:text-2xl mb-5 text-white font-thin font-ppeiko mt-8 sm:mt-8 md:mt-0 ">
                  Join Us - You are Welcome! </h1>
              <div class=" mt-7 grid gap-y-6 sm:gap-y-6 md:gap-y-4 lg:gap-y-10 gap-x-4 mb-6 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 ">
                  <div class="relative">
                      <label for="first_name"
                          class="lg:text-xl md:text-base text-sm sm:text-sm mb-3 text-white">First
                          name</label>
                      <input type="text" id="first_name" name="first_name"
                          class="shadow-sm lg:mt-2 bg-gray-50  border-gray-300 text-gray-900 text-sm rounded-full w-full p-3.5"
                          required>
                      <label for="first_name"
                          class="absolute right-0 bottom-[-40px] text-xs font-Agrandir mb-3 text-white">provide
                          guidance
                      </label>
                      <img src="@asset('/images/Vector (2).png')" class="absolute top-9 sm:top-9 md:top-9 lg:top-12 right-3" alt="">
                  </div>
                  <div class="relative">
                      <label for="last_name"
                          class="lg:text-xl md:text-base text-sm sm:text-sm text-white">Last name</label>
                      <input type="text" id="last_name" name="last_name"
                          class="shadow-sm lg:mt-2 bg-gray-50  border-gray-300 text-gray-900 text-sm rounded-full w-full p-3.5"
                          required>
                      <label for="last_name"
                          class="absolute right-0 bottom-[-40px] text-xs font-Agrandir mb-3 text-white">provide
                          guidance
                      </label>
                      <img src="@asset('/images/Vector (2).png')" class="absolute top-9 sm:top-9 md:top-9 lg:top-12 right-3" alt="">
                  </div>
                  <div class="relative">
                      <label for="user_account"
                          class="lg:text-xl md:text-base text-sm sm:text-sm mb-3 text-white">tBSI user
                          account</label>
                      <input type="email" id="user_account" name="user_account"
                          class="shadow-sm lg:mt-2 bg-gray-50  border-gray-300 text-gray-900 text-sm rounded-full w-full p-3.5"
                          required>
                      <label for="user_account"
                          class="absolute right-0 bottom-[-40px] text-xs font-Agrandir mb-3 text-white">provide
                          guidance
                      </label>
                       <img src="@asset('/images/user (1) 2.png')" class="absolute w-[23px] top-9 sm:top-9 md:top-9 lg:top-12 right-3" alt="">
                  </div>
                  <div class="relative">
                      <label for="password"
                          class="lg:text-xl md:text-base text-sm sm:text-sm text-white">Password</label>
                      <input type="password" id="password" name="password"
                          class="shadow-sm lg:mt-2 bg-gray-50  border-gray-300 text-gray-900 text-sm rounded-full w-full p-3.5"
                          required>
                      <label for="first_name"
                          class="absolute right-0 bottom-[-40px] text-xs font-Agrandir mb-3 text-white">provide
                          guidance
                      </label>
                      <img src="@asset('/images/Vector (4).png')" class="absolute top-8 sm:top-10 md:top-10 lg:top-[52px] right-3" alt="">
                  </div>
                  <div class="relative">
                      <label for="confirm_password"
                          class="lg:text-xl md:text-base text-sm sm:text-sm mb-3 text-white">Re-Enter
                          Password</label>
                      <input type="password" id="confirm_password" name="confirm_password"
                          class="shadow-sm lg:mt-2 bg-gray-50  border-gray-300 text-gray-900 text-sm rounded-full w-full p-3.5"
                          required>
                      <label for="first_name"
                          class="absolute right-0 bottom-[-40px] text-xs font-Agrandir mb-3 text-white">provide
                          guidance
                      </label>
                      <img src="@asset('/images/Vector (4).png')" class="absolute cursor-pointer top-8 sm:top-10 md:top-10 lg:top-[52px] right-3" alt="">
                  </div>
                  <div class="relative">
                      <label for="continent"
                          class="lg:text-xl md:text-base text-sm sm:text-sm text-white">Select
                          Continent</label>
                      <input type="text" id="continent" name="continent" 
                          class="shadow-sm lg:mt-2 bg-gray-50  border-gray-300 text-gray-900 text-sm rounded-full w-full p-3.5"
                          required>
                      <label for="first_name"
                          class="absolute right-0 bottom-[-40px] text-xs font-Agrandir mb-3 text-white">provide
                          guidance
                      </label>
                      <img src="@asset('/images/Group (1).png')" class="absolute top-9 sm:top-9 md:top-9 lg:top-12 right-3" alt="">
                  </div>
                  <div class="relative">
                      <label for="country"
                          class="lg:text-xl md:text-base text-sm sm:text-sm font-Agrandir mb-3 text-white">Select
                          Country
                      </label>
                      <select id="country" name="country" class="lg:mt-2  shadow-sm bg-gray-50  border-gray-300 text-gray-900 text-sm rounded-full w-full p-3.5" >
                        <option value="" selected>Choose a country</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                      </select>
                      <label for="first_name"
                          class="absolute right-0 bottom-[-40px] text-xs font-Agrandir mb-3 text-white">provide
                          guidance
                      </label>
                      {{-- <img src="@asset('/images/Group (1).png')" class="absolute top-9 sm:top-9 md:top-9 lg:top-12 right-3" alt=""> --}}
                  </div>
                  <div class="relative">
                      <a href="#"
                          class="font-Agrandir mt-6 sm:mt-6 md:mt-6  lg:mt-8 inline-flex justify-center items-center px-3 py-3 text-xl font-medium text-center w-full text-[#66C7C8] border-[1px] border-[#66C7C8] rounded-[2rem]">
                          Complete Profile
                      </a>
                      <label for="first_name"
                          class="absolute right-0 bottom-[-40px] text-xs font-Agrandir mb-3 text-white">optional
                      </label>
                  </div>
                  <div class="flex items-center mt-3 sm:mt-3 ">
                      <input id="default-checkbox" type="checkbox" class="w-6 h-6 accent-[#06a3a5]">
                      <label for="default-checkbox" class="ml-2 text-sm font-medium text-white">I accept the
                          BSI Code of Conduct</label>
                  </div>
                  <div class="flex items-center mt-3 sm:mt-3 ">
                      <input id="default-checkbox" type="checkbox" class="w-6 h-6 accent-[#06a3a5]">
                      <label for="default-checkbox" class="ml-2 text-sm font-medium text-white">I accept the
                          BSI Code of Conduct</label>
                  </div>
                  <div class="flex items-center ">
                      <input id="default-checkbox" type="checkbox" class="w-6 h-6 accent-[#06a3a5]">
                      <label for="default-checkbox" class="ml-2 text-sm font-medium text-white">I accept the
                          BSI Privacy Policy</label>
                  </div>
              </div>
              <div class="absolute right-0 pb-3">
                  <a href="#"
                      class="font-Agrandir inline-flex items-center px-12 py-2 text-xl font-medium text-center text-white border-[1px] border-white  rounded-md">
                      Pay
                  </a>
                  <a href="#"
                      class="font-Agrandir inline-flex items-center px-7 py-2 text-xl font-medium text-center text-black border-[1px] border-[#66C7C8] bg-[#66C7C8] rounded-md">
                      Confirm
                  </a>
              </div>
          </form>
      </div>
      <!-- /main -->
  </div>
@include('sections.sidebar')
@endsection

