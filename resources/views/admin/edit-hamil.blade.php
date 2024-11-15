<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Isi Data') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 max-sm:px-4 lg:px-8">
            <a href="{{ route('hamil.index') }}" class="btn bg-red-400 hover:bg-red-700 py-2 px-3 mt-3 md:ml-0 max-sm:ml-5 rounded-lg text-white shadow-md ">Kembali</a>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-5">
                
                <form action="{{ route('hamil.update', $hamil->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="grid lg:grid-cols-3 max-sm:grid-cols-2 py-3 px-3">
                        <div class="mx-2">
                            <div>
                                <label for="">Nama</label>
                            </div>
                            <input class="w-full rounded-lg" type="text" name="nama" id="" value="{{ $hamil->nama }}">
                        </div>
                        <div>
                            <div>
                                <label for="">NIK</label>
                            </div>
                            <input class="w-full rounded-lg read-only:bg-gray-300" type="number" name="nik" id="" value="{{ $hamil->nik }}" readonly>
                        </div>
                        <div class="flex">
                            <div class="mx-2 flex max-sm:mt-2">
                                <div>
                                <div>
                                    <label for="">Umur</label>
                                </div>
                                <div class="flex">
                                    <input class="max-w-20 rounded-lg" type="number" name="umur" id="" value="{{ $hamil->umur }}">
                                    <span class="my-2 mx-3 font-medium"> Tahun.</span>
                                </div>
                                </div>
                            </div>

                            <div class="mx-2 flex max-sm:mt-2">
                                <div>
                                <div>
                                    <label for="">No Hp</label>
                                </div>
                                <div class="flex">
                                    <input class="max-w-40 rounded-lg" type="number" name="no_hp" id="" value="{{ $hamil->no_hp }}">
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid lg:grid-cols-3 max-sm:grid-cols-2 py-3 px-3">
                        <div class="mx-2">
                                <label for="" class="font-medium text-gray-800">Alamat</label>
                                <div>
                                    <textarea name="alamat" id="" rows="4" class="w-full">{{ $hamil->alamat }}</textarea>
                                </div>
                                @error('alamat')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="mx-2">
                            <div>
                                <label for="">Nama Suami</label>
                            </div>
                            <input class="w-full rounded-lg" type="text" name="nama_suami" id="" value="{{ $hamil->nama_suami }}">
                        </div>
                        <div class="flex items-center">
                            <div class="mx-2 flex max-sm:mt-8">
                                <div>
                                <div>
                                    <label for="">GPA</label>
                                </div>
                                <div class="flex">
                                    <input class="max-w-20 rounded-lg" type="number" name="gpa" id="" value="{{ $hamil->gpa }}">
                                </div>
                                </div>
                            </div>

                            <div class="mx-2 flex max-sm:mt-2">
                                <div>
                                <div>
                                    <label for="">Jarak Kehamilan</label>
                                </div>
                                <div class="flex">
                                    <input class="max-w-20 rounded-lg" type="number" name="jarak_kehamilan" id="" value="{{ $hamil->jarak_kehamilan }}">
                                </div>
                                </div>
                            </div>

                            <div class="mx-2 flex max-sm:mt-2">
                                <div>
                                <div>
                                    <label for="">Tinggi Fundus</label>
                                </div>
                                <div class="flex">
                                    <input class="max-w-20 rounded-lg" type="number" name="tinggi_fundus" id="" value="{{ $hamil->tinggi_fundus }}">
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="md:flex mb-3">
                    <div class="flex">
                        <div>
                            <div class="mx-2 flex max-sm:mt-2">
                                <div>
                                <div>
                                    <label for="" class="ml-2">HPHT</label>
                                </div>
                                <div class="flex">
                                    <input class="max-w-20 rounded-lg" type="number" name="hpht" id="" value="{{ $hamil->hpht }}">
                                </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="mx-2 flex max-sm:mt-2">
                                <div>
                                <div>
                                    <label for="" class="ml-2">TP</label>
                                </div>
                                <div class="flex">
                                    <input class="max-w-20 rounded-lg" type="number" name="tp" id="" value="{{ $hamil->tp }}">
                                </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="mx-2 flex max-sm:mt-2">
                                <div>
                                <div>
                                    <label for="" class="ml-2">UK</label>
                                </div>
                                <div class="flex">
                                    <input class="max-w-20 rounded-lg" type="number" name="uk" id="" value="{{ $hamil->uk }}">
                                </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="mx-2 flex max-sm:mt-2">
                                <div>
                                <div>
                                    <label for="" class="ml-2">TB</label>
                                </div>
                                <div class="flex">
                                    <input class="max-w-20 rounded-lg" type="number" name="tb" id="" value="{{ $hamil->tb }}">
                                </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="mx-2 flex max-sm:mt-2">
                                <div>
                                <div>
                                    <label for="" class="ml-2">BB</label>
                                </div>
                                <div class="flex">
                                    <input class="max-w-20 rounded-lg" type="number" name="bb" id="" value="{{ $hamil->bb }}">
                                </div>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="flex">
                        <div>
                            <div class="mx-2 flex max-sm:mt-2">
                                <div>
                                <div>
                                    <label for="" class="ml-2">TD</label>
                                </div>
                                <div class="flex">
                                    <input class="max-w-20 rounded-lg" type="number" name="td" id="" value="{{ $hamil->td }}">
                                </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="mx-2 flex max-sm:mt-2">
                                <div>
                                <div>
                                    <label for="" class="ml-2">LILA</label>
                                </div>
                                <div class="flex">
                                    <input class="max-w-20 rounded-lg" type="number" name="lila" id="" value="{{ $hamil->lila }}">
                                </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="mx-2 flex max-sm:mt-2">
                                <div>
                                <div>
                                    <label for="" class="ml-2">DJJ</label>
                                </div>
                                <div class="flex">
                                    <input class="max-w-20 rounded-lg" type="number" name="djj" id=""value="{{ $hamil->djj }}">
                                </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2">
                        <div class="flex">
                            <div class="mt-3 ml-3">
                                <label for="" class="font-medium text-gray-800">Keluhan</label>
                                <div class="mt-2">
                                    <textarea name="keluhan" id="" rows="4" class="w-full">{{ $hamil->keluhan }}</textarea>
                                </div>
                                @error('terapi')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-3 ml-3">
                                <label for="" class="font-medium text-gray-800">Terapi</label>
                                <div class="mt-2">
                                    <textarea name="terapi" id="" rows="4" class="w-full">{{ $hamil->terapi }}</textarea>
                                </div>
                                @error('terapi')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="md:flex md:mt-5 mt-3">
                            <div class="flex">
                                <div class="mx-2 flex max-sm:mt-2">
                                    <div>
                                    <div>
                                        <label for="" class="ml-2">TT</label>
                                    </div>
                                    <div class="flex">
                                        <input class="max-w-20 rounded-lg" type="number" name="tt" id="" value="{{ $hamil->tt }}">
                                    </div>
                                    </div>
                                </div>
                                <div class="mx-2 flex max-sm:mt-2">
                                    <div>
                                    <div>
                                        <label for="" class="ml-2">HB</label>
                                    </div>
                                    <div class="flex">
                                        <input class="max-w-20 rounded-lg" type="number" name="hb" id="" value="{{ $hamil->hb }}">
                                    </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="mx-2 flex max-sm:mt-2">
                                    <div>
                                    <div>
                                        <label for="" class="ml-2">PRO</label>
                                    </div>
                                    <div class="flex">
                                        <input class="max-w-20 rounded-lg" type="number" name="pro" id="" value="{{ $hamil->pro }}">
                                    </div>
                                    </div>
                                </div>
                                <div class="mx-2 flex max-sm:mt-2">
                                    <div>
                                    <div>
                                        <label for="" class="ml-2">GLU</label>
                                    </div>
                                    <div class="flex">
                                        <input class="max-w-20 rounded-lg" type="number" name="glu" id="" value="{{ $hamil->glu }}">
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item-center justify-end flex mr-5 mb-5">
                        <button type="submit" class="bg-green-500 hover:bg-green-800 py-2 px-3 rounded-lg mt-5 text-white shadow-lg">Simpan Data</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>

</x-app-layout>