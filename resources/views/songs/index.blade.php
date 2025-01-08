<x-layouts.main>
    <section class="flex flex-col w-svw h-svh  justify-center items-center overflow-hidden">
        <div
            class=" animate-fadeIn bg-white shadow-md rounded-md max-w-lg mx-auto overflow-hidden -translate-y-10 w-full h-fit bg-gradient-to-b from-red-800 from-[25%] via-[#121212] to-[#121212]">
            <div class="bg-pink-100 h-40 relative">
                <img src="{{url('/images/suiseitop.jpg')}}" class="w-full h-full object-cover rounded-md" />
                <h2
                    class="text-3xl font-semibold text-white drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)] absolute bottom-3 left-3">
                    {{ $title }}
                </h2>
            </div>
            <ul>
                <h1 class="text-white font-bold text-2xl pl-4 pt-4 drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]">Popular
                </h1>
                @foreach ($songs as $song)
                    <x-songs.track :song="$song">{{$loop->iteration}}</x-songs.track>
                @endforeach
            </ul>
        </div>
    </section>
</x-layouts.main>