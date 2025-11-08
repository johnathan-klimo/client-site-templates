<button {{ $attributes(['class' => 'w-8 py-1 px-1 bg-sky-800 rounded-lg text-gray-50 text-xs text-center border border-transparent shadow-md cursor-pointer transition-all hover:bg-sky-900 hover:shadow-lg active:shadow-none disabled:bg-gray-400 disabled:cursor-not-allowed']) }}>
  {{ $slot }}
</button>