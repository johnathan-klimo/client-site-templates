@props(['menuItemName' => 'Item Name', 'menuItemPrice' => '$0'])

<div class="mt-4 text-gray-900">
  <div class="flex justify-between">
    <div>
      <p>{{ $menuItemName }}</p>
    </div>
    <div>
      <h4 class="font-semibold text-orange-400">{{ $menuItemPrice }}</h4>
    </div>
  </div>
</div>