<x-layout class="mx-12 flex gap-12 justify-center">
    <div class="flex flex-col gap-y-4 justify-between">
        <div class="p-5 rounded-lg shadow-md flex flex-col gap-4">
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Penerimaan Kertas Kerja</span>
                </label>
                <input type="text" value="#4012" class="input input-bordered">
            </div>
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Tajuk</span>
                </label>
                <input type="text" placeholder="isi tajuk program" class="input input-bordered">
            </div>
            {{-- <div class="flex gap-x-4"> --}}

                {{-- <x-datepicker></x-datepicker>
                <x-datepicker></x-datepicker> --}}

                {{-- <div class="form-control">
                    <label class="label">
                        <span class="label-text">Tarikh Mula</span>
                    </label>
                    <input type="text" placeholder="username" class="input input-bordered">
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Tarikh Akhir</span>
                    </label>
                    <input type="text" placeholder="username" class="input input-bordered">
                </div> --}}
            {{-- </div> --}}
            <div class="flex flex-row gap-x-6" >
                <div>
                    <button class="btn btn-outline  btn-accent hover:bg-purple hover:shadow-lg hover:border-transparent focus:bg-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" group-focus="text-white-300">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                        Muat Turun Dokumen
                    </button>
                </div>
                <div class="flex gap-x-2">
                    <button class="btn btn-outline btn-primary">Terima</button>
                    <button class="btn btn-outline btn-secondary">Batal</button>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <script src="/js/components/datepicker.js"></script>
    @endpush

</x-layout>
