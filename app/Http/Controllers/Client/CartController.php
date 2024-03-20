<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Base\BaseWebController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends BaseWebController
{
    public function addToCart(Request $request)
    {
        $data = $request->all();
        dd($data);
        return response()->json(['success'=>'Data is successfully added']);
    }
}
