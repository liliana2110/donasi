<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>darikita.com - Website Penggalangan Makanan</title>
    <link rel="stylesheet" href="build/build.css">

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
                <a href="#" class="text-blue-600  font-bold items-start just">darikita.com <span class="text-white">&nbsp;&nbsp;&nbsp;&nbsp;</span>|</a>
                <div class="items-start hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 rounded-lg bg-[#F8F9FB] md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0">
                        <li>
                            <a href="./pages/tentang.php" class="block py-2 px-3 md:p-0 font-bold text-warna_aksen hover:text-blue-700 "><span class="text-white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Tentang Kami</a>
                        </li>
                        <li>
                            <a href="./pages/peran.php" class="block py-2 px-3 md:p-0 font-bold text-warna_aksen hover:text-blue-700">Solusi Bersama</a>
                        </li>
                        <li>
                            <a href="./pages/donasi.php" class="block py-2 px-3 md:p-0 font-bold text-warna_aksen hover:text-blue-700">Donasi</a>
                        </li>
                    </ul>
                </div>
            </div>    
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">

                
                <?php
                    if (isset($_SESSION['status_login'])) {
                        ?>
                        <div>
                            <a href="./pages/<?= $_SESSION['role'] == 'admin' ? 'admin-user.php' : 'user-profil.php' ?>" class="text-warna_aksen font-bold"><?= $_SESSION['nama']?></a>
                            <a href="./pages/<?= $_SESSION['role'] == 'admin' ? 'admin-user.php' : 'user-profil.php' ?>"><i class="fa-regular fa-circle-user fa-2xl mt-5" style="color: #5592F2;"></i></a>
                        </div>
                        <?php
                    } else {
                        
                        echo '<a href="./pages/login.php">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">MASUK</button></a>';
                    }
                
                ?>

                
            </div>
        </div>
    </nav>
  

