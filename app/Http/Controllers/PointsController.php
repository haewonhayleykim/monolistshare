<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Points;

class PointsController extends Controller
{
    public function store(Request $request, $id)
    {
        \Auth::user()->points($id);
        return redirect()->back();
    }
    
    
    
}
