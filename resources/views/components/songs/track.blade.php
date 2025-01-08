<li class="flex items-center pr-6 hover:bg-gray-50">
    <div class="flex items-center py-4 px-6 w-full">
        <span class="text-gray-200 text-lg font-medium mr-4">
            {{$slot}}
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