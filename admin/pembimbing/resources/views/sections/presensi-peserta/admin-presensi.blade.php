<div class="bg-[#262626] p-8 rounded-xl shadow-2xl w-full relative overflow-hidden">

    <div class="absolute inset-0 bg-gradient-to-br from-[#262626] via-[#2a2a2a] to-[#202020] opacity-50 pointer-events-none"></div>

    <div class="relative z-10">

        <div class="flex flex-col md:flex-row justify-between items-center mb-2 gap-4">
            <h2 class="text-[#0066FF] text-3xl font-bold tracking-wide">
                Presensi Peserta Magang
            </h2>

            <div class="relative w-full md:w-[300px]">
                <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-black">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </span>
                <input type="text" id="searchPresensi" onkeyup="searchTable()" placeholder="Cari Nama Peserta..." class="w-full py-2.5 pl-12 pr-4 rounded-full bg-[#C4C4C4] text-black placeholder-black/70 focus:outline-none focus:ring-2 focus:ring-[#0066FF] transition-all font-medium">
            </div>
        </div>

<div class="flex items-center gap-3 mb-8 relative"> 
    <h3 id="displayDate" class="text-white text-lg font-bold">11 September 2025</h3>
    
    <button onclick="toggleCalendar()" class="bg-[#C4C4C4]/70 hover:bg-white/60 flex items-center gap-2 px-2 py-1.5 rounded-xl transition-colors shadow-sm group">
        <img src="{{ asset('images/icons/presensi-kalender.svg') }}" alt="Kalender" class="w-4 h-4 object-contain opacity-80 group-hover:opacity-100 transition-opacity">
        <img src="{{ asset('images/icons/presensi-bukakalender.svg') }}" alt="Buka" class="w-3 h-3 object-contain opacity-80 group-hover:opacity-100 transition-opacity">
    </button>

    <div id="calendarPopup" class="hidden absolute top-10 left-0 z-50 mt-2 w-72 bg-[#333] border border-white/10 rounded-xl shadow-2xl p-4 animate-fade-in-up">
        
        <div class="flex justify-between items-center mb-4">
            <button onclick="changeMonth(-1)" class="text-gray-400 hover:text-white hover:bg-white/10 p-1 rounded">
                &lt;
            </button>
            <span id="currentMonthYear" class="text-white font-bold text-sm">September 2025</span>
            <button onclick="changeMonth(1)" class="text-gray-400 hover:text-white hover:bg-white/10 p-1 rounded">
                &gt;
            </button>
        </div>

        <div class="grid grid-cols-7 gap-1 text-center mb-2">
            <div class="text-xs text-gray-500 font-semibold">Min</div>
            <div class="text-xs text-gray-500 font-semibold">Sen</div>
            <div class="text-xs text-gray-500 font-semibold">Sel</div>
            <div class="text-xs text-gray-500 font-semibold">Rab</div>
            <div class="text-xs text-gray-500 font-semibold">Kam</div>
            <div class="text-xs text-gray-500 font-semibold">Jum</div>
            <div class="text-xs text-gray-500 font-semibold">Sab</div>
        </div>

        <div id="calendarDays" class="grid grid-cols-7 gap-1 text-center">
            </div>

    </div>
</div>

        <div class="overflow-hidden">
            <table id="presensiTable" class="w-full text-left border-collapse">
                
                <thead>
                    <tr>
                        <th class="py-6 text-gray-300 font-bold uppercase text-base tracking-wider border-b border-white/20 w-[25%] text-center">Nama Peserta</th>
                        <th class="py-6 text-gray-300 font-bold uppercase text-base tracking-wider border-b border-white/20 w-[15%] text-center">Jam Masuk</th>
                        <th class="py-6 text-gray-300 font-bold uppercase text-base tracking-wider border-b border-white/20 w-[20%] text-center">Status</th>
                        <th class="py-6 text-gray-300 font-bold uppercase text-base tracking-wider border-b border-white/20 w-[15%] text-center">Bukti Hadir</th>
                        <th class="py-6 text-gray-300 font-bold uppercase text-base tracking-wider border-b border-white/20 w-[25%] text-center">Keterangan</th>
                    </tr>
                </thead>

                <tbody class="text-white text-sm">
                    
                    <tr class="group border-b border-white/5 transition-all duration-300 hover:bg-[#333] hover:scale-[1.01] cursor-pointer">
                        <td class="py-6 border-b border-white/10 font-medium pl-8">
                            <a href="{{ url('/presensi/detail') }}" class="hover:text-[#0066FF] transition-colors relative z-20">
                                Nashwan Bima Andika
                            </a>
                        </td>
                        <td class="py-6 border-b border-white/10 text-center text-gray-300">08.10</td>
                        <td class="py-6 border-b border-white/10 text-center text-[#22C55E]">Hadir - Tepat Waktu</td>
                        <td class="py-6 border-b border-white/10 text-center">
                            <button class="bg-[#0066FF] hover:bg-blue-600 text-white px-4 py-2 rounded-md text-xs flex items-center gap-1 mx-auto transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                Lihat Bukti
                            </button>
                        </td>
                        <td class="py-6 border-b border-white/10 text-center text-gray-300">-</td>
                    </tr>

                    <tr class="group border-b border-white/5 transition-all duration-300 hover:bg-[#333] hover:scale-[1.01] cursor-pointer">
                        <td class="py-6 border-b border-white/10 font-medium pl-8 text-base">De La Luja</td>
                        <td class="py-6 border-b border-white/10 text-center text-gray-300">-</td>
                        <td class="py-6 border-b border-white/10 text-center text-gray-300">Izin</td>
                        <td class="py-6 border-b border-white/10 text-center">
                            <button class="bg-[#0066FF] hover:bg-blue-600 text-white px-4 py-2 rounded-md text-xs flex items-center gap-1 mx-auto transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                Lihat Bukti
                            </button>
                        </td>
                        <td class="py-6 border-b border-white/10 text-center text-gray-300">Urusan keluarga</td>
                    </tr>

                    <tr class="group border-b border-white/5 transition-all duration-300 hover:bg-[#333] hover:scale-[1.01] cursor-pointer">
                        <td class="py-6 border-b border-white/10 font-medium pl-8 text-base">Itadori Yuji</td>
                        <td class="py-6 border-b border-white/10 text-center text-gray-300">09.01</td>
                        <td class="py-6 border-b border-white/10 text-center text-[#FF5100]">Hadir - Terlambat</td>
                        <td class="py-6 border-b border-white/10 text-center">
                            <button class="bg-[#0066FF] hover:bg-blue-600 text-white px-4 py-2 rounded-md text-xs flex items-center gap-1 mx-auto transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                Lihat Bukti
                            </button>
                        </td>
                        <td class="py-6 border-b border-white/10 text-center text-gray-300">Terjebak macet</td>
                    </tr>

                </tbody>
            </table>
            
            <p id="noResult" class="hidden text-center text-gray-400 py-8 italic">
                Peserta tidak dtemukan.
            </p>
        </div>

    </div>
