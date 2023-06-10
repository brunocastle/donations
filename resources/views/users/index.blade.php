<x-layout>
    <section class="col-10">
        @if($users->count())
            @foreach($users as $user)
                <div class="d-flex align-items-center justify-content-between p-2 border border-secondary my-2 bg-dark">
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="https://i.pravatar.cc/60?img={{ $user->id }}" alt="" width="40" height="40">
                        <span class="mx-3 text-light" style="font-size: 1.2rem">
                            {{$user->name}}
                            @if($user->grade == \App\Models\User::ADMIN)
                                (Adm)
                            @endif
                        </span>
                    </div>
                    <div class="btn-group" role="group" aria-label="">
                        <a href="/users/{{ $user->uuid }}" class="btn">
                            <i class="far fa-eye text-light"></i>
                        </a>
                        <a href="/users/{{$user->uuid}}/edit" class="btn">
                            <i class="far fa-pencil text-light"></i>
                        </a>
                        @if($user->grade != \App\Models\User::ADMIN)
                            <form method="POST" action="/users/{{ $user->uuid }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn">
                                    <i class="far fa-trash-alt text-light"></i>
                                </button>
                            </form>
                        @else
                            <button class="btn">
                                <i class="far fa-trash-alt text-black"></i>
                            </button>
                        @endif
                    </div>
                </div>
            @endforeach
        @else
            <div class="alert alert-info" role="alert">
                Não existem usuários cadastrados.
            </div>
        @endif
    </section>
    <x-menu.action></x-menu.action>
</x-layout>
