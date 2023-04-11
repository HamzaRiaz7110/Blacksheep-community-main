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
        connective
    </button>
    <button id="open1" class="px-5 py-2 bg-rose-500 hover:bg-rose-700 text-white cursor-pointer rounded-md">
        Book Detail
    </button>
    <button id="open2" class="px-5 py-2 bg-rose-500 hover:bg-rose-700 text-white cursor-pointer rounded-md">
        complete
    </button>
    <button id="open3" class="px-5 py-2 bg-rose-500 hover:bg-rose-700 text-white cursor-pointer rounded-md">
        connective
    </button>
    <!-- connective-->
    <div>
        <div id="overlay" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>
        <div id="dialog" class="absolute mt-32 mb-32 hidden w-[300px] sm:w-[400px] md:w-[70%] xl:w-[40%] lg:w-[70%]  z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  bg-white rounded-3xl px-6 py-7 space-y-5 font-thin font-ppeiko drop-shadow-lg">
            <span id="close" class="block text-white text-4xl cursor-pointer">
                <i
                    class="fa-solid fa-xmark text-base fa-cross px-2 py-1.5 bg-[#F26F5B] absolute right-2 top-2 rounded-full"></i>
            </span>
            <div class="flex flex-row">
                <div class="sm:w-[100%] md:w-[100%] ">
                    <div class="flex justify-between mb-16">
                        <h1 class="text-xl sm:text-xl md:text-3xl lg:text-4xl font-thin font-ppeiko ">Connective Powers <br> of Criticism (free course)</h1>
                        <p class="text-[#062D49]">You are not logged in as a member <i class="text-[#66C7C8] bi bi-arrow-right"></i></p>
                    </div>

                    <div class="flex justify-between mb-8">
                        <p class="text-[#66C7C8] w-[20%]">Course Content</h1>
                        <p class="w-[80%]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                    <div class="flex justify-between mb-8">
                        <p class="text-[#66C7C8] w-[20%]">Course Criteria</h1>
                        <p class="w-[80%]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                    </div>
                    <div class="flex justify-between mb-8">
                        <p class="text-[#66C7C8] w-[20%]">Time Commitment</h1>
                        <p class="w-[80%]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat sed diam.</p>
                    </div>
                    <div class="flex justify-between mb-8">
                        <p class="text-[#66C7C8] w-[20%]">Other Information</h1>
                        <p class="w-[80%]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat sed diam.</p>
                    </div>


                <hr class="h-px my-3 bg-[#66C7C8] border-0">
                <div class="flex justify-between">
                    <div class="text-4xl mt-2 mb-2">169,99€</div>
                    <div>
                        <a href=""><i class="text-[#66C7C8] bi bi-arrow-left"></i> Go back to overview</a>
                        <a href="#" class="bg-cyan inline-block font-Agrandir px-4 py-2 text-sm text-[#000] rounded-md border border-[#66C7C8] hover:text-cyan hover:bg-transparent hover:border-cyan focus:outline-none focus:ring-2 focus:bg-Cian focus:ring-offset-2 m-2">Start Course</a>
                    </div>
                </div>
                <hr class="h-px my-3 bg-[#66C7C8] border-0">
                </div>
            </div>
        </div>
    </div>

    <!-- book details -->

    <div>
        <div id="overlay1" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>
        <div id="dialog1" class="absolute mt-32 mb-32 hidden w-[300px] sm:w-[400px] md:w-[70%] xl:w-[40%] lg:w-[70%]  z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  bg-white rounded-3xl px-6 py-7 space-y-5 font-thin font-ppeiko drop-shadow-lg">
            <span id="close1" class="block text-white text-4xl cursor-pointer">
                <i
                    class="fa-solid fa-xmark text-base fa-cross px-2 py-1.5 bg-[#F26F5B] absolute right-2 top-2 rounded-full"></i>
            </span>
            <div class="flex flex-row">
                <div class="sm:w-[100%] md:w-[100%] ">
                    <div class="flex justify-between mb-16">
                        <h1 class="text-xl sm:text-xl md:text-3xl lg:text-4xl font-thin font-ppeiko ">Book Details</h1>
                        <p class="text-[#062D49]">You are not logged in as a member <i class="text-[#66C7C8] bi bi-arrow-right"></i></p>
                    </div>

                    <div class="flex justify-between mb-8">
                        <p class="w-[80%]">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" 
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum"</p>
                        </p>
                    </div>
                </div>
            </div>    
                <hr class="h-px my-3 bg-[#66C7C8] border-0">
                <div class="flex justify-between">
                    <div class="text-4xl mt-2 mb-2"></div>
                    <div class="mt-3">
                        <a href="#" class="bg-cyan inline-block font-Agrandir px-4 py-2 text-sm text-[#000] rounded-md border border-[#66C7C8] hover:text-cyan hover:bg-transparent hover:border-cyan focus:outline-none focus:ring-2 focus:bg-Cian focus:ring-offset-2 m-2">Buy Book</a>
                    </div>
                </div>
                <hr class="h-px my-3 bg-[#66C7C8] border-0">
                </div>
            </div>
        </div>
    </div>
    <!-- course name -->
    <div>
        <div id="overlay2" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>
        <div id="dialog2" class="absolute mt-32 mb-32 hidden w-[300px] sm:w-[400px] md:w-[70%] xl:w-[40%] lg:w-[70%]  z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  bg-white rounded-3xl px-6 py-7 space-y-5 font-thin font-ppeiko drop-shadow-lg">
            <span id="close2" class="block text-white text-4xl cursor-pointer">
                <i
                    class="fa-solid fa-xmark text-base fa-cross px-2 py-1.5 bg-[#F26F5B] absolute right-2 top-2 rounded-full"></i>
            </span>
            <div class="flex flex-row">
                <div class="sm:w-[100%] md:w-[100%] ">
                    <div class="flex justify-between mb-16">
                        <h1 class="text-xl sm:text-xl md:text-3xl lg:text-4xl font-thin font-ppeiko ">Course Name</h1>
                        <p class="text-[#062D49]">You are not logged in as a member <i class="text-[#66C7C8] bi bi-arrow-right"></i></p>
                    </div>

                    <div class="flex justify-between mb-8">
                        <p class="w-[80%]">Thank you for starting this course it will help you significantly in developing thought leader sidlls. The only thing before we start sending you the links to the content is payment. We also want to point out the membership offerings for this course</p>
                        <p class="w-[20%]">
                        </p>
                    </div>
                    <div class="flex justify-between mb-8">
                        <p class="w-[80%]">Benefit from your full membership registration and pay xx less for
                            this training Or se ect Lifetime membership and get this training for free (and much more)</p>
                        <p class="w-[20%]"><a href="#" class="bg-cyan inline-block font-Agrandir px-4 py-2 text-sm text-[#000] rounded-md border border-[#66C7C8] hover:text-cyan hover:bg-transparent hover:border-cyan focus:outline-none focus:ring-2 focus:bg-Cian focus:ring-offset-2 m-2">Register Paid</a>

                        </p>
                    </div>
                    <div class="flex justify-between mb-8">
                        <p class="w-[80%]">I want to try out this training first before commit a paid membership</p>
                        <p class="w-[20%]"><a href="#" class="bg-cyan inline-block font-Agrandir px-4 py-2 text-sm text-[#000] rounded-md border border-[#66C7C8] hover:text-cyan hover:bg-transparent hover:border-cyan focus:outline-none focus:ring-2 focus:bg-Cian focus:ring-offset-2 m-2">Register Free</a>

                        </p>
                    </div>
                </div>
            </div>    
                <hr class="h-px my-3 bg-[#66C7C8] border-0">
                <div class="flex justify-between">
                    <div class="text-4xl mt-2 mb-2">169,99€</div>
                    <div class="mt-3">
                        <a href=""><i class="text-[#66C7C8] bi bi-arrow-left"></i> Go back to overview</a>
                    </div>
                </div>
                <hr class="h-px my-3 bg-[#66C7C8] border-0">
                </div>
            </div>
        </div>
    </div>

    <!-- connective -->

    <div>
        <div id="overlay3" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>
        <div id="dialog3" class="absolute mt-32 mb-32 hidden w-[300px] sm:w-[400px] md:w-[70%] xl:w-[40%] lg:w-[70%]  z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2  bg-white rounded-3xl px-6 py-7 space-y-5 font-thin font-ppeiko drop-shadow-lg">
            <span id="close3" class="block text-white text-4xl cursor-pointer">
                <i
                    class="fa-solid fa-xmark text-base fa-cross px-2 py-1.5 bg-[#F26F5B] absolute right-2 top-2 rounded-full"></i>
            </span>
            <div class="flex flex-row">
                <div class="sm:w-[100%] md:w-[100%] ">
                    <div class="flex justify-between mb-16">
                        <h1 class="text-xl sm:text-xl md:text-3xl lg:text-4xl font-thin font-ppeiko ">Connective Powers <br> of Criticism (free course)</h1>
                        <p class="text-[#062D49]">You are not logged in as a member <i class="text-[#66C7C8] bi bi-arrow-right"></i></p>
                    </div>

                    <div class="flex justify-between mb-8">
                        <p class="text-[#66C7C8] w-[20%]">Course Content</h1>
                        <p class="w-[80%]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                    <div class="flex justify-between mb-8">
                        <p class="text-[#66C7C8] w-[20%]">Course Criteria</h1>
                        <p class="w-[80%]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                    </div>
                    <div class="flex justify-between mb-8">
                        <p class="text-[#66C7C8] w-[20%]">Time Commitment</h1>
                        <p class="w-[80%]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat sed diam.</p>
                    </div>

                    <div class="flex justify-between mb-8">
                        <p class="text-[#66C7C8] w-[20%]">Reviews</h1>
                        <div class="w-[80%]"><div class="font-Agrandir p-2 rounded-xl border-2 border-[#66C7C8]">
                            <div class="custom-scrollbar overflow-auto h-24 ">
                                <div class="flex">
                                    <div class="mr-4"><img src="./images/Ellipse 1.png" alt=""></div>
                                    <div>
                                        <p><b>Title</b><span class="text-xs text-[#666666] ml-2">1h</span></p>
                                        <p class="text-sm">Lorem Ipsum is not simply random text. It has roots in a piece. Lorem Ipsum is not simply random text. It has roots in a piece.</p>
                                        <div class="flex">
                                            <img class="mr-1" src="./images/five.png" alt="">
                                            <img class="mr-1" src="./images/five.png" alt="">
                                            <img class="mr-1" src="./images/four.png" alt="">
                                            <img class="mr-1" src="./images/four.png" alt="">
                                            <img class="mr-1" src="./images/four.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="h-px my-3 bg-[#66C7C8] border-0">
                <div class="flex justify-between">
                    <div class="text-4xl mt-2 mb-2">169,99€</div>
                    <div>
                        <a href=""><i class="text-[#66C7C8] bi bi-arrow-left"></i> Go back to overview</a>
                        <a href="#" class="bg-cyan inline-block font-Agrandir px-4 py-2 text-sm text-[#000] rounded-md border border-[#66C7C8] hover:text-cyan hover:bg-transparent hover:border-cyan focus:outline-none focus:ring-2 focus:bg-Cian focus:ring-offset-2 m-2">Start Course</a>
                    </div>
                </div>
                <hr class="h-px my-3 bg-[#66C7C8] border-0">
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