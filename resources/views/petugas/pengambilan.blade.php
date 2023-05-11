<x-app-layout>
<div class="bg-[#ADDE86] p-8">
    <div class="bg-[#D9D9D9] rounded-[20px]"> 
      <div class="bg-[#E6E6E6]  rounded-[20px]">
        <div class="mx-auto px-4">
      <div class="p-[30px]">
        <div
          class="flex items-center justify-center bg-[#E6E6E6] rounded-[20px] h-screen"
        >
          <div class="relative left-[70px] bg-[#ADDE86] w-[600px] h-[500px] p-10 rounded-[20px]">
            <h1
              class="relative flex justify-center text-[25px] font-bold p-[10px] mb-[20px]"
            >
              FORM PENGAMBILAN SAMPAH
            </h1>
            <div>
              <h2 class="font-bold text-[20px] mb-[20Px]">Nama : Sultan Shalahuddin</h2>
            </div>
            <div>
              <h2 class="font-bold text-[20px] mt-[20px] mb-[5px]">Alamat : Jl. Layang</h2>
            </div>
            <div>
              <h2 class="font-bold text-[20px] mt-[20px] mb-[5px]">Jumlah Sampah Organik : 2 KG</h2>
            </div>
            <div>
              <h2 class="font-bold text-[20px] mt-[20px] mb-[5px]">Jumlah Sampah Anorganik : 4.6 KG</h2>
            </div>
            <div>
              <h2 class=" font-bold text-[20px] mt-[100px] mb-[5px]">KLIK KONFIRMASI APABILA TELAH SELESAI MENGANGKUT SAMPAH</h2>
            </div>
        </div>
    <div class="hidden fixed top-0 left-0 bottom-0 right-0 bg-green-500 bg-opacity-50 flex justify-center items-center" id="popup">
    <div class="bg-[#ADDE86] rounded-lg p-6" border-solid>
    <div class="flex items-center justify-center">
      <img class="h-[150px] w-auto mb-4" src="{{url('/images/Vector.png')}}" alt="image" />
    </div>
     <h1 class=" flex items-center justify-center text-2xl font-bold mb-1">Terima Kasih</h1>
    <p class="text-xl mb-4">Pengambilan Sampah telah terkonfirmasi</p>
    <button class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="closePopup()">tutup</button>
    </div>
    </div>
    <button class="relative left-[300px] top-[230px] w-[150px] h-[40px] bg-[#ADDE86] rounded-[20px] flex items-center justify-center text-[20px] font-semibold" onclick="showPopup()">Konfirmasi</button>
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
  </div>
  </div>
          </div>
        </div>
      </div>
</x-app-layout>

