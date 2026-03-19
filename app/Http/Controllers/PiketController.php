<?php

namespace App\Http\Controllers;

use GuzzleHttp\Promise\Create;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\photo_piket;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class PiketController extends Controller
{
    public function index() 
    {   
        $photo = photo_piket::where('expired_at', '<=', Carbon::now()->addDay());

        $photo_expired = photo_piket::where('expired_at', '>', Carbon::now()->addDay());

        if($photo_expired == true) {
            Storage::disk('public')->delete($photo_expired->path());
        }
        return view('piket.index', compact('photo'));
    }

    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'photo' => 'required|mimes:png,jpg|max:2048'
        ]);
        
        $path = $request->file('photo');
        $path->storeAs('public/photos', $path->hashName());

        photo_piket::Create([
            'photo' => $path->hashName(),
            'expired_at' => Carbon::now()->addDay(),
        ]);

        return redirect()->route('piket.index')->with('success', 'Data berhasil disimpan.');
    }
}
