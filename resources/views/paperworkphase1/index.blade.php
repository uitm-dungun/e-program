{{-- <x-layout class="max-w-screen-lg mx-auto"> --}}
<x-layout class="mx-12 flex gap-12">

    <div class="flex-grow">
        <a href="/kertas-kerja/fasa-1/permohonan" class="btn-block btn btn-lg"><span class="mr-3">Mohon</span> <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
            </svg></a>
    </div>

    <div class="flex-grow rounded-lg shadow-lg p-5 flex flex-col gap-8">
        <div class="flex justify-between items-center">
            <h3>Kertas kerja</h3>
            <div class="form-control">
                <div class="relative">
                    <input placeholder="Isi carian tajuk"
                        class="w-full pr-16 rounded-lg input input-sm input-primary input-bordered" type="text">
                    <button class="absolute top-0 right-0 rounded-lg rounded-l-none btn btn-sm btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="dropdown dropdown-end">
                <div tabindex="0" class="m-1 btn btn-outline btn-sm rounded-md pr-1">
                    status
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <ul tabindex="0" class="p-2 shadow menu dropdown-content bg-base-100 rounded-box w-52">
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
        </div>
        <div class="overflow-x-auto">
            <table class="table w-full">
                <thead>
                    <tr>
                        <th>Tajuk</th>
                        <th>Status</th>
                        <th>Tarikh Cipta</th>
                        <th>Tarikh Semak</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover">
                        <td>Program Name Lorem ipsum dolor sit amet...</td>
                        <td>
                            <div class="badge badge-success">lulus</div>
                        </td>
                        <td>17 April 2021</td>
                        <td>18 April 2021</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="btn-group self-end">
            <button class="btn btn-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
            </button>
            <button class="btn btn-sm">1</button> 
            <button class="btn btn-sm btn-active">2</button> 
            <button class="btn btn-sm">3</button> 
            <button class="btn btn-sm btn-disabled">...</button> 
            <button class="btn btn-sm">32</button> 
            <button class="btn btn-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </div>

</x-layout>
