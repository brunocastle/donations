@auth
    <div class="btn-group">
        <div class="btn p-0 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="text-light">
                {{ auth()->user()->name }}
            </span>
            <img class="rounded-circle mx-4" src="https://i.pravatar.cc/35?img={{ auth()->user()->id }}" alt="" width="35" height="35">
        </div>
        <div class="dropdown-menu dropdown-menu-end">
            <form class="" method="POST" action="/logout">
                @csrf
                <button class="dropdown-item" type="submit">Logout</button>
            </form>
        </div>
    </div>
@else
    <a href="/login" class="btn btn-sm btn-light px-5">Login</a>
@endauth
