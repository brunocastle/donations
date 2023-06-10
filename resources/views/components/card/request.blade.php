@props(['title','text','image', 'footer' => null])

<div class="col">
    <div class="card h-100">
        <img src="{{ $image }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $title }}</h5>
            <p class="card-text">{{ $text }}</p>
        </div>
        @if(!empty($footer))
            <div class="card-footer">
                <small class="text-body-secondary">{{ $footer }}</small>
            </div>
        @endif
    </div>
</div>
