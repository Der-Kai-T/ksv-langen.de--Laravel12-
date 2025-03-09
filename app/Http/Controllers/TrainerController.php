<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function index()
    {
        return Trainer::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'licence' => ['nullable'],
            'function' => ['nullable'],
            'working_time' => ['nullable'],
            'training_offers_id' => ['required', 'exists:training_offers'],
            'person_id' => ['required', 'exists:people'],
        ]);

        return Trainer::create($data);
    }

    public function show(Trainer $trainer)
    {
        return $trainer;
    }

    public function update(Request $request, Trainer $trainer)
    {
        $data = $request->validate([
            'licence' => ['nullable'],
            'function' => ['nullable'],
            'working_time' => ['nullable'],
            'training_offers_id' => ['required', 'exists:training_offers'],
            'person_id' => ['required', 'exists:people'],
        ]);

        $trainer->update($data);

        return $trainer;
    }

    public function destroy(Trainer $trainer)
    {
        $trainer->delete();

        return response()->json();
    }
}
