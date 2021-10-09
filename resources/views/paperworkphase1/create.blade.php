<x-layout class="mx-12 flex gap-12">
    <div class="flex flex-col gap-y-4">
        <h1>Halaman Hadapan</h1>
        <div class="p-5 rounded-lg shadow-md flex flex-col gap-4">
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Tajuk</span>
                </label>
                <input type="text" placeholder="isi tajuk program" class="input input-bordered">
            </div>
            <div class="flex gap-x-4">

                <x-datepicker></x-datepicker>
                <x-datepicker></x-datepicker>

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
            </div>
        </div>
    </div>
    
    @push('scripts')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <script src="/js/components/datepicker.js"></script>
    @endpush
</x-layout>