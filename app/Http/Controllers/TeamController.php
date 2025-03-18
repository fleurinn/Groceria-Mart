<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Menampilkan semua anggota tim.
     */
    public function index()
    {
        $teams = Team::latest()->get(); // Mengambil semua anggota tim terbaru
        return view('teams.index', compact('teams'));
    }

    /**
     * Menampilkan form untuk menambah anggota tim.
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Menyimpan anggota tim baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'instagram' => 'nullable|url',
            'twitter' => 'nullable|url',
            'facebook' => 'nullable|url',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $team = new Team();
        $team->name = $request->name;
        $team->position = $request->position;
        $team->instagram = $request->instagram;
        $team->twitter = $request->twitter;
        $team->facebook = $request->facebook;

        // Upload photo jika ada
        if ($request->hasFile('photo')) {
            $team->photo = $request->file('photo')->store('teams');
        }

        $team->save();

        return redirect()->route('teams.index')->with('success', 'Team member added successfully.');
    }

    /**
     * Menampilkan form edit anggota tim.
     */
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('teams.edit', compact('team'));
    }

    /**
     * Memperbarui data anggota tim.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'instagram' => 'nullable|url',
            'twitter' => 'nullable|url',
            'facebook' => 'nullable|url',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $team = Team::findOrFail($id);
        $team->name = $request->name;
        $team->position = $request->position;
        $team->instagram = $request->instagram;
        $team->twitter = $request->twitter;
        $team->facebook = $request->facebook;

        // Ganti photo jika ada file baru
        if ($request->hasFile('photo')) {
            if ($team->photo) Storage::delete($team->photo);
            $team->photo = $request->file('photo')->store('teams');
        }

        $team->save();

        return redirect()->route('teams.index')->with('success', 'Team member updated successfully.');
    }

    /**
     * Menghapus anggota tim.
     */
    public function destroy($id)
    {
        $team = Team::findOrFail($id);

        // Hapus foto jika ada
        if ($team->photo) {
            Storage::delete($team->photo);
        }

        $team->delete();

        return redirect()->route('teams.index')->with('success', 'Team member deleted successfully.');
    }
}
