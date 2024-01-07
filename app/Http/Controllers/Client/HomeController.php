<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Base\BaseWebController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends BaseWebController
{
    public function index(){
        return view('client.home');
    }
}
