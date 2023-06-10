<x-layout>
    <h1>
        {{ __('common.most-recent-requests') }}
    </h1>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($requests as $request)
{{--            <a class="text-decoration-none" href="/requests/{{ $request->id }}">--}}
            <x-card.request
                title="{{ $request->title }}"
                text="{{ $request->description }}"
                image="{{ asset('images/request_categories/' . $request->requestCategory->token . '.jpg') }}"
                footer="{{ $request->updated_at->diffForHumans() }}"
            ></x-card.request>
        @endforeach
    </div>
</x-layout>
