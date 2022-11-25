<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function showPublisherPage(Request $request) {
        $publishers = Publisher::all();
        $categories = Category::all();
        return view('publishers', compact('publishers', 'categories'));
    }

    public function showPublisherDetail(Request $request, Publisher $publisher) {
        $categories = Category::all();
        return view('publisher', compact('categories', 'publisher'));
    }
}
