<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index() {
        $products = json_decode(file_get_contents('products.json'));

        return view('index', ['products' => $products]);
    }
}
