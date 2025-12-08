@props(['fileName' => '', 'menuItemName' => 'Item Name', 'menuItemPrice' => '$0', 'menuItemDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, quo.'])

<div class="flex flex-col items-center bg-neutral-50 rounded-b-lg shadow-xl">
  <div class="max-w-1/4 overflow-hidden bg-cover rounded-t-lg">
    <img class="transform transition-transform duration-300 hover:scale-110 hover:shadow-2xl will-change-transform" src="{{ asset('images/' . $fileName . '.jpg') }}" alt="">  
  </div>
  <div class="p-4">
    <div class="flex justify-between">
      <div>
        <h3 class="font-bold">{{ $menuItemName }}</h3>
      </div>
      <div>
        <h4 class="font-semibold text-orange-400">{{ $menuItemPrice }}</h4>
      </div>
    </div>
    <p class="pt-4 text-sm text-pretty">{{ $menuItemDescription }}</p>  
  </div>
</div>