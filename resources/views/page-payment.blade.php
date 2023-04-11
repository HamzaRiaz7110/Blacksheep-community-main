@extends('layouts.app')

@section('content')
  <hr class="xl:w-[80%] lg:w-[80%] sm:w-[100%] md:w-[100%] h-px my-8 bg-[#66C7C8] border-0">
<div class="flex flex-row">
  <div class=" xl:w-[80%] lg:w-[80%] sm:w-[100%] md:w-[100%]">
    <div class="flex flex-col sm:flex-col md:flex-row lg:flex-row xl:flex-row xl:space-x-12 md:space-x-0 sm:space-x-0 lg:space-x-4
                bg-[#062D49]">

      <!-- policy -->
      <div class="xl:w-[40%] lg:w-full md:w-full">
        <div class=" bg-[#CBCBCB] p-3">
          <h1 class="text-black font-ppeiko font-thin">Our payment policy:</h1>
        </div>
        <div class="font-Agrandir  bg-[white] p-2 ">
          <div class="custom-scrollbar overflow-auto h-[550px] p-6">
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanieContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanieContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanieContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanie</p>
          </div>
        </div>
      </div>
      <!-- policy -->


      <!-- form section -->
      <form class="space-x-3 w-[100%] lg:w-[65%] relative ml-0 md:ml-10 sm:px-5 sm:py-4">
        <div class="flex justify-between mb-6">
          <div class="flex items-center ">
            <input id="default-checkbox" type="checkbox" class="w-6 h-6 accent-[#06a3a5]">
            <label for="default-checkbox" class="ml-2 text-sm font-medium text-white">
              Paypal</label>
          </div>
          <div class="flex items-center ">
            <input id="default-checkbox" type="checkbox" class="w-6 h-6 accent-[#06a3a5]">
            <label for="default-checkbox" class="ml-2 text-sm font-medium text-white">
              Credit Card</label>
          </div>
          <div class="flex items-center ">
            <input id="default-checkbox" type="checkbox" class="w-6 h-6 accent-[#06a3a5]">
            <label for="default-checkbox" class="ml-2 text-sm font-medium text-white">
              Pay the Bill</label>
          </div>
        </div>
        <div class="">
          <div class="relative mb-6">
            <label for="address"
                   class="lg:text-xl md:text-base text-sm sm:text-sm mb-3 text-white">Invoice address</label>
            <input type="text" id=""
                   class="shadow-sm bg-gray-50  border-gray-300 text-gray-900 text-sm rounded-full w-full p-3.5"
                   required>
          </div>
          <div class="relative mb-6">
            <label for="InvoiceZipcode"
                   class="lg:text-xl md:text-base text-sm sm:text-sm text-white">Invoice Zipcode</label>
            <input type="text" id=""
                   class="shadow-sm bg-gray-50  border-gray-300 text-gray-900 text-sm rounded-full w-full p-3.5"
                   required>
          </div>
          <div class="relative mb-6">
            <label for="InvoiceCity"
                   class="lg:text-xl md:text-base text-sm sm:text-sm mb-3 text-white">Invoice City</label>
            <input type="text" id=""
                   class="shadow-sm bg-gray-50  border-gray-300 text-gray-900 text-sm rounded-full w-full p-3.5"
                   required>
          </div>
          <div class="relative mb-6">
            <label for="InvoiceCountry"
                   class="lg:text-xl md:text-base text-sm sm:text-sm text-white">Invoice Country</label>
            <input type="text" id=""
                   class="shadow-sm bg-gray-50  border-gray-300 text-gray-900 text-sm rounded-full w-full p-3.5"
                   required>
          </div>
        </div>
        <div class="flex float-right">
          <a href="#" class=" inline-block font-Agrandir  text-lg text-white rounded-md border border-white hover:text-[#000] hover:bg-[#fff] hover:border-transparent focus:outline-none focus:ring-2 focus:bg-[#fff] focus:ring-offset-2 mr-4 px-3 py-2"> Terms and Conditions</a>
          <a href="#" class=" inline-block font-Agrandir  text-lg text-[#000] rounded-md border bg-cyan border-cyan hover:text-[#fff] hover:bg-[#0000] hover:border-[#fff] focus:outline-none focus:ring-2 focus:bg-[#fff] px-3 py-2">Pay</a>
        </div>
      </form>
    </div>

    <!-- /main -->
  </div>

  @include('sections.sidebar')
</div>
@endsection
