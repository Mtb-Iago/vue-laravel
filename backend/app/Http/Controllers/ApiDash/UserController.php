<?php

namespace App\Http\Controllers\ApiDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Users;

class UserController extends Controller
{
    public function listAll()
    {
        $usuarios = Users::all();
        if (!$usuarios) {
            return response()->json([
                'clients' => $usuarios,
            ], 200, ["'Access-Control-Allow-Origin', '*'"]);
        } else {
            return response()->json(['message'=>'Users not found!', "status"=>404], 404);
        }
    }
}
