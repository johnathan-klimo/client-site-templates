@props(['menuItemName' => 'Item Name', 'menuItemPrice' => '$0'])

<div class="text-gray-900">
  <div class="flex justify-between">
    <div>
      <h3 class="font-bold">{{ $menuItemName }}</h3>
    </div>
    <div>
      <h4 class="font-semibold text-orange-400">{{ $menuItemPrice }}</h4>
    </div>
  </div>
</div>