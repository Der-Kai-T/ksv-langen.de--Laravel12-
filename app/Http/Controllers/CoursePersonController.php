<?php

namespace App\Http\Controllers;

use App\Models\CoursePerson;
use Illuminate\Http\Request;

class CoursePersonController extends Controller
{
    public function index()
    {
        return CoursePerson::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'function' => ['nullable'],
            'course_id' => ['required', 'exists:courses'],
            'person_id' => ['required', 'exists:people'],
        ]);

        return CoursePerson::create($data);
    }

    public function show(CoursePerson $coursePerson)
    {
        return $coursePerson;
    }

    public function update(Request $request, CoursePerson $coursePerson)
    {
        $data = $request->validate([
            'function' => ['nullable'],
            'course_id' => ['required', 'exists:courses'],
            'person_id' => ['required', 'exists:people'],
        ]);

        $coursePerson->update($data);

        return $coursePerson;
    }

    public function destroy(CoursePerson $coursePerson)
    {
        $coursePerson->delete();

        return response()->json();
    }
}
