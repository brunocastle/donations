@props(['field'])

@error($field)
    <div class="px-2 small text-danger">{{ $message }}</div>
@enderror
