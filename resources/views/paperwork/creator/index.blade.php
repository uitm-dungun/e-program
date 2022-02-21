{{-- <x-layout class="max-w-screen-lg mx-auto"> --}}
    <x-layout class="mx-12 flex gap-12 min-h-full" style="min-height: 70vh;">

        <div class="flex flex-col space-y-3">
            <div class="flex-grow ">
            <a href="/kertas-kerja/permohonan" class="btn-block btn btn-lg btn-primary"><span
                    class="mr-3">Mohon</span> <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                </svg>
            </a>
            </div>
            <div class="flex-grow space-y-4 justify-center">
                <button class="btn btn-outline btn-block btn-lg hover:text-white-500 shadow-lg">{{-- $paperworks->whereHas('status' , fn (Builder $query) => $query('name', 'Pending'))->count() --}} | Tunggu Respon
                </button>
            <button class="btn btn-outline btn-block btn-lg hover:text-white-500 shadow-lg">{{-- $paperworks->whereHas('status', fn (Builder $query) => $query('name', 'Pending'))->count() --}} | Lulus
            </button>
            </div>

        </div>

        {{-- Column 1
        @foreach ($collection as $item)
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        @endforeach--}}

        <div class="flex-grow rounded-lg shadow-lg px-8 py-5 flex flex-col justify-between">

            <div class="flex flex-col gap-8">
                <div class="flex justify-between items-center">
                    <h3>Kertas kerja</h3>
                    <div class="form-control">
                        <div class="relative">
                            <input placeholder="Isi carian tajuk"
                                class="w-full pr-16 rounded-lg input input-sm input-neutral input-bordered" type="text">
                            <button class="absolute top-0 right-0 rounded-lg rounded-l-none btn btn-sm btn-neutral">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
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
                            @foreach($paperworks as $paperwork)
                            <tr class="hover">
                                <td><a href="{{ route('paperwork.creation.show', $paperwork->id) }}">{{ $paperwork->title }}</a></td>
                                <td>
                                    <div class="badge {{ $paperwork->status->className }}">{{ $paperwork->status->name }}</div>
                                </td>
                                <td>{{ $paperwork->created_at->toFormattedDateString() }}</td>
                                <td>{{ $paperwork->updated_at->toFormattedDateString() }}</td>
                                <td><a
                                    href="{{ route('paperwork.creation.show', $paperwork->id) }}
                                        {{-- @if ($paperwork->status == 'Pending')
                                            {{ route('paperwork.phase-1.kerani.show', $paperwork->id) }}
                                        @elseif ($paperwork->status == 'Reviewed')
                                            {{ route('paperwork.phase-1.pegawai.show', $paperwork->id) }}
                                        @elseif ($paperwork->status==   'Accepted')
                                            {{ route('paperwork.phase-1.pegawai.show', $paperwork->id) }}
                                        @elseif ($paperwork->status=='To Review')
                                            {{ route('paperwork.phase-1.ptj.index', $paperwork->id) }}
                                        @elseif ($paperwork->status=='Rejected')
                                            {{ route('paperwork.phase-1.pegawai.show', $paperwork->id) }}
                                        @endif --}}
                                    "
                                    class="btn btn-xs btn-primary btn-square"
                                ><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg></a></td>
                            </tr>
                            @endforeach
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

    </x-layout>
