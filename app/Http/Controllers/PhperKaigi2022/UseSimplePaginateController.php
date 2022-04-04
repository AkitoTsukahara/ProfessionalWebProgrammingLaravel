<?php

namespace App\Http\Controllers\PhperKaigi2022;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class UseSimplePaginateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $books = Book::paginate(200); // Generates pagination links for all the pages
        $books = Book::simplePaginate(200); // Generates only next and previous pagination links
    }
}
