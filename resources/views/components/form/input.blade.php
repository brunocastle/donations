@props(['field','label','type' => 'text'])

<div class="form-floating mb-2 text-black">
    <input
        type="{{ $type }}"
        class="form-control"
        id="{{ $field }}"
        name="{{ $field }}"
        placeholder="{{ $label }}"
        @if($type != 'password' && $type != 'password-confirmation')
            {{ $attributes(['value' => old($field)]) }}
        @endif
    >
    {{ $slot }}
    <label for="{{ $field }}">{{ $label }}</label>
    <x-form.error field="{{ $field }}"></x-form.error>
</div>
