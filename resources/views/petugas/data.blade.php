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
                                        <h1 class="font-semibold">Data Rekapitulasi Sampah</h1>
                                        <div>
                                            <div class="py-5 px-5 table-responsive table-bordered">
                                                <table class="table table-striped table-hover">
                                                    <thead style="background-color:#ADDE86;">
                                                        <tr>
                                                            <th class="text-center w-52">Tanggal</th>
                                                            <th class="text-center">Sampah Organik</th>
                                                            <th class="text-center">Sampah Anorganik</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data as $d)
                                                        <tr>
                                                            <td class="text-center"> {{ $d->tanggal }}</td>
                                                            <td class="text-center">{{ $d->total_organik }} Kg</td>
                                                            <td class="text-center">{{ $d->total_anorganik }} Kg</td>
                                                        </tr>
                                                        @endforeach
                                                        
                                                    </tbody>
                                                </table>
                                                {{ $data->links() }}

                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</x-app-layout>
