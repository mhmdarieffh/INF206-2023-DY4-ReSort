@extends('layouts.navigation')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>pengajuan</title>
  </head>
  <body>
  <div class="bg-[#ADDE86] p-8">
    <div class="bg-[#D9D9D9] rounded-[20px]"> 
      <div class="bg-[#E6E6E6]  rounded-[20px]">
        <div class="mx-auto px-4">
          <div class="flex justify-between h-16 " >
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
  </div>
  </body>
</html>