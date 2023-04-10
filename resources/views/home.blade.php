@extends('layouts.app')

@section('content')
  <!-- main -->
  <div class=" xl:flex xl:flex-row xl:justify-center lg:flex lg:flex-row lg:justify-center">
    <div class=" xl:w-[80%] lg:w-[80%] sm:w-[100%] md:w-[100%]">
      <div class="min-h-screen flex bg-[#062D49] ">
        <main class="flex-1 min-w-0 px-2">

          <div>
            <div class="xl:h-60 sm:h-40 justify-between flex lg:flex-row
                           relative mb-[-24px] sm:mb-[0px]">
              <div
                class="border-2 text-center
                            border-[#D1D1CB] m-3 flex xl:h-60 xl:w-60 lg:h-60 lg:w-60 md:h-52 md:w-52 sm:h-48 sm:w-48 h-36 w-36 items-center justify-center rounded-full flex-col absolute lg:left-0 lg:top-0 sm:left-0 sm:top-0">
                <a href="/experience" class="font-ppeiko font-thin md:text-md lg:text-4xl
                              xl:text-4xl md:text-2xl text-white xl:pb-4 lg:pb-4 md:pb-4 pb-0  text-base sm:text-3xl">Black Sheep<br>Experience</a>
                <a href="/experience" class="text-white text-2xl"> <i
                    class="bi bi-arrow-right"></i></a>
              </div>
              <div
                class="xl:h-96 xl:w-96 lg:h-80 lg:w-80 md:h-60  md:w-60 sm:h-48 sm:w-48  h-36 w-36 border-2 text-center
                            border-cyan flex absolute items-center justify-center rounded-full flex-col lg:right-0 lg:top-14 md:top-14 md:right-10 right-0 sm:top-20 top-20">
                <a href="/pricing/" class="font-ppeiko font-thin md:text-md lg:text-4xl
                            xl:text-5xl text-white xl:pb-4 lg:pb-4 md:pb-4 pb-0 text-base sm:text-3xl">Connect<br> with 8000+ <br>others</a>
                <a href="/pricing/" class="text-[#66C7C8] text-2xl"> <i
                    class="bi bi-arrow-right"></i></a>

              </div>
            </div>
            <div class="middle sm:order-1">
              <div class="flex flex-col items-center justify-center ">
                <img class="xl:w-max lg:w-max sm:w-60  md:w-96 lg:mt-5 md:mt-7 w-60 sm:mt-10 mt-52" src="@asset('images/Rectangle.png')" alt="">
              </div>
            </div>
            <div class="justify-between flex lg:flex-row
                           relative mb-[-24px] sm:mb-[0px]">
              <div
                class="border-2 text-center
                            border-red m-3 flex xl:h-64 xl:w-64 lg:w-64 lg:h-64  md:h-60 md:w-60 sm:h-48 sm:w-48  h-36 w-36 items-center justify-center rounded-full absolute flex-col lg:left-0 lg:-top-20 sm:top-16">
                <a href="/blog/" class="font-ppeiko font-thin sm:text-3xl md:text-md lg:text-4xl
                              xl:text-4xl text-white xl:pb-4 lg:pb-4 md:pb-4 pb-0 text-base">tBSI<br>Resourse<br>Center</a>
                <a href="/blog/" class="text-red text-2xl"><i class="bi bi-arrow-right"></i></a>
              </div>
              <div
                class="xl:h-60 xl:w-60 lg:h-60 lg:w-60 md:h-52 md:w-52 sm:h-48 sm:w-48 h-36 w-36 border-2 text-center
                            border-yellow flex  items-center justify-center rounded-full flex-col absolute lg:right-0 lg:top-0 md:-top-10 md:right-10 sm:top-0 top-16 right-0">
                <a href="/courses/" class="font-ppeiko font-thin sm:text-3xl md:text-md lg:text-4xl
                            xl:text-2xl text-white xl:pb-4 lg:pb-4 md:pb-4 pb-0 text-base">Books<br> & Courses</a>
                <a href="/courses/" class="text-yellow text-2xl"><i
                    class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

        </main>
      </div>

    </div>
    <!-- /main -->
    @include('sections.sidebar')

@endsection
