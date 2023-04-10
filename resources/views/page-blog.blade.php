@extends('layouts.app')

@section('content')
  <hr class="xl:w-[80%] lg:w-[80%] sm:w-[100%] md:w-[100%] h-px my-8 bg-[#66C7C8] border-0">
<div class=" flex flex-row mb-28">
  <div class="xl:w-[80%] lg:w-[80%]  sm:w-[100%] md:w-[100%]">

    <div class="flex flex-col lg:flex-row sm:flex-col md:flex-col xl:flex-row  font-eiko xl:space-x-3 md:space-x-0 sm:space-x-0 lg:space-x-3
            bg-[#062D49]">
      <!-- card 1 -->
      <card class=" xl:w-[100%] sm:w-[100%] md:w-[100%] flex flex-col
                    text-black mb-5">

        <div
          class="flex flex-row items-center justify-center pt-4 pb-4 bg-[#E7E7E7] rounded-t-2xl gap-3">
          <div class="flex flex-row justify-center">
            <h1 class="font-Agrandir text-3xl">Blogs</h1>
          </div>

        </div>

        <div class="rounded-b-2xl bg-white
                        px-4
                        gap-y-3 pt-10 ">

          <!-- para -->
          <div class="flex items-center  pl-2 text-black font-Agrandir h-36">Leadership, wisdom, business, authenticity - internet allows knowledge to flow freely to our all advantage. And some disadvantages too. Here you find great articles to dig around in. Enjoy!</div>
          <div class="flex flex-col justify-center items-center mt-24">
            <div class="relative inline-flex m-1 w-full">
              <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none"
                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
                <path
                  d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
                  fill="#648299" fill-rule="nonzero" />
              </svg>
              <select
                class="w-full border border-gray-300 rounded-full text-white h-10 pl-5 pr-10 bg-[#062D49] hover:border-gray-400 focus:outline-none appearance-none">
                <option>Select Narrative</option>
                <option>Red</option>

              </select>
            </div>
            <div class="relative inline-flex m-1 w-full">
              <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none"
                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
                <path
                  d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
                  fill="#648299" fill-rule="nonzero" />
              </svg>
              <select
                class="w-full border border-gray-300 rounded-full text-white h-10 pl-5 pr-10 bg-[#062D49] hover:border-gray-400 focus:outline-none appearance-none">
                <option>Select Continent</option>
                <option>Red</option>

              </select>
            </div>
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative w-full">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
              </div>
              <input type="search" id="default-search" class="block w-full mt-1 p-2 pl-10 text-sm text-gray-900 border border-[#062D49] rounded-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
            </div>
          </div>
          <!-- CTA Button -->
          <div class="flex flex-row mt-14 mb-5">
            <button class="rounded mt-2 m-2 text-black
                                                     font-Agrandir
                                                    border-[1px] border-[black]
                                                    w-full py-3">Search</button>
            <button class="rounded mt-2 m-2 text-black
                                                     font-Agrandir
                                                    border-[1px] border-[black]
                                                    w-full py-3">Most Recent</button>

          </div>
        </div>
      </card>
      <!-- card 2 -->
      <card class="mb-5 sm:mt-[20px] md:mt-[20px] lg:mt-[0px] xl:mt-[0px] xl:w-[100%] sm:w-[100%] md:w-[100%] flex flex-col
                text-black">

        <div
          class="flex flex-row items-center justify-center pt-4 pb-4 bg-[#E7E7E7] rounded-t-2xl gap-3">
          <div class="flex flex-row justify-center">
            <h1 class="font-Agrandir text-3xl">Interviews</h1>
          </div>

        </div>

        <div class="rounded-b-2xl bg-white
                    px-4
                    gap-y-3 pt-10 ">

          <!-- para -->
          <div class="flex items-center font-Agrandir pl-2 text-black h-36">Many great projects, initiatives and businesses are run by outliers (or: black sheep). Super inspiring people with super inspiring work who deserve a stage. Here you find Minke Tromp interviewing all kinds of great outliers</div>
          <div class="flex flex-col justify-center items-center mt-24">
            <!-- This is an example component -->
            <div class="relative inline-flex m-1 w-full">
              <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none"
                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
                <path
                  d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
                  fill="#648299" fill-rule="nonzero" />
              </svg>
              <select
                class="w-full border border-gray-300 rounded-full text-white h-10 pl-5 pr-10 bg-[#062D49] hover:border-gray-400 focus:outline-none appearance-none">
                <option>Select Narrative</option>
                <option>Red</option>

              </select>
            </div>
            <div class="relative inline-flex m-1 w-full">
              <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none"
                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
                <path
                  d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
                  fill="#648299" fill-rule="nonzero" />
              </svg>
              <select
                class="w-full border border-gray-300 rounded-full text-white h-10 pl-5 pr-10 bg-[#062D49] hover:border-gray-400 focus:outline-none appearance-none">
                <option>Select Continent</option>
                <option>Red</option>

              </select>
            </div>
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative w-full">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
              </div>
              <input type="search" id="default-search" class="block w-full mt-1 p-2 pl-10 text-sm text-gray-900 border border-[#062D49] rounded-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
            </div>
          </div>
          <!-- CTA Button -->
          <div class="flex flex-row mt-14 mb-5">
            <button class="rounded mt-2 m-2 text-black
                                                     font-Agrandir
                                                    border-[1px] border-[black]
                                                    w-full py-3">Search</button>
            <button class="rounded mt-2 m-2 text-black
                                                     font-Agrandir
                                                    border-[1px] border-[black]
                                                    w-full py-3">Most Recent</button>

          </div>
        </div>
      </card>
      <!-- card-3 -->
      <card class="mb-5 sm:mt-[20px] md:mt-[20px] lg:mt-[0px] xl:mt-[0px] xl:w-[100%] sm:w-[100%] md:w-[100%] flex flex-col
                    text-black">

        <div
          class="flex flex-row items-center justify-center pt-4 pb-4 bg-[#E7E7E7] rounded-t-2xl gap-3">
          <div class="flex flex-row justify-center">
            <h1 class="font-Agrandir text-3xl">Black Projects</h1>
          </div>

        </div>

        <div class="rounded-b-2xl bg-white
                        px-4
                        gap-y-3 pt-10 ">

          <!-- para -->
          <div class="flex items-center font-Agrandir pl-2 text-black h-36">Be real! Great ideas must be put to practice. Here you can read about our projects (and get inspired maybe to take your ideas to the next level too)</div>
          <div class="flex flex-col justify-center items-center mt-24">
            <!-- This is an example component -->
            <div class="relative inline-flex m-1 w-full">
              <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none"
                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
                <path
                  d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
                  fill="#648299" fill-rule="nonzero" />
              </svg>
              <select
                class="w-full border border-gray-300 rounded-full text-white h-10 pl-5 pr-10 bg-[#062D49] hover:border-gray-400 focus:outline-none appearance-none">
                <option>Select Narrative</option>
                <option>Red</option>

              </select>
            </div>
            <div class="relative inline-flex m-1 w-full">
              <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none"
                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
                <path
                  d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
                  fill="#648299" fill-rule="nonzero" />
              </svg>
              <select
                class="w-full border border-gray-300 rounded-full text-white h-10 pl-5 pr-10 bg-[#062D49] hover:border-gray-400 focus:outline-none appearance-none">
                <option>Select Continent</option>
                <option>Red</option>

              </select>
            </div>
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative w-full">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
              </div>
              <input type="search" id="default-search" class="block w-full mt-1 p-2 pl-10 text-sm text-gray-900 border border-[#062D49] rounded-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
            </div>
          </div>
          <!-- CTA Button -->
          <div class="flex flex-row mt-14 mb-5">
            <button class="rounded mt-2 m-2 text-black
                                                     font-Agrandir
                                                    border-[1px] border-[black]
                                                    w-full py-3">Search</button>
            <button class="rounded mt-2 m-2 text-black
                                                     font-Agrandir
                                                    border-[1px] border-[black]
                                                    w-full py-3">Most Recent</button>

          </div>
        </div>
      </card>
    </div>
  </div>
  @include('sections.sidebar')
</div>
@endsection
