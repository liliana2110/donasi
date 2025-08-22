<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>darikita.com - Tentang Kami</title>
    <link rel="stylesheet" href="../build/build.css">

    <!-- LOGO -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <!-- LOGO -->
    
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- FONT -->

</head>
<body>

<!-- Awal Navigasi -->

    <nav class="bg-warna_bg shadow-lg fixed top-0 left-0 right-0 z-20">
        <div class="max-w-screen-xl flex flex-wrap justify-between mx-auto p-4">
            <div class="flex p-2">
                <a href="../index.php" class="text-warna_aksen hover:text-blue-700 font-bold items-start just">darikita.com <span class="text-white">&nbsp;&nbsp;&nbsp;&nbsp;</span>|</a>
                <div class="items-start hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 rounded-lg bg-[#F8F9FB] md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0">
                        <li>
                            <a href="./tentang.php" class="block py-2 px-3 md:p-0 font-bold text-blue-600"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Tentang Kami</a>
                        </li>
                        <li>
                            <a href="./peran.php" class="block py-2 px-3 md:p-0 font-bold text-warna_aksen hover:text-blue-700">Solusi Bersama</a>
                        </li>
                        <li>
                            <a href="./donasi.php" class="block py-2 px-3 md:p-0 font-bold text-warna_aksen hover:text-blue-700">Donasi</a>
                        </li>
                    </ul>
                </div>
            </div>    
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                
                <?php
                    if (isset($_SESSION['status_login'])) {
                        ?>
                        <div>
                            <a href="./user-profil.php" class="text-warna_aksen font-bold"><?=$_SESSION['nama']?></a>
                            <a href="./user-profil.php"><i class="fa-regular fa-circle-user fa-2xl mt-5" style="color: #5592F2;"></i></a>
                        </div>
                        <?php
                    } else {
                        echo '<a href="./login.php">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">MASUK</button></a>';
                    }
                
                ?>


            </div>
        </div>
    </nav>
  

