@props(['fileName' => '', 'teamMemberName' => '', 'teamMemberTitle' => '', 'teamMemberBioLine1' => '', 'teamMemberBioLine2' => ''])

<div class="grid grid-cols-2 gap-4">
  <div class="flex items-center justify-center">
    <img class="size-80 rounded-lg shadow-md" src="{{ asset('images/' . $fileName . '.jpg') }}" alt="">  
  </div>
  <div class="py-4 text-gray-900 flex flex-col">
    <div class="px-8 text-lg font-semibold">
      <h3>{{ $teamMemberName }}</h3>
    </div>
    <div class="px-8">
      <h4>{{ $teamMemberTitle }}</h4>
    </div>
    <div class="pt-8 px-8">
      <p>{{ $teamMemberBioLine1 }}</p>
    </div>
    <div class="pt-4 px-8">
      <p>{{ $teamMemberBioLine2 }}</p>
    </div>
  </div>
</div>