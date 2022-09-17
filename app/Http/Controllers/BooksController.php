<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function main() {
        return view('app.modules.books.main');
    }
}
