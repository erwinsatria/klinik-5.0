<x-guest-layout>
    
    <section class="artikel mt-10">
        <div class="container mx-auto py-10" >
            <div class="flex flex-col gap-y-5">

                @foreach ($artikels as $artikel)
                    <div class="bg-white rounded-2xl py-3 px-8 shadow-lg">
                        <div class="text-center font-semibold mb-5 text-lg hover:text-yellow-500">
                            <a href="{{ route('show.artikel',$artikel->slug) }}">{{ $artikel->judul }}</a>
                            <hr class="mt-2">
                        </div>
                        <div class="flex flex-row gap-x-5">
                            <img class="rounded-2xl max-w-[400px] max-h-[300px]" src="{{ asset('storage/' . $artikel->image) }}" alt="">
                            <span>{!! strip_tags(Str::limit($artikel->deskripsi, 800, '.......',)) !!}</span>
                        </div>
                        <div class="flex justify-end mt-3">
                            <p>{{ $artikel->created_at->diffForHumans() }}</p>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-guest-layout>