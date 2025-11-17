<nav class="bg-sky-800">
  <div class="flex justify-between items-center py-4 max-w-6xl mx-auto">
    
    @auth
      <div>
        <a href="/" wire:navigate class="text-2xl font-bold text-gray-50">My Grocery Tracker</a>
      </div>
    @endauth
      
    @guest
      <div>
        <a href="/" wire:navigate class="text-2xl font-bold text-gray-50">Project Agamemnon</a>
      </div>
    @endguest

    <div class="flex gap-x-6">
      
      @auth
        <a href="/grocery-orders" wire:navigate class="font-medium text-gray-50 hover:text-orange-400">Grocery Orders</a>
        <a href="/recipes" wire:navigate class="font-medium text-gray-50 hover:text-orange-400">Recipes</a>
        <a href="/grocery-items" wire:navigate class="font-medium text-gray-50 hover:text-orange-400">Grocery Items</a>
        <a href="/grocery-categories" wire:navigate class="font-medium text-gray-50 hover:text-orange-400">Grocery Categories</a>
        <a href="/brand-names" wire:navigate class="font-medium text-gray-50 hover:text-orange-400">Brand Names</a>
        <a href="/grocery-stores" wire:navigate class="font-medium text-gray-50 hover:text-orange-400">Grocery Stores</a>
        <form action="{{ route('logout') }}" method="post">
          @csrf
          <button type="Submit" class="font-medium text-gray-50 hover:text-orange-400 cursor-pointer">Log Out</button>
        </form>
      @endauth
      
      @guest
        <a href="/login" wire:navigate class="font-medium text-gray-50 hover:text-orange-400">Log In</a>
      @endguest

    </div>
  </div>
  
</nav>
