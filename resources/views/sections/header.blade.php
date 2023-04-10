
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body class="bg-[#062D49]">
  <section class="container mx-auto p-6">
    <nav class="relative container mx-auto my-4">
      <!-- flex container for all items -->
      <div class="flex items-center justify-between mb-9">
        <!-- flex conatiner for logo/menu -->
        <div class="flex items-center space-x-20 ">
          <!-- logo -->
          <img class="w-[60%]" src="@asset('images/Logo (1).png')" alt="">
          <!-- left menu -->

        </div>
        <!-- Right Buttons menu  -->
        <div class="items-center space-x-6 font-bold lg:hidden">

        </div>
        <!-- hamberger -->
        <span id="menu-btn" class="block text-black text-4xl lg:hidden cursor-pointer">
                    <i id="menu-btn" class="fa-sharp fa-solid text-sm fa-house px-2 py-2 bg-[white] rounded-full"></i>
                </span>
      </div>
      <!-- mobile mneu -->
      <div id="menu"
           class="absolute hidden p-6 justify-center rounded-lg bg-[#062D49] left-6 right-6 top-28 z-50 shadow-lg shadow-cyan-500/50">
        <div class="flex flex-col space-y-6 text-white font-bold rounded-sm">
          <div class="flex rounded-md px-4 duration-300 cursor-pointer justify-end ">
            <span class="text-white mr-3 font-thin font-Agrandir"><a href="/homepage.html"> Home Page </a></span>
            <i class="text-cyan bi bi-house-door"></i>
          </div>
          <div class="flex  rounded-md px-4 duration-300 cursor-pointer justify-end ">
            <span class="text-white mr-3 font-thin  font-Agrandir"><a href="/memberLogin.html">Member Login </a></span>
            <i class="text-cyan bi bi-person-circle"></i>
          </div>

          <div class="flex rounded-md px-4 duration-300 cursor-pointer justify-end ">
            <span class="text-white mr-3 font-thin  font-Agrandir"><a href="/mission-vision.html">Mission Vision </a></span>
            <i class="text-cyan bi bi-person-circle"></i>
          </div>
          <div class="flex rounded-md px-4 duration-300 cursor-pointer justify-end ">
            <span class="text-white mr-3 font-thin  font-Agrandir"><a href="/contact.html" >Ask a Question </a></span>
            <i class="text-cyan bi bi-question-circle"></i>
          </div>

          <hr class="w-[100%] h-px bg-[#66C7C8] border-0">
          <div class="flex flex-row justify-center space-x-4">
            <i class="text-cyan bi bi-facebook"></i>
            <i class="text-cyan bi bi-instagram"></i>
            <i class="text-cyan bi bi-youtube"></i>
            <i class="text-cyan bi bi-linkedin"></i>
          </div>
        </div>
      </div>
    </nav>
{{--  <a class="brand" href="{{ home_url('/') }}">--}}
{{--    {!! $siteName !!}--}}
{{--  </a>--}}

{{--  @if (has_nav_menu('primary_navigation'))--}}
{{--    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">--}}
{{--      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}--}}
{{--    </nav>--}}
{{--  @endif--}}
