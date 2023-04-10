@extends('layouts.app')

@section('content')
  <hr class="xl:w-[80%] lg:w-[80%] sm:w-[100%] md:w-[100%] h-px my-8 bg-[#66C7C8] border-0">
<div class=" flex flex-row">
  <div class=" xl:w-[80%] lg:w-[80%] sm:w-[100%] md:w-[100%]">
    <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-3 xl:grid-cols-3 ">
      <!-- card -1 -->
      <div class="mt-2 mr-3 mb-3">
        <div class="text-[white]">
          <p class="font-Agrandir">We want to truly know our members to our platform. The way we like
            to learn more is by collecting so called Black Sheep Experience. It’s about a situation
            where you made a conscious or unconscious decision unlocking new potential in your or
            others life. In hindsight your BSE is a positive notion, not to forget the moment of
            impact felt uncomfortable. It turns out to be a powerful source.</p>
        </div>
      </div>
      <!-- card-2 -->
      <div class="mt-2 mr-3 mb-3">
        <div class="text-[white]">
          <p class="font-Agrandir">of inspiration for members all around the world. Below you have
            access to the Black Sheep Experiences from our founders as well as a handful of
            summaries from current members. All these Black Sheep Experiences are written by a
            professional writer based on the completion of a questionnaire you will be asked to
            complete when you sign up for one of our paid memberships.</p>
        </div>
      </div>
      <!-- card-3 -->
      <div>
        <img src="@asset('images/Rectangle 2.png')" class="w-full" alt="">
      </div>
    </div>
    <hr class="h-px my-8 bg-[#66C7C8] border-0">
    <div class="flex flex-col lg:flex-row xl:flex-row">
      <select class="js-example-basic-single" style="padding: 10px 14px;border-radius: 45px;margin-top: 10px;margin-bottom: 10px;margin-right: 10px;"
              name="state">
        <option value="Select Narrative">Select Narrative</option>
        <option value="Wyoming">Wyoming</option>
      </select>
      <select class="js-example-basic-single" style="padding: 10px 14px;border-radius: 45px;margin-top: 10px;margin-bottom: 10px;margin-right: 10px;"
              name="state">
        <option value="Select Continent">Select Continent</option>
        <option value="Wyoming">Wyoming</option>
      </select>
      <a href="#"
         class="inline-flex items-center px-5 py-2 text-base font-medium text-center border-[1px] text-white border-white rounded-3xl" style="margin-top: 10px;margin-bottom: 10px;margin-right: 10px;">
        Load Selection
      </a>

    </div>
    <div class="mt-5 flex xl:flex-row lg:flex-row md:flex-col sm:flex-col flex-col">
      <!-- card -1 -->
      <div class="xl:w-[60%] sm:w-[100%] md:w-[100%]">
        <h1 class="text-3xl text-[white] font-Agrandir">Randomly Selected</h1>
        <div class="font-Agrandir  bg-[white] p-2 sm:mr-[0px] xl:mr-5 lg:mr-5 rounded-xl mt-5">
          <div class="custom-scrollbar overflow-auto h-60 p-6">
            <h1 class="text-[black] text-xl font-Agrandir mb-5 font-bold"> Feeling an Outcast? Do
              not make
              this Mistake</h1>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen
            book.
            <br> <br>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen
            book.um is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            <br> <br>
            when an unknown printer took a galley of type and scrambled it to make a type specimen
            book.
            Lorem Ipsum is simply dummy text um is simply dummy text of the printing and typesetting
            industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            <br> <br>
            when an unknown printer took a galley of type and scrambled it to make a type specimen
            book.
            Lorem Ipsum is simply dummy text um is simply dummy text of the printing and typesetting
            industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen
            book.
            Lorem Ipsum is simply dummy text
            <br>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen
            book.
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen
            book.
          </div>
        </div>
      </div>

      <!-- card-3 -->
      <div
        class="mt-[20px] sm:mt-[20px] md:mt-[20px] lg:mt-[0px]  xl:mt-[0px]  xl:w-[40%]  sm:w-[100%] md:w-[100%]">
        <h1 class="text-3xl text-[white] font-Agrandir">Founder Experience</h1>
        <hr class="h-px my-3 bg-[#66C7C8] border-0">
        <div class="flex flex-row justify-between items-center text-[white] ">
          <img src="@asset('images/Ellipse 1.png')" alt="">
          <p>Lorem ipsum dolor, sit amet</p>
          <a href="#"
             class="inline-flex items-center px-3 py-1 text-sm font-medium text-center border-[1px] text-[#66C7C8] border-[#66C7C8] rounded-md">
            Read More
          </a>
        </div>
        <hr class="h-px my-3 bg-[#66C7C8] border-0">
        <div class="flex flex-row justify-between items-center text-[white] ">
          <img src="@asset('images/Ellipse 1.png')" alt="">
          <p>Lorem ipsum dolor, sit amet</p>
          <a href="#"
             class="inline-flex items-center px-3 py-1 text-sm font-medium text-center border-[1px] text-[#66C7C8] border-[#66C7C8] rounded-md">
            Read More
          </a>
        </div>
        <hr class="h-px my-3 bg-[#66C7C8] border-0">
        <div class="flex flex-row justify-between items-center text-[white] ">
          <img src="@asset('images/Ellipse 1.png')" alt="">
          <p>Lorem ipsum dolor, sit amet</p>
          <a href="#"
             class="inline-flex items-center px-3 py-1 text-sm font-medium text-center border-[1px] text-[#66C7C8] border-[#66C7C8] rounded-md">
            Read More
          </a>
        </div>
      </div>
    </div>

  </div>
  @include('sections.sidebar')
</div>
@endsection
