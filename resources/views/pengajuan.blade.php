<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/ajukan.css" />
    <title>pengajuan</title>
  </head>
  <body>
    <div class="bg-[#D9D9D9] rounded-[20px]"> 
      <div class="bg-[#E6E6E6]  rounded-[20px]">
        <div class="mx-auto px-4">
          <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center justify-center">
              <img class="h-8 w-auto" src="{{url('/image/logo.png')}}" alt="Logo" />
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
        <div
          class="flex items-center justify-center bg-[#E6E6E6] rounded-[20px] h-screen"
        >
          <div class="relative left-[70px] bg-[#ADDE86] w-[600px] h-[500px] p-10 rounded-[20px]">
            <h1
              class="relative flex justify-center text-[25px] font-bold p-[10px]"
            >
              FORM PENGAJUAN SAMPAH
            </h1>
            <div>
              <h2 class="font-bold text-[20px] mb-[5px]">Nama</h2>
              <div
                class="w-[500px] h-[40px] bg-[#E6E6E6] flex justify-start items-center p-[10px] rounded-[10px]"
              >
                <h2 class="text-[15px] font-semibold">Sultan</h2>
              </div>
            </div>
            <div>
              <h2 class="font-bold text-[20px] mt-[5px] mb-[5px]">Alamat</h2>
              <div
                class="w-[500px] h-[40px] bg-[#E6E6E6] flex justify-start items-center p-[10px] rounded-[10px]"
              >
                <h2 class="text-[15px] font-semibold">Jl. Layang</h2>
              </div>
            </div>
        <form class="font-bold text-[20px] mt-[10px]">
          <label for="organik">Jumlah Sampah Organik :</label>
            <input
              type="text"
              id="organik"
              name="organik"
              class="mt-[5px] mb-[5px] w-[60px] h-[30px] bg-[#E6E6E6] rounded-[5px]"
              oninput="this.value = this.value.replace(/[^0-9.]/g, '');"
            />  
          <label>Kg</label><br />
          <label for="anorganik">Jumlah Sampah Anorganik :</label>
            <input
              type="text"
              id="anorganik"
              name="anorganik"
              class="mt-[5px] mb-[5px] w-[60px] h-[30px] bg-[#E6E6E6] rounded-[5px]"
              oninput="this.value = this.value.replace(/[^0-9.]/g, '');"
            />
          <label for="kg">Kg</label>
        </form>
          </div>
          <div class="hidden fixed top-0 left-0 bottom-0 right-0 bg-green-500 bg-opacity-50 flex justify-center items-center" id="popup">
    <div class="bg-[#ADDE86] rounded-lg p-6" border-solid>
    <div class="flex items-center justify-center">
      <img class="h-[150px] w-auto mb-4" src="{{url('/image/Vector.png')}}" alt="image" />
    </div>
     <h1 class=" flex items-center justify-center text-2xl font-bold mb-1">Terima Kasih</h1>
    <p class="text-xl mb-4">Mohon tunggu petugas menjemput sampah anda</p>
    <button class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="closePopup()">tutup</button>
    </div>
    </div>
    <button class="relative left-[300px] top-[230px] w-[150px] h-[40px] bg-[#ADDE86] rounded-[20px] flex items-center justify-center text-[20px] font-semibold" onclick="showPopup()">Kirim</button>
    </div>
    </div>

      
    <script>
      function showPopup() {
        document.getElementById("popup").classList.remove("hidden");
      }

      function closePopup() {
        document.getElementById("popup").classList.add("hidden");
      }
    </script>
  </body>
</html>

