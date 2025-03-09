<?php

namespace App\Http\Controllers;

use App\Models\NewsImage;
use Illuminate\Http\Request;

class NewsImageController extends Controller
{
    public function index()
    {
        return NewsImage::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'news_id' => ['required', 'exists:news'],
            'is_header' => ['boolean'],
            'alt' => ['required'],
            'cop' => ['nullable'],
        ]);

        return NewsImage::create($data);
    }

    public function show(NewsImage $newsImage)
    {
        return $newsImage;
    }

    public function update(Request $request, NewsImage $newsImage)
    {
        $data = $request->validate([
            'news_id' => ['required', 'exists:news'],
            'is_header' => ['boolean'],
            'alt' => ['required'],
            'cop' => ['nullable'],
        ]);

        $newsImage->update($data);

        return $newsImage;
    }

    public function destroy(NewsImage $newsImage)
    {
        $newsImage->delete();

        return response()->json();
    }
}
