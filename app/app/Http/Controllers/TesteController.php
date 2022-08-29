<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2)
    {
        return view('site.teste')->with('xyz', $p1)->with('zzz', $p2);
    }
}
