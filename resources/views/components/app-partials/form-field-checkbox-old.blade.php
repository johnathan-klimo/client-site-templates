@props(['form' => '', 'livewire' => false, 'livewireBlur' => false, 'label' => '', 'name', 'required' => false, 'uniquePrimaryField' => false, 'value' => '', 'disabled' => false, 'fieldSubmissionError' => '', 'lwFieldSubmissionError' => ''])

<div class="flex items-center gap-4 relative">

<input id="{{ $name }}" class="peer appearance-none h-4 w-4 rounded-sm border border-gray-200 shadow-sm cursor-pointer focus:border-gray-300 focus:outline-none focus:ring-0 checked:bg-sky-100 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500"
  type="checkbox"
  @if ($form)
    form="{{ $form }}"    
  @endif
  @if ($livewire && ! $livewireBlur)
    wire:model="{{ $name }}"
  @endif
  @if ($livewire && $livewireBlur)
    wire:model.blur="{{ $name }}"
  @endif
  name="{{ $name }}"
  @if (old($name))
    value="{{ old($name) }}"
  @else
    value="{{ $value }}"  
  @endif
  @if ($disabled)
    disabled
  @endif
/>

<span class="absolute text-sky-800 opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-56 -translate-y-1/2 pointer-events-none">
  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
  </svg>
</span>

@if ($required)
  <label for="{{ $name }}" class="text-sm font-medium text-gray-700">{{ $label }} <span class="text-red-500">*</span></label>
@else
  <label for="{{ $name }}" class="text-sm font-medium text-gray-700">{{ $label }}</label>
@endif

</div>

{{-- Previous version based on Laravel validation documentation --}}
{{-- @if ($errors->$name) --}}
{{-- <x-app-partials.form-field-validation-error :validationError="$errors->first($name)" /> --}}
{{-- @endif --}}
{{--  --}}

{{-- Revised, simpler version pointed out in the Livewire validation documentation --}}
@error($name)
  <x-app-partials.form-field-validation-error :validationError="$message" />
@enderror

@if ($uniquePrimaryField && $fieldSubmissionError)
  <x-app-partials.form-field-submission-error :fieldSessionError="$fieldSubmissionError" />
@endif

@if ($uniquePrimaryField && $lwFieldSubmissionError)
  <x-app-partials.form-field-submission-error :fieldSubmissionError="$lwFieldSubmissionError" />
@endif