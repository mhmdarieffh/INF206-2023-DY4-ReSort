<x-app-layout>
    <div class="bg-[#ADDE86] p-8">
        <div class="bg-[#D9D9D9] rounded-[20px]">
            <div class="bg-[#E6E6E6]  rounded-[20px]">
                <div class="mx-auto px-4">
                    <div class="p-[30px]">
                        <div class="bg-[#E6E6E6] rounded-[20px] h-screen">
                            <div class="px-10 py-10">
                                <button
                                    class="btn btn-md btn-primary relative mb-8 w-[40px] h-[40px] bg-[#ADDE86] rounded-[20px] flex items-center justify-center text-[20px] font-semibold text-[#244454]"
                                    onclick="redirectToBeranda()">
                                    <</button> <script>
                                        function redirectToBeranda() {
                                        window.location.href = "{{ route('dashboard') }}";
                                        }
                                        </script>
                                        <h1 class="font-semibold">TABEL PENGAJUAN SAMPAH</h1>
                                        <div>
                                            <div class="py-10 table-responsive table-bordered">
                                                <table class="table table-striped table-hover">
                                                    <thead style="background-color:#ADDE86;">
                                                        <tr>
                                                            <th class="text-center w-2">No</th>
                                                            <th class="text-center">Nama</th>
                                                            <th class="text-center">Alamat</th>
                                                            <th class="text-center">Organik</th>
                                                            <th class="text-center">Anorganik</th>
                                                            <th class="text-center">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($pengajuan as $p)
                                                        <tr>
                                                            <td class="text-center" scope="row">{{ $loop->iteration }}
                                                                </th>
                                                            <td class="text-center">{{ $p->nama }}</td>
                                                            <td class="text-center">{{ $p->alamat }}</td>
                                                            <td class="text-center">{{ $p->organik }} Kg</td>
                                                            <td class="text-center">{{ $p->anorganik }} Kg</td>
                                                            <td class="text-center"><select id="status"
                                                                    name="status text-center" required>
                                                                    <option selected>Belum Selesai</option>
                                                                    <option>Selesai</option>
                                                                </select></td>
                                                        </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</x-app-layout>
