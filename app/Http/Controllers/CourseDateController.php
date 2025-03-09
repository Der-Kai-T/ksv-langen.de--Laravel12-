<?php

namespace App\Http\Controllers;

use App\Models\CourseDate;
use Illuminate\Http\Request;

class CourseDateController extends Controller
{
    public function index()
    {
        return CourseDate::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'course_id' => ['required', 'exists:courses'],
            'location_id' => ['required', 'exists:locations'],
            'day' => ['required', 'integer'],
            'start' => ['required'],
            'end' => ['required'],
        ]);

        return CourseDate::create($data);
    }

    public function show(CourseDate $courseDate)
    {
        return $courseDate;
    }

    public function update(Request $request, CourseDate $courseDate)
    {
        $data = $request->validate([
            'course_id' => ['required', 'exists:courses'],
            'location_id' => ['required', 'exists:locations'],
            'day' => ['required', 'integer'],
            'start' => ['required'],
            'end' => ['required'],
        ]);

        $courseDate->update($data);

        return $courseDate;
    }

    public function destroy(CourseDate $courseDate)
    {
        $courseDate->delete();

        return response()->json();
    }
}
