<?php

namespace App\Http\Controllers;

use App\Models\CalendarCategory;
use Illuminate\Http\Request;

class CalendarCategoryController extends Controller
{
    public function index()
    {
        return CalendarCategory::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'color' => ['required'],
        ]);

        return CalendarCategory::create($data);
    }

    public function show(CalendarCategory $calendarCategory)
    {
        return $calendarCategory;
    }

    public function update(Request $request, CalendarCategory $calendarCategory)
    {
        $data = $request->validate([
            'name' => ['required'],
            'color' => ['required'],
        ]);

        $calendarCategory->update($data);

        return $calendarCategory;
    }

    public function destroy(CalendarCategory $calendarCategory)
    {
        $calendarCategory->delete();

        return response()->json();
    }
}
