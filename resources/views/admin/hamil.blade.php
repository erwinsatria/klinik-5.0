<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <div class="space-x-8  sm:-my-px sm:ms-10 sm:flex h-16">
                <x-nav-link :href="route('berobat.index')" :active="request()->routeIs('berobat.index','berobat.create','berobat.edit')">
                    {{ __('Berobat') }}
                </x-nav-link>
            </div>
            <div class="space-x-8 sm:-my-px sm:ms-10 sm:flex h-16">
                <x-nav-link :href="route('kb.index')" :active="request()->routeIs('kb.index','kb.create','kb.edit')">
                    {{ __('Keluarga berencana') }}
                </x-nav-link>
            </div>
            <div class="space-x-8 sm:-my-px sm:ms-10 sm:flex h-16">
                <x-nav-link :href="route('hamil.index')" :active="request()->routeIs('hamil.index','hamil.create','hamil.edit')">
                    {{ __('Ibu Hamil') }}
                </x-nav-link>
            </div>

        </div>
    </x-slot>

    <div class="py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-5 ml-5">
                    <a href="{{ route('hamil.create') }}" class="btn bg-green-500 hover:bg-green-700 py-3 px-3 rounded-lg text-white hover:">+ Add Data</a>
                </div>

                @if (session('success'))
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses!',
                            text: '{{ session('success') }}',
                            confirmButtonText: 'OK'
                        });
                    </script>
                @endif

                <div class="p-6 text-gray-900 dark:text-gray-100 overflow-x-auto">
                    <table class="table-auto min-w-full border-collapse border border-gray-300 text-center">
                        <thead class="bg-gray-500 text-white">
                            <tr>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">No</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">Nama</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">Nik</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">Umur</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">Nama Suami</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">Alamat</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">No Hp</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">GPA</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">Jarak Kehamilan</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">HPHT</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">TP</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">UK</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">TB</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">BB</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">TD</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">LILA</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">Tinggi Fundus</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">DJJ</th>
                                <th colspan="4" class="px-4 py-2 border border-gray-300">Pemeriksaan Penunjang</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">Keluhan</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">Terapi</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">Aksi</th>
                            </tr>
                            <tr>
                                <th class="px-4 py-2 border border-gray-300">TT</th>
                                <th class="px-4 py-2 border border-gray-300">HB</th>
                                <th class="px-4 py-2 border border-gray-300">PRO</th>
                                <th class="px-4 py-2 border border-gray-300">GLU</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hamils as $no => $hamil)
                            <tr>
                                <td class="px-4 py-2 border border-gray-300">{{ $no+1 }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $hamil->nama }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $hamil->nik }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $hamil->umur }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $hamil->nama_suami }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $hamil->alamat }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $hamil->no_hp }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $hamil->gpa }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $hamil->jarak_kehamilan }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $hamil->hpht }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $hamil->tp }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $hamil->uk }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $hamil->tb }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $hamil->bb }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $hamil->td }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $hamil->lila }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $hamil->tinggi_fundus }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $hamil->djj }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $hamil->tt ?? '-' }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $hamil->hb ?? '-' }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $hamil->pro ?? '-' }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $hamil->glu ?? '-' }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $hamil->keluhan }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $hamil->terapi }}</td>
                                <td class="px-4 py-2 border border-gray-300">
                                    <div class="flex">
                                        <a href="{{ route('hamil.edit', $hamil->nik) }}" class="mx-2 bg-yellow-500 hover:bg-yellow-700 py-2 px-3 rounded-md text-white"> Edit</a>
                                    <form action="{{ route('hamil.delete', $hamil->id) }}" method="POST" class="delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="mx-2 bg-red-500 py-2 hover:bg-red-700 px-3 rounded-md text-white"> Delete</button>
                                    </form>

                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.delete-form').forEach(function(form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            Swal.fire({
                title: 'Hapus?',
                text: "Apakah kamu yakin ingin menghapus ini",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
        
    </script>
</x-app-layout>