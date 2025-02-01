<?php
$data_mobil_beranda = [
    [
        "nama" => "Toyota Innova",
        "gambar" => "images/innova.png",
        "harga" => "Rp. 550.000",
        "nomor_wa" => "6282269707940"
    ],
    [
        "nama" => "Toyota Avanza",
        "gambar" => "images/avanza.png",
        "harga" => "Rp. 450.000",
        "nomor_wa" => "6282269707940"
    ],
    [
        "nama" => "Honda Brio",
        "gambar" => "images/brio.png",
        "harga" => "Rp. 300.000",
        "nomor_wa" => "6282269707940"
    ],
    [
        "nama" => "Toyota Fortuner",
        "gambar" => "images/fortuner.png",
        "harga" => "Rp. 1.300.000",
        "nomor_wa" => "6282269707940"
    ],
    [
        "nama" => "Wuling Cortez 2022",
        "gambar" => "images/wuling_cortez.png",
        "harga" => "Rp. 450.000",
        "nomor_wa" => "6282269707940"
    ],
    [
        "nama" => "Daihatsu Xenia",
        "gambar" => "images/xenia.png",
        "harga" => "Rp. 400.000",
        "nomor_wa" => "6282269707940"
    ],
];

$paket_lebaran = [
    [
        "nama" => "Toyota Calya",
        "gambar" => "images/calya.png",
        "harga" => "Rp. 300.000",
        "nomor_wa" => "6282269707940"
    ],
    [
        "nama" => "Mitsubishi Xpander",
        "gambar" => "images/xpander.png",
        "harga" => "Rp. 550.000",
        "nomor_wa" => "6282269707940"
    ],
    [
        "nama" => "Datsun",
        "gambar" => "images/datsun.png",
        "harga" => "Rp. 300.000",
        "nomor_wa" => "6282269707940"
    ],
];
?>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Car Professional</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    <script src="js/search.js"></script>
</head>
<body class="bg-[url('images/bg-blur-1.webp')] lg:bg-contain bg-no-repeat bg-[#29245B] text-white">    

    <header class="px-4 text-center py-4">
        <p class="text-yellow-500 font-bold text-xl flex justify-center items-center gap-2">
            <span class="iconify" data-icon="line-md:phone-call-loop"></span> 082386318333
        </p>
        <h1 class="text-3xl font-bold">RENTAL APP</h1>
        <div class="flex justify-center mb-6">
            <div class="bg-[#230356] lg:rounded-full rounded-[20px] p-1 text-white flex flex-wrap mt-5 gap-2">
                <button class="font-medium transition-all normal-case px-4 py-2 rounded-full w-full sm:w-auto" id="beranda-btn" onclick="setTab('beranda')">Beranda</button>
                <button class="font-medium transition-all normal-case px-4 py-2 rounded-full w-full sm:w-auto" id="paket-lebaran-btn" onclick="setTab('paket-lebaran')">Paket Lebaran</button>
                <button class="font-medium transition-all normal-case px-4 py-2 rounded-full w-full sm:w-auto" id="harga-all-in-btn" onclick="setTab('harga-all-in')">Harga All In</button>
                <button class="font-medium transition-all normal-case px-4 py-2 rounded-full w-full sm:w-auto" id="lainnya-btn" onclick="setTab('lainnya')">Lainnya</button>
            </div>
        </div>
    </header>
        
    <main class="w-full container mx-auto lg:px-20 px-4">
        <!-- BERANDA -->
        <div id="beranda-content" class="tab-content">
            <div class="mb-8">
                <input type="text" id="searchInputBeranda" placeholder="Cari mobil, Ketikkan Merk Mobil..." class="w-full py-2 px-4 rounded-full bg-white bg-opacity-10" />
            </div>
            <div class="grid md:grid-cols-3 gap-6">
            <?php foreach ($data_mobil_beranda as $x): ?>
                <div class="card bg-white bg-opacity-10 p-5 rounded-xl shadow-lg" data-name="<?php echo strtolower($x['nama']); ?>">
                    <img src="<?php echo $x['gambar']; ?>" alt="<?php echo $x['nama']; ?>" class="w-full mb-4">
                    <h2 class="text-xl font-semibold"><?php echo $x['nama']; ?></h2>
                    <p class="text-2xl font-bold text-yellow-500"><?php echo $x['harga']; ?></p>
                    <div class="flex justify-between flex-wrap items-center mt-4">
                        <div class="flex gap-x-2">
                            <a href="tel:0822269707940">
                                <button class="bg-gradient-to-r from-[#00B3E9] to-[#4623E9] text-white px-4 py-2 flex items-center gap-x-1 rounded-lg"> 
                                    <span class="iconify" data-icon="line-md:phone-call-loop"></span>
                                    <span>Telepon</span>
                                </button>
                            </a>
                            <a href="https://wa.me/<?php echo $x['nomor_wa']; ?>?text=<?php echo urlencode('Mas, saya mau rental mobil (' . $x['nama'] . ' : ' . $x['harga'] . ') - From www.harry.com'); ?>" target="_blank">
                                <button class="bg-gradient-to-r from-green-400 to-green-600 text-white px-4 py-2 flex items-center gap-x-1 rounded-lg"> 
                                    <span class="iconify" data-icon="ic:baseline-whatsapp"></span>
                                    <span>WhatsApp</span>
                                </button>
                            </a>
                        </div>
                        <p class="mt-2 lg:mt-0 text-sm text-white bg-transparent border-[1px] border-white px-3 py-1 rounded-full inline-block">Durasi 24 Jam</p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

         <!-- PAKET LEBARAN-->
         <div id="paket-lebaran-content" class="tab-content">
            <div class="mb-8">
                <input type="text" id="searchInputPaketLebaran" placeholder="Cari mobil, Ketikkan Merk Mobil..." class="w-full py-2 px-4 rounded-full bg-white bg-opacity-10" />
            </div>
            <div class="w-full text-center border-b pb-2">
                <p class="text-2xl font-semibold text-yellow-500">Paket Lebaran - Harry Rental</p>
                <p class="text-xl text-gray-300">Harga khusus IDUL FITRI ( Minimal pemakaian 7 hari )</p>
            </div>
            <div class="mt-4 grid md:grid-cols-3 gap-6">
                <?php foreach ($paket_lebaran as $x): ?>
                    <div class="card bg-white bg-opacity-10 p-5 rounded-xl shadow-lg" data-name="<?php echo strtolower($x['nama']); ?>">
                        <img src="<?php echo $x['gambar']; ?>" alt="<?php echo $x['nama']; ?>" class="w-full mb-4">
                        <h2 class="text-xl font-semibold"><?php echo $x['nama']; ?></h2>
                        <p class="text-2xl font-bold text-yellow-500"><?php echo $x['harga']; ?></p>
                        <div class="flex justify-between flex-wrap items-center mt-4">
                            <div class="flex gap-x-2">
                                <a href="tel:0822269707940">
                                    <button class="bg-gradient-to-r from-[#00B3E9] to-[#4623E9] text-white px-4 py-2 flex items-center gap-x-1 rounded-lg"> 
                                        <span class="iconify" data-icon="line-md:phone-call-loop"></span>
                                        <span>Telepon</span>
                                    </button>
                                </a>
                                <a href="https://wa.me/<?php echo $x['nomor_wa']; ?>?text=<?php echo urlencode('Mas, saya mau rental mobil (' . $x['nama'] . ' : ' . $x['harga'] . ') - From www.harry.com'); ?>" target="_blank">
                                    <button class="bg-gradient-to-r from-green-400 to-green-600 text-white px-4 py-2 flex items-center gap-x-1 rounded-lg"> 
                                        <span class="iconify" data-icon="ic:baseline-whatsapp"></span>
                                        <span>WhatsApp</span>
                                    </button>
                                </a>
                            </div>
                            <p class="mt-2 lg:mt-0 text-sm text-white bg-transparent border-[1px] border-white px-3 py-1 rounded-full inline-block">Durasi 24 Jam</p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

         <!-- HARGA ALL IN -->
         <div id="harga-all-in-content">
            <div class="flex flex-col justify-center items-center">
                <img src="images/no_data.webp" class="w-50">
                <span>Belum ada Data</span>
            </div>
        </div>

         <!-- LAINNYA -->
         <div id="lainnya-content">
            <div class="flex flex-col justify-center items-center">
                <img src="images/no_data.webp" class="w-50">
                <span>Lainnya</span>
            </div>
        </div>
    </main>

    <footer class="bg-[#0B0D1E] py-8 lg:px-20 px-4 mt-12">
        <div class="bg-[#1A1E5A] rounded-lg px-8 py-10">
            <div class="flex flex-wrap">
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <img src="images/logo-xguitar.png" class="w-2/4 h-auto" />
                <div class="flex mt-4 space-x-1.5">
                <span class="iconify text-white text-4xl" data-icon="ic:baseline-whatsapp"></span>
                <span class="iconify text-white text-4xl" data-icon="mdi:youtube"></span>
                <span class="iconify text-white text-4xl" data-icon="mdi:instagram"></span>
                <span class="iconify text-white text-4xl" data-icon="ic:baseline-facebook"></span>
                </div>
            </div>
            <div class="w-full md:w-1/6 mb-6 md:mb-0">
                <h6 class="text-blue-200 mb-4 text-sm">INFORMASI</h6>
                <ul class="text-white">
                <li>Aturan Privasi</li>
                <li>Disclaimer</li>
                <li>FAQ</li>
                </ul>
            </div>
            <div class="w-full md:w-1/6 mb-6 md:mb-0">
                <ul class="text-white mt-8">
                <li>Aturan Privasi</li>
                <li>Disclaimer</li>
                <li>FAQ</li>
                </ul>
            </div>
            <div class="w-full md:w-1/6 mb-6 md:mb-0">
                <h6 class="text-blue-200 mb-4 text-sm">JARINGAN KAMI</h6>
                <ul class="text-white">
                <li>harry.id</li>
                <li>harrymusic.id</li>
                <li>Download</li>
                </ul>
            </div>
            <div class="w-full md:w-1/4">
                <button class="mt-4 bg-white text-black rounded px-4 py-2">Request a Call</button>
                <p class="text-white mt-4">+62 822-6970-7940</p>
                <p class="text-white">harryrahman@usu.ac.id</p>
            </div>
            </div>
        </div>
    </footer>

    <script>
        function setTab(type) {
            document.getElementById('beranda-btn').classList.toggle('bg-yellow-500', type === 'beranda');
            document.getElementById('beranda-btn').classList.toggle('text-black', type === 'beranda');
            document.getElementById('beranda-btn').classList.toggle('bg-transparent', type !== 'beranda');
            document.getElementById('paket-lebaran-btn').classList.toggle('bg-yellow-500', type === 'paket-lebaran');
            document.getElementById('paket-lebaran-btn').classList.toggle('text-black', type === 'paket-lebaran');
            document.getElementById('paket-lebaran-btn').classList.toggle('bg-transparent', type !== 'paket-lebaran');
            document.getElementById('harga-all-in-btn').classList.toggle('bg-yellow-500', type === 'harga-all-in');
            document.getElementById('harga-all-in-btn').classList.toggle('text-black', type === 'harga-all-in');
            document.getElementById('harga-all-in-btn').classList.toggle('bg-transparent', type !== 'harga-all-in');
            document.getElementById('lainnya-btn').classList.toggle('bg-yellow-500', type === 'lainnya');
            document.getElementById('lainnya-btn').classList.toggle('text-black', type === 'lainnya');
            document.getElementById('lainnya-btn').classList.toggle('bg-transparent', type !== 'lainnya');

            document.getElementById('beranda-content').classList.toggle('hidden', type !== 'beranda');
            document.getElementById('paket-lebaran-content').classList.toggle('hidden', type !== 'paket-lebaran');
            document.getElementById('harga-all-in-content').classList.toggle('hidden', type !== 'harga-all-in');
            document.getElementById('lainnya-content').classList.toggle('hidden', type !== 'lainnya');
        }
        window.onload = function() {
            setTab('beranda');
        };
    </script>
</body>
</html>
