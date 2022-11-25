<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function showHomePage(Request $request)
    {
        $books = Book::all();
        $categories = Category::all();

        return view('index', compact('books', 'categories'));
    }

    public function showBookDetailPage(Request $request, Book $book)
    {
        $categories = Category::all();
        return view('book', compact('book', 'categories'));
    }
}
