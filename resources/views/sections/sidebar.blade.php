{{--@php(dynamic_sidebar('sidebar-primary'))--}}
<div class="relative xl:w-[20%] lg:w-[20%] sm:hidden md:hidden xl:block lg:block hidden ">
  <div class="flex items-center rounded-md px-4 duration-300 cursor-pointer justify-end ">
    <span class="text-white mr-4 font-Agrandir"><a href="/">Home Page</a></span>
    <i class="text-cyan bi bi-house-door"></i>
  </div>
<?php
if (is_home()) {
?>
<div class=" mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer justify-end ">
  <span class="text-white mr-4 font-Agrandir"><a href="/memberlogin">Member Login</a></span>
  <i class="text-cyan bi bi-person-circle"></i>
</div>
<?php
}
?>

  <div class=" mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer justify-end ">
    <span class="text-white mr-4 font-Agrandir"><a href="/mission-vision">Mission Vision</a></span>
    <i class="text-cyan bi bi-eye"></i>
  </div>

  <div class=" mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer justify-end ">
    <span class="text-white mr-4 font-Agrandir"><a href="/ask-a-question"> Ask a Question</a></span>
    <i class="text-cyan bi bi-question-circle"></i>
  </div>

 <?php
 if (is_home()) {
  ?>
    <div class="icon_menu absolute -bottom-[32%] right-0 mt-2 mb-5 space-y-3">
      <div class="w-full justify-end flex float-right rounded-md px-4 duration-300 cursor-pointer">
        <a href="" class="cursor-pointer"><img src="@asset('/images/Vector (6).png')" alt=""></a>
      </div>
      <div class="w-full justify-end flex float-right rounded-md px-4 duration-300 cursor-pointer">
        <a href="" class="cursor-pointer"> <img src="@asset('/images/Group 111.png')" alt=""></a>
      </div>
      <div class="w-full justify-end flex float-right rounded-md px-4 duration-300 cursor-pointer">
        <a href="" class="cursor-pointer"> <img src="@asset('/images/Group 112.png')" alt=""></a>
      </div>
      <div class="w-full justify-end flex float-right rounded-md px-4 duration-300 cursor-pointer">
        <a href="" class="cursor-pointer"><img src="@asset('/images/Vector (9).png')" alt=""></a>
      </div>
  </div>
  <?php
 }
 ?>

</div>
