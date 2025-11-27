@props(['fileName' => '', 'serviceIconName' => '', 'serviceIconSize' => '6', 'serviceName' => '', 'serviceDescription' => '', 'serviceUrl' => '#'])

@php
  $iconComponentName = 'app-icons.' . $serviceIconName;
  $iconComponentSize = 'size-' . $serviceIconSize;
@endphp

<div class="grid grid-cols-12">
  <div class="col-start-2 col-end-7 overflow-hidden bg-cover rounded-lg shadow-xl">
    <a href="#">
      <img class="transform transition-transform duration-300 hover:scale-110 hover:shadow-2xl will-change-transform" src="{{ asset('images/' . $fileName . '.jpg') }}" alt="">  
    </a>
  </div>
  <div class="col-start-8 col-end-12 bg-neutral-50 border border-gray-100 rounded-lg shadow-xl text-gray-900 flex flex-col items-center justify-center">
    <div>
      <x-dynamic-component
        :component="$iconComponentName"
        :size="$iconComponentSize"
      />
    </div>
    <div class="mt-6">
      <h3 class="text-lg font-bold">{{ $serviceName }}</h3>
    </div>
    <div>
      <p class="p-4">{{ $serviceDescription }}</p>
    </div>
    <div class="mt-6 pb-4">
      <a href="#" class="bg-sky-800 hover:bg-orange-400 text-gray-50 hover:text-gray-900 py-3 px-6 rounded-full shadow-md">
        Learn More
      </a>
    </div>
  </div>
</div>
