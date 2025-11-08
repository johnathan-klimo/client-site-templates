<button {{ $attributes(['class' => 'w-34 py-2 px-2 bg-red-800 rounded-lg text-gray-50 text-sm text-center border border-transparent shadow-md cursor-pointer transition-all hover:bg-red-900 hover:shadow-lg active:shadow-none disabled:bg-red-400 disabled:cursor-not-allowed']) }}>
  {{ $slot }}
</button>