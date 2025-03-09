<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return Course::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'description' => ['nullable'],
            'color' => ['required'],
        ]);

        return Course::create($data);
    }

    public function show(Course $course)
    {
        return $course;
    }

    public function update(Request $request, Course $course)
    {
        $data = $request->validate([
            'name' => ['required'],
            'description' => ['nullable'],
            'color' => ['required'],
        ]);

        $course->update($data);

        return $course;
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return response()->json();
    }
}
