@props(['fileName' => '', 'teamMemberName' => '', 'teamMemberTitle' => '', 'teamMemberBio' => ''])

<div class="grid grid-cols-3 gap-4">
  <div class="flex items-center justify-center">
    <img class="size-48 rounded-lg shadow-md" src="{{ asset('images/' . $fileName . '.jpg') }}" alt="">  
  </div>
  <div class="py-4 col-span-2 bg-neutral-50 border border-gray-100 rounded-lg shadow-lg text-gray-900 flex flex-col">
    <div class="px-4 font-semibold">
      <h3>{{ $teamMemberName }}</h3>
    </div>
    <div class="px-4 text-sm">
      <h4>{{ $teamMemberTitle }}</h4>
    </div>
    <div class="pt-4 px-4 text-sm">
      <p>{{ $teamMemberBio }}</p>
    </div>
  </div>
</div>