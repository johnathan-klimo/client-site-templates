@props(['fileName' => '', 'teamMemberName' => '', 'teamMemberTitle' => '', 'teamMemberBio' => ''])

<div class="px-6 grid grid-cols-2 gap-10">
  <div class="p-4 flex items-center justify-center">
    <img class="size-56 rounded-lg shadow-md" src="{{ asset('images/' . $fileName . '.jpg') }}" alt="">  
  </div>
  <div class="m-4 px-8 pt-6 bg-neutral-50 border border-gray-100 rounded-lg shadow-xl text-gray-900 flex flex-col items-center">
    <div class="px-4 font-semibold text-center">
      <h3>{{ $teamMemberName }}</h3>
    </div>
    <div class="px-4 text-sm text-center">
      <h4>{{ $teamMemberTitle }}</h4>
    </div>
    <div class="mt-4">
      <p>{{ $teamMemberBio }}</p>
    </div>
  </div>
</div>