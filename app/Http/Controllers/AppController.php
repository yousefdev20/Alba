<?php

namespace Yousef\Alba\Http\Controllers;

use Yousef\Alba\Models\User;
use Yousef\Alba\System\Core\Controller;

class AppController extends Controller
{
    public function index()
    {
        User::query();

        view('test');
    }
}