@props(['method','action'])

<form class="form-control bg-dark"
      method="{{ $method }}"
      action="{{ $action }}"
>
    @csrf
    {{ $slot }}
    <div class="text-center my-4">
        <button type="submit" class="btn btn-outline-light px-5">Submit</button>
    </div>
</form>