<!-- Akhir Navigasi -->

    <!-- Awal Dashboard -->

    <div id="default-carousel" class="relative w-full max-w-screen-xl mx-auto mt-32 px-20 pb-4" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden bg-blue-200 rounded-lg md:h-96 mx-auto p-4">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/img/image.png" class="absolute block bg-black w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/img/image.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="assets/img/image.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse p-4 mx-auto">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-24 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-24 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>


    <!-- Akhir Dashboard -->

    <!-- Awal Section 1  -->
    <section>
        <div class="max-w-2xl mx-auto p-6">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold">Bersama Kita Bisa Mengatasi Kelaparan!</h1>
                <p class="mt-4 text-gray-600">
                    darikita.com hadir sebagai pihak ketiga untuk membantu anak-anak yang mengalami kesulitan akses makanan.
                    Melalui platform ini, Anda dapat memberikan bantuan makanan kepada mereka yang membutuhkan,
                    dan membantu mereka mendapatkan gaji yang cukup untuk tumbuh dan berkembang.
                </p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-10 mb-8">
                <div class="flex justify-center items-center h-48 border-2 border-dashed border-gray-300 rounded-lg">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18M3 3v18M3 3l18 18M21 3v18M21 3H3"/>
                        </svg>
                        <span class="text-gray-400">Yayasan</span>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <h2 class="text-2xl font-bold">Satu Suapan untuk Masa Depan yang Lebih Cerah</h2>
                <p class="mt-4 text-gray-600">
                    Bersama-sama, kita dapat membangun komunitas yang peduli dan saling membantu.
                    Donasi Anda, sekecil apapun, dapat memberikan harapan dan masa depan yang lebih cerah bagi anak-anak yang membutuhkan.
                </p>
                <a href="./pages/donasi.php">
                    <button class="mt-6 bg-blue-500 text-white font-bold py-2 px-4 rounded-full" >Donasi Sekarang!</button>
                </a>
            </div>
        </div>
    </section>

    <!-- Akhir Section 1 -->

    <!-- Awal Section 2 NILAI UTAMA -->
    <section class="text-gray-600 body-font mt-16">
        <div class="flex lg:w-2/3 mx-auto justify-center">
            <div class="bg-warna_primary p-8 pb-20 rounded-lg shadow-lg w-full md:w-2/3 mt-5">
            <div class="text-center mb-10">
                <h1 class="text-2xl font-medium title-font mt-3 mb-8 text-white">Nilai Utama Kami</h1>
            </div>
            <div class="flex flex-col md:flex-row text-center md:text-left items-center md:items-start">
                <div class="flex flex-col items-center flex-grow">
                    <div class="bg-blue-400 rounded-xl w-24 fa-3x h-24 inline-flex items-center justify-center text-white mb-5 flex-shrink-0">
                        <i class="fa-regular fa-circle-check"></i>
                    </div>
                    <h2 class="text-lg title-font font-medium mb-3 text-white">Mudah</h2>
                </div>
                <div class="flex flex-col items-center flex-grow">
                    <div class="text-white bg-blue-400 rounded-xl fa-3x w-24 h-24 inline-flex items-center justify-center mb-5 flex-shrink-0">
                        <i class="fa-solid fa-circle-half-stroke"></i>
                    </div>
                    <h2 class="text-lg title-font font-medium mb-3 text-white">Transparan</h2>
                </div>
                <div class="flex flex-col items-center flex-grow">
                    <div class="text-white bg-blue-400 rounded-xl fa-3x w-24 h-24 inline-flex items-center justify-center mb-5 flex-shrink-0">
                        <i class="fa-solid fa-rotate"></i>
                    </div>
                    <h2 class="text-lg title-font font-medium mb-3 text-white">Berkelanjutan</h2>
                </div>
                <div class="flex flex-col items-center flex-grow">
                    <div class="text-white bg-blue-400 rounded-xl fa-3x w-24 h-24 inline-flex items-center justify-center mb-5 flex-shrink-0">
                        <i class="fa-solid fa-arrows-split-up-and-left"></i>
                    </div>
                    <h2 class="text-lg title-font font-medium mb-3 text-white">Fleksibel</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Section 2 -->

    <!-- Section 3 -->
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="text-center mb-4">
            <h3 class="text-2xl font-bold title-font text-gray-900 mb-10">Ambil Peran Untukmu!</h3>
          </div>
          <div class="flex justify-center">
            <div class="flex flex-col md:flex-row text-center md:text-left items-center md:items-start ">
              <div class="flex flex-col items-center md:mr-5 flex-grow">
                <div class="w-24 h-24 inline-flex items-center justify-center  mb-5 flex-shrink-0 border border-gray-300 rounded-xl">
                  <i class="fa-solid fa-user-group fa-3x"></i>
                </div>
                <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Penggerak</h2>
              </div>
              <div class="flex flex-col items-center md:mr-5 flex-grow">
                <div class="w-24 h-24 inline-flex items-center justify-center mb-5 flex-shrink-0 border border-gray-300 rounded-xl">
                  <i class="fa-solid fa-hand-fist fa-3x"></i>
                </div>
                <h2 class="text-gray-900 text-lg title-font font-medium mb-3 mx-20">Penggalang</h2>
              </div>
              <div class="flex flex-col items-center flex-grow">
                <div class="w-24 h-24 inline-flex items-center justify-center  mb-5 flex-shrink-0 border border-gray-300 rounded-xl">
                  <i class="fa-solid fa-handshake fa-3x"></i>
                </div>
                <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Pendukung</h2>
              </div>
            </div>
          </div>
        </div>
    </section>
    
    <div class="flex flex-col items-center justify-center py-4 px-20 rounded-md shadow">
        <hr class="w-full my-3 border-black"> 
        <div class="flex flex-row items-center justify-center w-full">
            <div>
                <h2 class="text-2xl font-bold text-gray-900 mx-10">Mari Berbagi Kehangatan</h2>
                <p class="text-gray-600 mt-2 mx-10">Donasi Makanan untuk Masa Depan yang Lebih Baik</p>
            </div>
            <a href="./pages/donasi.php" class="inline-block px-6 py-2 bg-blue-500 text-white font-medium rounded-md hover:bg-blue-600">Donasi Sekarang!</a>
        </div>
    </div>
    
    <!-- Akhir Section 3 -->

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


<script src="node_modules/flowbite/dist/flowbite.min.js"></script>
</body>
</html>