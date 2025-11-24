@props(['serviceIcon' => '', 'serviceName' => '', 'serviceDescription' => '', 'serviceUrl' => '#'])

@php
  $componentName = 'app-icons.' . $serviceIcon;
@endphp

<div>
  <div>
    <div>
      
      <x-dynamic-component :component="$componentName" />
    </div>
    <div>
      <h3 class="font-bold">{{ $serviceName }}</h3>
    </div>
    <div>
      <p class="pt-4">{{ $serviceDescription }}</p>
    </div>
    <div class="mt-8">
      <a href="#contact" class="bg-sky-800 hover:bg-orange-400 text-gray-50 hover:text-gray-900 py-3 px-6 rounded-full shadow-md">
      Get Started
      </a>
    </div>
  </div>
  
</div>

