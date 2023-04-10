@extends('layouts.app')

@section('content')
<div class=" bg-white rounded-2xl mt-20 p-2">
  <div class="h-[500px] custom-scrollbar overflow-auto">
    <hr class=" xl:w-[95%] lg:w-[95%] sm:w-[95%] md:w-[95%] h-px mx-auto my-8 bg-[#66C7C8] border-0">
    <div class="flex lg:flex-row sm:flex-col md:flex-col   gap-20 p-5">
      <div class="">
        <h1 class="font-Agrandir  font-ppeiko text-4xl">
          Misunderstood,<br> Lonely,<br> Underestimated
        </h1>
      </div>
      <div class="">
        <p>
          With their ideas, questions and expertise they can break through unconventional work and thought patterns. Their different vision has the potential to inspire people to make a change in their lives. But first they must have the courage to speak their heart. Future Thought Leaders often feel like black sheep or scape goats. They were misunderstood, turned down and ignored by so many people that they lost faith in themselves and humanity. Let’s turn the tables around, and let Future Thought Leaders realise they have a gift. Those peculiar ideas are meant to change the world. Because we can’t solve problems by using the same kind of thinking we used when we created them (Albert Einstein).
        </p>
        <img class="w-full" src="@asset('images/Rectangle28.jpg')" alt="">
      </div>
    </div>
  </div>
</div>
@endsection
