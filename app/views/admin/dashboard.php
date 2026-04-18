<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Desa Digital - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
    </style>
</head>
<body class="bg-[#f0f4f8] font-sans text-sm text-gray-700 overflow-hidden">

    <header class="bg-[#1a5bbf] text-white h-14 flex items-center justify-between px-6 shadow-md z-20 relative">
        <div class="flex items-center gap-3">
            <div class="bg-white/20 p-1.5 rounded-md">
                <i class="fa-solid fa-shield-halved text-yellow-300 text-lg"></i>
            </div>
            <h1 class="font-bold text-base tracking-wide">
                Sistem Desa Digital <span class="font-normal text-gray-200 text-sm ml-1">- Desa Ciangsana</span>
            </h1>
        </div>
        <div class="flex items-center gap-5">
            <button class="relative hover:text-gray-200 transition">
                <i class="fa-regular fa-bell text-lg"></i>
                <span class="absolute -top-1 -right-1 flex h-2.5 w-2.5">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-red-500 border border-white"></span>
                </span>
            </button>
            <div class="flex items-center gap-2 cursor-pointer border-l border-blue-500 pl-4">
                <img src="https://ui-avatars.com/api/?name=Admin+Desa&background=f8f9fa&color=1a5bbf" alt="Admin" class="w-8 h-8 rounded-full border border-blue-400">
                <span class="font-medium text-sm">Admin Desa</span>
                <i class="fa-solid fa-chevron-down text-xs ml-1"></i>
            </div>
        </div>
    </header>

    <div class="flex h-[calc(100vh-3.5rem)]">
        
        <aside class="w-[240px] bg-white border-r border-gray-200 flex flex-col justify-between flex-shrink-0 z-10 shadow-sm">
            <div class="py-4">
                <nav class="flex flex-col gap-1 px-3">
                    <a href="#" class="flex items-center gap-3 px-4 py-2.5 bg-[#1a5bbf] text-white rounded-lg font-medium shadow-sm shadow-blue-200">
                        <i class="fa-solid fa-house w-5 text-center"></i> Dashboard
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-blue-600 rounded-lg transition">
                        <i class="fa-solid fa-users-rectangle w-5 text-center"></i> Data Penduduk
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-blue-600 rounded-lg transition">
                        <i class="fa-solid fa-envelope-open-text w-5 text-center"></i> Surat Menyurat
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-blue-600 rounded-lg transition">
                        <i class="fa-solid fa-map-location-dot w-5 text-center"></i> RT / RW
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-blue-600 rounded-lg transition">
                        <i class="fa-solid fa-users w-5 text-center"></i> Layanan Warga
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-gray-600 hover:bg-gray-50 hover:text-blue-600 rounded-lg transition">
                        <i class="fa-solid fa-gear w-5 text-center"></i> Pengaturan
                    </a>
                </nav>
            </div>

            <div class="p-4 border-t border-gray-100 flex flex-col gap-4">
                <div class="flex items-center gap-3 px-2">
                    <img src="https://ui-avatars.com/api/?name=Admin+Desa&background=f8f9fa&color=1a5bbf" alt="Admin" class="w-10 h-10 rounded-full">
                    <div>
                        <p class="font-bold text-gray-800 text-xs">Admin Desa</p>
                        <p class="text-[10px] text-gray-500">Administrator</p>
                    </div>
                </div>
                
                <div class="relative w-full h-24 rounded-lg overflow-hidden group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1518000494498-8ec077c5c0d6?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="CCTV" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute top-2 left-2 flex items-center gap-1">
                        <span class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></span>
                        <span class="text-white text-[10px] font-semibold">CCTV Monitor</span>
                    </div>
                    <span class="absolute bottom-2 left-2 text-white text-[10px]">Poskamling RT 05</span>
                </div>
            </div>
        </aside>

        <main class="flex-1 overflow-y-auto p-6 bg-[#ebf0f5]">
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Selamat Datang, Admin Desa!</h2>
                <p class="text-gray-500 text-sm mt-1">Sistem Informasi Desa Ciangsana</p>
            </div>

            <div class="grid grid-cols-4 gap-4 mb-6">
                <div class="bg-white rounded-xl p-4 shadow-sm border border-gray-100 flex items-center gap-4">
                    <div class="bg-blue-100 text-blue-600 p-3 rounded-lg"><i class="fa-solid fa-users text-xl"></i></div>
                    <div>
                        <p class="text-gray-500 text-xs font-semibold mb-1">Total Penduduk</p>
                        <h3 class="text-2xl font-bold text-blue-600">3,458</h3>
                    </div>
                </div>
                <div class="bg-white rounded-xl p-4 shadow-sm border border-gray-100 flex items-center gap-4">
                    <div class="bg-blue-50 text-blue-500 p-3 rounded-lg"><i class="fa-solid fa-file-lines text-xl"></i></div>
                    <div>
                        <p class="text-gray-500 text-xs font-semibold mb-1">Surat Diproses</p>
                        <h3 class="text-2xl font-bold text-gray-800">24</h3>
                    </div>
                </div>
                <div class="bg-white rounded-xl p-4 shadow-sm border border-gray-100 flex items-center gap-4">
                    <div class="bg-orange-50 text-orange-500 p-3 rounded-lg"><i class="fa-solid fa-clipboard-list text-xl"></i></div>
                    <div>
                        <p class="text-gray-500 text-xs font-semibold mb-1">Pengajuan Warga</p>
                        <h3 class="text-2xl font-bold text-gray-800">10</h3>
                    </div>
                </div>
                <div class="bg-white rounded-xl p-4 shadow-sm border border-gray-100 flex items-center gap-4">
                    <div class="bg-green-100 text-green-500 p-3 rounded-lg"><i class="fa-solid fa-circle-check text-xl"></i></div>
                    <div>
                        <p class="text-gray-500 text-xs font-semibold mb-1">Online Sekarang</p>
                        <h3 class="text-2xl font-bold text-green-500">5</h3>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-6 mb-6">
                <div class="col-span-7 bg-white rounded-xl shadow-sm border border-gray-100 p-5">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-bold text-gray-800">Data Penduduk</h3>
                        <div class="flex gap-2">
                            <button class="px-3 py-1.5 border border-gray-300 text-gray-600 rounded text-xs hover:bg-gray-50 transition">Tambah Data</button>
                            <button class="px-3 py-1.5 bg-[#1a5bbf] text-white rounded text-xs hover:bg-blue-800 transition">Lihat Semua</button>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-[#1a5bbf] text-white text-xs">
                                    <th class="py-2.5 px-3 rounded-l-md font-medium">Nama</th>
                                    <th class="py-2.5 px-3 font-medium">NIK</th>
                                    <th class="py-2.5 px-3 font-medium">Alamat</th>
                                    <th class="py-2.5 px-3 rounded-r-md font-medium">Status</th>
                                </tr>
                            </thead>
                            <tbody class="text-xs">
                                <tr class="border-b border-gray-100 hover:bg-gray-50">
                                    <td class="py-3 px-3">Budi Santoso</td>
                                    <td class="py-3 px-3">1234-456-7990</td>
                                    <td class="py-3 px-3">Budi Oeng</td>
                                    <td class="py-3 px-3"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-[10px] font-semibold">Aktif</span></td>
                                </tr>
                                <tr class="border-b border-gray-100 hover:bg-gray-50">
                                    <td class="py-3 px-3">Siti Aminah</td>
                                    <td class="py-3 px-3">1233-5328 8999</td>
                                    <td class="py-3 px-3">Siti Aminah</td>
                                    <td class="py-3 px-3"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-[10px] font-semibold">Aktif</span></td>
                                </tr>
                                <tr class="border-b border-gray-100 hover:bg-gray-50">
                                    <td class="py-3 px-3">Ahmad Fauzi</td>
                                    <td class="py-3 px-3">1234-5338 9999</td>
                                    <td class="py-3 px-3">Ahmad Fauzi</td>
                                    <td class="py-3 px-3"><span class="bg-red-100 text-red-600 px-2 py-1 rounded text-[10px] font-semibold">Pasif</span></td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="py-3 px-3">Rina Kartika</td>
                                    <td class="py-3 px-3">1234-486 7999</td>
                                    <td class="py-3 px-3">Rina Kartika</td>
                                    <td class="py-3 px-3"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-[10px] font-semibold">Aktif</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-span-5 bg-white rounded-xl shadow-sm border border-gray-100 p-5">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-bold text-gray-800">Pengajuan Surat Terbaru</h3>
                        <button class="text-gray-400 hover:text-gray-600"><i class="fa-solid fa-ellipsis"></i></button>
                    </div>
                    <div class="flex flex-col gap-3">
                        <div class="flex justify-between items-center py-2 border-b border-gray-50">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-user text-gray-300 text-xs"></i>
                                <p class="text-xs text-gray-600"><span class="font-semibold text-gray-800">Ani Wulandari</span> - Surat Keterangan Domisili</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="bg-orange-100 text-orange-600 px-2.5 py-1 rounded text-[10px] font-medium">Proses</span>
                                <i class="fa-solid fa-chevron-down text-gray-400 text-[10px] cursor-pointer"></i>
                            </div>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-gray-50">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-user text-gray-300 text-xs"></i>
                                <p class="text-xs text-gray-600"><span class="font-semibold text-gray-800">Hendra Pratama</span> - Surat Pengantar SKCK</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="bg-gray-100 text-gray-600 px-2.5 py-1 rounded text-[10px] font-medium">Menunggu</span>
                                <i class="fa-solid fa-chevron-down text-gray-400 text-[10px] cursor-pointer"></i>
                            </div>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-gray-50">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-user text-gray-300 text-xs"></i>
                                <p class="text-xs text-gray-600"><span class="font-semibold text-gray-800">Agus Salim</span> - Surat Keterangan Usaha</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="bg-orange-100 text-orange-600 px-2.5 py-1 rounded text-[10px] font-medium">Proses</span>
                                <i class="fa-solid fa-chevron-down text-gray-400 text-[10px] cursor-pointer"></i>
                            </div>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-gray-50">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-user text-gray-300 text-xs"></i>
                                <p class="text-xs text-gray-600"><span class="font-semibold text-gray-800">Mohamimati</span> - E-KTP</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="bg-gray-100 text-gray-600 px-2.5 py-1 rounded text-[10px] font-medium">Menunggu</span>
                                <i class="fa-solid fa-chevron-down text-gray-400 text-[10px] cursor-pointer"></i>
                            </div>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-user text-gray-300 text-xs"></i>
                                <p class="text-xs text-gray-600"><span class="font-semibold text-gray-800">Last Nurda</span> - Surat Keterangan Domisili</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="bg-orange-100 text-orange-600 px-2.5 py-1 rounded text-[10px] font-medium">Proses</span>
                                <i class="fa-solid fa-chevron-down text-gray-400 text-[10px] cursor-pointer"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 flex flex-col">
                    <h3 class="font-bold text-gray-800 mb-4">Monitoring Pelayanan</h3>
                    <div class="grid grid-cols-3 gap-2 mb-4">
                        <div class="bg-[#e74c3c] rounded text-white p-2 flex items-center justify-between">
                            <i class="fa-regular fa-file-lines text-xl opacity-80"></i>
                            <div class="text-right">
                                <h4 class="text-xl font-bold leading-none">30</h4>
                                <p class="text-[9px] leading-tight mt-1">Surat Hari Ini</p>
                            </div>
                        </div>
                        <div class="bg-[#f39c12] rounded text-white p-2 flex items-center justify-between">
                            <i class="fa-solid fa-bullhorn text-xl opacity-80"></i>
                            <div class="text-right">
                                <h4 class="text-xl font-bold leading-none">12</h4>
                                <p class="text-[9px] leading-tight mt-1">Pengaduan Baru</p>
                            </div>
                        </div>
                        <div class="bg-[#3498db] rounded text-white p-2 flex items-center justify-between">
                            <i class="fa-solid fa-house-user text-xl opacity-80"></i>
                            <div class="text-right">
                                <h4 class="text-xl font-bold leading-none">5</h4>
                                <p class="text-[9px] leading-tight mt-1">RT/RW Online</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 rounded-lg overflow-hidden border border-gray-200 min-h-[100px]">
                        <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Map" class="w-full h-full object-cover opacity-60">
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5">
                    <h3 class="font-bold text-gray-800 mb-4">Akses Warga</h3>
                    <div class="flex flex-col gap-3">
                        <button class="w-full bg-[#1a5bbf] text-white py-3 px-4 rounded-lg flex items-center gap-3 hover:bg-blue-800 transition shadow-sm shadow-blue-200">
                            <i class="fa-regular fa-file-lines text-2xl"></i>
                            <span class="font-medium text-left">Pengajuan Layanan</span>
                        </button>
                        <button class="w-full bg-[#1a5bbf] text-white py-3 px-4 rounded-lg flex items-center gap-3 hover:bg-blue-800 transition shadow-sm shadow-blue-200">
                            <i class="fa-solid fa-magnifying-glass-chart text-2xl"></i>
                            <span class="font-medium text-left">Cek Status Surat</span>
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5">
                    <h3 class="font-bold text-gray-800 mb-4">Info & Pengumuman</h3>
                    <ul class="flex flex-col gap-4 text-xs text-gray-600">
                        <li class="flex items-center gap-3">
                            <i class="fa-regular fa-circle-check text-gray-400 text-sm"></i>
                            Maintenance Sistem - 12 April 2026
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-regular fa-circle text-gray-400 text-sm"></i>
                            Sosialisasi Layanan Digital 15 April 2026
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-regular fa-circle text-gray-400 text-sm"></i>
                            CCTV Poskamling Aktif
                        </li>
                    </ul>
                </div>
            </div>

        </main>
    </div>
</body>
</html>