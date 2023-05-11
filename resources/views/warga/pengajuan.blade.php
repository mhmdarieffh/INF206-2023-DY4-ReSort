<x-app-layout>
    <div class="bg-[#ADDE86] p-8">
        <div class="bg-[#D9D9D9] rounded-[20px]">
            <div class="bg-[#E6E6E6] rounded-[20px] ">
                <div class="mx-auto px-4">
                    <div class="p-[30px]">
                        <div class="flex items-center justify-center bg-[#E6E6E6] rounded-[20px] h-screen">
                            <div
                                class="justify-center bg-[#ADDE86] w-[600px] h-[500px] p-10 rounded-[20px] font-lexend-deca">
                                <h1 class="relative flex justify-center text-[25px] font-bold p-[10px]">
                                    FORM PENGAJUAN SAMPAH
                                </h1>
                                <form action="{{ route('pengajuan.store') }}" method="POST"
                                    enctype="multipart/form-data" class="font-bold text-[20px] mt-[18px]">
                                    @csrf
                                    <div>
                                        <label for="nama">Nama</label>
                                        <input type="text" id="nama" name="nama"
                                            class="w-[500px] h-[40px] bg-[#E6E6E6] flex justify-start items-center p-[10px] rounded-[10px]" />
                                    </div>

                                    <div>
                                        <label for="alamat">Alamat</label>
                                        <input type="text" id="alamat" name="alamat"
                                            class="w-[500px] h-[40px] bg-[#E6E6E6] flex justify-start items-center p-[10px] rounded-[10px]" />
                                    </div>
                                    <div class="font-bold text-[20px] mt-[18px]">
                                        <label for="organik">Jumlah Sampah Organik </label>
                                        <input type="text" id="organik" name="organik"
                                            class="mt-[5px] mb-[5px] w-[60px] h-[30px] bg-[#E6E6E6] rounded-[5px] relative left-[23px]"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '');" />
                                        <label class="relative left-[23px]">Kg</label><br />
                                        <label for="anorganik">Jumlah Sampah Anorganik </label>
                                        <input type="text" id="anorganik" name="anorganik"
                                            class="mt-[5px] mb-[5px] w-[60px] h-[30px] bg-[#E6E6E6] rounded-[5px]"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '');" />
                                        <label>Kg</label>
                                    </div>
                                    <div>
                                        <button type="submit"
                                            class="btn btn-md btn-primary relative left-[350px] relative top-[80px] w-[150px] h-[40px] bg-[#E6E6E6] rounded-[20px] flex items-center justify-center text-[20px] font-semibold">Kirim</button>
                                    </div>
                                </form>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');

    </script>
</x-app-layout>