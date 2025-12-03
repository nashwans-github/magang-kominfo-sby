<div class="bg-[#262626] p-8 rounded-xl shadow-2xl w-full relative overflow-hidden">

    <div class="absolute inset-0 bg-gradient-to-br from-[#262626] via-[#2a2a2a] to-[#202020] opacity-50 pointer-events-none"></div>

    <div class="relative z-10">

        <div class="flex flex-col md:flex-row justify-between items-center mb-8 gap-4">
            <h2 class="text-[#0066FF] text-3xl font-bold tracking-wide">
                Daftar Peserta Magang Aktif
            </h2>

            <div class="relative w-full md:w-[300px]">
                <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-black">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </span>
                <input type="text" 
                    id="searchInput"
                    onkeyup="searchTable()"
                    placeholder="Cari Nama Peserta..." 
                    class="w-full py-2.5 pl-12 pr-4 rounded-full bg-[#C4C4C4] text-black placeholder-black/70 focus:outline-none focus:ring-2 focus:ring-[#0066FF] transition-all font-medium">
            </div>
        </div>

        <div class="overflow-hidden">
            <table id="pesertaTable" class="w-full text-left border-collapse">
                <thead>
                    <tr>
                        <th class="py-6 text-gray-300 font-bold uppercase text-base tracking-wider border-b border-white/20 w-[30%] text-center">Nama Peserta</th>
                        <th class="py-6 text-gray-300 font-bold uppercase text-base tracking-wider border-b border-white/20 w-[20%] text-center">Bidang</th>
                        <th class="py-6 text-gray-300 font-bold uppercase text-base tracking-wider border-b border-white/20 w-[25%] text-center">Tanggal Mulai</th>
                        <th class="py-6 text-gray-300 font-bold uppercase text-base tracking-wider border-b border-white/20 w-[25%] text-center">Tanggal Selesai</th>
                    </tr>
                </thead>

                <tbody class="text-white text-base">
                    <tr class="group border-b border-white/5 transition-all duration-300 hover:bg-[#333] hover:scale-[1.01] hover:shadow-xl cursor-pointer relative hover:z-10">
                        <td class="py-6 border-b border-white/10 font-medium pl-8">
                            <a href="{{ url('/peserta/detail') }}" class="hover:text-[#0066FF] transition-colors relative z-20">
                                Nashwan Bima Andika
                            </a>
                        </td>
                        <td class="py-6 border-b border-white/10 text-center text-gray-300">Website</td>
                        <td class="py-6 border-b border-white/10 text-center text-gray-300">18 Agustus 2025</td>
                        <td class="py-6 border-b border-white/10 text-center text-gray-300">19 Desember 2025</td>
                    </tr>
                    <tr class="group border-b border-white/5 transition-all duration-300 hover:bg-[#333] hover:scale-[1.01] hover:shadow-xl cursor-pointer relative hover:z-10">
                        <td class="py-6 border-b border-white/10 font-medium pl-8">
                            <a href="{{ url('/peserta/detail') }}" class="hover:text-[#0066FF] transition-colors relative z-20">
                                De La Luja
                            </a>
                        </td>
                        <td class="py-6 border-b border-white/10 text-center text-gray-300">Website</td>
                        <td class="py-6 border-b border-white/10 text-center text-gray-300">16 Agustus 2025</td>
                        <td class="py-6 border-b border-white/10 text-center text-gray-300">16 Oktober 2025</td>
                    </tr>
                    <tr class="group border-b border-white/5 transition-all duration-300 hover:bg-[#333] hover:scale-[1.01] hover:shadow-xl cursor-pointer relative hover:z-10">
                        <td class="py-6 border-b border-white/10 font-medium pl-8">
                            <a href="{{ url('/peserta/detail') }}" class="hover:text-[#0066FF] transition-colors relative z-20">
                                Itadori Yuji
                            </a>
                        </td>
                        <td class="py-6 border-b border-white/10 text-center text-gray-300">Website</td>
                        <td class="py-6 border-b border-white/10 text-center text-gray-300">20 Agustus 2025</td>
                        <td class="py-6 border-b border-white/10 text-center text-gray-300">25 September 2025</td>
                    </tr>
                </tbody>
            </table>
            
            <p id="noResult" class="hidden text-center text-gray-400 py-8 italic">
                Peserta tidak ditemukan.
            </p>
        </div>

    </div>
</div>

{{-- SCRIPT SEARCH FUNCTION --}}
<script>
    function searchTable() {
        // 1. Ambil input dan tabel
        var input = document.getElementById("searchInput");
        var filter = input.value.toUpperCase();
        var table = document.getElementById("pesertaTable");
        var tr = table.getElementsByTagName("tr");
        var hasResult = false;

        // 2. Looping semua baris (mulai dari 1 karena 0 itu header)
        for (var i = 1; i < tr.length; i++) {
            // Ambil kolom pertama (Nama Peserta)
            var td = tr[i].getElementsByTagName("td")[0];
            
            if (td) {
                var txtValue = td.textContent || td.innerText;
                // 3. Cek apakah cocok
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = ""; // Tampilkan
                    hasResult = true;
                } else {
                    tr[i].style.display = "none"; // Sembunyikan
                }
            }       
        }

        // 4. Tampilkan pesan "Tidak ditemukan" jika kosong
        var noResultMsg = document.getElementById("noResult");
        if (!hasResult && filter !== "") {
            noResultMsg.classList.remove("hidden");
        } else {
            noResultMsg.classList.add("hidden");
        }
    }
</script>