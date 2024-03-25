<?php

namespace Yousef\Micro\Http\Controllers;

use Yousef\Micro\Models\User;
use Yousef\Micro\System\Core\Controller;

class AppController extends Controller
{
    public function index()
    {
        User::query();

        view('test');
    }
}