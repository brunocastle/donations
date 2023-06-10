<x-layout>
    <main class="form-signin text-center col-6 m-auto my-5">
        <form class="form" action="/authenticate" method="POST">
            @csrf
            <x-form.input field="email" label="{{ __('user.field.email') }}"></x-form.input>
            <x-form.input field="password" label="{{ __('user.field.password') }}" type="password"></x-form.input>

            <button class="btn btn-lg btn-primary mt-4 px-4" type="submit">{{ __('user.login') }}</button>
        </form>
        <a href="/signup">
            <button class="btn btn-lg btn-success mt-4 px-4">{{ __('user.create-new-account') }}</button>
        </a>
    </main>
</x-layout>
