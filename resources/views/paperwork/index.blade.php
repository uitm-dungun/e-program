<x-layout class="px-8 pt-8 flex flex-col gap-4 min-h-screen bg-slate-100">

    {{--<div class="result">
        @foreach (App\Test::all() as $test )
            <p>{{test->title}}</p>
        @endforeach
    </div>--}}
    <div class="flex flex-col space-y-3 hidden">
        <div class="flex-grow ">
        </div>
        <div class="flex-grow space-y-4 justify-center hidden">
            <!--
            <button class="btn btn-outline btn-block btn-lg hover:text-white-500 shadow-lg">{{-- $paperworks->whereHas('status' , fn (Builder $query) => $query('name', 'Pending'))->count() --}} | Tunggu Respon
            </button>
        <button class="btn btn-outline btn-block btn-lg hover:text-white-500 shadow-lg">{{-- $paperworks->whereHas('status', fn (Builder $query) => $query('name', 'Pending'))->count() --}} | Lulus
        </button>
            -->
        </div>

    </div>

    <div class="flex justify-between items-end">
        <div class="flex gap-4 border-b-4 border-gray-400 uppercase pb-3 font-semibold text-xs text-gray-800 space-x-4">
            <div class="border-b-4 border-primary pb-3 -mb-4">Perlu Sokongan (20)</div>
            <div class="border-b-4 border-primary pb-3 -mb-4">Telah Disokong (20)</div>
        </div>
        <div class="flex gap-4 border-b-4 border-gray-400 uppercase pb-3 font-semibold text-xs text-gray-800 space-x-4">
            <div class="border-b-4 border-primary pb-3 -mb-4">Selesai (20)</div>
            <div class="border-b-4 border-primary pb-3 -mb-4">Ditolak (20)</div>
        </div>
        @if (auth()->user()->role == 'creator')
        <a href="/kertas-kerja/fasa-1/permohonan" class="btn btn-sm btn-outline btn-secondary">
            <span class="mr-3">Mohon</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
            </svg>
        </a>
        @endif
    </div>

    {{-- @dump($paperworks) --}}
    <x-paperworks-table :paperworks="$paperworks" :paperworks-mode="$paperworks_mode"/>

</x-layout>
