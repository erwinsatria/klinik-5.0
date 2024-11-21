<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Artikel') }}
        </h2>
    </x-slot>

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
                
    <div class="flex flex-col container items-center mx-auto bg-white rounded-2xl shadow-lg my-8">
        <form action="{{ route('artikel.store') }}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="flex flex-row items-center gap-x-4 my-5 mx-5">
                <div class="flex flex-col gap-y-2 text-center w-[700px]">
                    <label for="judul" class="font-semibold text-lg">Judul</label>
                    <input type="text" name="judul" class="rounded-2xl w-full" id="judul">
                </div>
                @error('judul')
                    <div class="text-red-800">{{ $message }}</div>
                @enderror
                <div class="pt-8">
                    <input type="file" name="image" id="">
                </div>
                @error('image')
                <div class="text-red-800">{{ $message }}</div>
                @enderror
                <div class="flex flex-col gap-y-2 text-center">
                    <label for="" class="font-semibold text-lg">Slug</label>
                    <input type="text" name="slug" id="slug" readonly class="rounded-full bg-gray-300">
                </div>
            </div>
            <div class="flex flex-col text-center gap-y-2 my-9">
                <label for="deskripsi" class="font-semibold text-lg">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" cols="30" rows="20">{{ old('deskripsi') }}</textarea>
            </div>
            @error('deskripsi')
            <div class="text-red-800">{{ $message }}</div>
            @enderror

            <div class="flex justify-end">
                <button type="submit" class="bg-green-800 hover:text-yellow-600 text-white py-3 px-5 rounded-full mb-5">Simpan</button>
            </div>
        </form>
    </div>

    <div class="bg-white container mx-auto py-8 px-5 items-center rounded-2xl shadow-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100 overflow-x-auto">
            <table class="table-auto min-w-full border-collapse border border-gray-300 ">
                <thead class="bg-gray-500 text-white text-center">
                    <tr>
                        <th class="px-4 py-2 border border-gray-300">No</th>
                        <th class="px-4 py-2 border border-gray-300">Image</th>
                        <th class="px-4 py-2 border border-gray-300">Judul</th>
                        <th class="px-4 py-2 border border-gray-300">Deskripsi</th>
                        <th class="px-4 py-2 border border-gray-300">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($artikels as $no => $artikel)
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">{{ $no+1 }}</td>
                        <td class="px-4 py-2 border border-gray-300 justify-center flex">
                            <img class="rounded-full" width="110px" height="110px" src="{{ asset('storage/' . $artikel->image) }}" alt="">
                        </td>
                        <td class="px-4 py-2 border border-gray-300 font-semibold">{{ $artikel->judul }}</td>
                        <td class="px-4 py-2 border border-gray-300">{!! strip_tags(Str::limit($artikel->deskripsi, 100, '...')) !!}</td>
                        <td class="px-4 py-2 border border-gray-300">
                            <div class="flex justify-center">
                            <form action="{{ route('artikel.delete', $artikel->id) }}" method="POST" class="delete-form">
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


    <script>
        ClassicEditor
            .create(document.querySelector('#deskripsi'))
            .catch(error => {
                console.error(error);
            });
    </script>
    
    <script>
        // Ambil elemen input title dan slug
        const titleInput = document.getElementById('judul');
        const slugInput = document.getElementById('slug');
    
        // Fungsi untuk mengubah title menjadi slug
        function generateSlug() {
            let title = titleInput.value;  // Ambil nilai dari input title
            let slug = title
                .toLowerCase()                   // Mengubah huruf menjadi kecil
                .replace(/ /g, '-')               // Mengubah spasi menjadi -
                .replace(/[^\w-]+/g, '');         // Menghapus karakter selain huruf dan angka
    
            // Set nilai slug di input slug
            slugInput.value = slug;
        }
    
        // Menambahkan event listener agar setiap kali input diubah, slug otomatis terupdate
        titleInput.addEventListener('input', generateSlug);
    </script>

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
