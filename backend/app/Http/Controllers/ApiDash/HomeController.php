<?php

namespace App\Http\Controllers\ApiDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $clientes = [
            [
                'id' => 1,
                'name' => 'José da Silva',
                'email' => 'jose@silva.com'
            ],
            [
                'id' => 2,
                'name' => 'Luisa Gomes',
                'email' => 'luisa@gomes.com'
            ]
        ];
        $products = [
            [
                'id' => 1,
                'name' => 'Computador',
                'value' => '20,00'
            ]
        ];
        return response()->json([
            'clients' => $clientes,
            'products' => $products,
            ]);
    }
}
