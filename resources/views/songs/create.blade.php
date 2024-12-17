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

<body>
    <form method="POST" action="{{ route('songs.store') }}" class="max-w-md mx-auto mt-10">
        @csrf
        <div>
            <label for="title" class="block text-gray-700">Title</label>
            <input type="text" name="title" id="title" class="border rounded w-full p-2" required>
        </div>
        <div>
            <label for="artist" class="block text-gray-700">Artist</label>
            <input type="text" name="artist" id="artist" class="border rounded w-full p-2" required>
        </div>
        <div>
            <label for="album" class="block text-gray-700">Album</label>
            <input type="text" name="album" id="album" class="border rounded w-full p-2" required>
        </div>
        <div class="flex space-x-2">
            <div>
                <label for="minutes" class="block text-gray-700">Minutes</label>
                <input type="number" name="minutes" id="minutes" class="border rounded w-full p-2" required>
            </div>
            <div>
                <label for="seconds" class="block text-gray-700">Seconds</label>
                <input type="number" name="seconds" id="seconds" class="border rounded w-full p-2" required>
            </div>
        </div>
        <button type="submit" class="bg-blue-500 text-white rounded px-4 py-2 mt-4">Add Song</button>
    </form>
</body>

</html>