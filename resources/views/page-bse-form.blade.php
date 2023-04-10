@extends('layouts.app')

@section('content')
<div>
  <div class=" xl:w-[100%] lg:w-[100%]  sm:w-[100%] md:w-[100%]">
    <section >
      <div class="lg:w-[50%] px-4 mx-auto max-w-screen-md">
        <form action="#" class="space-y-8">
          <h1 class="font-ppeiko text-white font-thin text-3xl">BSE Form</h1>
          <div>
            <label class="text-white ">Questions for Form in the making</label>
            <input type="email" id="email" class="mt-2 shadow-sm bg-gray-50  border-gray-300 text-gray-900 text-sm rounded-full focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Your email address" required>
          </div>
          <div>
            <label class="text-white ">Questions for Form in the making</label>
            <input type="text" id="subject" class="mt-2 block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-full border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Subject" required>
          </div>
          <div class="sm:col-span-2">
            <label class="text-white ">Questions for Form in the making</label>
            <textarea id="message" rows="6" class="mt-2 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-2xl shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ask us anything"></textarea>
          </div>
          <div class="flex float-right">
            <a href="#" class=" inline-block font-Agrandir  text-lg text-white rounded-md border border-white hover:text-[#000] hover:bg-[#fff] hover:border-transparent focus:outline-none focus:ring-2 focus:bg-[#fff] focus:ring-offset-2 mr-4 px-3 py-2">Submit form to BSI Writer</a>
          </div>
        </form>
      </div>
    </section>
  </div>
</div>
@endsection
