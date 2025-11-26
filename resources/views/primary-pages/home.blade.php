<x-app-layouts.primary-app-layout pageTitle="Home | Acme Inc." >
  
  <div>
    <x-app-heros.hero-1
      fileName="skyscraper-4b"
    />
  </div>

  <div>
    
    <div class="mt-6 max-w-6xl mx-auto">
      <x-app-services.service-block-1 />
    </div>

    <div class="mt-6 max-w-6xl mx-auto">
      <x-app-services.service-block-2 />
    </div>

    <div class="mt-6 max-w-6xl mx-auto">
      <x-app-services.service-block-3 />
    </div>

    {{--
    <div class="mx-auto bg-stone-100">
      <x-app-food-menus.food-menu-block-1 />
    </div>
     --}}
    
    <div class="mt-6 max-w-6xl mx-auto">
      <x-app-testimonials.testimonial-block-1 />
    </div>
    
    <div class="mt-6 max-w-6xl mx-auto">
      <x-app-team-members.team-block-1 />
    </div>
      
  </div>

</x-app-layouts.primary-app-layout>

