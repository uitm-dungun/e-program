<x-layout class="px-8 pt-8 flex flex-col gap-4 min-h-screen bg-slate-100">

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

    <div class="card card-compact rounded-lg flex-1 bg-primary-content">
        <div class="card-body">
            <div class="flex-grow flex flex-col min-h-[34rem] justify-between">

                <div class="flex flex-col gap-8">
                    <div class="flex justify-between items-center">
                        <h3 class="text-xl font-semibold text-gray-600">Sokongan Kertas Kerja</h3>
                        <div class="form-control">
                            <div class="relative">
                                <input type="text" placeholder="Search" class="w-full pr-16 input input-bordered input-sm">
                                <button class="absolute top-0 right-0 rounded-l-none btn btn-primary btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        @if (auth()->user()->type == 'ptj')
                        <div class="dropdown dropdown-end">
                            <div tabindex="0" class="m-1 btn btn-outline btn-xs rounded-md pr-1">
                                status
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <ul tabindex="0" class="p-2 shadow menu dropdown-content bg-base-100 rounded-box w-52">
                                {{-- @foreach ($statuses as $status)
                                    <li>
                                        <a>{{ $status }}</a>
                                    </li>
                                @endforeach --}}
                                <li>
                                    <a>Lulus</a>
                                </li>
                                <li>
                                    <a>Batal</a>
                                </li>
                                <li>
                                    <a>Tunggu Keputusan</a>
                                </li>
                            </ul>
                        </div>
                        @endif
                    </div>
                    <div class="overflow-x-auto">
                        <table class="table w-full table-compact">
                            <thead>
                                <tr>
                                    <th>Tajuk</th>
                                    <th>Status</th>
                                    <th>Tarikh Cipta</th>
                                    <th>Tarikh Semak</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!$paperworks->isEmpty())
                                    @foreach($paperworks as $paperwork)
                                    <tr class="hover">
                                        <td><a href="{{ route('paperwork.support.show', $paperwork->id) }}">{{ Illuminate\Support\Str::limit($paperwork->title, 120) }}</a></td>
                                        <td>
                                            <div class="badge {{ $paperwork->status->className }}">{{ $paperwork->status->name }}</div>
                                        </td>
                                        <td>{{ $paperwork->created_at->toFormattedDateString() }}</td>
                                        <td>{{ $paperwork->updated_at->toFormattedDateString() }}</td>
                                        <td><a
                                            href="{{ route('paperwork.support.show', $paperwork->id) }}"
                                            class="btn btn-xs btn-primary btn-square"
                                        ><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd" />
                                        </svg></a></td>
                                    </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5">
                                            <div class="h-[24rem] bg-gray-100 flex items-center justify-center w-100 rounded-lg italic text-7xl font-black text-gray-400">
                                                Empty!!!
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="btn-group self-end">
                    <button class="btn btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <button class="btn btn-sm">1</button>
                    <button class="btn btn-sm btn-active">2</button>
                    <button class="btn btn-sm">3</button>
                    <button class="btn btn-sm btn-disabled">...</button>
                    <button class="btn btn-sm">32</button>
                    <button class="btn btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

</x-layout>
