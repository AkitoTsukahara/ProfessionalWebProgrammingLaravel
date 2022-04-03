<?php

namespace App\Http\Controllers\PhperKaigi2022;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MergeSimilarQueriesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        DB::enableQueryLog();

        $lend_books = DB::table('books')->where('status', '=', 'lend')->get();
        $reserved_books = DB::table('books')->where('status', '=', 'reserved')->get();
        $lost_books = DB::table('books')->where('status', '=', 'lost')->get();

        $books = DB::table('books')->whereIn('status', ['lend', 'reserved', 'lost'])->get();
        $lend_books = $books->where('status', '=', 'lend');
        $reserved_books = $books->where('status', '=', 'reserved');
        $lost_books = $books->where('status', '=', 'lost');

        dump(DB::getQueryLog());

        dd($lend_books);
    }
}
