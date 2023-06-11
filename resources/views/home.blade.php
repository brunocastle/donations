<x-layout>
    <h1>
        {{ __('common.most-recent-requests') }}
    </h1>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($requests as $request)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/request_categories/' . $request->requestCategory->token . '.jpg') }}" class="card-img-top" alt="{{ $request->title }}">
                    <div class="card-body">
                        <div class="mb-2">
                            {!! getBadgePill($request->status) !!}
                        </div>
                        <a class="text-decoration-none" href="/requests/{{ $request->id }}">
                            <h5 class="card-title">{{ $request->title }}</h5>
                        </a>
                        <p class="card-text">{{ $request->description }}</p>
                    </div>
                    <div class="text-center">
                        <a class="text-decoration-none" @auth onclick="setDonationId({{ $request->id }})" data-bs-toggle="modal" data-bs-target="#donate" @else href="/login" @endauth>
                            <button class="btn btn-lg btn-primary mb-2" type="submit">{{ __('common.donate') }}</button>
                        </a>
                    </div>
                    <div class="card-footer mt-2">
                        <small class="text-body-secondary">{{ $request->updated_at->diffForHumans() }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Modal -->
    <div class="modal fade" id="donate" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-danger" id="modal">{{ __('common.warning') }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{ __('donation.confirmation') }}
                </div>
                <div class="modal-footer">
                    <a id="donate-link" href="/donate/">
                        <button type="button" class="btn btn-lg btn-success">{{ __('donation.confirm') }}</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script>
        function setDonationId($id) {
            document.getElementById("donate-link").href = "/donate/" + $id;
        }
    </script>
</x-layout>
