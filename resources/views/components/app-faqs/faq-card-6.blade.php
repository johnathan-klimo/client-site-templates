@props(['question' => '', 'answer' => ''])

  <div class="py-4 text-gray-900 flex flex-col">
    <div class="px-4 font-semibold">
      <h3>{{ $question }}</h3>
    </div>
    <div class="pt-4 px-4 text-sm text-pretty">
      <p>{{ $answer }}</p>
    </div>
  </div>