<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index(): View
    {
        return view('show.songs', []);
    }
}
