@props(['field','label'])

<div class="form-floating text-black col my-2">
    <select
        class="form-select"
        id="{{ $field }}"
        name="{{ $field }}"
    >
        {{ $slot }}
    </select>
    <label for="{{ $field }}">{{ $label }}</label>
</div>
