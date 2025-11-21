<footer class="bg-sky-800 mt-16">

  <div class="mx-auto max-w-6xl mt-8 px-4 2xl:px-0">
    <div class="flex flex-col gap-x-8 lg:flex-row pt-8">
      <div class="lg:basis-1/2 sm:pr-20 md:pr-72 lg:pr-10">
        <h4 class="font-bold text-gray-50">About This Site</h4>
        <p class="text-gray-200 pt-4">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, maiores tenetur cumque quidem fugit repellat perferendis explicabo laboriosam, vitae, ex illo voluptas assumenda distinctio natus tempora magni iusto a perspiciatis.
        </p>
        {{-- <p class="text-gray-200 py-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, dolorem.</p> --}}
      </div>
      <div class="lg:basis-1/4">
        <h4 class="font-bold text-gray-50">Menu 1</h4>
        <nav class="py-4">
          <ul class="text-gray-200">
            <li><a href="#" wire:navigate class="hover:text-orange-400">Internal Site Link 1</a></li>
            <li><a href="#" wire:navigate class="hover:text-orange-400">Internal Site Link 2</a></li>
            <li><a href="#" wire:navigate class="hover:text-orange-400">Internal Site Link 3</a></li>
            <li><a href="#" wire:navigate class="hover:text-orange-400">Internal Site Link 4</a></li>
          </ul>
        </nav>
      </div>
      <div class="lg:basis-1/4 text-gray-200">
        <div class="flex gap-4">
          <x-app-icons.instagram :clickable="true" url="https://instagram.com" />
          <x-app-icons.facebook :clickable="true" url="https://facebook.com" />  
          <x-app-icons.twitter-x :clickable="true" url="https://x.com" />
          <x-app-icons.linkedin :clickable="true" url="https://linkedin.com" />
          <x-app-icons.youtube :clickable="true" url="https://youtube.com" />
          <x-app-icons.pinterest :clickable="true" url="https://pinterest.com" />
        </div>
        <p class="pt-10">12345 67 Street</p>
        <p>Somewhereville, AB</p>
        <p>(123) 456-7890</p>
      </div>
    </div>
  </div>
  <div class="mx-auto max-w-6xl py-4 px-4 2xl:px-0">
    <p class="text-center text-gray-200">&copy; 2025 Acme Inc.</p>
  </div>
  
</footer>
