<x-layout class="mx-12 flex gap-12">
    <div class="flex flex-col gap-y-4 justify-between">
        <div class="p-5 rounded-lg shadow-md flex flex-col gap-4">
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Kelulusan Kertas Kerja</span>
                </label>
                <input type="text" value="#4012" class="input input-bordered">
            </div>
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
                <div class="flex gap-x-4">
                <x-datepicker></x-datepicker>
                <p class="text-left">Pilih Tarikh Meeting</p>
                {{-- <div class="form-control">
                    <label class="label">
                        <span class="label-text">Tarikh Meeting</span>
                    </label>
                    <input type="text" placeholder="username" class="input input-bordered">
                    </div> --}}
                </div>                
                <div class="flex flex-row gap-x-6" >
                <div> 
                <button class="btn btn-outline  btn-accent hover:bg-purple hover:shadow-lg hover:border-transparent focus:bg-indigo-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="black" group-focus="text-white-300">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>  
                    Muat Turun Dokumen
                </button>
                </div> 
                <div class="flex gap-x-2">   
                    <div class="dropdown dropdown-end">
                        <div tabindex="0" class="btn btn-outline btn-primary rounded-md pr-1">
                            Lulus
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <ul tabindex="0" class="p-2 shadow menu dropdown-content bg-base-100 rounded-box w-52">
                            <li>
                                <a>Lulus Tiada Perubahan</a>
                            </li>
                            <li>
                            <a>Lulus Ada Perubahan</a>
                            </li>
                        </ul>
                    </div>
                <button class="btn btn-outline btn-secondary">Kemaskini Semula</button>
                <button class="btn btn-outline btn-accent">Tidak Lulus</button>    
                </div>
            </div> 
       </div>
@push('scripts')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <script src="/js/components/datepicker.js"></script>
    @endpush
</x-layout>