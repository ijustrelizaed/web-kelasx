<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa_search;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {   
        $siswa = siswa_search::get();
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'nama' => 'required|string|min:3',
            'jabatan' => 'required|string|min:5',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $image = $request->file('image');
        $image->storeAs('public/image', $image->hashName());
        
        siswa_search::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'image' => $image->hashName(),
        ]);

        return redirect()->route('siswa.index')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id) : View
    {   
        $siswa = siswa_search::findOrFail($id);
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) : View
    {   
        $siswa = siswa_search::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) : RedirectResponse
    {   
        $siswa = siswa_search::findOrFail($id);

        $request->validate([   
            'nama' => 'required|string',
            'jabatan' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);


        if ($request->hasFile('image')) {
            if($siswa->image) {
                Storage::delete('public/image/' . $siswa->image);
            }

            $image = $request->file('image');
            $image->storeAs('public/image', $image->hashName());

            $siswa->update([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'image' => $image->hashName(),
            ]);
        } else {
            $siswa->update([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
            ]);
        }

        return redirect()->route('siswa.index')->with('success', 'Data berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) : RedirectResponse
    {
        $siswa = siswa_search::findOrFail($id);
        $siswa->delete();
        
        return redirect()->route('siswa.index')->with('success', 'Data berhasil diupdate.');
    }

    public function search(Request $request) : View
    {
        $keyword = $request->input('keyword');
        $siswa = siswa_search::where('nama', 'like', '%' . $keyword . '%')->get();
        return view('siswa.index', compact('siswa'));
    }
}
