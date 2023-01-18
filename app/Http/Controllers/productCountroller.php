<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Product,Flight};
use App\Jobs\ProcessPodcast;

class productCountroller extends Controller
{
    public function index(Request $req)
    {
        dd(product::withoutGlobalScope('ancient')->get());
        return response()->json(['success'=>true,'data'=>Product::samsung()->get()->toJson()]);        dd(baseUrl());
        // product is getting created here.
        $podcast['product_id'] = 2;
        ProcessPodcast::dispatch($podcast);
        return response()->json(['success'=>true]);
    }
}
