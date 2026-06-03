<!--includes php-->
<?php include 'includes/header.php' ?>

<body>
<!--includes navbar-->
<?php include 'includes/navbar.php' ?>

<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-400 to-blue-100 text-white">
    <div class="container mx-auto px-6 py-24">
        <div class="grid md:grid-cols-2 gap-10 items-center">

            <!-- Text -->
            <div>
                <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6">
                    Selamat Datang di Website Yayasan
                </h1>

                <p class="text-lg text-gray-100 mb-6">
                    Bersama membangun pendidikan, kepedulian sosial, dan
                    pemberdayaan masyarakat untuk masa depan yang lebih baik.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="#tentang"
                        class="bg-white text-green-700 px-6 py-3 rounded-lg font-semibold hover:bg-gray-200 transition">
                        Tentang Kami
                    </a>

                    <a href="#program"
                        class="border border-white px-6 py-3 rounded-lg hover:bg-white hover:text-green-700 transition">
                        Program Yayasan
                    </a>
                </div>
            </div>

            <!-- Image -->
            <div class="flex justify-center">
                <img
                    src="assets/img/yayasan.png"
                    alt="Yayasan"
                    class="rounded-2xl shadow-2xl w-full max-w-md">
            </div>
        </div>
    </div>
</section>

<!-- Tentang Yayasan -->
<section id="tentang" class="py-20 bg-gray-100">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800">
                Tentang Yayasan
            </h2>
            <p class="text-gray-600 mt-4 max-w-3xl mx-auto">
                Yayasan kami berkomitmen untuk memberikan kontribusi nyata
                dalam bidang pendidikan, sosial, dan keagamaan demi
                meningkatkan kualitas hidup masyarakat.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition">
                <div class="text-4xl mb-4">📚</div>
                <h3 class="text-xl font-semibold mb-3">
                    Pendidikan
                </h3>
                <p class="text-gray-600">
                    Menyediakan program pendidikan, pelatihan,
                    dan pembinaan generasi muda.
                </p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition">
                <div class="text-4xl mb-4">🤝</div>
                <h3 class="text-xl font-semibold mb-3">
                    Sosial
                </h3>
                <p class="text-gray-600">
                    Membantu masyarakat melalui kegiatan sosial,
                    santunan, dan bantuan kemanusiaan.
                </p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition">
                <div class="text-4xl mb-4">🕌</div>
                <h3 class="text-xl font-semibold mb-3">
                    Keagamaan
                </h3>
                <p class="text-gray-600">
                    Mendukung pembinaan spiritual dan kegiatan
                    keagamaan masyarakat.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Program Yayasan -->
<section id="program" class="py-20">
    <div class="container mx-auto px-6">

        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800">
                Program Unggulan
            </h2>
            <p class="text-gray-600 mt-4">
                Beberapa kegiatan utama yang kami jalankan
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-white border rounded-xl overflow-hidden shadow hover:shadow-lg transition">
                <img
                    src="assets/img/program1.jpg"
                    class="w-full h-56 object-cover"
                    alt="Program Pendidikan">

                <div class="p-6">
                    <h3 class="font-bold text-xl mb-3">
                        Pendidikan Anak
                    </h3>
                    <p class="text-gray-600">
                        Program pendidikan formal dan nonformal
                        untuk meningkatkan kualitas generasi muda.
                    </p>
                </div>
            </div>

            <div class="bg-white border rounded-xl overflow-hidden shadow hover:shadow-lg transition">
                <img
                    src="assets/img/program2.jpg"
                    class="w-full h-56 object-cover"
                    alt="Santunan Sosial">

                <div class="p-6">
                    <h3 class="font-bold text-xl mb-3">
                        Santunan Sosial
                    </h3>
                    <p class="text-gray-600">
                        Memberikan bantuan kepada masyarakat
                        yang membutuhkan.
                    </p>
                </div>
            </div>

            <div class="bg-white border rounded-xl overflow-hidden shadow hover:shadow-lg transition">
                <img
                    src="assets/img/program3.jpg"
                    class="w-full h-56 object-cover"
                    alt="Kegiatan Keagamaan">

                <div class="p-6">
                    <h3 class="font-bold text-xl mb-3">
                        Kegiatan Keagamaan
                    </h3>
                    <p class="text-gray-600">
                        Kajian, pembinaan, dan kegiatan spiritual
                        bersama masyarakat.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Statistik -->
<section class="bg-green-700 text-white py-16">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-4 gap-8 text-center">

            <div>
                <h2 class="text-4xl font-bold">500+</h2>
                <p>Penerima Manfaat</p>
            </div>

            <div>
                <h2 class="text-4xl font-bold">20+</h2>
                <p>Program Sosial</p>
            </div>

            <div>
                <h2 class="text-4xl font-bold">10+</h2>
                <p>Tahun Pengabdian</p>
            </div>

            <div>
                <h2 class="text-4xl font-bold">100+</h2>
                <p>Relawan Aktif</p>
            </div>

        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 bg-gray-100">
    <div class="container mx-auto px-6 text-center">

        <h2 class="text-3xl font-bold mb-4">
            Mari Bersama Membangun Kebaikan
        </h2>

        <p class="text-gray-600 mb-8">
            Dukung program yayasan untuk pendidikan, sosial,
            dan kegiatan kemasyarakatan.
        </p>

        <a href="#"
            class="bg-green-700 text-white px-8 py-4 rounded-lg hover:bg-green-800 transition">
            Hubungi Kami
        </a>

    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-900 text-gray-300 py-6">
    <div class="container mx-auto px-6 text-center">
        <p>
            © <?= date('Y') ?> Yayasan Anda. All Rights Reserved.
        </p>
    </div>
</footer>

</body>
</html>