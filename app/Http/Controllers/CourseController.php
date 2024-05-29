<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //menampilkan data course dari database
    public function index(){
        $course = course::all();
        return view('admin.contents.course.index', [
            'course'=> $course
        ]);
    }
}
