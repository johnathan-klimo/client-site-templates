@props(['fileName' => ''])

@php
  $fullFileName = asset('images/' . $fileName . '.jpg');
@endphp

<h1>{{ $fullFileName }}</h1>
<div class="size-20 bg-[url('{{ $fullFileName }}')]">

</div>