</div>

{{-- SCRIPT SEARCH FUNCTION --}}
<script>
    function searchTable() {
        var input = document.getElementById("searchPresensi");
        var filter = input.value.toUpperCase();
        var table = document.getElementById("presensiTable");
        var tr = table.getElementsByTagName("tr");
        var hasResult = false;

        for (var i = 1; i < tr.length; i++) {
            var td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                var txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    hasResult = true;
                } else {
                    tr[i].style.display = "none";
                }
            }       
        }

        var noResultMsg = document.getElementById("noResult");
        if (!hasResult && filter !== "") {
            noResultMsg.classList.remove("hidden");
        } else {
            noResultMsg.classList.add("hidden");
        }
    }
</script>

<script>
    // --- FUNGSI SEARCH (YANG LAMA TETAP DIPAKAI) ---
    function searchTable() {
        var input = document.getElementById("searchPresensi");
        var filter = input.value.toUpperCase();
        var table = document.getElementById("presensiTable");
        var tr = table.getElementsByTagName("tr");
        var hasResult = false;

        for (var i = 1; i < tr.length; i++) {
            var td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                var txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    hasResult = true;
                } else {
                    tr[i].style.display = "none";
                }
            }       
        }

        var noResultMsg = document.getElementById("noResult");
        if (!hasResult && filter !== "") {
            noResultMsg.classList.remove("hidden");
        } else {
            noResultMsg.classList.add("hidden");
        }
    }

    // --- FUNGSI KALENDER (BARU) ---
    
    const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    let currentDate = new Date(); // Tanggal hari ini
    
    // 1. Buka/Tutup Kalender
    function toggleCalendar() {
        const popup = document.getElementById('calendarPopup');
        if (popup.classList.contains('hidden')) {
            popup.classList.remove('hidden');
            renderCalendar(); // Render saat dibuka
        } else {
            popup.classList.add('hidden');
        }
    }

    // 2. Render Tampilan Kalender
    function renderCalendar() {
        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();

        document.getElementById('currentMonthYear').innerText = `${monthNames[month]} ${year}`;

        const firstDay = new Date(year, month, 1).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        
        const calendarDays = document.getElementById('calendarDays');
        calendarDays.innerHTML = "";

        // Kotak Kosong sebelum tanggal 1
        for (let i = 0; i < firstDay; i++) {
            const emptyDiv = document.createElement('div');
            calendarDays.appendChild(emptyDiv);
        }

        // Kotak Tanggal 1 s.d. Akhir
        for (let i = 1; i <= daysInMonth; i++) {
            const dayDiv = document.createElement('div');
            dayDiv.innerText = i;
            
            // Style Dasar
            dayDiv.className = "text-sm py-1.5 rounded-full cursor-pointer hover:bg-white/10 hover:text-white text-gray-300 transition-colors";

            // Highlight Hari Ini (Opsional)
            const today = new Date();
            if (i === today.getDate() && month === today.getMonth() && year === today.getFullYear()) {
                dayDiv.classList.add('bg-[#0066FF]', 'text-white', 'font-bold');
            }

            // Aksi saat tanggal dipilih
            dayDiv.onclick = function() {
                selectDate(i, month, year);
            };

            calendarDays.appendChild(dayDiv);
        }
    }

    // 3. Ganti Bulan (Prev/Next)
    function changeMonth(step) {
        currentDate.setMonth(currentDate.getMonth() + step);
        renderCalendar();
    }

    // 4. Pilih Tanggal & Update Teks
    function selectDate(day, month, year) {
        const formattedDate = ` ${day} ${monthNames[month]} ${year}`;
        
        // Update Teks Judul
        document.getElementById('displayDate').innerText = formattedDate;
        
        // Tutup Popup
        document.getElementById('calendarPopup').classList.add('hidden');
        
        // (Opsional) Disini bisa tambahkan logika filter tabel berdasarkan tanggal
        // console.log("Tanggal terpilih:", formattedDate);
    }

    // Tutup kalender jika klik di luar area
    document.addEventListener('click', function(event) {
        const popup = document.getElementById('calendarPopup');
        const trigger = event.target.closest('button'); // Tombol pemicu
        const isInsidePopup = event.target.closest('#calendarPopup');

        if (!trigger && !isInsidePopup && !popup.classList.contains('hidden')) {
            popup.classList.add('hidden');
        }
    });
</script>