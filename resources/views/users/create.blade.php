<x-layout>
    <section class="col-12">
        <h2 class="text-light text-center">Create new user</h2>
        <x-form method="POST" action="/users/store">
            <x-form.input field="name" label="Name"></x-form.input>
            <x-form.select field="grade" label="Grade">
                @foreach($grades as $grade => $name)
                    <option value="{{ $grade }}">{{ $name }}</option>
                @endforeach
            </x-form.select>
            <x-form.input field="email" label="E-mail address"></x-form.input>
            <x-form.input field="password" label="Password" type="password"></x-form.input>
            <x-form.input field="password-confirmation" label="Password confirmation" type="password"></x-form.input>
        </x-form>
    </section>
</x-layout>
