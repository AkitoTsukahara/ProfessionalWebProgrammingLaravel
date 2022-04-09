<?php

namespace App\Http\Controllers\PhperKaigi2022;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UseSimplePaginateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function __invoke(Request $request)
    {

        $booksPaginate = Book::query()->paginate(1000); // Generates pagination links for all the pages

        $booksSimplePaginate = Book::query()->simplePaginate(1000); // Generates only next and previous pagination links

        return view(
            'books.index',
            [
                'booksPaginate' => $booksPaginate,
                'booksSimplePaginate' => $booksSimplePaginate
            ]
        );
    }
}
