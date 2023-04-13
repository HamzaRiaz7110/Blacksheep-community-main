@extends('layouts.app')

@section('content')
<div class="flex flex-row">
  <div class=" xl:w-[80%] lg:w-[80%] sm:w-[100%] md:w-[100%]">
    <div class="flex flex-col sm:flex-col md:flex-row lg:flex-row xl:flex-row xl:space-x-12 md:space-x-0 sm:space-x-0 lg:space-x-4
                bg-[#062D49]">
      <!-- card 1 -->
      <card class="rounded-xl lg:w-[35%] flex flex-col
                    text-black">
        <!-- Pricing -->
        <div
          class="flex flex-row items-center justify-center pt-8 pb-8 rounded-t-[20px] bg-yellow gap-3">
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
            <h1>Lifetime tBSI Membership</h1>
          </div>
          <!-- Line -->
          <div class="col-span-12 h-[1px] bg-white
                                "></div>
          <!-- Details 2 -->

          <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="text-yellow h-5 w-5" fill="none"
                 viewBox="0 0 24
                                        24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                            13l4 4L19
                                            7" />
            </svg>
          </div>

          <div class="col-span-11  flex
                                        items-center text-lg pl-2 text-black ">Online Training included
          </div>

          <!-- Details 4 -->
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" class=" text-yellow  h-5 w-5" fill="none"
                 viewBox="0 0 24
                                            24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                                13l4 4L19
                                                7" />
            </svg>
          </div>

          <div class="col-span-11  flex items-center pl-2 text-black ">2 Think Tanks included</div>



          <!-- Details 5 -->
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" class=" text-yellow h-5 w-5" fill="none"
                 viewBox="0 0 24
                                                24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                                    13l4 4L19
                                                    7" />
            </svg>
          </div>

          <div class="col-span-11  flex
                                                items-center pl-2 text-black ">Benefits</div>

          <!-- Details 5 -->
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" class=" text-yellow  h-5 w-5" fill="none"
                 viewBox="0 0 24
                                                24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                                    13l4 4L19
                                                    7" />
            </svg>
          </div>

          <div class="col-span-11  flex items-center pl-2 text-black ">Benefits</div>

          <!-- Details 5 -->
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" class=" text-yellow  h-5 w-5" fill="none"
                 viewBox="0 0 24
                                                                            24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                                                                13l4 4L19
                                                                                7" />
            </svg>
          </div>

          <div class="col-span-11  flex items-center pl-2 text-black ">Benefits</div>


          <!-- CTA Button -->
          <div class="col-span-12 lg:mt-[54px] md:mt[0px]
                                                mb-5
                                                text-black">
            <hr class="w-[100%] h-px bg-yellow border-0 mb-2">
            <div class=" flex justify-center text-4xl text-black">
              <h1 class="text-4xl">279,99€</h1>
            </div>
            <hr class="w-[100%] h-px bg-yellow border-0 mt-2">
            <a href="#" class="mt-6 w-full text-center inline-block font-Agrandir  text-lg text-[#000] rounded-md border bg-red border-yellow hover:text-yellow hover:bg-[#0000] hover:border-yellow focus:outline-none focus:ring-2  mr-4 px-3 py-2">Back</a>

          </div>

        </div>
      </card>
      <?php
      if (isset($_POST['submit'])) {

        if(empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['user_account']) || empty($_POST['password']) || empty($_POST['confirm_password']) || empty($_POST['continent']) || empty($_POST['terms']) || empty($_POST['bsi_code']) || empty($_POST['privacy'])){
        ?>  
          @include('sections.incomplete_modal') 
        <?php
        }else{
        ?>  
          @include('sections.complete_modal')
        <?php  
        }
      }
    ?>
    <form class="space-x-3 w-[100%] lg:w-[65%] relative ml-0 md:ml-10 " method="post" action="">
      <h1
        class=" ml-3 text-3xl lg:text-4xl sm:text-2xl mb-5 text-white font-thin font-ppeiko mt-8 sm:mt-8 md:mt-0 ">
        Join Us - You are Welcome! </h1>
      <div class="grid gap-y-10 gap-x-6 mb-6 sm:grid-cols-1 md:grid-cols-2">
        <div class="relative">
          <label for="first_name"
                 class="lg:text-xl md:text-base text-sm sm:text-sm mb-3 text-white">First
            name</label>
          <input type="text" id="" name="first_name"
                 class="shadow-sm bg-gray-50  border-gray-300 text-gray-900 text-sm rounded-full w-full p-3.5"
                 >
          <label for="first_name"
                 class="absolute right-0 bottom-[-40px] text-xs font-Agrandir mb-3 text-white">provide
            guidance
          </label>
        </div>
        <div class="relative">
          <label for="last_name"
                 class="lg:text-xl md:text-base text-sm sm:text-sm text-white">Last name</label>
          <input type="text" id="" name="last_name"
                 class="shadow-sm bg-gray-50  border-gray-300 text-gray-900 text-sm rounded-full w-full p-3.5"
                 >
          <label for="last"
                 class="absolute right-0 bottom-[-40px] text-xs font-Agrandir mb-3 text-white">provide
            guidance
          </label>

        </div>
        <div class="relative">
          <label for="user_account"
                 class="lg:text-xl md:text-base text-sm sm:text-sm mb-3 text-white">tBSI user
            account</label>
          <input type="text" id="user_account" name="user_account"
                 class="shadow-sm bg-gray-50  border-gray-300 text-gray-900 text-sm rounded-full w-full p-3.5"
                 >
          <label for="user_account"
                 class="absolute right-0 bottom-[-40px] text-xs font-Agrandir mb-3 text-white">provide
            guidance
          </label>

        </div>
        <div class="relative">
          <label for="password"
                 class="lg:text-xl md:text-base text-sm sm:text-sm text-white">Password</label>
          <input type="password" id="password" name="password"
                 class="shadow-sm bg-gray-50  border-gray-300 text-gray-900 text-sm rounded-full w-full p-3.5"
                 >
          <label for="password"
                 class="absolute right-0 bottom-[-40px] text-xs font-Agrandir mb-3 text-white">provide
            guidance
          </label>

        </div>
        <div class="relative">
          <label for="confirm_password"
                 class="lg:text-xl md:text-base text-sm sm:text-sm mb-3 text-white">Re-Enter
            Password</label>
          <input type="password" id="confirm_password" name="confirm_password"
                 class="shadow-sm bg-gray-50  border-gray-300 text-gray-900 text-sm rounded-full w-full p-3.5"
                 >
          <label for="confirm_password"
                 class="absolute right-0 bottom-[-40px] text-xs font-Agrandir mb-3 text-white">provide
            guidance
          </label>

        </div>
        <div class="relative">
          <label for="continent"
                 class="lg:text-xl md:text-base text-sm sm:text-sm text-white">Select
            Continent</label>
          <input type="text" id="continent" name="continent"
                 class="shadow-sm bg-gray-50  border-gray-300 text-gray-900 text-sm rounded-full w-full p-3.5"
                 >
          <label for="continent"
                 class="absolute right-0 bottom-[-40px] text-xs font-Agrandir mb-3 text-white">provide
            guidance
          </label>

        </div>
       <div class="relative">
          <label for="countries" class="lg:text-xl md:text-base text-sm sm:text-sm text-white">Select an option</label>
          <select id="countries" name="country" class="shadow-sm bg-gray-50  border-gray-300 text-gray-900 text-sm rounded-full w-full p-3.5">
            <option selected>Choose a country</option>
            <option value="US">United States</option>
            <option value="CA">Canada</option>
            <option value="FR">France</option>
            <option value="DE">Germany</option>
          </select>
          <label for="country"
                 class="absolute right-0 bottom-[-40px] text-xs font-Agrandir mb-3 text-white">provide guidance
          </label>
        </div>
        <div class="relative">
          <a href="#"
             class="font-Agrandir mt-6 inline-flex justify-center items-center px-3 py-3 text-xl font-medium text-center w-full text-[#66C7C8] border-[1px] border-[#66C7C8] rounded-[2rem]">
            Complete Profile
          </a>
          <label for="first_name"
                 class="absolute right-0 bottom-[-40px] text-xs font-Agrandir mb-3 text-white">provide
            guidance
          </label>
        </div>
        <div class="flex items-center ">
          <input id="default-checkbox" name="terms" type="checkbox" class="w-6 h-6 accent-[#06a3a5]">
          <label for="default-checkbox" class="ml-2 text-sm font-medium text-white">
            I accept the BSI Terms and conditions</label>
        </div>
        <div class="flex items-center ">
          <input id="default-checkbox" name="bsi_code" type="checkbox" class="w-6 h-6 accent-[#06a3a5]">
          <label for="default-checkbox" class="ml-2 text-sm font-medium text-white">I accept the
            BSI Code of Conduct</label>
        </div>
        <div class="flex items-center">
          <input id="default-checkbox" name="privacy" type="checkbox" class="w-6 h-6 accent-[#06a3a5]">
          <label for="default-checkbox" class="ml-2 text-sm font-medium text-white">I accept the
            BSI Privacy Policy</label>
        </div>
      </div>
      <div class="absolute right-0">
        <a href="/course-payment/" class=" text-center inline-block font-Agrandir  text-lg text-white rounded-md border bg-transparent border-white hover:text-cyan hover:bg-[#0000] hover:border-cyan focus:outline-none focus:ring-2 focus:bg-cyan mr-4 px-11 py-2">Pay</a>
        <input type="submit" name="submit" class=" text-center inline-block font-Agrandir  text-lg text-[#000] rounded-md border bg-cyan border-cyan hover:text-cyan hover:bg-[#0000] hover:border-cyan focus:outline-none focus:ring-2 focus:bg-cyan mr-4 px-3 py-2" value="Confirm">

      </div>
    </form>
    </div>

    <!-- /main -->
  </div>
  @include('sections.sidebar')
</div>
@endsection
