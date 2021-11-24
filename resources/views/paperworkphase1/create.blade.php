<x-layout class="mx-12 flex gap-8 flex-col" x-data="{ second: false }">
    <ul class="w-full steps">
        <li class="step step-primary">Butiran</li>
        <li class="step" x-bind:class="second ? 'step-primary' : ''">Bajet</li>
    </ul>
    <form action="/kertas-kerja/fasa-1" method="POST">
        @csrf
        <!-- First step -->
        <div class="flex flex-col gap-12" x-show="!second">
            <div class="flex justify-between">
                <h1 class="text-3xl font-extralight">Halaman Hadapan</h1>
                <div class="self-end flex gap-4">
                    <button type="button" class="btn btn-outline-secondary"  @click="second = true">
                        Seterusnya
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="flex flex-col gap-y-4">
                <div class="p-5 rounded-lg shadow-md flex flex-col gap-4">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Tajuk</span>
                        </label>
                        <input name="title" type="text" placeholder="isi tajuk program" class="input input-bordered">
                    </div>
                    <div class="flex gap-x-4">
        
                    {{--
                    <x-datepicker>
                        <x-slot name="form_name">
                            tarikh-mula
                        </x-slot>
                        Tarikh Mula
                    </x-datepicker>
                    <x-datepicker>
                        <x-slot name="form_name">
                            tarikh-akhir
                        </x-slot>
                        Tarikh Akhir
                    </x-datepicker> --}}
                    </div>
                    {{--
                    <div class="flex gap-x-4">
                        <div class="form-control px-8">
                            <label class="label">
                                <span class="label-text">Masa Mula</span>
                            </label>
                            <input type="time" id="appt" name="appt" min="09:00" max="18:00" class="input input-bordered">
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Masa Habis</span>
                            </label>
                        <input type="time" id="appt" name="appt" min="09:00" max="18:00" class="input input-bordered">
                        </div>
                    </div>
                    --}}                    
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Tempat</span>
                        </label>
                        <input name="venue" type="text" placeholder="tempat" class="input input-bordered">
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Jumlah Peserta</span>
                        </label>
                        <input name="total_participants" type="number" placeholder="jum_peserta" class="input input-bordered">
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Sasaran Peserta</span>
                        </label>
                        <input name="target_participants" type="number" placeholder="sasaran_peserta" class="input input-bordered">
                    </div>
                </div>
            </div>
            <div class="flex-grow rounded-lg shadow-lg px-8 py-5 flex flex-col justify-between">
                <div class="flex flex-col">
                    <div class="form-control py-5">
                        <div class="alert alert-warning">
                            <div class="flex-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                </svg>
                                <label>Perkataan Tidak Lebih Dari 500!</label>
                            </div>
                        </div>
                        <label class="label">
                            <span class="label-text">Objektif</span>
                        </label>
                        <!-- textarea class="textarea h-24 textarea-bordered" placeholder="objektif program"></textarea -->
                        <textarea class="textarea h-24 textarea-bordered" name="objective" class="max" id="coverLetterText" cols="80" rows="12" background placeholder="Make a Pitch not more than 500 words"></textarea>
                    </div>
                </div>
                <div class="flex-grow rounded-lg shadow-lg px-8 py-5 flex flex-col justify-between">
                    <div class="flex flex-col gap-4">
                        <div class="overflow-x-auto">
                            <table class="table w-full table-sm">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">MAKLUMAT PETUGAS</h3>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Nama</th>
                                        <th>ID Program</th>
                                        <th>Kad Pengenalan</th>
                                        <th>Jawatan</th>
                                        <th>No. Telefon</th>
                                        <th>Kategori</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="input-officers">
                                    <tr class="hover input-officer" id="input-officer-0">
                                        <th>1</th>
                                        <td><input type="text" name="officers[0][name]" placeholder="Isi Nama"></td>
                                        <td><input type="text" name="officers[0][programid]" placeholder="Isi ID Program"></td>
                                        <td><input type="text" name="officers[0][position]" placeholder="Isi Jawatan"></td>
                                        <td><input type="text" name="officers[0][ic]" placeholder="Isi Kad Pengenalan"></td>
                                        <td><input type="text" name="officers[0][phone]" placeholder="Isi No.Telefon"></td>
                                        <td><select class="select select-bordered select-success w-full max-w-xs" name="officers[0][category]">
                                            <option disabled="disabled" selected="selected">Pilih Kategori</option>
                                            <option value="panel">Panel</option>
                                            <option value="facilitator">Fasilitator</option>
                                            </select>
                                        </td>
                                        <td><button type="button" onclick="inputRowRemove('officer', 0)">
                                           <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                                            </svg>
                                        </button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <button type="button" class="btn btn-ghost self-center" id="add-new-officer"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Second step -->
        <div class="flex-gap-12" x-show="second">
            <div class="flex flex-col gap-y-10">
                <div class="flex justify-between">
                    <h1 class="text-3xl font-extralight">Bajet</h1>
                    <div class="self-end flex gap-4">
                        <button type="button" class="btn btn-outline-secondary" @click="second = ! second">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
                            </svg>
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                </div>
                <div class="flex flex-col gap-y-4 justify-between">
                    <div class="p-5 rounded-lg shadow-md flex flex-col gap-4">
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Tabung</span>
                            </label>
                            <input name="budget_moneybank" type="text" placeholder="tabung" class="input input-bordered">
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Kelulusan</span>
                            </label>
                            <input name="budget_grant" type="text" placeholder="kelulusan" class="input input-bordered">
                        </div>
                        <div class="form-control py-5">
                            <label class="label">
                                <span class="label-text">Catatan</span>
                            </label>
                            <textarea name="budget_notes" class="textarea h-24 textarea-bordered" placeholder="catatan"></textarea>
                        </div>
                        <div class="overflow-x-auto">
                        <table class="table w-full">
                            <thead>
                            <tr>
                                <th>Perkara</th>
                                <th>RM/Unit</th>
                                <th>Kuantiti</th>
                                <th>Jumlah(RM)</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr class="hover">
                                    <td><input type="text" name="budget_item_1" placeholder="Isi perkara"></td>
                                    <td><input type="number" name="budget_price_1" placeholder="Isi harga" min="0.00"></td>
                                    <td><input type="number" name="budget_quantity_1" placeholder="Isi perkara" min="0"></td>
                                    <td>RM0.00</td>
                                </tr>
                                <tr class="hover">
                                    <td><input type="text" name="budget_item_2" placeholder="Isi perkara"></td>
                                    <td><input type="number" name="budget_price_2" placeholder="Isi harga" min="0.00"></td>
                                    <td><input type="number" name="budget_quantity_2" placeholder="Isi perkara" min="0"></td>
                                    <td>RM0.00</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/js/components/datepicker.js"></script>
    <script src="https://api.jquery.com/removeclass/"></script>

    <script>
        jQuery(document).ready(function($) {

            // Keypress limit
            var max = 500;
            $('textarea.max').keypress(function(e) {
                if (e.which < 0x20) {
                    // e.which < 0x20, then it's not a printable character
                    // e.which === 0 - Not a character
                    return;     // Do nothing
                }
                if (this.value.length == max) {
                    e.preventDefault();
                } else if (this.value.length > max) {
                    // Maximum exceeded
                    this.value = this.value.substring(0, max);
                }
            });

            // Maklumat petugas <==> Officer
            $('#add-new-officer').click(() => {
                reindexRows('officer');
                // Append
                let i = $('.input-officer').length; // No need to add 1 because of index starts at 0, length +1 index
                $('#input-officers').append(`
                    <tr class="hover input-officer" id="input-officer-${i}">
                        <th>${i+1}</th>
                        <td><input type="text" name="officers[${i}][name]" placeholder="Isi Nama"></td>
                        <td><input type="text" name="officers[${i}][programid]" placeholder="Isi ID Program"></td>
                        <td><input type="text" name="officers[${i}][position]" placeholder="Isi Jawatan"></td>
                        <td><input type="text" name="officers[${i}][ic]" placeholder="Isi Kad Pengenalan"></td>
                        <td><input type="text" name="officers[${i}][phone]" placeholder="Isi No.Telefon"></td>
                        <td><select class="select select-bordered select-success w-full max-w-xs" name="officers[${i}][category]">
                            <option disabled="disabled" selected="selected">Pilih Kategori</option>
                            <option value="panel">Panel</option>
                            <option value="facilitator">Fasilitator</option>
                            </select>
                        </td>
                        <td><button type="button" onclick="inputRowRemove('officer', ${i})">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                        </button></td>
                    </tr>                        
                `);
            });
        }); //end if ready(fn)

        function inputRowRemove(name,index) {
            $(`#input-${name}-${index}`).remove();
            reindexRows(name);
        }

        function reindexRows(title) {
            // Reindex all elements
            $(`.input-${title}`).each((i, el) => {
                $(el).attr("id",`input-${title}-${i}`)
                $(el).eq(0).children().eq(0).text(i+1)
                $(el).eq(0).children().eq(1).children().first().attr('name', `${title}s[${i}][nama]`)
                $(el).eq(0).children().eq(2).children().first().attr('name', `${title}s[${i}][programid]`)
                $(el).eq(0).children().eq(3).children().first().attr('name', `${title}s[${i}][position]`)
                $(el).eq(0).children().eq(4).children().first().attr('name', `${title}s[${i}][ic]`)
                $(el).eq(0).children().eq(5).children().first().attr('name', `${title}s[${i}][phone]`)
                $(el).eq(0).children().eq(6).children().first().attr('name', `${title}s[${i}][category]`)
                $(el).eq(0).children().eq(7).children().first().attr('onclick', `inputRowRemove('${title}', ${i})`)
            })
        }
    </script>    



    @endpush
</x-layout>
