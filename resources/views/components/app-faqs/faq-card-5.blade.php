@props(['question' => '', 'answer' => ''])

  <div class="py-6 bg-neutral-50 border border-gray-100 rounded-lg shadow-lg text-gray-900 flex flex-col">
    <div class="px-6 font-semibold">
      <h3>{{ $question }}</h3>
    </div>
    <div class="pt-4 px-6 text-sm text-pretty">
      <p>{{ $answer }}</p>
    </div>
  </div>