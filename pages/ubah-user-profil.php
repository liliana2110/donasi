<?php
session_start();


include '../script/db.php';
$sql = 'SELECT * FROM user WHERE id_user =' . $_SESSION['id_user'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "Tidak ada data ditemukan";
    exit;
}
$conn->close();

if (isset($_SESSION['email_exists'])&& $_SESSION['email_exists'] = true) {
    echo '<script>alert("Email sudah terdaftar, silahkan gunakan email yang lain.")</script>';
    unset($_SESSION['email_exists']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>darikita.com - Ubah User Profile</title>
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



    
<!-- FORM -->
    
<div class="max-w-screen-xl mx-auto px-4 py-4 mt-16 mb-16">
        <div class="md:w-1/2 sm:w-full flex flex-wrap justify-center border rounded-lg mx-auto p-4 shadow-xl bg-[#F8F8F8]">
            <h1 class="text-3xl font-bold text-center mt-4">UBAH PROFIL</h1>
            <form action="../script/ubah-user-profil.php" method="POST" class="w-full rounded-sm px-8 py-6">
                <div class="w-full h-[3px] content-center bg-gray-200 mb-4"></div>
                <div class="mb-4 lg:mx-[100px]">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input name="email" id="email" type="email" value="<?= $user['email'] ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-blue-400" required>
                </div>
                <div class="mb-4 lg:mx-[100px]">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama</label>
                    <input name="name" id="name"  type="text" value="<?= $user['nama'] ?>"  class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-blue-400" required>
                    </div>
                <div class="mb-4 lg:mx-[100px]">
                    <label for="pass" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input name="pass" id="pass" type="text" value="<?= $user['password'] ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-blue-400" required>
                </div>
                <div class="mb-4 lg:mx-[100px]">
                    <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">No. HP</label>
                    <input name="phone" id="phone" type="text" value="<?= $user['no_hp'] ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-blue-400" required>
                </div>
                <div class="mb-4 lg:mx-[100px]">
                    <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Alamat</label>
                    <textarea id="address" name="address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" required ><?= $user['alamat'] ?></textarea>
                </div>
                <div class="lg:w-full flex mt-10 mb-4">
                    <a href="./user-profil.php" class="w-full">
                        <button type="button" id="change-profile" class="bg-white hover:bg-gray-100 hover:text-warna_primary w-full border border-blue-500 text-warna_aksen font-bold py-2 rounded">BATAL</button>
                    </a>
                </div>
                <div class=" flex justify-between items-center mb-4">
                    <div class="flex-1 h-[2px] bg-gray-500 mr-2"></div>
                    <p class="text-gray-500 px-2">atau</p>
                    <div class="flex-1 h-[2px] bg-gray-500 ml-2"></div>
                </div>
                <div class="lg:w-full flex mb-8">
                    <button type="submit"  class="bg-blue-500 hover:bg-blue-700 w-full text-white font-bold py-2 rounded">SIMPAN</button>
                </div>
                
            </form>
        </div>
    </div>
    
    <!-- FORM -->



</body>
</html>