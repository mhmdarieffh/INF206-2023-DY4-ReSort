<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=auto, height=auto">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Form Petugas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="formpetugas.css">
</head>
<body>
<div class="bg-[#ADDE86] p-8">
    <div class="bg-[#D9D9D9] rounded-[20px]"> 
      <div class="bg-[#E6E6E6]  rounded-[20px]">
        <div class="mx-auto px-4">
          <div class="flex justify-between h-16 " >
            <!-- Logo -->
            <div class="flex items-center justify-center">
              <img class="h-8 w-auto" src="logoresort.png" alt="Logo" />
            </div>

            <!-- Menu -->
            <div class="flex justify-between items-center text-[20px] p-[20px]">
              <!-- Beranda -->
              <a
                href="#"
                class="px-3 py-2 text-gray-800 hover:text-white font-semibold"
                >Beranda</a
              >

              <!-- Kontak -->
              <a
                href="#"
                class="px-3 py-2 text-gray-800 hover:text-white font-semibold"
                >Kontak</a
              >

              <!-- Logout -->
              <a
                href="#"
                class="px-3 py-2 text-gray-800 hover:text-white font-semibold"
                >Logout</a
              >
            </div>
          </div>
        </div>
      </div>
      <div class="p-[30px]">
    </div>
    <table class="text-3xl ml-10 mt-8 mb-24">
        <tr>
            <td>Nama</td>
            <td class="pr-5">:</td>
            <td>Zul</td>
        </tr>
        <tr>
            <td class="pr-25">ID Petugas</td>
            <td>:</td>
            <td>00154</td>
        </tr>
    </table>
        <table class="mx-auto justify-center items-center border-collapse w-93 mb-50">
            <thead class="bg-[#adde86] text-2xl text-center">
                <tr>
                    <td class="border-2 border-solid border-black pl-6 pr-6">NO</td>
                    <td class="border-2 border-solid border-black pl-20 pr-20">NAMA</td>
                    <td class="border-2 border-solid border-black pl-40 pr-40">ALAMAT</td>
                    <td class="border-2 border-solid border-black pl-16 pr-16">STATUS</td>
                </tr>
            </thead>
            <tbody class="bg-[#ffffff] text-2xl text-center">
                <tr>
                    <td class="border-2 border-solid border-black pl-6 pr-6">1</td>
                    <td class="border-2 border-solid border-black pl-20 pr-20">Irma</td>
                    <td class="border-2 border-solid border-black pl-40 pr-40">Jl.Ikan</td>
                    <td class="border-2 border-solid border-black pl-16 pr-16">SUDAH</td>
                </tr>
                <tr>
                    <td class="border-2 border-solid border-black pl-6 pr-6">2</td>
                    <td class="border-2 border-solid border-black pl-20 pr-20">Adi</td>
                    <td class="border-2 border-solid border-black pl-40 pr-40">Jl.Ayam</td>
                    <td class="border-2 border-solid border-black pl-16 pr-16">SUDAH</td>
                </tr>
                <tr>
                    <td class="border-2 border-solid border-black pl-6 pr-6">3</td>
                    <td class="border-2 border-solid border-black pl-20 pr-20">Imran</td>
                    <td class="border-2 border-solid border-black pl-40 pr-40">Jl.Layang</td>
                    <td class="border-2 border-solid border-black pl-16 pr-16">BELUM</td>
                </tr>
            </tbody>
        </table>
        <div>
          <br><br><br>
        </div>
</div>
</body>
</html>