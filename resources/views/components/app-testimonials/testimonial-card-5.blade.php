@props(['fileName' => '', 'text' => '', 'clientName' => '', 'starRating' => null])

@php
  $starSize = "size-4";
@endphp

<div class="rounded-lg border border-gray-200 shadow-md text-gray-900">
  <div class="px-4 pt-4 flex gap-1">
    @switch($starRating)
      
      @case("0")
        <x-app-icons.star-empty :size="$starSize" />
        <x-app-icons.star-empty :size="$starSize" />
        <x-app-icons.star-empty :size="$starSize" />
        <x-app-icons.star-empty :size="$starSize" />
        <x-app-icons.star-empty :size="$starSize" />
        @break

      @case("0.5")
        <x-app-icons.star-half-full :size="$starSize" />
        <x-app-icons.star-empty :size="$starSize" />
        <x-app-icons.star-empty :size="$starSize" />
        <x-app-icons.star-empty :size="$starSize" />
        <x-app-icons.star-empty :size="$starSize" />
        @break
    
      @case("1")
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-empty :size="$starSize" />
        <x-app-icons.star-empty :size="$starSize" />
        <x-app-icons.star-empty :size="$starSize" />
        <x-app-icons.star-empty :size="$starSize" />
        @break

      @case("1.5")
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-half-full :size="$starSize" />
        <x-app-icons.star-empty :size="$starSize" />
        <x-app-icons.star-empty :size="$starSize" />
        <x-app-icons.star-empty :size="$starSize" />
        @break

      @case("2")
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-empty :size="$starSize" />
        <x-app-icons.star-empty :size="$starSize" />
        <x-app-icons.star-empty :size="$starSize" />
        @break

      @case("2.5")
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-half-full :size="$starSize" />
        <x-app-icons.star-empty :size="$starSize" />
        <x-app-icons.star-empty :size="$starSize" />
        @break

      @case("3")
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-empty :size="$starSize" />
        <x-app-icons.star-empty :size="$starSize" />
        @break

      @case("3.5")
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-half-full :size="$starSize" />
        <x-app-icons.star-empty :size="$starSize" />
        @break
      
      @case("4")
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-empty :size="$starSize" />
        @break

      @case("4.5")
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-half-full :size="$starSize" />
        @break

      @case("5")
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-full :size="$starSize" />
        @break
    
      @default
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-full :size="$starSize" />
        <x-app-icons.star-full :size="$starSize" />
    @endswitch
    
  </div>
  <div class="p-4 text-sm">
    <p>{{ $text }}</p>
  </div>
  <div class="px-4 pb-4 flex items-center">
    <div>
      <img class="size-10 rounded-full shadow-md" src="{{ asset('images/' . $fileName . '.jpg') }}" alt="">
    </div>
    <div class="px-4 text-sm text-medium text-pretty">
      <p>{{ $clientName }}</p>
    </div>
  </div>
</div>
