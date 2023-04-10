@extends('layouts.app')

@section('content')
<div>
  <div class=" xl:w-[100%] lg:w-[100%]  sm:w-[100%] md:w-[100%]">
    <section >
      <div class="lg:w-[50%] px-4 mx-auto max-w-screen-md">
        <form action="#" class="space-y-8">
          <h1 class="font-ppeiko text-white font-thin text-3xl">Ask a Question</h1>
          <div>
            <input type="email" id="email" class="shadow-sm bg-gray-50  border-gray-300 text-gray-900 text-sm rounded-full focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Your email address" required>
          </div>
          <div>
            <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-full border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Subject" required>
          </div>
          <div class="sm:col-span-2">
            <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-2xl shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ask us anything"></textarea>
          </div>
          <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-md bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 bottom-1 border">Send your question</button>
        </form>
      </div>
    </section>
  </div>
</div>
@endsection
