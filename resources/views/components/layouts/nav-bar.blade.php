<header class="fixed top-0 right-0 w-svw h-svh flex flex-row z-50 justify-between p-4 [&>nav>a:hover]:font-bold">
    <a href={{route('about.index')}} class="flex flex-row items-start gap-2 translate-x-2">
        <h1 class="text-2xl font-bold">Prakasit</h1>
    </a>
    <nav class="flex flex-row gap-4">
        <a href={{route('about.index')}} class="p-2">Home</a>
        <a href={{route('about.index')}} class="p-2">About</a>
        <a href={{route('songs.index')}} class="p-2">Song</a>
    </nav>
</header>