@props(['fileName' => '', 'teamMemberName' => '', 'teamMemberTitle' => ''])

<div class="text-gray-900">
  <div class="p-4 flex items-center justify-center">
    <img class="size-56 rounded-full shadow-lg" src="{{ asset('images/' . $fileName . '.jpg') }}" alt="">
  </div>
  <div class="px-4 font-semibold text-center">
    <h3>{{ $teamMemberName }}</h3>
  </div>
  <div class="px-4 text-sm text-center">
    <h4>{{ $teamMemberTitle }}</h4>
  </div>
</div>