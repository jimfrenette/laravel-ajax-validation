<?php

namespace App\Http\Controllers\Validation;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function user(Request $request)
    {
        $this->validate($request, (new User)->rules());
    }
}