<!-- Akhir Navigasi -->

        <!--  -->
    <main class="max-w-screen-xl justify-between mx-auto p-4 mt-20 mb-14">
        <div class="text-center mt-10 mb-16">
            <h1 class="sm:text-2xl text-2xl font-bold title-font text-gray-900 mb-3">TENTANG KAMI</h1>
            <div class="w-[220px] mt-4 h-[2px] mx-auto bg-gray-500 mb-4"></div>
            <p class="mt-10 text-lg text-gray-600">
                darikita.com adalah suatu website yang ditujukan untuk menampung donasi dari kami semua
                untuk mereka yang membutuhkan bantuan pangan agar mereka bisa memenuhi gizi, dan mengurangi
                bencana kelaparan di Indonesia. Di website ini kalian bisa berdonasi sebagai relawan, ataupun pendonasi.
            </p>
        </div>

        <!-- FAQs Section -->
        <div class="max-w-4xl mx-auto py-12">
            <h1 class="sm:text-2xl text-2xl text-center font-bold title-font text-gray-900 mb-6">FAQs</h1>
            <div id="accordion-collapse" data-accordion="collapse">
                <div class="divide-y divide-gray-200">

                    <!-- Accordion 1 -->
                    <div class="bg-white rounded-lg shadow-md mb-4">
                        <h2>
                            <button type="button"
                                class="w-full flex items-center justify-between p-5 text-left font-medium text-gray-500 border-b border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100"
                                aria-expanded="true" aria-controls="accordion-collapse-body-1"
                                data-accordion-target="#accordion-collapse-body-1">
                                <span>Siapa yang bisa berdonasi di darikita.com?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-1" class="p-5">
                            <p class="mb-2 text-gray-500">Siapapun dapat berdonasi di darikita.com, baik individu,
                                organisasi, maupun perusahaan. Tidak ada batasan minimum untuk jumlah donasi.</p>
                        </div>
                    </div>

                    <!-- Accordion 2 -->
                    <div class="bg-white rounded-lg shadow-md mb-4">
                        <h2>
                            <button type="button"
                                class="w-full flex items-center justify-between p-5 text-left font-medium text-gray-500 border-b border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100"
                                aria-expanded="false" aria-controls="accordion-collapse-body-3"
                                data-accordion-target="#accordion-collapse-body-3">
                                <span>Ada kategori dan jenis makanan untuk berdonasi di darikita.com?</span>
                                <svg class="w-3 h-3 transform rotate-0" viewBox="0 0 10 6" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-3" class="hidden p-5">
                            <p class="mb-2 text-gray-500">Donasi Makanan Tahan Lama: Anda dapat berdonasi berupa bahan
                                pokok seperti beras, makanan instan, tepung, gula, garam, minyak dan lainnya yang tahan
                                lama. Donasi Makanan Segar: Anda dapat berdonasi berupa sayuran dan buah-buahan dengan
                                catatan makanan yang akan diberikan setidaknya sedia maksimal tiga hari sebelum penutupan
                                donasi.
                            </p>
                        </div>
                    </div>

                    <!-- Accordion 3 -->
                    <div class="bg-white rounded-lg shadow-md mb-4">
                        <h2>
                            <button type="button"
                                class="w-full flex items-center justify-between p-5 text-left font-medium text-gray-500 border-b border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100"
                                aria-expanded="false" aria-controls="accordion-collapse-body-2"
                                data-accordion-target="#accordion-collapse-body-2">
                                <span>Bagaimana cara darikita.com mendistribusikan makanan?</span>
                                <svg class="w-3 h-3 transform rotate-0" viewBox="0 0 10 6" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-2" class="hidden p-5">
                            <p class="mb-2 text-gray-500">darikita.com bekerja sama dengan berbagai organisasi dan
                                komunitas lokal untuk mendistribusikan makanan kepada mereka yang membutuhkan. Makanan
                                didistribusikan secara langsung kepada keluarga-keluarga yang mengalami kesulitan akses
                                makanan, serta kepada panti asuhan, yayasan sosial, dan tempat penampungan tunawisma.</p>
                        </div>
                    </div>

                    <!-- Accordion 4 -->
                    <div class="bg-white rounded-lg shadow-md mb-4">
                        <h2>
                            <button type="button"
                                class="w-full flex items-center justify-between p-5 text-left font-medium text-gray-500 border-b border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100"
                                aria-expanded="false" aria-controls="accordion-collapse-body-4"
                                data-accordion-target="#accordion-collapse-body-4">
                                <span>Apa yang bisa saya lakukan untuk membantu darikita.com selain berdonasi?</span>
                                <svg class="w-3 h-3 transform rotate-0" viewBox="0 0 10 6" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-4" class="hidden p-5">
                            <p class="mb-2 text-gray-500">Selain berdonasi, Anda juga dapat membantu darikita.com dengan :
                                Menyebarkan informasi tentang darikita.com kepada teman, keluarga, dan kolega Anda
                                (Mengambil peran sebagai Pendukung). Menjadi relawan di lokasi pengumpulan atau
                                distribusi makanan (Mengambil peran sebagai Penggerak). Membantu dalam penggalangan dana
                                untuk berjalannya event dari darikita.com.</p>
                        </div>
                    </div>

                    <!-- Accordion 5 -->
                    <div class="bg-white rounded-lg shadow-md mb-4">
                        <h2>
                            <button type="button"
                                class="w-full flex items-center justify-between p-5 text-left font-medium text-gray-500 border-b border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100"
                                aria-expanded="false" aria-controls="accordion-collapse-body-5"
                                data-accordion-target="#accordion-collapse-body-5">
                                <span>Bagaimana cara saya bisa bergabung menjadi relawan di darikita.com?</span>
                                <svg class="w-3 h-3 transform rotate-0" viewBox="0 0 10 6" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-5" class="hidden p-5">
                            <p class="mb-2 text-gray-500">Anda dapat bergabung menjadi relawan di darikita.com dengan :
                                Mengunjungi halaman pendaftaran relawan di situs web darikita.com. Mengisi formulir
                                pendaftaran relawan dan mengikuti proses seleksi yang ditentukan. Menyediakan waktu untuk
                                berpartisipasi aktif dalam kegiatan pengumpulan dan distribusi makanan.</p>
                        </div>
                    </div>

                    <!-- Accordion 6 -->
                    <div class="bg-white rounded-lg shadow-md mb-4">
                        <h2>
                            <button type="button"
                                class="w-full flex items-center justify-between p-5 text-left font-medium text-gray-500 border-b border-gray-200 focus:ring-4 focus:ring-gray-200 hover:bg-gray-100"
                                aria-expanded="false" aria-controls="accordion-collapse-body-6"
                                data-accordion-target="#accordion-collapse-body-6">
                                <span>Bagaimana cara saya bisa menyebarkan informasi tentang darikita.com?</span>
                                <svg class="w-3 h-3 transform rotate-0" viewBox="0 0 10 6" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-6" class="hidden p-5">
                            <p class="mb-2 text-gray-500">Anda dapat menyebarkan informasi tentang darikita.com dengan :
                                Memanfaatkan media sosial untuk membagikan cerita dan informasi tentang kegiatan
                                darikita.com. Mencetak dan menyebarluaskan brosur atau poster tentang darikita.com di
                                tempat-tempat umum. Mengajak teman, keluarga, dan rekan kerja untuk mengunjungi dan
                                mendukung darikita.com.</p>
                        </div>
                    </div>

                
                </div>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const accordions = document.querySelectorAll('[data-accordion-target]');
            accordions.forEach(accordion => {
                accordion.addEventListener('click', function () {
                    const target = this.getAttribute('data-accordion-target');
                    const element = document.querySelector(target);
                    const expanded = this.getAttribute('aria-expanded') === 'true' || false;

                    element.classList.toggle('hidden');
                    this.setAttribute('aria-expanded', String(!expanded));
                });
            });
        });
    </script>

    
    <!--  -->

    
    <!--  -->


<!-- Awal Footer -->

    <footer class="bg-[#8F8F8F]">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="#home" class="text-white font-bold items-start just">darikita.com</a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    
                    <div>
                        <h2 class="mb-6 font-bold text-white uppercase ">Tentang Kami</h2>
                        <ul class="text-white">
                            <li class="mb-4">
                                <a href="" class="hover:underline ">FAQs</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 font-bold text-white uppercase ">Solusi Bersama</h2>
                        <ul class="text-white">
                            <li class="mb-4">
                                <a href="" class="hover:underline ">Penggerak</a>
                            </li>
                            <li class="mb-4">
                                <a href="" class="hover:underline ">Penggalang</a>
                            </li>
                            <li class="mb-4">
                                <a href="" class="hover:underline ">Pendukung</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <p class="text-[#636363] font-semibold">© 2024 darikita.com - made with ❤️</p>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                            </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                                <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                            </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                            <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
                        </svg>
                            <span class="sr-only">Dribbble account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>

<!-- Akhir Footer -->

    <!-- Optional JavaScript; choose one of the two! -->
</body>
</html>