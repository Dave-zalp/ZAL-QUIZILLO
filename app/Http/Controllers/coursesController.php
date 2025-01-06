<?php

namespace App\Http\Controllers;

use App\Models\courses;
use Illuminate\Http\Request;
use Illuminate\View\View;


class coursesController extends Controller
{
    //
    public function preview() : view
    {
        $data  =  courses::select('name', 'number_of_questions')->inRandomOrder()->get();
        return view('dashboard.preview', compact('data'));
    }
}

