<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasjidProfile;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $masjidProfile = MasjidProfile::first();
        return view('home.index', compact('masjidProfile'));
    }
}
