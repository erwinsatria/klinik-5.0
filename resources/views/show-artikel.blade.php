<x-guest-layout>
    
    <section>
        <div class="container mx-auto mb-10" >
            <div class="flex flex-col gap-y-5">

                @foreach ($artikel as $artikel)
                    <div class="bg-white rounded-2xl py-3 px-8 shadow-lg">
                        <div class="text-center font-semibold mb-5 text-lg">
                            <a>{{ $artikel->judul }}</a>
                            <hr class="mt-2">
                        </div>
                        <div class="flex flex-row gap-x-5">
                            <img class="rounded-2xl max-w-[400px] max-h-[300px]" src="{{ asset('storage/' . $artikel->image) }}" alt="">
                            <div class="flex text-justify leading-7">
                                <div>{!! $artikel->deskripsi !!}</div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-guest-layout>