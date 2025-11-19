<x-app-layouts.primary-app-layout @auth pageTitle="Home | My Grocery Tracker" @endauth @guest pageTitle="Home | Project Agamemnon" @endguest >
  <div class="mt-6 max-w-6xl mx-auto">

    @auth
      <div>
        <h1 class="text-xl font-bold text-sky-800">Welcome to My Grocery Tracker!</h1>
      </div>
      <div class="mt-6 p-6 max-w-3xl rounded-lg border border-gray-200 shadow-md text-gray-900">
        <p>"Do or do not. There is no try"</p>
      </div>
    @endauth
    
    @guest
      <div>
        <h1 class="text-xl font-bold text-sky-800">Welcome to Project Agamemnon!</h1>
      </div>
      <div class="mt-6 p-6 max-w-3xl rounded-lg border border-gray-200 shadow-md text-gray-900">
        <p>Access to this application during initial testing is currently by invitation only. If you've been invited, please <span><a href="/login" class="font-medium text-orange-400 hover:text-orange-600">click here</a></span> to login.</p>
        <p class="mt-6">If you haven't been invited, please move along to another website for now. :)</p>
      </div>
      <div class="mt-6">
        <x-app-testimonials.testimonial-block-1 />
      </div>
      <div class="mt-6">
        <x-app-team-members.team-block-1 />
      </div>

      {{-- 
      <div class="mt-6">
        <x-app-icons.hamburger-open-1a />
        <x-app-icons.hamburger-open-1b />
        <x-app-icons.hamburger-open-2 />
        <x-app-icons.hamburger-close />
      </div>
      --}}
    @endguest

      
  </div>
</x-app-layouts.primary-app-layout>

