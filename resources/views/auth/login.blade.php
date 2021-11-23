<x-layout class="flex flex-col items-center justify-center min-h-screen">
    
    {{-- hero  --}}
    <div class="bg-base-200 px-20 py-16 rounded-3xl">
        @if($errors->any())
            <div class="alert alert-warning mb-10">
                <div class="flex-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="w-6 h-6 mx-2 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                        </path>
                    </svg>
                    @foreach($errors->all() as $error)
                        <label>{{ $error }}</label>
                    @endforeach
                </div>
            </div>
        @endif
        <div class="flex-col justify-center hero-content lg:flex-row gap-20">
            <div class="text-center lg:text-left">
                <h1 class="mb-5 text-5xl font-bold whitespace-nowrap">
                    ePaperwork
                </h1>
                <p class="mb-5">
                    Sila login untuk tuju ke destinasi yang seterusnya.
                </p>
            </div>
            <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
                <form class="card-body" action="/authenticate" method="POST">
                    @method('POST')
                    @csrf
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="text" placeholder="email" class="input input-bordered" name="email">
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input type="password" placeholder="password" class="input input-bordered" name="password">
                        <label class="label">
                            <a href="#" class="label-text-alt">Forgot password?</a>
                        </label>
                    </div>
                    <div class="form-control mt-6">
                        <input type="submit" value="Login" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
