<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <div class="space-x-8 ` sm:-my-px sm:ms-10 sm:flex h-16">
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
        <div class=" mx-auto sm:px-6 lg:px-0 lg:mx-10">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-5 ml-5">
                    <a href="{{ url(route('kb.create')) }}" class="btn bg-green-500 hover:bg-green-700 py-3 px-3 rounded-lg text-white hover:">+ Add Data</a>
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
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">Tanggal</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">Nama</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">NIK</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">Umur</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">Nama Suami</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">Alamat</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">Jumlah Anak</th>
                                
                                <th colspan="9" class="px-4 py-2 border border-gray-300">KB</th>

                                <th rowspan="2" class="px-4 py-2 border border-gray-300">TD</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">BB</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">Tanggal Kembali</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">Keterangan</th>
                                <th rowspan="2" class="px-4 py-2 border border-gray-300">Aksi</th>
                            </tr>
                            <tr>
                                <th class="px-4 py-2 border border-gray-300">Kondom</th>
                                <th class="px-4 py-2 border border-gray-300">PIL</th>
                                <th class="px-4 py-2 border border-gray-300">1 Bulan</th>
                                <th class="px-4 py-2 border border-gray-300">2 Bulan</th>
                                <th class="px-4 py-2 border border-gray-300">3 Bulan</th>
                                <th class="px-4 py-2 border border-gray-300">Implan</th>
                                <th class="px-4 py-2 border border-gray-300">IUD</th>
                                <th class="px-4 py-2 border border-gray-300">MOW</th>
                                <th class="px-4 py-2 border border-gray-300">MOP</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($berencanas as $kb)
                            <tr>
                                <td class="px-4 py-2 border border-gray-300">{{ $kb->created_at }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $kb->nama }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $kb->nik }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $kb->umur }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $kb->nama_suami }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $kb->alamat }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $kb->jumlah_anak }}</td>
                                <td class="px-4 py-2 border border-gray-300">{!! $kb->is_kondom ? '<i class="bi bi-check-lg"></i>' : '' !!}</td>
                                <td class="px-4 py-2 border border-gray-300">{!! $kb->is_pil ? '<i class="bi bi-check-lg"></i>' : '' !!}</td>
                                <td class="px-4 py-2 border border-gray-300">{!! $kb->is_suntik_1 ? '<i class="bi bi-check-lg"></i>' : '' !!}</td>
                                <td class="px-4 py-2 border border-gray-300">{!! $kb->is_suntik_2 ? '<i class="bi bi-check-lg"></i>' : '' !!}</td>
                                <td class="px-4 py-2 border border-gray-300">{!! $kb->is_suntik_3 ? '<i class="bi bi-check-lg"></i>' : '' !!}</td>
                                <td class="px-4 py-2 border border-gray-300">{!! $kb->is_implan ? '<i class="bi bi-check-lg"></i>' : '' !!}</td>
                                <td class="px-4 py-2 border border-gray-300">{!! $kb->is_uid ? '<i class="bi bi-check-lg"></i>' : '' !!}</td>
                                <td class="px-4 py-2 border border-gray-300">{!! $kb->is_mow ? '<i class="bi bi-check-lg"></i>' : '' !!}</td>
                                <td class="px-4 py-2 border border-gray-300">{!! $kb->is_mop ? '<i class="bi bi-check-lg"></i>' : '' !!}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $kb->td }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $kb->bb }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ \Carbon\Carbon::parse($kb->tanggal_kembali)->format('d/m/Y') }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $kb->keterangan }}</td>
                                <td class="px-4 py-2 border border-gray-300">
                                    <div class="flex">
                                        <a href="{{ route('kb.edit', $kb->nik) }}" class="mx-2 bg-yellow-500 hover:bg-yellow-700 py-2 px-3 rounded-md text-white"> Edit</a>
                                    <form action="{{ route('kb.delete', $kb->id) }}" method="POST" class="delete-form">
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