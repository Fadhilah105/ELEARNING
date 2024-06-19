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
    

    public function edit($id,)
    {
        // cari data student berdasarkan id
        $courses = Course::find($id); // Select * FOM students WHERE id = $id;

        $courses = Course::all();

        return view('admin.contents.course.edit', [
            'courses' => $courses,
        ]);
    }
}
