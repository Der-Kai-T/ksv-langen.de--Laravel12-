<?php

namespace App\Http\Controllers;

use App\Models\CalendarItem;
use Illuminate\Http\Request;

class CalendarItemController extends Controller
{
    public function index()
    {
        return CalendarItem::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'calendar_category_id' => ['required', 'exists:calendar_categories'],
            'title' => ['required'],
            'location_id' => ['required', 'exists:locations'],
            'start' => ['required'],
            'end' => ['required'],
            'full_day' => ['boolean'],
        ]);

        return CalendarItem::create($data);
    }

    public function show(CalendarItem $calendarItem)
    {
        return $calendarItem;
    }

    public function update(Request $request, CalendarItem $calendarItem)
    {
        $data = $request->validate([
            'calendar_category_id' => ['required', 'exists:calendar_categories'],
            'title' => ['required'],
            'location_id' => ['required', 'exists:locations'],
            'start' => ['required'],
            'end' => ['required'],
            'full_day' => ['boolean'],

        ]);

        $calendarItem->update($data);

        return $calendarItem;
    }

    public function destroy(CalendarItem $calendarItem)
    {
        $calendarItem->delete();

        return response()->json();
    }
}
