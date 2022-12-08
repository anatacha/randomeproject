<?php

namespace App\Http\Controllers;

use App\Models\randomnums;
use Illuminate\Http\Request;

class randomnumController extends Controller
{
    public function store(Request $request)
    {
        $random = new randomnums;
        $random->randomnum = $request->unum;        // $customers->createRandomnum($request->all());
        $random->save();
    }

}
