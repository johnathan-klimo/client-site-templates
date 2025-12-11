@props(['fileName' => '', 'text' => '', 'clientName' => ''])

<div class="rounded-lg border border-gray-200 shadow-md text-gray-900">
  <div class="p-4">
    <p>{{ $text }}</p>
  </div>
  <div class="px-4 pb-4 flex items-center">
    <div>
      <img class="size-14 rounded-full shadow-md" src="{{ asset('images/' . $fileName . '.jpg') }}" alt="">
    </div>
    <div class="p-4 text-pretty">
      <p>{{ $clientName }}</p>
    </div>
  </div>
</div>