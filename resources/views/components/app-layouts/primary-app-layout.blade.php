@props(['pageTitle'])

<!DOCTYPE html>
<html lang="en">
<x-app-layouts.head :$pageTitle />

<body>

  <div class="flex flex-col h-screen">
    <div>
      <x-app-layouts.nav />
    </div>
    <div class="grow">
      <main>
        {{ $slot }}
      </main>
    </div>
    
    <div>
      <x-app-layouts.footer />
    </div>
    
  </div>

</body>
</html>