<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Isi Data') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 max-sm:px-4 lg:px-8">
            <a href="{{ route('berobat.index') }}" class="btn bg-red-400 py-2 px-3 mt-3 md:ml-0 max-sm:ml-5 rounded-lg text-white shadow-md ">Kembali</a>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-5">
                
                <form action="{{ route('berobat.update', $berobat->id) }}" class="py-5 px-5" method="POST">
                    @csrf
                    @method('PATCH')
                    
                <div class="grid md:grid-cols-3">
                    <div>
                        <label for="" class="font-medium text-gray-800">Nama</label>
                        <div class="mt-2">
                            <input type="text" name="nama" class="rounded-lg w-full focus:ring-2 shadow-sm" value="{{ $berobat->nama }}">
                        </div>
                        @error('nama')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="md:mx-2 max-sm:mt-2">
                        <label for="" class="font-medium text-gray-800">Umur</label>
                        <div class="mt-2 flex">
                            <input type="number" name="umur" class="rounded-lg w-full focus:ring-2 shadow-sm" value="{{ $berobat->umur }}">
                            <span class="my-2 mx-3 font-medium"> Tahun.</span>
                        </div>
                        @error('umur')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="max-sm:mt-2">
                        <label for="" class="font-medium text-gray-800 ">Nama Orang Tua ( Optional )</label>
                        <div class="mt-2">
                            <input type="text" name="nama_ortu" class="rounded-lg w-full focus:ring-2 shadow-sm" value="{{ $berobat->nama_ortu }}">
                        </div>
                        @error('nama_ortu')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <hr class="mt-7">

                <div class="grid grid-cols-2">
                    <div class="mt-3">
                        <label for="" class="font-medium text-gray-800">Alamat</label>
                        <div class="mt-2">
                            <textarea name="alamat" id="" rows="4" class="w-full">{{ old('alamat',$berobat->alamat) }}</textarea>
                        </div>
                        @error('alamat')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-3 ml-3">
                        <label for="" class="font-medium text-gray-800">Keluhan</label>
                        <div class="mt-2">
                            <textarea name="keluhan" id="" rows="4" class="w-full">{{ old('keluhan',$berobat->keluhan) }}</textarea>
                        </div>
                        @error('keluhan')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <hr class="mt-7">

                <div class="grid grid-cols-2">
                    <div class="mt-3">
                        <label for="" class="font-medium text-gray-800">Pemeriksaan Fisik</label>
                        <div class="mt-2">
                            <textarea name="pemeriksaan_fisik" id="" rows="4" class="w-full">{{ old('pemeriksaan_fisik',$berobat->pemeriksaan_fisik) }}</textarea>
                        </div>
                        @error('pemeriksaan_fisik')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-3 ml-3">
                        <label for="" class="font-medium text-gray-800">Terapi</label>
                        <div class="mt-2">
                            <textarea name="terapi" id="" rows="4" class="w-full">{{ old('terapi',$berobat->terapi) }}</textarea>
                        </div>
                        @error('terapi')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <hr class="mt-7">

                <div>
                    <label for="" class="font-medium text-gray-800">Keterangan</label>
                    <div class="mt-2">
                        <input type="text" name="keterangan" class="rounded-lg focus:ring-2 shadow-sm" value="{{ $berobat->keterangan }}">
                    </div>
                    @error('keterangan')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                </div>

                <div class="item-center justify-end flex">
                    <button type="submit" class="bg-green-500 hover:bg-green-700 py-2 px-3 rounded-lg mt-5 text-white shadow-lg">Simpan Data</button>
                </div>
                </form>

            </div>
        </div>
    </div>

</x-app-layout>