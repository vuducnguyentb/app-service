<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Base\BaseWebController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComboClientController extends BaseWebController
{


    public function __construct(
    )
    {

    }

    public function index(Request $request){
        return view('client.combo.index');
    }

    public function getCategory($slug){
        return view('client.combo.category')
            ;
    }

    public function getDetail($slug){
        return view('client.combo.detail');
    }
}
