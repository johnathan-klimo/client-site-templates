@livewireScripts
<nav x-data="{ mobileMenuIsOpen: false }" x-on:click.away="mobileMenuIsOpen = false" class="bg-sky-800">
  <div class="flex justify-between items-center py-4 max-w-6xl mx-auto">
    
    {{-- Brand Name or Logo --}}
    <div>
      <a href="/" wire:navigate class="text-2xl font-bold text-gray-50">
        Acme Inc.
        {{-- <img src="./your-logo.svg" alt="brand logo" class="w-10" /> --}}
      </a>
    </div>
    
    {{-- Desktop Menu --}}
    <ul class="max-lg:hidden flex items-center gap-4">
      <li><a href="#" wire:navigate class="font-medium text-gray-50 hover:text-orange-400">Services</a></li>
      <li><a href="#" wire:navigate class="font-medium text-gray-50 hover:text-orange-400">About Us</a></li>
      <li><a href="#" wire:navigate class="font-medium text-gray-50 hover:text-orange-400">Contact Us</a></li>
    </ul>

    {{-- Mobile Menu Hamburger --}}
    <button x-on:click="mobileMenuIsOpen = !mobileMenuIsOpen" x-bind:class="mobileMenuIsOpen ? 'pr-0 z-20' : null" type="button" class="flex text-gray-50 lg:hidden">
		<svg x-cloak x-show="!mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
			<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
		</svg>
		<svg x-cloak x-show="mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
			<path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
		</svg>
	  </button>

    {{-- Mobile Menu --}}
    <div x-cloak x-show="mobileMenuIsOpen"
      x-transition:enter="transition motion-reduce:transition-none ease-out duration-300" x-transition:enter-start="-translate-y-full" x-transition:enter-end="translate-y-0"
      x-transition:leave="transition motion-reduce:transition-none ease-out duration-300" x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-full"
      id="mobileMenu"
      class="lg:hidden bg-sky-800 fixed max-h-svh overflow-y-auto inset-x-0 top-0 z-10 flex flex-col divide-y divide-outline rounded-b-radius border-b border-outline px-6 pb-6 pt-20"
    >
      <ul>
		    <li class="py-4"><a href="#" class="w-full text-lg font-medium text-gray-50">Services</a></li>
		    <li class="py-4"><a href="#" class="w-full text-lg font-medium text-gray-50">About Us</a></li>
		    <li class="py-4"><a href="#" class="w-full text-lg font-medium text-gray-50">Contact Us</a></li>
	    </ul>
    </div>

  </div>
</nav>

{{--
<ul class="hidden md:flex items-center gap-4">

x-bind:class="mobileMenuIsOpen ? 'fixed top-6 right-6 z-20' : null"
--}}
