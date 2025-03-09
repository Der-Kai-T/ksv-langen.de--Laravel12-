<?php

namespace App\Http\Controllers;

use App\Models\BoardMember;
use Illuminate\Http\Request;

class BoardMemberController extends Controller
{
    public function index()
    {
        return BoardMember::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'function' => ['nullable'],
            'board_id' => ['required', 'exists:boards'],
            'person_id' => ['required', 'exists:people'],
        ]);

        return BoardMember::create($data);
    }

    public function show(BoardMember $boardMember)
    {
        return $boardMember;
    }

    public function update(Request $request, BoardMember $boardMember)
    {
        $data = $request->validate([
            'function' => ['nullable'],
            'board_id' => ['required', 'exists:boards'],
            'person_id' => ['required', 'exists:people'],
        ]);

        $boardMember->update($data);

        return $boardMember;
    }

    public function destroy(BoardMember $boardMember)
    {
        $boardMember->delete();

        return response()->json();
    }
}
