<x-layout class="mx-12 mb-24 flex gap-8 flex-col" x-data="{ currentStep: 1 }">
    <ul class="w-full steps">
        <li class="step step-primary">Butiran</li>
        <li class="step" x-bind:class="currentStep >= 2 ? 'step-primary' : ''">Bajet</li>
        <li class="step" x-bind:class="currentStep >= 3 ? 'step-primary' : ''">Bajet</li>
    </ul>
    <form action="/kertas-kerja/fasa-1" method="POST">
        @csrf
        <!-- First step -->
        <div class="flex flex-col gap-12" x-show="currentStep == 1">
            <div class="flex justify-end">
                <div class="">
                    <button type="button" class="btn btn-outline-secondary"  @click="currentStep = 2">
                        Seterusnya
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="flex gap-x-8">
                <div class="flex-1 flex flex-col gap-y-4">
                    <div class="border-2 border-blue-100 flex flex-col gap-4 p-5 rounded">
                        <div class="flex">
                            <h2 class="font-semibold uppercase border-b-4 border-yellow-400">Halaman Hadapan</h2>
                        </div>

                        <div class="grid grid-cols-3">
                            <div class="form-control col-span-2">
                                <label class="label">
                                    <span class="label-text">Tajuk</span>
                                </label>
                                <input name="title" type="text" placeholder="isi tajuk program" class="input input-bordered">
                            </div>
                            <div class="form-control col-span-1">
                                <label class="label">
                                    <span class="label-text">Tempat</span>
                                </label>
                                <input name="venue" type="text" placeholder="tempat" class="input input-bordered">
                            </div>
                        </div>

                        <div class="flex">
                        <x-datepicker>
                            <x-slot name="form_name">
                                begin_date
                            </x-slot>
                            Tarikh Mula
                        </x-datepicker>
                        <x-datepicker>
                            <x-slot name="form_name">
                                end_date
                            </x-slot>
                            Tarikh Akhir
                        </x-datepicker>
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
                        <div class="grid grid-cols-2">
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
                </div>
                <div class="rounded-lg shadow-lg px-8 py-5 flex flex-col justify-between">
                    <div class="flex flex-col">
                        <div class="form-control py-4">
                            <label class="label mb-2">
                                <span class="label-text">Objektif</span>
                            </label>
                            <!-- textarea class="textarea h-24 textarea-bordered" placeholder="objektif program"></textarea -->
                            <textarea class="textarea textarea-bordered mb-4" name="objective" class="max" id="coverLetterText" rows="8" background></textarea>
                            <span class="text-gray-400 text-sm">* Objektif mesti kurang dari 500 patah perkataan</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col flex-grow justify-between pb-3 pt-5 px-6 rounded-lg shadow-lg">
                <div class="flex flex-col gap-4">
                    <div class="overflow-x-auto">
                        <table class="table w-full table-compact">
                            <h3 class="text-lg leading-6 font-medium text-gray-900 mb-5">Maklumat Petugas</h3>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Nama</th>
                                    <th>ID Program</th>
                                    <th>Jawatan</th>
                                    <th>Kad Pengenalan</th>
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
                                    <td><select class="select select-bordered select-success" name="officers[0][category]">
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
        <!-- Second step -->
        <div class="flex-gap-12" x-show="currentStep==2">
            <div class="flex flex-col gap-y-10">
                <div class="flex justify-between">
                    <h1 class="text-3xl font-extralight">Bajet</h1>
                    <div class="self-end flex gap-4">
                        <button type="button" class="btn btn-outline-secondary" @click="currentStep = 1">
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

                    </div>
                    <div class="flex-grow rounded-lg shadow-lg px-8 py-5 flex flex-col justify-between">
                        <div class="flex flex-col gap-4">
                            <div class="overflow-x-auto">
                                <table class="table w-full table-sm">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Butiran</th>
                                            <th>Harga / Unit</th>
                                            <th>Kuantiti</th>
                                            <th>Jumlah</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="input-budgets">
                                        <tr class="hover input-budget" id="input-budget-0">
                                            <th>1</th>
                                            <td><input type="text" name="budgets[0][detail]" placeholder="butiran"></td>
                                            <td><input type="text" name="budgets[0][price_per_unit]" placeholder="Harga / Unit"></td>
                                            <td><input type="text" name="budgets[0][quantity]" placeholder="Kuantiti"></td>
                                            <td><input type="text" value="N/A" readonly></td>
                                            <td><button type="button" onclick="inputRowRemove('budget', 0)">
                                               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                                                </svg>
                                            </button></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                          <th colspan="4">Jumlah Kesluruhan</th>
                                          <th colspan="2">RM150</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <button type="button" class="btn btn-ghost self-center" id="add-new-budget"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                            </svg></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- third step -->
        <div class="flex-gap-12" x-show="currentStep">
            <div class="flex flex-col gap-y-10">
                <div class="flex justify-between">
                    <h1 class="text-3xl font-extralight">SENARAI SEMAK PEMATUHAN SOP SEMASA PENULARAN WABAK COVID-19</h1>
                    <div class="self-end flex gap-4">
                        <button type="button" class="btn btn-outline-secondary" @click="currentStep = 2">
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
                    <div class="overflow-x-auto">
                        <table class="table w-full">
                          <thead>
                            <tr>
                              <th>
                                <label>
                                  <input type="checkbox" class="checkbox">
                                </label>
                              </th>
                              <th>Name</th>
                              <th>Job</th>
                              <th>Favorite Color</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>
                                <label>
                                  <input type="checkbox" class="checkbox">
                                </label>
                              </th>
                              <td>
                                <div class="flex items-center space-x-3">
                                    <div class="font-bold">
                                        NAME
                                    <!--
                                    USER CAN CHOOSE BETWEEN 3 OPTION WHICH IS => YA, TIDAK, TIDAK BERKENAAN
                                    1 Penganjuran bukan di kawasan Perintah Kawalan Pergerakan Darurat (PKPD)
                                    2 Tiada tetamu berkategori Patient Under Investigation (PUI) / Patient Under Surveillance (PUS) hadir
                                    3 Penggunaan Borang Deklarasi Harian Saringan Risiko COVID-19 UiTM samada manual atau melalui aplikasi
                                    4 Suhu badan akan diambil di pintu utama UiTMCT (Pos A) / di tempat penganjuran
                                    5 Penyediaan hand sanitizer dan rekod kehadiran di kaunter pendaftaran
                                    6 Mewajibkan pemakaian pelitup muka semasa program
                                    7 Pembersihan dan nyahkuman akan dijalankan sebelum / selepas program
                                    8 Memastikan tempat penganjuran mempunyai pengudaraan yang baik
                                    9 Menyediakan notis had bilangan di setiap ruang pada setiap masa
                                    10 Menyediakan penandaan penjarakan sosial dan laluan keluar/masuk
                                    11 Hidangan makanan bukan secara layan diri
                                    12 Kerap menyampaikan makluman peringatan keselamatan COVID-19 sepanjang program
                                    13 Tiada berkongsi barang / makanan
                                    14 Tetamu tiada menginap / berkongsi bilik kecuali mendapat kelulusan.
                                    15 Menggalakkan tetamu membersihkan diri dan menukar pakaian apabila kembali ke rumah
                                    -->
                                    </div>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
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

            // Table petugas <==> Officer
            $('#add-new-officer').click(() => {
                reindexRowsOfficer('officer');
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

            // Table budget
            $('#add-new-budget').click(() => {
                reindexRowsBudget('budget');
                // Append
                let i = $('.input-budget').length; // No need to add 1 because of index starts at 0, length +1 index
                $('#input-budgets').append(`
                    <tr class="hover input-budget" id="input-budget-${i}">
                        <th>${i+1}</th>
                        <td><input type="text" name="budgets[${i}][detail]" placeholder="butiran"></td>
                        <td><input type="text" name="budgets[${i}][price_per_unit]" placeholder="Harga / Unit"></td>
                        <td><input type="text" name="budgets[${i}][quantity]" placeholder="Kuantiti"></td>
                        <td><input type="text" value="N/A" readonly></td>
                        <td><button type="button" onclick="inputRowRemove('budget', ${i})">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                        </button></td>
                    </tr>
                `);
            });
        }); //end if ready(fn)

        // Task : Refactor
        function inputRowRemove(name,index) {
            $(`#input-${name}-${index}`).remove();
            if(name === 'officer') {
                reindexRowsOfficer(name);
            } else if (name === 'budget') {
                reindexRowsBudget(name);
            }
        }

        function reindexRowsOfficer(title) {
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

        function reindexRowsBudget(title) {
            // Reindex all elements
            $(`.input-${title}`).each((i, el) => {
                $(el).attr("id",`input-${title}-${i}`)
                $(el).eq(0).children().eq(0).text(i+1)
                $(el).eq(0).children().eq(1).children().first().attr('name', `${title}s[${i}][detail]`)
                $(el).eq(0).children().eq(2).children().first().attr('name', `${title}s[${i}][price_per_unit]`)
                $(el).eq(0).children().eq(3).children().first().attr('name', `${title}s[${i}][quantity]`)
                $(el).eq(0).children().eq(5).children().first().attr('onclick', `inputRowRemove('${title}', ${i})`)
            })
        }
    </script>



    @endpush
</x-layout>
