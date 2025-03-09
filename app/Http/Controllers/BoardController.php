<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index()
    {
        return Board::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
        ]);

        return Board::create($data);
    }

    public function show(Board $board)
    {
        return $board;
    }

    public function update(Request $request, Board $board)
    {
        $data = $request->validate([
            'name' => ['required'],
        ]);

        $board->update($data);

        return $board;
    }

    public function destroy(Board $board)
    {
        $board->delete();

        return response()->json();
    }
}
