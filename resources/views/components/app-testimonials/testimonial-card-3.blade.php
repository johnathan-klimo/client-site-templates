@props(['text' => '', 'clientName' => '', 'starRating' => null])

<div class="rounded-lg border border-gray-200 shadow-md text-gray-900">
  <div class="p-4">
    <p>{{ $text }}</p>
  </div>
  <div class="px-4 pt-2 pb-4 flex items-center justify-between">
    <div class="font-medium">
      <p>{{ $clientName }}</p>
    </div>
    <div class="px-4 flex gap-1">
      @switch($starRating)
      
        @case("0")
          <x-app-icons.star-empty />
          <x-app-icons.star-empty />
          <x-app-icons.star-empty />
          <x-app-icons.star-empty />
          <x-app-icons.star-empty />
          @break

        @case("0.5")
          <x-app-icons.star-half-full />
          <x-app-icons.star-empty />
          <x-app-icons.star-empty />
          <x-app-icons.star-empty />
          <x-app-icons.star-empty />
          @break
    
        @case("1")
          <x-app-icons.star-full />
          <x-app-icons.star-empty />
          <x-app-icons.star-empty />
          <x-app-icons.star-empty />
          <x-app-icons.star-empty />
          @break

        @case("1.5")
          <x-app-icons.star-full />
          <x-app-icons.star-half-full />
          <x-app-icons.star-empty />
          <x-app-icons.star-empty />
          <x-app-icons.star-empty />
          @break

        @case("2")
          <x-app-icons.star-full />
          <x-app-icons.star-full />
          <x-app-icons.star-empty />
          <x-app-icons.star-empty />
          <x-app-icons.star-empty />
          @break

        @case("2.5")
          <x-app-icons.star-full />
          <x-app-icons.star-full />
          <x-app-icons.star-half-full />
          <x-app-icons.star-empty />
          <x-app-icons.star-empty />
          @break

        @case("3")
          <x-app-icons.star-full />
          <x-app-icons.star-full />
          <x-app-icons.star-full />
          <x-app-icons.star-empty />
          <x-app-icons.star-empty />
          @break

        @case("3.5")
          <x-app-icons.star-full />
          <x-app-icons.star-full />
          <x-app-icons.star-full />
          <x-app-icons.star-half-full />
          <x-app-icons.star-empty />
          @break
      
        @case("4")
          <x-app-icons.star-full />
          <x-app-icons.star-full />
          <x-app-icons.star-full />
          <x-app-icons.star-full />
          <x-app-icons.star-empty />
          @break

        @case("4.5")
          <x-app-icons.star-full />
          <x-app-icons.star-full />
          <x-app-icons.star-full />
          <x-app-icons.star-full />
          <x-app-icons.star-half-full />
          @break

        @case("5")
          <x-app-icons.star-full />
          <x-app-icons.star-full />
          <x-app-icons.star-full />
          <x-app-icons.star-full />
          <x-app-icons.star-full />
          @break
    
        @default
          <x-app-icons.star-full />
          <x-app-icons.star-full />
          <x-app-icons.star-full />
          <x-app-icons.star-full />
          <x-app-icons.star-full />
      @endswitch
    </div>
  </div>
</div>
