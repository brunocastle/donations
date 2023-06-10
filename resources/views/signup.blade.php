<x-layout>
    <main class="form-signin text-center col-sm-9 col-md-6 m-auto my-5">
        <h1>{{ __('common.register') }}</h1>
        <form class="form" action="/signup" method="POST">
            @csrf
            <x-form.input field="name" label="{{ __('user.field.name') }}"></x-form.input>
            <x-form.input field="email" label="{{ __('user.field.email') }}"></x-form.input>
            <x-form.input field="password" label="{{ __('user.field.password') }}" type="password"></x-form.input>
            <x-form.input field="password-confirmation" label="{{ __('user.field.password-confirmation') }}" type="password"></x-form.input>

            <button class="btn btn-lg btn-primary mt-4 px-4" type="submit">{{ __('common.subscribe') }}</button>
        </form>
    </main>
</x-layout>
