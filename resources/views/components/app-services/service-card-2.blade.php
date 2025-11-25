@props(['fileName' => '', 'serviceName' => '', 'serviceDescription' => '', 'serviceUrl' => '#'])

<div class="border border-gray-100 rounded-lg shadow-xl text-gray-900">
  <div class="relative flex items-center justify-center">
    <img class="absolute inset-0 object-cover" src="{{ asset('images/' . $fileName . '.jpg') }}" alt="">
    <div class="absolute inset-0 w-full h-full bg-black bg-opacity-70"></div>
    <div class="relative z-10 flex flex-col items-center text-gray-50">
      <div class="mt-8">
        <h3 class="text-lg font-bold">{{ $serviceName }}</h3>
      </div>
      <div>
        <p class="p-4">{{ $serviceDescription }}</p>
      </div>
      <div class="mt-6 pb-6">
        <a href="#" class="bg-sky-800 hover:bg-orange-400 text-gray-50 hover:text-gray-900 py-3 px-6 rounded-full shadow-md">
          Learn More
        </a>
      </div>
    </div>
  </div>
</div>

{{--
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
--}}

{{--
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
--}}

{{--
<div class="text-gray-900">
  <div class="p-4 flex items-center justify-center">
    <img class="size-56 rounded-lg shadow-md" src="{{ asset('images/' . $fileName . '.jpg') }}" alt="">
  </div>
  <div class="px-4 font-semibold text-center">
    <h3>{{ $teamMemberName }}</h3>
  </div>
  <div class="px-4 text-sm text-center">
    <h4>{{ $teamMemberTitle }}</h4>
  </div>
</div>
--}}