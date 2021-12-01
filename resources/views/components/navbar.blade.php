{{-- <nav class="navbar mb-2 shadow-lg bg-neutral text-neutral-content"> --}}
<nav class="navbar mb-2 mb-16">
    {{ Breadcrumbs::render(Route::currentRouteName()) }}
    <div class="hidden px-2 mx-2 navbar-center lg:flex">
        <div class="flex items-stretch">
            <a class="btn btn-ghost btn-sm rounded-btn normal-case">
                Utama
            </a>
            <a class="btn btn-ghost btn-sm rounded-btn normal-case">
                Senarai
            </a>
            <a class="btn btn-ghost btn-sm rounded-btn normal-case">
                Tiket
            </a>
        </div>
    </div>
    <div class="navbar-end">
        <div class="dropdown dropdown-end">
            {{-- <div tabindex="0" class="m-1 btn"> --}}
            <div tabindex="0">
                <button class="btn btn-ghost">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ auth()->user()->type}}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>


            <ul tabindex="0" class="w-52 menu py-3 shadow-lg bg-base-100 rounded-box dropdown-content">
                <li class="menu-title">
                    <span>
                        Menu pilihan
                    </span>
                </li>
                <li>
                    {{-- <input type="submit" value="submit"> --}}
                    <a href="/logout" onclick="event.preventDefault(); document.forms['logout'].submit();">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-5 h-5 mr-2 stroke-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Log Keluar
                    </a>
                    <form name="logout" action="/logout" method="POST" class="hidden">
                        @csrf
                    </form>
                </li>
            </ul>
{{--
            <ul class="p-2 shadow menu dropdown-content bg-base-100 rounded-box w-52">
                <li>
                    <a>Item 1</a>
                </li>
                <li>
                    <a>Item 2</a>
                </li>
                <div class="divider"></div>
                <li>

                    <form action="/logout" method="POST" class="px-5 py-3">
                        @csrf
                        <button>Logout</button>
                    </form>
                </li>
            </ul> --}}
        </div>

    </div>
</nav>
