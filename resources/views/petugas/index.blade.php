<!-- Isi halaman dashboard petugas -->
<script src="https://cdn.tailwindcss.com"></script>

<div class="bg-[#ADDE86] p-8">
    <div class="bg-[#D9D9D9] rounded-[20px]">
        <div class="bg-[#E6E6E6]  rounded-[20px]">
            <div class="mx-auto px-4">
                <div class="p-[30px]">
                    <div class=" bg-[#E6E6E6] rounded-[20px] h-screen">
                        <div>
                            <div class="px-10 py-10">
                                <button
                                    class="btn btn-md btn-primary relative mb-2 w-[40px] h-[40px] bg-[#ADDE86] rounded-[20px] flex items-center justify-center text-[20px] font-semibold text-[#244454]"
                                    onclick="redirectToBeranda()">
                                    <</button> <script>
                                        function redirectToBeranda() {
                                        window.location.href = "{{ route('dashboard') }}";
                                        }
                                        </script>
                            </div class="ml-8">
                            <!-- Menampilkan notifikasi -->
                            <h1 class="font-Semibold mb-8 ml-8">
                                Notifikasi
                            </h1 class="ml-8">
                            @foreach (Auth::user()->unreadNotifications as $notification)
                            <div class="ml-8">{{ $notification->data['message'] }}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>