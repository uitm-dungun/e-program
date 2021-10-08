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
                <div class="flex-none">
                    <div class="avatar">
                        <div class="rounded-full w-10 h-10 m-1">
                            <img src="https://i.pravatar.cc/500?img=32">
                        </div>
                    </div>
                </div>
            </div>


            <ul tabindex="0" class="w-52 menu py-3 shadow-lg bg-base-100 rounded-box dropdown-content">
                <li class="menu-title">
                    <span>
                        Menu Title
                    </span>
                </li>
                <li>
                    <a>
                        Item without icon
                    </a>
                </li>
                <li>
                    <a>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="inline-block w-5 h-5 mr-2 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                            </path>
                        </svg>
                        Item with icon
    
                    </a>
                </li>
                <li>
                    <a>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="inline-block w-5 h-5 mr-2 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                        </svg>
                        Item with icon
    
                        <div class="badge ml-2 success">3</div>
                    </a>
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
