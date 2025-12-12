@props(['serviceIconName' => '', 'serviceIconSize' => '6', 'serviceName' => '', 'serviceDescription' => '', 'serviceUrl' => '#'])

@php
  $iconComponentName = 'app-icons.' . $serviceIconName;
  $iconComponentSize = 'size-' . $serviceIconSize;
@endphp

<div class="py-6 bg-white dark:bg-black border border-gray-100 rounded-lg shadow-xl text-gray-900">
  <div class="flex flex-col items-center">
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

