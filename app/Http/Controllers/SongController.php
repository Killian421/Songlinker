<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    /**
     * Display a listing of the songs.
     */
    public function index()
    {
        $songs = Song::all();
        return view('songs.index', compact('songs'));
    }

    /**
     * Show the form for creating a new song.
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created song in the database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'singer' => 'required',
            'link' => 'required|url',
        ]);

        Song::create([
            'title' => $request->title,
            'singer' => $request->singer,
            'link' => $request->link,
            'played' => false, // Default value for played is false
        ]);

        return redirect()->route('songs.index')->with('success', 'Song added successfully!');
    }

    /**
     * Show the form for editing the specified song.
     */
    public function edit(Song $song)
    {
        return view('songs.edit', compact('song'));
    }

    /**
     * Update the specified song in the database.
     */
    public function update(Request $request, Song $song)
    {
        $request->validate([
            'title' => 'required',
            'singer' => 'required',
            'link' => 'required|url',
        ]);

        $song->update([
            'title' => $request->title,
            'singer' => $request->singer,
            'link' => $request->link,
        ]);

        return redirect()->route('songs.index')->with('success', 'Song updated successfully!');
    }

    /**
     * Remove the specified song from the database.
     */
    public function destroy(Song $song)
    {
        // Deletes the song from the database
        $song->delete();

        // Redirect back to the song list with a success message
        return redirect()->route('songs.index')->with('success', 'Song deleted successfully!');
    }

    /**
     * Mark selected songs as played.
     */
    public function markAsPlayed(Request $request)
    {
        if ($request->has('ids')) {
            Song::whereIn('id', $request->ids)->update(['played' => true]);
        }

        return redirect()->route('songs.index')->with('success', 'Songs marked as played!');
    }
}
