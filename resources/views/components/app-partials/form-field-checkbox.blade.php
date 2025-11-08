@props(['form' => '', 'livewire' => false, 'livewireBlur' => false, 'label' => '', 'name', 'required' => false, 'uniquePrimaryField' => false, 'value' => '', 'checked' => false, 'disabled' => false, 'fieldSubmissionError' => '', 'lwFieldSubmissionError' => ''])

<label for="{{ $name }}" class="flex items-center gap-4 text-sm font-medium text-gray-700 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500">
    <span class="relative flex items-center text-sky-800">
        <input
          id="{{ $name }}"
          type="checkbox"
          class="peer relative appearance-none size-4 overflow-hidden rounded-sm border border-gray-200 shadow-sm cursor-pointer border-outline checked:bg-sky-100 checked:border-gray-400 transition duration-200 focus:outline-none focus:ring-1 focus:ring-gray-400 checked:focus:outline-gray-400 disabled:cursor-not-allowed disabled:bg-gray-50"
          @if ($checked)
            checked
          @endif
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
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 20 20"
          aria-hidden="true"
          stroke="currentColor"
          fill="currentColor"
          stroke-width="1"
          class="pointer-events-none invisible peer-checked:visible absolute left-1/2 top-1/2 size-3.5 -translate-x-1/2 -translate-y-1/2 scale-0 peer-checked:scale-100 transition duration-200">
            <path
              fill-rule="evenodd"
              d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
              clip-rule="evenodd"
            />
            {{--  Note: Previous checkmark looks nicer? --}}
        </svg>
    </span>
    <span>Recurring Order Item</span>
    @if ($required)
      <span class="text-red-500">*</span>
    @endif
</label>

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