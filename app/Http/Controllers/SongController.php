<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SongController extends Controller
{
    public function index()
    {
        //        $songs = Song::all();
        $songs = collect([
            [
                'id' => 1,
                'title' => "Starry Jet",
                'artist' => 'Hoshimachi Suisei',
                'album' => 'Still Still Stella',
                'duration' => [
                    'minutes' => 4,
                    'seconds' => 10
                ]
            ],
            [
                'id' => 2,
                'title' => 'River',
                'artist' => 'Miley Cyrus',
                'album' => 'Endless Summer Vocation',
                'duration' => [
                    'minutes' => 3,
                    'seconds' => 20
                ]
            ],
            [
                'id' => 3,
                'title' => 'Song for You',
                'artist' => 'Lee Isaacs',
                'album' => 'After the Apocalypses',
                'duration' => [
                    'minutes' => 2,
                    'seconds' => 48
                ]
            ],
            [
                'id' => 4,
                'title' => "คำถามซึ่งไร้คนตอบ",
                'artist' => 'Getsunova',
                'album' => 'The First Album',
                'duration' => [
                    'minutes' => 4,
                    'seconds' => 29
                ]
            ]
        ]);

        return view('songs.index', [
            'title' => 'Song Playlist',
            'songs' => $songs
        ]);
    }

    //    public function show($id) {
    //        $song = DB::table('songs')->where('id', $id)->first();
    //        $song = Song::all()->where('id', $id)->first();
    //        return view('songs.show', [
    //            'song' => $song
    //        ]);
    //    }
    //
    //    public function create() {
    //        return view('songs.create');
    //    }
    //
    //    public function store(Request $request) {
    //        $validated = $request->validate([
    //            'title' => 'required|string|max:255',
    //            'artist' => 'required|string|max:255',
    //            'album' => 'required|string|max:255',
    //            'minutes' => 'required|integer|min:0',
    //            'seconds' => 'required|integer|min:0|max:59',
    //        ]);
    //
    //        Song::create($validated);
    //
    //        return redirect()->route('songs.index')->with('success', 'Song added successfully!');
    //    }
    //
    //    public function remove(Request $request){
    //        $validated = $request->validate([
    //            'id' => 'required|integer|exists:songs,id',
    //        ]);
    //        Song::destroy($validated['id']);
    //        return redirect()->route('songs.index')->with('success', 'Song removed successfully!');
    //    }
}
