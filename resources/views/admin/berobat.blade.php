<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <div class="space-x-8 sm:-my-px sm:ms-10 sm:flex h-16">
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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-5 ml-5">
                    <a href="{{ url(route('berobat.create')) }}" class="btn bg-green-500 hover:bg-green-700 py-3 px-3 rounded-lg text-white hover:">+ Add Data</a>
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
                                <th class="px-4 py-2 border border-gray-300">No</th>
                                <th class="px-4 py-2 border border-gray-300">Tanggal</th>
                                <th class="px-4 py-2 border border-gray-300">Nama</th>
                                <th class="px-4 py-2 border border-gray-300">Umur</th>
                                <th class="px-4 py-2 border border-gray-300">Nama Orang Tua</th>
                                <th class="px-4 py-2 border border-gray-300">Alamat</th>
                                <th class="px-4 py-2 border border-gray-300">Keluhan</th>
                                <th class="px-4 py-2 border border-gray-300">Pemeriksaan</th>
                                <th class="px-4 py-2 border border-gray-300">Terapi</th>
                                <th class="px-4 py-2 border border-gray-300">Keterangan</th>
                                <th class="px-4 py-2 border border-gray-300">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($berobats as $no => $berobat)
                            <tr>
                                <td class="px-4 py-2 border border-gray-300">{{ $no+1 }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $berobat->created_at }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $berobat->nama }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $berobat->umur }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $berobat->nama_ortu ?? '-' }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $berobat->alamat }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $berobat->keluhan }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $berobat->pemeriksaan_fisik }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $berobat->terapi }}</td>
                                <td class="px-4 py-2 border border-gray-300">{{ $berobat->keterangan }}</td>
                                <td class="px-4 py-2 border border-gray-300">
                                    <div class="flex">
                                        <a href="{{ route('berobat.edit', $berobat->id) }}" class="mx-2 bg-yellow-500 hover:bg-yellow-700 py-2 px-3 rounded-md text-white"> Edit</a>
                                    <form action="{{ route('berobat.delete', $berobat->id) }}" method="POST" class="delete-form">
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
            event.preventDefault(); // Mencegah form langsung dikirimkan

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
                    // Jika pengguna mengkonfirmasi, kirimkan form
                    form.submit();
                }
            });
        });
    });
        
    </script>
</x-app-layout>