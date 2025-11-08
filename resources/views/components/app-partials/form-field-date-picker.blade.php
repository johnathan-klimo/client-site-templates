@props(['form' => '', 'livewire' => false, 'label' => '', 'name' => '', 'required' => false, 'uniquePrimaryField' => false, 'disabled' => false, 'fieldSubmissionError', 'lwFieldSubmissionError' => ''])

@if ($required)
  <label for="{{ $name }}" class="block text-sm font-medium text-gray-700">{{ $label }} <span class="text-red-500">*</span></label>
@else
  <label for="{{ $name }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
@endif

<input
  type="date"
  @if ($form)
    form="{{ $form }}"
  @endif
  @if ($livewire)
    wire:model="{{ $name }}"
  @endif
  name="{{ $name }}"
  id="{{ $name }}"
  class="mt-2 px-1 py-1 block w-full text-sm rounded-sm border border-gray-200 shadow-sm focus:border-gray-300 focus:outline-none focus:ring-0 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500"
  @if ($disabled)
    disabled
  @endif
/>

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