@extends('layouts.app')

@section('content')
  <hr class="xl:w-[100%] lg:w-[100%] sm:w-[100%] md:w-[100%] h-px my-8 bg-[#66C7C8] border-0">
<div>
  <div class=" xl:w-[100%] lg:w-[100%]  sm:w-[100%] md:w-[100%]">
    <section >
      <div class="lg:w-[50%] px-4 mx-auto max-w-screen-md">
        <form action="#" class="space-y-8  mb-11">
          <h1 class="font-ppeiko text-white font-thin text-3xl">Login</h1>
          <div>
            <label class="text-white ">tBSI user account</label>
            <input type="email" id="email" class=" mt-2 shadow-sm bg-gray-50  border-gray-300 text-gray-900 text-sm rounded-full focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"  required>
          </div>
          <div>
            <label class="text-white ">tBSI Password</label>
            <input type="password" id="subject" class=" mt-2 block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-full border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" required>
          </div>
          <div class="flex ">
            <a href="/homepage.html" class=" inline-block font-Agrandir  text-lg text-white rounded-md border border-white hover:text-[#000] hover:bg-[#fff] hover:border-transparent focus:outline-none focus:ring-2 focus:bg-[#fff] focus:ring-offset-2 mr-4 px-9 py-2"> Home</a>
            <a href="#" class=" inline-block font-Agrandir  text-lg text-[#000] rounded-md border bg-cyan border-cyan hover:text-[#fff] hover:bg-[#0000] hover:border-[#fff] focus:outline-none focus:ring-2 focus:bg-[#fff] mr-4 px-3 py-2">Confirm login</a>
            <a href="#" class=" inline-block font-Agrandir  text-lg text-white rounded-md border border-white hover:text-[#000] hover:bg-[#fff] hover:border-transparent focus:outline-none focus:ring-2 focus:bg-[#fff] focus:ring-offset-2 mr-4 px-3 py-2"> Reset password</a>
          </div>
        </form>
      </div>
    </section>

  </div>
</div>
@endsection
