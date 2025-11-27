@props(['fileName' => '', 'serviceIconName' => '', 'serviceIconSize' => '6', 'serviceName' => '', 'serviceDescription' => '', 'serviceUrl' => '#'])

@php
  $iconComponentName = 'app-icons.' . $serviceIconName;
  $iconComponentSize = 'size-' . $serviceIconSize;
@endphp

<div class="px-6 grid grid-cols-2 gap-10">
  <div class="overflow-hidden bg-cover rounded-lg shadow-xl">
    <a href="#">
      <img class="transform transition-transform duration-300 hover:scale-110 hover:shadow-2xl will-change-transform" src="{{ asset('images/' . $fileName . '.jpg') }}" alt="">  
    </a>
  </div>
  <div class="m-4 px-8 pt-6 bg-neutral-50 border border-gray-100 rounded-lg shadow-xl text-gray-900 flex flex-col items-center">
    <div>
      <x-dynamic-component
        :component="$iconComponentName"
        :size="$iconComponentSize"
      />
    </div>
    <div class="mt-6">
      <h3 class="text-lg font-bold">{{ $serviceName }}</h3>
    </div>
    <div class="mt-4">
      <p>{{ $serviceDescription }}</p>
    </div>
    <div class="pt-9 pb-4">
      <a href="#" class="bg-sky-800 hover:bg-orange-400 text-gray-50 hover:text-gray-900 py-3 px-6 rounded-full shadow-md">
        Learn More
      </a>
    </div>
  </div>
</div>
