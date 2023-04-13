@extends('layouts.app')

@section('content')
  <!-- main -->
  <div class=" xl:flex xl:flex-row xl:justify-center lg:flex lg:flex-row lg:justify-center">
    <div class=" xl:w-[80%] lg:w-[80%] sm:w-[100%] md:w-[100%]">
      <div class="flex bg-[#062D49] ">
        <main class="flex-1  px-2">

          <div>
            <div class="xl:h-60 sm:h-40 justify-between flex lg:flex-row
                           relative mb-[-24px] sm:mb-[0px]">
              <div
                class="border-2 text-center
                            border-[#D1D1CB] m-3 flex xl:h-[281px] xl:w-[281px] lg:h-60 lg:w-60 md:h-52 md:w-52 sm:h-48 sm:w-48 h-36 w-36 items-center justify-center rounded-full flex-col absolute lg:left-6 lg:top-12 sm:left-0 sm:top-0">
                <a href="/experience" class="font-ppeiko font-thin md:text-md lg:text-4xl
                              xl:text-4xl md:text-2xl text-white xl:pb-4 lg:pb-4 md:pb-4 pb-0  text-base sm:text-3xl">Black Sheep<br>Experience</a>
                <a href="/experience" class="text-white text-2xl"> <i
                    class="bi bi-arrow-right"></i></a>
              </div>
              <div
                class="xl:h-96 xl:w-96 lg:h-80 lg:w-80 md:h-64  md:w-64 sm:h-48 sm:w-48  h-36 w-36 border-2 text-center
                            border-cyan flex absolute items-center justify-center rounded-full flex-col lg:right-0 lg:-top-16 md:top-14 md:right-10 right-0 sm:top-20 top-20 xl:mt-16 z-10">
                <a href="\pricing" class="font-ppeiko font-thin md:text-md lg:text-4xl
                            xl:text-5xl text-white xl:pb-4 lg:pb-4 md:pb-4 pb-0 text-base sm:text-3xl">Connect<br> with 8000+ <br>others</a>
                <a href="\pricing" class="text-[#66C7C8] text-2xl"> <i
                    class="bi bi-arrow-right"></i></a>

              </div>
            </div>
            <div class="middle sm:order-1">
              <div class="flex flex-col items-center justify-center relative">
                <img class="xl:w-max lg:ml-28 lg:-mt-10 lg:w-max sm:w-60  md:w-96 xl:-mt-[96px] xl:ml-12  md:mt-16 w-60 sm:mt-10 mt-52" src="@asset('images/Rectangle.png')" alt="">
                <i id="open" class="bi bi-play-fill text-white cursor-pointer xl:text-7xl lg:text-7xl md:text-7xl sm:text-5xl text-4xl absolute xl:top-[27%] xl:left-[49%] lg:top-[36%] lg:left-[52%] md:top-[47%] md:left-[45%] sm:top-[47%] sm:left-[45%] top-[68%] left-[45%]"></i>
                <!-- model -->
                <div>

                  <div id="overlay" class="fixed hidden z-40  inset-0 bg-gray-900 bg-opacity-60"></div>
                  <div id="dialog"
                       class=" h-3/4 hidden w-[300px] sm:w-[400px] md:w-[70%] xl:w-[90%] lg:w-[90%] fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  bg-transparent rounded-2xl  font-thin font-ppeiko drop-shadow-lg">
                                            <span id="close" class="block text-white text-4xl cursor-pointer bg-white">
                                                <i
                                                  class="fa-solid fa-xmark text-base text-black fa-cross px-2 py-1.5 bg-white absolute right-2 -top-10 rounded-full"></i>
                                            </span>
                    <!--video here  -->

                    <iframe class="rounded-2xl" width="100%" height="100%" src="https://www.youtube.com/embed/m91SBnRxlYQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                  </div>
                </div>
              </div>
            </div>
            <div class="justify-between flex lg:flex-row
                           relative mb-[-24px] sm:mb-[0px]">
              <div
                class="border-2 text-center
                            border-red m-3 flex xl:h-[327px] xl:w-[327px] lg:w-64 lg:h-64  md:h-60 md:w-60 sm:h-48 sm:w-48  h-36 w-36 items-center justify-center rounded-full absolute flex-col lg:left-6 lg:-top-32 xl:-top-40 sm:top-16">
                <a href="/blog" class="font-ppeiko font-thin sm:text-3xl md:text-md lg:text-4xl
                              xl:text-4xl text-white xl:pb-4 lg:pb-4 md:pb-4 pb-0 text-base">tBSI<br>Resourse<br>Center</a>
                <a href="/blog" class="text-red text-2xl"><i class="bi bi-arrow-right"></i></a>
              </div>
              <div
                class="xl:h-[281px] xl:w-[281px] lg:h-60 lg:w-60 md:h-52 md:w-52 sm:h-48 sm:w-48 h-36 w-36 border-2 text-center
                            border-yellow flex  items-center justify-center rounded-full flex-col absolute lg:right-0 lg:-top-20 xl:-top-28 md:-top-6 md:right-10 sm:top-0 top-16 right-0">
                <a href="\bsi-courses" class="font-ppeiko font-thin sm:text-3xl md:text-md lg:text-4xl
                            xl:text-4xl text-white xl:pb-4 lg:pb-4 md:pb-4 pb-0 text-base">Books<br> & Courses</a>
                <a href="\bsi-courses" class="text-yellow text-2xl"><i
                    class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

        </main>
      </div>

    </div>
    <!-- /main -->
    @include('sections.sidebar')


    <script>
      var openButton = document.getElementById('open');
      var dialog = document.getElementById('dialog');
      var closeButton = document.getElementById('close');
      var overlay = document.getElementById('overlay');

      // show the overlay and the dialog
      openButton.addEventListener('click', function () {
        dialog.classList.remove('hidden');
        overlay.classList.remove('hidden');
      });

      // hide the overlay and the dialog
      closeButton.addEventListener('click', function () {
        dialog.classList.add('hidden');
        overlay.classList.add('hidden');
      });

    </script>
@endsection