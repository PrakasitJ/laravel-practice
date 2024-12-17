<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CS442</title>
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

    <section class="flex flex-col w-svw h-svh justify-center items-center gap-2 relative lg:animate-moveLeft">
        <h1 class="absolute text-4xl lg:text-6xl font-bold text-black transition-all animate-moveTop">
            <span class="animate-popOut1 inline-block">A</span>
            <span class="animate-popOut2 inline-block">b</span>
            <span class="animate-popOut3 inline-block">o</span>
            <span class="animate-popOut4 inline-block">u</span>
            <span class="animate-popOut5 inline-block">t</span>
            <span class="animate-popOut5 inline-block">&nbsp;</span>
            <span class="opacity-0 animate-slideIn inline-block">M</span>
            <span class="opacity-0 animate-slideIn inline-block">e</span>
        </h1>
        <img class="animate-scaleIn opacity-0 w-60 h-60 lg:h-[500px] lg:w-[500px] object-cover rounded-lg" src={{url('/images/myimage.jpg')}} />
        <p class="absolute animate-popOutSpecial lg:animate-moveRight70 xl:animate-moveRight100 opacity-0 top-[70%] left-[25%] sm:left-[33%] right-[50%] md:left-[30%] lg:top-[40%] lg:left-[50%] lg:right-[50%] w-[500px] h-fit font-semi-bold xl:text-2xl lg:text-lg md:text-lg sm:text-md text-sm">I am a student at the Kasetsart University.</p>
        <p class="absolute animate-popOutSpecial lg:animate-moveRight70 xl:animate-moveRight100 opacity-0 top-[80%] left-[22%] sm:left-[30%] right-[50%] md:left-[27%] lg:top-[45%] lg:left-[48%] lg:right-[50%] w-[510px] h-fit font-semi-bold xl:text-2xl lg:text-lg md:text-lg sm:text-md text-sm">Currently Lovely Dovy With WebTech! 💕💕💕</p>
    </section>

    <footer class="fixed bottom-0 right-0 w-svw h-10 flex flex-row justify-center items-center bg-black text-white">
        <p class="text-sm">© 2024 Prakasit 6510450585</p>
    </footer>
</body>

</html>