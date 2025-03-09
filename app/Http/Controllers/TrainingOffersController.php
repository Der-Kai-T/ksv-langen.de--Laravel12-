<?php

namespace App\Http\Controllers;

use App\Models\TrainingOffers;
use Illuminate\Http\Request;

class TrainingOffersController extends Controller
{
    public function index()
    {
        return TrainingOffers::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'description' => ['nullable'],
        ]);

        return TrainingOffers::create($data);
    }

    public function show(TrainingOffers $trainingOffers)
    {
        return $trainingOffers;
    }

    public function update(Request $request, TrainingOffers $trainingOffers)
    {
        $data = $request->validate([
            'name' => ['required'],
            'description' => ['nullable'],
        ]);

        $trainingOffers->update($data);

        return $trainingOffers;
    }

    public function destroy(TrainingOffers $trainingOffers)
    {
        $trainingOffers->delete();

        return response()->json();
    }
}
