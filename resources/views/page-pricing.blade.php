@extends('layouts.app')

@section('content')
  <hr class="xl:w-[80%] lg:w-[80%] sm:w-[100%] md:w-[100%] h-px my-8 bg-[#66C7C8] border-0">
  <div class="flex flex-row">
    <div class=" xl:w-[80%] lg:w-[80%] sm:w-[100%] md:w-[100%]">
        <div class="grid gap-3 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 justify-items-center
        bg-[#062D49]">
            <!-- card 1 -->
            <card class=" rounded-xl xl:w-[365px] sm:w-[100%] md:w-[100%] flex flex-col 
                text-black">
                <!-- Pricing -->
                <div class="flex flex-row items-center justify-center rounded-t-[20px] pt-8 pb-8 bg-[#66C7C8] gap-3">
                    <div class="flex flex-row justify-center">
                        <img class="my-2" src="@asset('images/27.png')" alt="">
                    </div>

                </div>
                <!-- Pricing Additional Description -->
                <div class="grid grid-cols-12 bg-white 
                    px-4 rounded-b-[20px]
                    gap-y-3 pt-10 h-full">
                    <!-- Details 1 -->


                    <div class="col-span-11  flex
                            items-center 
                             pl-2 text-black ">
                        <h1 class="text-[28px]">Free tBSI Membership</h1>
                    </div>
                    <!-- Line -->
                    <div class="col-span-12 h-[1px] bg-white 
                            "></div>
                    <!-- Details 2 -->

                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class=" text-[#66C7C8] h-5 w-5" fill="none" viewBox="0 0 24
                                    24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                        13l4 4L19
                                        7" />
                        </svg>
                    </div>

                    <div class="col-span-11  flex
                                    items-center text-xl pl-2 text-black ">Online Training available</div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class=" text-[#66C7C8] h-5 w-5" fill="none" viewBox="0 0 24
                                                    24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                                        13l4 4L19
                                                        7" />
                                        </svg>
                                    </div>
        
                                    <div class="col-span-11  flex
                                                    items-center text-xl pl-2 text-black ">Online Training available</div>

                    <!-- Details 4 -->
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class=" text-[#66C7C8] h-5 w-5" fill="none" viewBox="0 0 24
                                        24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                            13l4 4L19
                                            7" />
                        </svg>
                    </div>

                    <div class="col-span-11 flex text-xl
                                        items-center pl-2 text-black ">Access to Narrative feed</div>



                    <!-- Details 5 -->
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-[#66C7C8] h-5 w-5" fill="none" viewBox="0 0 24
                                            24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                                13l4 4L19
                                                7" />
                        </svg>
                    </div>

                    <div class="col-span-11  flex text-xl
                                            items-center pl-2 text-black ">No Access to Search Narrative Cloud</div>

                    <!-- Details 5 -->
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-[#66C7C8] h-5 w-5" fill="none" viewBox="0 0 24
                                            24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                                13l4 4L19
                                                7" />
                        </svg>
                    </div>

                    <div class="col-span-11  flex text-xl
                                            items-center pl-2 text-black ">Community Chat available</div>


                    <!-- CTA Button -->
                    <div class="col-span-12 mt-[80px]
                                            mb-5 
                                            text-white">
                                            <hr class="w-[100%] h-px bg-[#66C7C8] border-0">
                        <div class=" flex my-2 justify-center text-7xl text-black">
                            <h1 class="text-4xl">0000€</h1>
                        </div>
                        <hr class="w-[100%] h-px my-2 bg-[#66C7C8] border-0">
                        <button class="rounded mt-6
                                                hover:bg-teal-400
                                                bg-black
                                                w-full py-3"><a href="/free-black-sheep-membership/"> Register here for free</a></button>

                    </div>

                </div>
            </card>
            <!-- card 2 -->
            <card class="  rounded-xl xl:w-[365px] sm:w-[100%] md:w-[100%] flex flex-col 
            text-black">
                <!-- Pricing -->
                <div class="flex flex-row items-center justify-center pt-8 pb-8 rounded-t-[20px] bg-[#F26F5B] gap-3">
                    <div class="flex flex-row justify-center">
                        <img src="@asset('images/Frame 25 (1).png')" alt="">
                    </div>

                </div>
                <!-- Pricing Additional Description -->
                <div class="grid grid-cols-12 bg-white 
                px-4 rounded-b-[20px]
                gap-y-3 pt-10 h-full">
                    <!-- Details 1 -->


                    <div class="col-span-11 flex
                        items-center
                         pl-2 text-black ">
                        <h1 class="text-[28px]">Full tBSI Membership</h1>
                    </div>
                    <!-- Line -->
                    <div class="col-span-12 h-[1px] bg-white
                        "></div>
                    <!-- Details 2 -->

                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-[#F26F5B] h-5 w-5" fill="none" viewBox="0 0 24
                                24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                    13l4 4L19
                                    7" />
                        </svg>
                    </div>

                    <div class="col-span-11  flex
                                items-center   pl-2 text-black text-xl">Online Training 20% off</div>

                    <!-- Details 4 -->
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class=" text-[#F26F5B]  h-5 w-5" fill="none" viewBox="0 0 24
                                    24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                        13l4 4L19
                                        7" />
                        </svg>
                    </div>

                    <div class="col-span-11  flex
                                    items-center pl-2 text-black text-xl">Paid Think Tanks Available</div>



                    <!-- Details 5 -->
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class=" text-[#F26F5B] h-5 w-5" fill="none" viewBox="0 0 24
                                        24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                            13l4 4L19
                                            7" />
                        </svg>
                    </div>

                    <div class="col-span-11  flex
                                        items-center pl-2 text-black text-xl">Access to Narrative feed</div>

                    <!-- Details 5 -->
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class=" text-[#F26F5B]  h-5 w-5" fill="none" viewBox="0 0 24
                                        24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                            13l4 4L19
                                            7" />
                        </svg>
                    </div>

                    <div class="col-span-11  flex
                                        items-center pl-2 text-black text-xl">Access to Search Narrative Cloud</div>

                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" class=" text-[#F26F5B]  h-5 w-5" fill="none" viewBox="0 0 24
                                                            24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                                                13l4 4L19
                                                                7" />
                                            </svg>
                                        </div>
            
                                        <div class="col-span-11  flex
                                                            items-center pl-2 text-black text-xl">Community Chat available</div>
            
            
                    <!-- CTA Button -->
                    <div class="col-span-12 mt-[80px]
                                        mb-5 
                                        text-white">
                        <hr class="w-[100%] h-px bg-red border-0">
                        <div class=" flex my-2 justify-center text-4xl text-black">
                            <h1 class="text-4xl">240,000€</h1>
                        </div>
                        <hr class="w-[100%] h-px bg-red border-0">
                        <button class="rounded mt-6 hover:bg-red bg-black
                                            w-full py-3"><a href="/full-black-sheep-membership/"> Register with full
                                            benefits</a></button>

                    </div>

                </div>
            </card>
            <!-- card-3 -->
            <card class=" justify-self-center  rounded-xl xl:w-[365px] sm:w-[100%] md:w-[100%] flex flex-col 
                text-black">
                <!-- Pricing -->
                <div class="rounded-t-[20px] flex flex-row items-center justify-center pt-8 pb-8 bg-[#FFC10D] gap-3">
                    <div class="flex flex-row justify-center">
                        <img src="@asset('images/Frame 25.png')" alt="">
                    </div>

                </div>
                <!-- Pricing Additional Description -->
                <div class="grid grid-cols-12 bg-white 
                    px-4 rounded-b-[20px]
                    gap-y-3 pt-10 h-full">
                    <!-- Details 1 -->


                    <div class="col-span-11 text-2xl flex
                            items-center
                             pl-2 text-black ">
                        <h1 class="text-[28px]">Lifetime tBSI Membership</h1>
                    </div>
                    <!-- Line -->
                    <div class="col-span-12 h-[1px] bg-white
                            "></div>
                    <!-- Details 2 -->

                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class=" text-[#FFC10D] h-5 w-5" fill="none" viewBox="0 0 24
                                    24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                        13l4 4L19
                                        7" />
                        </svg>
                    </div>

                    <div class="col-span-11  flex
                                    items-center  text-xl pl-2 text-black ">Online Training included</div>

                    <!-- Details 4 -->
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class=" text-[#FFC10D]  h-5 w-5" fill="none" viewBox="0 0 24
                                        24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                            13l4 4L19
                                            7" />
                        </svg>
                    </div>

                    <div class="col-span-11  flex
                                        items-center pl-2 text-xl text-black ">2 Think Tanks included</div>

<div>
                        <svg xmlns="http://www.w3.org/2000/svg" class=" text-[#FFC10D]  h-5 w-5" fill="none" viewBox="0 0 24
                                        24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                            13l4 4L19
                                            7" />
                        </svg>
                    </div>

                    <div class="col-span-11  flex
                                        items-center pl-2 text-xl text-black ">Access to Narrative feed</div>


                    <!-- Details 5 -->
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class=" text-[#FFC10D]  h-5 w-5" fill="none" viewBox="0 0 24
                                            24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                                13l4 4L19
                                                7" />
                        </svg>
                    </div>

                    <div class="col-span-11  flex
                                            items-center pl-2 text-xl text-black ">Access to Search Narrative Cloud</div>

                    <!-- Details 5 -->
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class=" text-[#FFC10D]  h-5 w-5" fill="none" viewBox="0 0 24
                                            24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5
                                                13l4 4L19
                                                7" />
                        </svg>
                    </div>

                    <div class="col-span-11  flex
                                            items-center pl-2 text-xl text-black ">Community Chat available</div>


                    <!-- CTA Button -->
                    <div class="col-span-12 mt-[80px]
                                            mb-5 
                                            text-white">
                        <hr class="w-[100%] h-px bg-yellow border-0">
                        <div class=" flex my-2 justify-center text-4xl text-black">
                            <h1 class="text-4xl">1.250,00€</h1>
                        </div>
                        <hr class="w-[100%] h-px bg-yellow border-0">
                        <button class="rounded mt-6
                                                hover:bg-yellow
                                                bg-black
                                                w-full py-3"><a href="/lifetime-black-sheep-membership/"> Register with 
                                                lifetime benefits</a></button>

                    </div>

                </div>
            </card>
        </div>

        <!-- /main -->
    </div>
@endsection
