<x-layout>
    <section class="col-12 mt-5">
        <div class="card text-center">
            <div class="card-header">
                <h3>{{ $request->title }}</h3>
            </div>
            <div class="card-body">
                <img src="{{ asset('images/request_categories/' . $request->requestCategory->token . '.jpg') }}" class="rounded float-start" alt="{{ $request->title }}">
                <h5 class="card-title">{{ __('common.requested-by', ['requester' => $request->organization->name]) }}</h5>
                <p class="card-text">{{ $request->description }}</p>
                {!! getBadgePill($request->status) !!}
            </div>
            <div class="card-footer text-body-secondary">{{ $request->updated_at->diffForHumans() }}</div>
        </div>
        <ul class="list-group mt-3 text-center">
            <li class="list-group-item list-group-item-dark">{{ __('common.donators') }}}</li>
            @foreach($request->donations as $donation)
                <li class="list-group-item">{{ $donation->user->name }}</li>
            @endforeach
        </ul>
    </section>
</x-layout>
