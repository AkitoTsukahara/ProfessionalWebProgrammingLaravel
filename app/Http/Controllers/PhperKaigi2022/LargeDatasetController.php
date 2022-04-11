<?php

namespace App\Http\Controllers\PhperKaigi2022;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LargeDatasetController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //DB::enableQueryLog();
        // 100,000 records
        // $start = microtime(true);
        // $books = Book::all(); //Use Eloquent
        // foreach ($books as $book){
        //     // do nothing
        // }
        // dump(microtime(true) - $start);// 0.9sec
        // dump(memory_get_usage() / (1024 * 1024));// 185MB
        // dump(memory_get_peak_usage() / (1024 * 1024));// 192MB

        //dd(DB::getQueryLog());

        // $start = microtime(true);
        // $books = DB::table('books')->get(); //Use Query Builder
        // foreach ($books as $book){
        //     // do nothing
        // }
        // dump(microtime(true) - $start);// 0.26sec
        // dump(memory_get_usage() / (1024 * 1024));// 126MB
        // dump(memory_get_peak_usage() / (1024 * 1024));// 134MB

        // //Use Eloquent
        // $books = DB::table('books')->get(); //Use Query Builder
        // $books = Book::chunkById(100, function($books){
        //     return;
        //     foreach ($books as $book){}
        // });

        //DB::enableQueryLog();
        // $start = microtime(true);
        // $books = DB::table('books')->orderBy('id')->chunk(1000, function ($books){
        //     foreach ($books as $book){
        //         // do nothing
        //     }
        // });
        // dump(microtime(true) - $start);// 14.19sec
        // dump(memory_get_usage() / (1024 * 1024));// 1.2MB
        // dump(memory_get_peak_usage() / (1024 * 1024));// 1.4MB
        //dd(DB::getQueryLog());

        DB::enableQueryLog();
        $start = microtime(true);
        foreach (DB::table('books')->cursor() as $books) {
            // do nothing
        }
        dump(microtime(true) - $start);// 0.22sec
        dump(memory_get_usage() / (1024 * 1024));// 1.2MB
        dump(memory_get_peak_usage() / (1024 * 1024));// 9.2MB
        dd(DB::getQueryLog());
    }
}
