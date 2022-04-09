<?php

namespace App\Http\Controllers\PhperKaigi2022;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SelectOnlyTheColumnsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        DB::enableQueryLog();

        $users = User::query()->find(1); //Use Eloquent
        $users = DB::table('users')->where('id', '=', 1)->first(); //Use Query Builder


        $users = User::query()->select(['id', 'name'])->find(1); //Use Eloquent
        $users = DB::table('users')->where('id', '=', 1)->select(['id', 'name'])->first(); //Use Query Builder

        dd(DB::getQueryLog());
    }
}
