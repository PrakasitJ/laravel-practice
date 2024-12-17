<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CS441 - Songs</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white [&>*]:font-helvetica">
    <header class="fixed top-0 right-0 w-svw h-svh flex flex-row z-50 justify-between p-4 [&>nav>a:hover]:font-bold">
        <a href={{route('about.index')}} class="flex flex-row items-start gap-2 translate-x-6">
            <h1 class="text-2xl font-bold">Prakasit</h1>
        </a>
        <nav class="flex flex-row gap-4">
            <a href={{route('about.index')}} class="p-2">Home</a>
            <a href={{route('about.index')}} class="p-2">About</a>
            <a href={{route('songs.index')}} class="p-2">Song</a>
        </nav>
    </header>

    <section class="flex flex-col w-svw h-svh  justify-center items-center overflow-hidden">
        <div class=" animate-fadeIn bg-white shadow-md rounded-md max-w-lg mx-auto overflow-hidden -translate-y-10 w-full h-fit bg-gradient-to-b from-red-800 from-[25%] via-[#121212] to-[#121212]">
            <div class="bg-pink-100 h-40 relative">
                <img src="{{url('/images/suiseitop.jpg')}}" class="w-full h-full object-cover rounded-md" />
                <h2 class="text-3xl font-semibold text-white drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)] absolute bottom-3 left-3">
                    {{ $title }}
                </h2>
            </div>
            <ul>
                <h1 class="text-white font-bold text-2xl pl-4 pt-4 drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]">Popular</h1>
                @foreach ($songs as $song)
                <li class="flex items-center pr-6 hover:bg-gray-50">
                    <div class="flex items-center py-4 px-6 w-full">
                        <span class="text-gray-200 text-lg font-medium mr-4">
                            {{ $loop->iteration }}.
                        </span>
                        <div class="flex-1">
                            <h3 class="text-lg font-medium text-white">
                                {{ $song['title'] }}
                            </h3>
                            <p class="text-gray-300 text-base">
                                {{ $song['artist'] }}
                            </p>
                        </div>
                        <span class="text-gray-300">{{ $song['duration']['minutes'] }}:{{ $song['duration']['seconds'] }}</span>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </section>
    <footer class="fixed bottom-0 right-0 w-svw h-10 flex flex-row justify-center items-center bg-black text-white">
        <p class="text-sm">© 2024 Prakasit 6510450585</p>
    </footer>
</body>

</html>