<x-layout class>
    {{--baiki smula cuma ltk format dia ja--}}
        <div class="flex gap-x-8">
            <div class="flex-1 flex flex-col gap-y-4">
                <div class="border-2 border-blue-100 flex flex-col gap-4 p-5 rounded">
                    <div class="flex">
                        <h2 class="font-semibold uppercase border-b-4 border-yellow-400">Sign Up</h2>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">No. Pelajar</span>
                        </label>
                        <input name="student_id" type="number" class="input input-bordered">
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Nama</span>
                        </label>
                        <input name="name" type="text" class="input input-bordered">
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Kampus</span>
                        </label>
                        <select class="select select-bordered w-full max-w-xs">
                            <option disabled="disabled" selected="selected">Kampus</option>
                            <option>Kampus Dungun</option>
                            <option>Kampus Bukit Besi</option>
                            <option>Kampus Kuala Terengganu</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Fakulti</span>
                        </label>
                        <select class="select select-bordered w-full max-w-xs">
                            <option disabled="disabled" selected="selected">Fakulti</option>
                            <option>Fakulti Perakaunan</option>
                            <option>Fakulti Pengurusan dan Perniagaan</option>
                            <option>Fakulti Pengurusan Hotel dan Pelancongan</option>
                            <option>Kolej Pengajian Kejuruteraan</option>
                            <option>Akademi Pengajian Islam Kontemporari</option>
                            <option>Fakulti Sains Komputer dan Matematik</option>
                            <option>Fakulti Pengajian Kejuruteraan</option>
                            <option>Fakulti Sains Gunaan</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Program</span>
                        </label>
                        <select class="select select-bordered w-full max-w-xs">
                            <option disabled="disabled" selected="selected">Program</option>
                            <option>Pra-Diplome</option>
                            <option>Diploma</option>
                            <option>Degree</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Kod Kursus</span>
                        </label>
                        <select class="select select-bordered w-full max-w-xs">
                            <option disabled="disabled" selected="selected">Kod Kursus</option>
                            <option>Sarjana Muda Perakaunan (Kepujian)</option>
                            <option>Diploma Perakaunan</option>
                            <option>Sarjana Muda Pentadbiran Perniagaan (Kepujian) Kewangan</option>
                            <option>Sarjana Muda Pengurusan Perkhidmatan Pelanggan (Kepujian)</option>
                            <option>Sarjana Muda Pentadbiran Perniagaan (Kepujian) Pengurusan Operasi</option>
                            <option>Diploma Analisis Pelaburan</option>
                            <option>Diploma Pengurusan dan Teknologi Pejabat</option>
                            <option>Pra Diploma Perdagangan (PPT)</option>
                            <option>arjana Muda Sains (Kepujian) Pengurusan Hotel</option>
                            <option>Sarjana Muda Sains (Kepujian) Pengurusan Perkhidmatan Makanan</option>
                            <option>Diploma Pengurusan Hotel</option>
                            <option>Diploma Pengurusan Pelancongan</option>
                            <option>Diploma Pengurusan Perkhidmatan Makanan</option>
                            <option>Diploma Seni Kulinar</option>
                            <option>Diploma Kejuruteraan Elektrik (Elektronik)</option>
                            <option>Diploma Kejuruteraan Elektrik (Kuasa)</option>
                            <option>Diploma Mualamat</option>
                            <option>Sarjana Muda Sains Komputer (Kepujian)</option>
                            <option>Sarjana Muda Sistem Maklumat (Kepujian) Pengkomputeran Perniagaan</option>
                            <option>Sarjana Muda Sains Matematik Pemodelan dan Analitik (Kepujian)</option>
                            <option>Sarjana Muda Pengkomputeran Mudah Alih (Kepujian)</option>
                            <option>Diploma Sains Komputer</option>
                            <option>Diploma Kejuruteraan Kimia</option>
                            <option>Diploma Kejuruteraan Mekanikal</option>
                            <option>Diploma Teknologi Industri Higien dan Keselamatan</option>
                            <option>Pra Diploma Sains (PPT)</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Semester</span>
                        </label>
                        <select class="select select-bordered w-full max-w-xs">
                            <option disabled="disabled" selected="selected">Semester</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>Tidak Berkenaan</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Kolej</span>
                        </label>
                        <select class="select select-bordered w-full max-w-xs">
                            <option disabled="disabled" selected="selected">Kampus</option>
                            <option>Kampus Dungun</option>
                            <option>Kampus Bukit Besi</option>
                            <option>Kampus Kuala Terengganu</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Kelab/Persatuan</span>
                        </label>
                        <select class="select select-bordered w-full max-w-xs">
                            <option disabled="disabled" selected="selected">Kelab/Persatuan</option>
                            <option>KELAB MINDA ISLAM </option>
                            <option>EAST ASIAN CULTURE CLUB (EACC) </option>
                            <option>PUSAT KECEMERLANGAN AKADEMIK </option>
                            <option>KELAB BAHASA ARAB </option>
                            <option>ENGLISH LANGUAGE AND LITERATURES (ELLitS) </option>
                            <option>PERSATUAN BUSINESS COMPUTING (BIZZCOM) </option>
                            <option>PERSATUAN SISWA SISWI SAINS KOMPUTER (SISKOM) </option>
                            <option>MATEMATIK PENGKOMPUTERAN (COMMATH) </option>
                            <option>PERSATUAN PROGRAM SISWA SIHAT (PROSIS) </option>
                           <option>RECREATION LEISURE and EXPEDITION CLUB (RELEX) </option>
                            <option>KELAB KOPERASI SISWA (KOSISWA) </option>
                            <option>KELAB KERABAT KEBUDAYAAN </option>
                            <option>JAWATANKUASA PERWAKILAN KOLEJ </option>
                            <option>MAJLIS PERWAKILAN KOMANDER </option>
                            <option>KELAB BOLA KERANJANG  </option>
                            <option>KELAB FUTSAL  </option>
                            <option>KELAB BOLA JARING  </option>
                            <option>KELAB BOWLING </option>
                            <option>KELAB BADMINTON AMATUR  </option>
                            <option>MALAYSIA FREELANCER ASSOCIATION (MAFA) </option>
                            <option>KELAB RES-Q KT  </option>
                            <option>KELAB BULAN SABIT MERAH MLAYSIA UiTM KUALA  TERENGGANU </option>
                            <option>UNIT KUALITI MAHASISWA KT (UNIQ) </option>
                        </select>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Jawatan Kelab/Persatuan</span>
                        </label>
                        <input name="name" type="text" class="input input-bordered">
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Jawatan</span>
                        </label>
                        <input name="name" type="text" class="input input-bordered">
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">E-mail</span>
                        </label>
                        <input name="name" type="text" class="input input-bordered">
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">No. Telefon</span>
                        </label>
                        <input name="telnum" type="number" class="input input-bordered">
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input name="name" type="text" class="input input-bordered">
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Re-Create Password</span>
                        </label>
                        <input name="name" type="text" class="input input-bordered">
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

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <script src="/js/components/datepicker.js"></script>
    @endpush
</x-layout>
