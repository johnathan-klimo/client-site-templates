@props(['fileName' => '', 'menuItemName' => 'Item Name', 'menuItemPrice' => '$0', 'menuItemDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, quo.'])

<div class="grid grid-cols-3 gap-x-8">
  <div>
    <img class="w-56 rounded-lg shadow-lg" src="{{ asset('images/' . $fileName . '.jpg') }}" alt="">  
  </div>
  <div class="p-2 col-span-2">
    <div class="flex justify-between">
      <div>
        <h3 class="font-bold">{{ $menuItemName }}</h3>
      </div>
      <div>
        <h4 class="font-semibold text-orange-400">{{ $menuItemPrice }}</h4>
      </div>
    </div>
    <p class="pt-3 text-sm text-pretty">{{ $menuItemDescription }}</p>  
  </div>
</div>
