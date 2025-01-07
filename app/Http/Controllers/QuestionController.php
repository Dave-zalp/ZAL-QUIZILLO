<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    public function index(CourseRequest $request)
    {
        $selected_courses = $request->input('selected_courses', []);

        // Get all the IDs

        // Get the questions with the IDs and inrandomOrder with the number of questions in the course
    }
}
