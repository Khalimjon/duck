<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id = null)
    {
        return 'inovoker function' .  $id;
    }
}
