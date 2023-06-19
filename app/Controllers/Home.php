<?php

namespace App\Controllers;
// use App\Models\UserModel;

class Home extends BaseController
{

    public function index()
    {
        // $userModel = new UserModel();
        $data =
            [
                'link' => "dashboard",
            ];
        return view('dashboard', $data);
    }
}
