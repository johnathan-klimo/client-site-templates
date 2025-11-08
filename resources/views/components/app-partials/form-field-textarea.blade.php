@props(['form' => '', 'livewire' => false, 'label' => '', 'name', 'placeholder' => '', 'required' => false, 'uniquePrimaryField' => false, 'value' => '', 'disabled' => false, 'rows' => '4', 'fieldSubmissionError' => '', 'lwFieldSubmissionError' => ''])

@if ($required)
  <label for="{{ $name }}" class="block text-sm font-medium text-gray-700">{{ $label }} <span class="text-red-500">*</span></label>
@else
  <label for="{{ $name }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
@endif

<textarea id="{{ $name }}" class="mt-2 px-2 py-1 block w-full text-sm rounded-sm border border-gray-200 shadow-sm focus:border-gray-300 focus:outline-none focus:ring-0 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500"
  @if ($form)
    form="{{ $form }}"    
  @endif
  @if ($livewire)
    wire:model="{{ $name }}"
  @endif
  name="{{ $name }}"
  rows="{{ $rows }}"
  placeholder="{{ $placeholder }}"
  @if ($disabled)
    disabled
  @endif
>
@if (old($name)){{ old($name) }} @elseif ($value !== ''){{ $value }} @endif
</textarea>

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
  <x-app-partials.form-field-submission-error :fieldSubmissionError="$fieldSubmissionError" />
@endif

@if ($uniquePrimaryField && $lwFieldSubmissionError)
  <x-app-partials.form-field-submission-error :fieldSubmissionError="$lwFieldSubmissionError" />
@endif