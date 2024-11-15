<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Isi Data') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 max-sm:px-4 lg:px-8">
            <a href="{{ route('kb.index') }}" class="btn bg-red-400 hover:bg-red-700 py-2 px-3 mt-3 md:ml-0 max-sm:ml-5 rounded-lg text-white shadow-md ">Kembali</a>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-5">
                
                <form action="{{ route('kb.store') }}" method="post">
                    @csrf
                    <div class="grid lg:grid-cols-3 max-sm:grid-cols-2 py-3 px-3">
                        <div class="mx-2">
                            <div>
                                <label for="">Nama</label>
                            </div>
                            <input class="w-full rounded-lg" type="text" name="nama" id="">
                        </div>
                        <div>
                            <div>
                                <label for="">NIK</label>
                            </div>
                            <input class="w-full rounded-lg" type="number" name="nik" id="">
                        </div>
                        <div class="mx-2 flex max-sm:mt-2">
                            <div>
                            <div>
                                <label for="">Umur</label>
                            </div>
                            <div class="flex">
                                <input class="max-w-20 rounded-lg" type="number" name="umur" id="">
                                <span class="my-2 mx-3 font-medium"> Tahun.</span>
                            </div>
                            </div>

                            <div class="mx-2 max-sm:mt-2">
                                <div>
                                    <label for="">Jumlah Anak</label>
                                </div>
                                <div class="flex">
                                    <input class="lg:max-w-20 max-sm:max-w-40 rounded-lg" type="number" name="jumlah_anak" id="">
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 py-3 px-3">
                        <div class="mx-2">
                                <label for="" class="font-medium text-gray-800">Alamat</label>
                                <div>
                                    <textarea name="alamat" id="" rows="4" class="w-full"></textarea>
                                </div>
                                @error('alamat')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="mx-2">
                            <div>
                                <label for="">Nama Suami</label>
                            </div>
                            <input class="w-full rounded-lg" type="text" name="nama_suami" id="">
                        </div>
                    </div>

                    <div class="grid lg:grid-cols-9">
                        <div class="border-r-4 pl-5 mb-3">
                            <input class="mr-2 appearance-none checked:bg-emerald-500" type="checkbox" name="is_kondom" value="1">
                            <label class="mr-2 font-semibold">Kondom</label>
                        </div>
                        <div class="border-r-4 pl-5 mb-3">
                            <input class="mr-2 appearance-none checked:bg-emerald-500" type="checkbox" name="is_pil" value="1">
                            <label class="mr-2 font-semibold">PIL</label>
                        </div>
                        <div class="border-r-4 pl-5 mb-3">
                            <input class="mr-2 appearance-none checked:bg-emerald-500" type="checkbox" name="is_suntik_1" value="1">
                            <label class="mr-2 font-semibold">Suntik 1</label>
                        </div>
                        <div class="border-r-4 pl-5 mb-3">
                            <input class="mr-2 appearance-none checked:bg-emerald-500" type="checkbox" name="is_suntik_2" value="1">
                            <label class="mr-2 font-semibold">Suntik 2</label>
                        </div>
                        <div class="border-r-4 pl-5 mb-3">
                            <input class="mr-2 appearance-none checked:bg-emerald-500" type="checkbox" name="is_suntik_2" value="1">
                            <label class="mr-2 font-semibold">Suntik 3</label>
                        </div>
                        <div class="border-r-4 pl-5 mb-3">
                            <input class="mr-2 appearance-none checked:bg-emerald-500" type="checkbox" name="is_implan" value="1">
                            <label class="mr-2 font-semibold">Implan</label>
                        </div>
                        <div class="border-r-4 pl-5 mb-3">
                            <input class="mr-2 appearance-none checked:bg-emerald-500" type="checkbox" name="is_iud" value="1">
                            <label class="mr-2 font-semibold">IUD</label>
                        </div>
                        <div class="border-r-4 pl-5 mb-3">
                            <input class="mr-2 appearance-none checked:bg-emerald-500" type="checkbox" name="is_mow" value="1">
                            <label class="mr-2 font-semibold">MOW</label>
                        </div>
                        <div class="pl-5 mb-3">
                            <input class="mr-2 appearance-none checked:bg-emerald-500" type="checkbox" name="is_mop" value="1">
                            <label class="mr-2 font-semibold">MOP</label>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 mx-5 mb-3">
                        <div class="flex">
                            <div class="mr-5">
                                <div>
                                    <label for="">TD</label>
                                </div>
                                <div class="flex">
                                    <input class="max-w-20 rounded-lg" type="number" name="td" id="">
                                </div>
                            </div>
                            <div class="mr-5">
                                <div>
                                    <label for="">BB</label>
                                </div>
                                <div class="flex">
                                    <input class="max-w-20 rounded-lg" type="number" name="bb" id="">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <label for="">Tanggal Kembali</label>
                                </div>
                                <div class="flex">
                                    <input class=" rounded-lg" type="date" name="tanggal_kembali" id="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="mx-5">
                            <label for="" class="font-semibold">Keterangan</label>
                            <div class="mt-2">
                                <input type="text" name="keterangan" class="rounded-lg focus:ring-2 shadow-sm">
                            </div>
                            @error('keterangan')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>

                    <div class="item-center justify-end flex mb-4 mr-5">
                        <button type="submit" class="bg-green-500 hover:bg-green-700 py-2 px-3 rounded-lg mt-5 text-white shadow-lg">Tambah Data</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

</x-app-layout>