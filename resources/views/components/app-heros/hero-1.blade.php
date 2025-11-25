@props(['fileName' => ''])

@php
  $fullFileName = asset('images/' . $fileName . '.jpg');
@endphp

<div class="relative h-[600px] flex items-center justify-center">
  <img class="absolute inset-0 w-full h-[600px] object-cover" src="{{ asset('images/' . $fileName . '.jpg') }}" alt="">
  <div class="absolute inset-0 bg-black bg-opacity-50"></div>
  <div class="relative z-10 text-center text-gray-50">
    <h1 class="text-4xl md:text-6xl">Welcome to Your Website</h1>
    <p class="mt-4 text-lg md:text-xl">Crafting stunning designs that convert visitors into clients.</p>
    <a href="#" class="mt-8 inline-block bg-sky-800 hover:bg-orange-400 text-gray-50 hover:text-gray-900 py-3 px-6 rounded-full shadow-md">
      Get Started
    </a>
  </div>
</div>


{{-- 
<h1>{{ $fullFileName }}</h1>
<div class="w-full bg-[url('{{ $fullFileName }}')]">

</div>

<video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover">
  <source src="/path/to/your-video.mp4" type="video/mp4">
  </video>

<div class="relative h-screen flex items-center justify-center">
  <img class="absolute inset-0 w-full h-full object-cover" src="{{ asset('images/' . $fileName . '.jpg') }}" alt="">
  <div class="absolute inset-0 bg-black bg-opacity-50"></div>
  <div class="relative z-10 text-center text-white">
    <h1 class="text-4xl md:text-6xl font-heading">Welcome to Your Website</h1>
    <p class="mt-4 text-lg md:text-xl">Crafting stunning designs that convert visitors into clients.</p>
    <a href="#contact" class="mt-8 inline-block bg-red-500 hover:bg-red-600 text-white py-3 px-6 rounded-full">
      Get Started
    </a>
  </div>
</div>

--}}