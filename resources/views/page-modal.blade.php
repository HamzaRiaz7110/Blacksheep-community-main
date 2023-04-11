<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon-32x32.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class=" p-20 bg-[#062D49]">



    <button id="open" class="px-5 py-2 bg-rose-500 hover:bg-rose-700 text-white cursor-pointer rounded-md">
        payment
    </button>
    <button id="open1" class="px-5 py-2 bg-rose-500 hover:bg-rose-700 text-white cursor-pointer rounded-md">
        incomplete
    </button>
    <button id="open2" class="px-5 py-2 bg-rose-500 hover:bg-rose-700 text-white cursor-pointer rounded-md">
        complete
    </button>
    <button id="open3" class="px-5 py-2 bg-rose-500 hover:bg-rose-700 text-white cursor-pointer rounded-md">
        congratulations
    </button>
    <!-- 3rd party Payment modal -->
    <div>

        <div id="overlay" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>
        <div id="dialog"
            class="hidden w-[300px] sm:w-[400px] md:w-[70%] xl:w-[40%] lg:w-[50%] fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  bg-white rounded-3xl px-6 py-6 space-y-5 font-thin font-ppeiko drop-shadow-lg">
            <span id="close" class="block text-white text-4xl cursor-pointer">
                <i
                    class="fa-solid fa-xmark text-base fa-cross px-2 py-1.5 bg-[#F26F5B] absolute right-2 top-2 rounded-full"></i>
            </span>
            <div class="flex flex-row">
                <div class="sm:w-[100%] md:w-[70%] ">
                    <h1 class="text-xl sm:text-xl md:text-3xl lg:text-4xl mb-0 sm:mb-0 md:mb-10">Almost there!</h1>
                    <div>
                        <img src="./images/mobile image.png" class="w-[80%] block md:hidden " alt="">
                    </div>
                    <div class="py-3 font-Agrandir w-[90%]">
                        <p>
                            You will now be leaving our website and your payment will be processed through a
                            third
                            party.
                        </p>
                    </div>
                    <div class="flex">
                        <!-- This button is used to close the dialog -->
                                  <a href="#"  id="close" class=" inline-block font-Agrandir  text-lg text-[#000] rounded-md border bg-cyan border-cyan hover:text-cyan hover:bg-[#0000] hover:border-cyan focus:outline-none focus:ring-2 focus:bg-[#fff] px-3 py-2">Proceed with Payment</a>
    
                    </div>
                </div>
                <div>
                    <img src="./images/MicrosoftTeams-image (1).png" class="w-full hidden md:block " alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- incomplete -->

    <div>
        <div id="overlay1" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>
        <div id="dialog1"
            class="hidden w-[300px] sm:w-[400px] md:w-[70%] xl:w-[40%] lg:w-[70%] fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  bg-white rounded-3xl px-6 py-6 space-y-5 font-thin font-ppeiko drop-shadow-lg">
            <span id="close1" class="block text-white text-4xl cursor-pointer">
                <i
                    class="fa-solid fa-xmark text-base fa-cross px-2 py-1.5 bg-[#F26F5B] absolute right-2 top-2 rounded-full"></i>
            </span>
            <div class="flex flex-row">
                <div class="sm:w-[100%] md:w-[70%] ">
                    <h1 class="text-xl sm:text-xl md:text-3xl lg:text-4xl mb-0 sm:mb-0 md:mb-10">OOPS! Registration is
                        incomplete</h1>
                    <div>
                        <img src="./images/MicrosoftTeams-image (2).png" class="block md:hidden " alt="">
                    </div>
                    <div class="py-3 font-Agrandir">
                        <p>
                            Please fill out all required fields, check the three boxes before you confirm.
                            <br><br>
                            Thank you,
                            <br><br>
                            the tBSI TEAM
                        </p>
                    </div>
                </div>
                <div>
                    <img src="./images/MicrosoftTeams-image (2).png" class=" mt-10 hidden md:block " alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- complete Payment modal -->
    <div>

        <div id="overlay2" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>
        <div id="dialog2"
            class="hidden w-[300px] sm:w-[400px] md:w-[70%] xl:w-[40%] lg:w-[50%] fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  bg-white rounded-3xl px-6 py-6 space-y-5 font-thin font-ppeiko drop-shadow-lg">
            <span id="close2" class="block text-white text-4xl cursor-pointer">
                <i
                    class="fa-solid fa-xmark text-base fa-cross px-2 py-1.5 bg-[#F26F5B] absolute right-2 top-2 rounded-full"></i>
            </span>
            <div class="flex flex-row">
                <div class="sm:w-[100%] md:w-[70%] ">
                    <h1 class="text-xl sm:text-xl md:text-3xl lg:text-4xl mb-0 sm:mb-0 md:mb-10">Payment complete!</h1>
                    <div>
                        <img src="./images/mobile image.png" class="w-[80%] block md:hidden " alt="">
                    </div>
                    <div class="py-3 font-Agrandir w-[90%]">
                        <p>
                            Thank you for your payment, we are now ready to process your membership
                            With your annual payment your benefits are;


                        <div class="flex
                                            items-center pl-2 text-black ">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" text-[#F26F5B] mr-3 h-5 w-5" fill="none"
                                viewBox="0 0 24
                                            24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                                13l4 4L19
                                                7" />
                            </svg>
                            10+
                            benefits
                        </div>
                        <div class="  flex
                                            items-center pl-2 text-black ">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" text-[#F26F5B] mr-3 h-5 w-5" fill="none"
                                viewBox="0 0 24
                                            24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                                13l4 4L19
                                                7" />
                            </svg>
                            10+
                            benefits
                        </div>
                        <div class=" flex
                                            items-center pl-2 text-black ">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" text-[#F26F5B] mr-3 h-5 w-5" fill="none"
                                viewBox="0 0 24
                                            24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                                13l4 4L19
                                                7" />
                            </svg>
                            10+
                            benefits
                        </div>
                        <div class="  flex
                                            items-center pl-2 text-black ">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" text-[#F26F5B] mr-3 h-5 w-5" fill="none"
                                viewBox="0 0 24
                                            24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                                13l4 4L19
                                                7" />
                            </svg>
                            10+
                            benefits
                        </div>
                        </p>
                    </div>
                </div>
                <div>
                    <img src="./images/MicrosoftTeams-image (1).png" class="w-full hidden md:block " alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- congratulations -->

    <div>
        <div id="overlay3" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>
        <div id="dialog3"
            class="hidden w-[300px] sm:w-[400px] md:w-[70%] xl:w-[40%] lg:w-[70%] fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  bg-white rounded-3xl px-6 py-6 space-y-5 font-thin font-ppeiko drop-shadow-lg">
            <span id="close3" class="block text-white text-4xl cursor-pointer">
                <i
                    class="fa-solid fa-xmark text-base fa-cross px-2 py-1.5 bg-[#F26F5B] absolute right-2 top-2 rounded-full"></i>
            </span>
            <div class="flex flex-row">
                <div class="sm:w-[100%] md:w-[70%] ">
                    <h1 class="text-xl sm:text-xl md:text-3xl lg:text-4xl ">Congratulations - you
                        are in!</h1>
                    <div>
                        <img src="./images/MicrosoftTeams-image (2).png" class="block md:hidden" alt="">
                    </div>
                    <div class="py-3 font-Agrandir">
                        <p>
                            To connect 1 million outliers from all around the world over 12 narratives, and to learn
                            together how these should and can be impacted - and do it too.
                            <br><br>
                            tBSI TEAM
                        </p>
                    </div>
                    <div class="flex space-x-4">
                        <!-- This button is used to close the dialog -->

                            <a href="#"  id="close" class=" inline-block font-Agrandir  text-lg text-[#000] rounded-md border bg-cyan border-cyan hover:text-cyan hover:bg-[#0000] hover:border-cyan focus:outline-none focus:ring-2 focus:bg-[#fff] px-3 py-2">Activate now</a> 

                            <a href="#"  id="close" class=" inline-block font-Agrandir  text-lg text-[#000] rounded-md border bg-white border-[#000] hover:text-cyan hover:bg-[#0000] hover:border-cyan focus:outline-none focus:ring-2 focus:bg-[#fff] px-3 py-2">Activate later</a>    

                    </div>
                </div>
                <div>
                    <img src="./images/MicrosoftTeams-image (2).png" class=" mt-10 hidden md:block " alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript code -->
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

        var openButton1 = document.getElementById('open1');
        var dialog1 = document.getElementById('dialog1');
        var closeButton1 = document.getElementById('close1');
        var overlay1 = document.getElementById('overlay1');

        // show the overlay and the dialog
        openButton1.addEventListener('click', function () {
            dialog1.classList.remove('hidden');
            overlay1.classList.remove('hidden');
        });

        // hide the overlay and the dialog
        closeButton1.addEventListener('click', function () {
            dialog1.classList.add('hidden');
            overlay1.classList.add('hidden');
        });

        var openButton2 = document.getElementById('open2');
        var dialog2 = document.getElementById('dialog2');
        var closeButton2 = document.getElementById('close2');
        var overlay2 = document.getElementById('overlay2');

        // show the overlay and the dialog
        openButton2.addEventListener('click', function () {
            dialog2.classList.remove('hidden');
            overlay2.classList.remove('hidden');
        });

        // hide the overlay and the dialog
        closeButton2.addEventListener('click', function () {
            dialog2.classList.add('hidden');
            overlay2.classList.add('hidden');
        });


        var openButton3 = document.getElementById('open3');
        var dialog3 = document.getElementById('dialog3');
        var closeButton3 = document.getElementById('close3');
        var overlay3 = document.getElementById('overlay3');

        // show the overlay and the dialog
        openButton3.addEventListener('click', function () {
            dialog3.classList.remove('hidden');
            overlay3.classList.remove('hidden');
        });

        // hide the overlay and the dialog
        closeButton3.addEventListener('click', function () {
            dialog3.classList.add('hidden');
            overlay3.classList.add('hidden');
        });
    </script>

</body>

</html>