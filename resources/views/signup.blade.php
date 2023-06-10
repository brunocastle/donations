<x-layout>
    <main class="form-signin text-center col-6 m-auto my-5">
        <form class="form" action="/authenticate" method="POST">
            @csrf
            <img class="my-5" src="{{ asset('images/pandorasbox.png') }}" alt="" width="72" height="57">

            <x-form.input field="email" label="{{ __('user.field.email') }}"></x-form.input>
            <x-form.input field="password" label="{{ __('user.field.password') }}" type="password"></x-form.input>

            <button class="btn btn-lg btn-secondary mt-4 px-4" type="submit">{{ __('user.login') }}</button>
        </form>
    </main>
</x-layout>
