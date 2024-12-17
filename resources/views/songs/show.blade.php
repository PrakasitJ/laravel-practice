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
    <div class="w-svw h-svh flex flex-col justify-center items-center gap-5">
        <nav class="flex self-start">
            <a class="ml-2 bg-blue-500 px-4 py-2 text-center rounded-md" href="{{ route('about.index') }}">About</a>
            <a class="ml-2 bg-blue-500 px-4 py-2 text-center rounded-md" href="{{ route('songs.index') }}">Songs</a>
            {{-- <a class="ml-2 bg-blue-500 px-4 py-2 text-center rounded-md" href="{{ route('songs.create') }}">Add Songs</a>--}}
        </nav>
        <div class="w-60% h-fit flex flex-col items-center gap-5 p-4 translate-y-[-3%]">
            @if($song != null && $song->title == "Starry Jet")
            <img class="w-[45rem] h-[45rem] object-cover rounded-md" src="https://i.scdn.co/image/ab6761610000e5ebde6b03e1ce3f4d3427e8cdf9" />
            @else
            <img class="w-[45rem] h-[45rem] object-cover rounded-md" src="https://community.thriveglobal.com/wp-content/uploads/2019/01/GettyImages-463874181.jpg" />
            @endif
            <div class="flex flex-col w-full h-fit items-center">
                <div class="flex flex-row justify-center items-center w-full h-fit gap-2">
                    <progress class="w-[75%] text-center rounded-xl" id="file" value="32" max="100"> 32% </progress>
                    @if($song != null)
                    <label for="file">{{$song->minutes}}:{{$song->seconds}} Minutes</label>
                    @else
                    <label for="file">0:00 Minutes</label>
                    @endif
                </div>
                @if($song != null)
                <h1 class="font-sans">{{$song->title}} <span>[{{$song->album}}]</span></h1>
                <h1 class="font-bold font-sans">{{$song->artist}}</h1>
                @else
                <h1 class="font-sans">No Song <span>[No Album]</span></h1>
                <h1 class="font-bold font-sans">No Artist</h1>
                @endif
            </div>
        </div>
    </div>
    </div>
</body>

</html>