<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function store($micropostid)
    {
        \Auth::user()->favorite($micropostid);
        
        return back();
    }
    
    public function destroy($micropostid)
    {
        \Auth::user()->unfavorite($micropostid);
        
        return back();
    }
}
