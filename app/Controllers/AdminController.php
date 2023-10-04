<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{

    public function login()
    {
        return view ('adminlog');
    }

    public function index()
    {
    }
}
