@props(['fileName' => '', 'serviceName' => '', 'serviceDescription' => '', 'serviceUrl' => '#'])

<div>
  <div class="overflow-hidden bg-cover rounded-lg shadow-lg">
    <a href="#">
      <img class="transform transition-transform duration-300 hover:scale-110 hover:shadow-xl will-change-transform" src="{{ asset('images/' . $fileName . '.jpg') }}" alt="">  
    </a>
  </div>
  <div class="mt-6 text-center">
    <a href="#" class="text-lg font-bold text-gray-900 hover:text-orange-400">{{ $serviceName }}</a>
  </div>
</div>
