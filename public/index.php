<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Majlis Ta'lim</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="assets/css/index.css"/>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<?php include 'includes/navbar.php'; ?>

<!-- Header -->
<section id="header" class="hero relative">

    <div class="hero-overlay">
        <div class="container mx-auto px-8">

            <div class="max-w-xl py-32">
                <span class="badge">
                    Yayasan Majlis Ta'lim
                </span>

                <h1 class="text-5xl font-bold text-green-900 mt-4">
                    Membangun Umat Melalui
                    Ilmu dan Taqwa
                </h1>

                <p class="mt-5 text-gray-700">
                    Menghadirkan kajian Islam, pendidikan dan kegiatan sosial
                    untuk masyarakat yang lebih baik.
                </p>

                <div class="mt-8 flex gap-4">
                    <a href="#" class="btn-primary">
                        Mulai Belajar
                    </a>

                    <a href="#" class="btn-secondary">
                        Donasi Sekarang
                    </a>
                </div>
            </div>

        </div>
    </div>

</section>



<!-- Tentang -->
<section class="py-24">
    <div class="container mx-auto px-6">

        <div class="grid md:grid-cols-2 gap-12 items-center">

            <div>
                <img src="assets/images/kegiatan.jpg"
                     class="rounded-2xl shadow-xl w-full">
            </div>

            <div>
                <span class="section-label">
                    TENTANG KAMI
                </span>

                <h2 class="text-4xl font-bold text-green-900 mt-4">
                    Visi & Misi Kami
                </h2>

                <p class="mt-4 text-gray-600">
                    Kami berdedikasi membangun umat melalui pendidikan,
                    dakwah dan kegiatan sosial.
                </p>

                <ul class="mt-8 space-y-4">
                    <li>✓ Pendidikan Berkelanjutan</li>
                    <li>✓ Pemberdayaan Masyarakat</li>
                    <li>✓ Inovasi Spiritual</li>
                </ul>
            </div>

        </div>

    </div>
</section>

<!-- Program -->
<section class="py-20 bg-white">

    <div class="container mx-auto px-6">

        <div class="flex justify-between mb-10">
            <div>
                <h2 class="text-4xl font-bold text-green-900">
                    Program Terbaru
                </h2>
            </div>

            <a href="program.php">
                Lihat Semua Program →
            </a>
        </div>

        <div class="grid lg:grid-cols-3 gap-6">

            <div class="lg:col-span-2">
                <div class="program-large">
                    <span class="badge-top">
                    Yayasan Majlis Ta'lim
                </span>
                    <div class="overlay">
                        
                        <h3 class="text-2xl font-bold">Madrasah Akhir Pekan</h3>

                        <p>
                            Program intensif setiap Sabtu dan Minggu.
                        </p>

                        <a href="" class="badge-bottom">
                            Pelajari Selengkapnya
                        </a>
                    </div>
                </div>
            </div>

            <div class="space-y-6">

                <div class="program-small">
                    <img src="assets/images/program1.jpg">
                    <div>
                        <h3 class="text-2xl font-bold">Zakat Community</h3>
                        <p>Program pemberdayaan umat.</p>
                    </div>
                </div>

                <div class="program-small">
                    <img src="assets/images/program2.jpg">
                    <div>
                        <h3 class="text-2xl font-bold">Generasi Sholih</h3>
                        <p>Kajian interaktif dan keluarga.</p>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>

<!-- JADWAL -->
<section class="py-24">

    <div class="container mx-auto px-6">

        <h2 class="text-center text-4xl font-bold text-green-900">
            Jadwal Kajian Rutin
        </h2>

        <div class="mt-12 space-y-4">

            <div class="kajian-card">
                <div>Senin</div>
                <div>Tafsir Jalalain</div>
                <div>Masjid Utama</div>
            </div>

            <div class="kajian-card">
                <div>Rabu</div>
                <div>Fiqih Wanita</div>
                <div>Live Streaming</div>
            </div>

            <div class="kajian-card active">
                <div>Jumat</div>
                <div>Dzikir Akbar</div>
                <div>Daftar Hadir</div>
            </div>

        </div>

    </div>

</section>

<?php include 'includes/footer.php'; ?> 