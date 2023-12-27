<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\AuthRequest;

class AuthController extends Controller
{
    public function login(AuthRequest $request)
    {
        return $request;
    }
}
