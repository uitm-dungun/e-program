<x-layout class="bg-slate-100">
    <div class="grid grid-cols-10 gap-8 p-6 relative">
        <div class="col-span-7 card flex-1 bg-primary-content">
            <div class="card-body">
                <div class="card-title font-light text-gray-500 text-center">Kertas Kerja No # {{ $paperwork->id }}</div>
                <h2 class="font-extrabold text-black uppercase text-xl border-b-4 border-primary pb-1.5 mb-5 self-start">Info Utama</h2>
                <div class="grid grid-cols-2 gap-4 mb-3">
                    <div class="mb-3">
                        <p class="font-bold uppercase mb-1 text-gray-400">Tajuk</p>
                        <p>{{ $paperwork->title }}</p>
                    </div>
                    <div class="mb-3">
                        <p class="font-bold uppercase mb-1 text-gray-400">Penerangan</p>
                        <p>{{ $paperwork->objective }}</p>
                    </div>
                </div>
                <h2 class="font-extrabold text-black uppercase text-xl border-b-4 border-primary pb-1.5 mb-5 self-start">Bajet</h2>
                <div class="mb-12">
                    <div class="overflow-x-auto">
                        <table class="table w-full table-compact">
                            <thead>
                                <tr>
                                    <th>Butir</th>
                                    <th>Harga / Unit</th>
                                    <th>Kuantiti</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($paperwork->budgets as $budget)
                                    <tr>
                                        <td>{{ $budget['detail'] }}</td>
                                        <td>{{ $budget['price_per_unit'] }}</td>
                                        <td>{{ $budget['quantity'] }}</td>
                                        <td>{{ $budget['price_per_unit'] * $budget['quantity'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="3">Jumlah Bajet</th>
                                    <th>
                                        {{
                                            collect($paperwork->budgets)->reduce(function ($carry, $budget) {
                                                return $carry + ($budget['price_per_unit'] * $budget['quantity']);
                                            }, 0)
                                        }}
                                    </th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="flex flex-row justify-end" >
                    {{-- <div>
                        <button class="btn btn-outline  btn-accent hover:bg-purple hover:shadow-lg hover:border-transparent focus:bg-indigo-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" group-focus="text-white-300">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                            Muat Turun Dokumen
                        </button>
                    </div> --}}
                    <div class="flex gap-x-2">
                        <button class="btn btn-ghost text-red-400">Batal</button>
                        <button class="btn btn-primary">Terima</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-3 h-fit top-0 sticky pt-8 -mt-8 w-full">
            <div class="mockup-window bg-base-300">
                <div class="flex items-center justify-center px-4 py-16 bg-base-200 h-[24rem]">
                    Sila tunggu sebentar,<br>dokumen sedang diproses
                </div>
            </div>
        </div>
    </div>
</x-layout>
