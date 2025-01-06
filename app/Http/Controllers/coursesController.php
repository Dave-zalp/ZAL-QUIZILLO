<?php

namespace App\Http\Controllers;

use App\Models\courses;
use Illuminate\Http\Request;

class coursesController extends Controller
{
    //
    public function preview()
    {
        $data  =  courses::all();
        return view('dashboard.preview', compact('data'));
    }
}
