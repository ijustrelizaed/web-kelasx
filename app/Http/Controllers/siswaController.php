<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\siswa_search;

class siswaController extends Controller
{
    public function index() : View
    {   
        $data = siswa_search::all();
        return view('siswa.index', compact('data'));
    }

    public function search(Request $request) : View 
    {
        $keyword = $request->input('keyword');
        $data = siswa_search::where('nama', 'like', '%' . $keyword . '%')->get();
        return view('siswa.index', compact('data'));
    }
}
