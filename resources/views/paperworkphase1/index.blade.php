<x-layout class="max-w-screen-lg mx-auto">
    <div class="rounded-lg shadow-lg p-5 flex flex-col gap-4">
        <div class="flex justify-between items-center">
            <h3>Kertas kerja</h3>
            <div class="form-control">
                <div class="flex space-x-2">
                    <input type="text" placeholder="Search" class="w-full input input-primary input-bordered">
                    <button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg></button>
                </div>
            </div>
            <div class="dropdown dropdown-end">
                <div tabindex="0" class="m-1 btn rounded-md">Pilih status</div>
                <ul tabindex="0" class="p-2 shadow menu dropdown-content bg-base-100 rounded-box w-52">
                    <li>
                        <a>Item 1</a>
                    </li>
                    <li>
                        <a>Item 2</a>
                    </li>
                    <li>
                        <a>Item 3</a>
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
    </div>

</x-layout>
