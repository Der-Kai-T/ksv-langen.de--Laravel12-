<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    public function index()
    {
        return Sponsor::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'url' => ['required'],
        ]);

        return Sponsor::create($data);
    }

    public function show(Sponsor $sponsor)
    {
        return $sponsor;
    }

    public function update(Request $request, Sponsor $sponsor)
    {
        $data = $request->validate([
            'name' => ['required'],
            'url' => ['required'],
        ]);

        $sponsor->update($data);

        return $sponsor;
    }

    public function destroy(Sponsor $sponsor)
    {
        $sponsor->delete();

        return response()->json();
    }
}
