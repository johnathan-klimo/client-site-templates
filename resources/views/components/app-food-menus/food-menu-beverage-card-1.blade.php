@props(['menuItemName' => 'Item Name', 'menuItemPrice' => '$0', 'menuItemDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, quo.'])

<div class="text-gray-900">
  <div class="flex justify-between">
    <div>
      <h3 class="font-bold">{{ $menuItemName }}</h3>
    </div>
    <div>
      <h4 class="font-semibold text-orange-400">{{ $menuItemPrice }}</h4>
    </div>
  </div>
  <p class="pt-4">{{ $menuItemDescription }}</p>
</div>