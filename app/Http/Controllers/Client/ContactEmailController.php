<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Base\BaseWebController;
use App\Http\Controllers\Controller;
use App\Models\ContactEmail;
use Illuminate\Http\Request;

class ContactEmailController extends BaseWebController
{
    public function __construct()
    {
    }

    public function checkMail(Request $request){
        $data = $request->all();
        $email = $data['emailSign'];
        if($email != null || $email != ''){
            if (strpos($email, '@gmail.com') !== false) {
                ContactEmail::create([
                    'email'=>$email
                ]);
                return back()->with('success', 'Cảm ơn bạn đã đăng ký nhận tin!');
            } else {
                return back();
            }
        }
    }
}
