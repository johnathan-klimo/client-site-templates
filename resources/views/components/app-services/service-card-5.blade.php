@props(['fileName' => '', 'serviceIconName' => '', 'serviceIconSize' => '6', 'serviceName' => '', 'serviceDescription' => '', 'serviceUrl' => '#'])

@php
  $iconComponentName = 'app-icons.' . $serviceIconName;
  $iconComponentSize = 'size-' . $serviceIconSize;
@endphp

<div class="flex flex-col items-center bg-neutral-50 rounded-b-lg shadow-xl">
  <div class="max-w-1/4 overflow-hidden bg-cover rounded-t-lg">
    <a href="#">
      <img class="transform transition-transform duration-300 hover:scale-110 hover:shadow-2xl will-change-transform" src="{{ asset('images/' . $fileName . '.jpg') }}" alt="">  
    </a>
  </div>
  <div class="pt-4 pb-8 px-6 border border-gray-100 text-gray-900 flex flex-col items-center">
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
    <div class="pt-9">
      <a href="#" class="bg-sky-800 hover:bg-orange-400 text-gray-50 hover:text-gray-900 py-3 px-6 rounded-full shadow-md">
        Learn More
      </a>
    </div>
  </div>
</div>