<x-app-layout>
    <div class="bg-[#ADDE86] p-8">
        <div class="bg-[#D9D9D9] rounded-[20px]">
            <div class="bg-[#E6E6E6]  rounded-[20px]">
                <div class="mx-auto px-4">
                    <div class="p-[30px]">
                        <div class="flex items-center justify-center bg-[#E6E6E6] rounded-[20px] h-screen">
                            <div class="justify-center bg-[#ADDE86] w-[600px] h-[500px] p-10 rounded-[20px]">>
                                <div class="flex items-center justify-center">
                                    <img class="h-[150px] w-auto mb-4" src="{{url('/images/Vector.png')}}"
                                        alt="image" />
                                </div>
                                <h1 class="relative flex justify-center text-[25px] font-bold p-[10px] text-[#244454]">
                                    SUCCEED</h1>
                                <p class="relative flex justify-center text-[17px] font-bold p-[10px] text-[#244454]">
                                    SAMPAH ANDA AKAN SEGERA DIAMBIL OLEH PETUGAS </p>
                                <button
                                    class="btn btn-md btn-primary relative left-[350px] relative top-[80px] w-[150px] h-[40px] bg-[#E6E6E6] rounded-[20px] flex items-center justify-center text-[20px] font-semibold text-[#244454]"
                                    onclick="redirectToBeranda()">Kembali</button>
                                <script>
                                    function redirectToBeranda() {
                                        window.location.href = "{{ route('beranda') }}";
                                    }

                                </script>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</x-app-layout>
