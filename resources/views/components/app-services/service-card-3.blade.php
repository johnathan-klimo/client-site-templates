@props(['fileName' => '', 'serviceName' => '', 'serviceDescription' => '', 'serviceUrl' => '#'])

<a href="#" class="block relative group overflow-hidden rounded-lg shadow-lg">
  <img
    class="w-full h-auto transform transition-transform duration-300 group-hover:scale-110 will-change-transform"
    src="{{ asset('images/' . $fileName . '.jpg') }}"
    alt=""
  />
  <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-60">
    <h3 class="text-2xl font-bold text-gray-50 hover:text-orange-400">{{ $serviceName }}</h3>
  </div>
</a>
