<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\User;
use function view;

class ShopController extends Controller
{
    public function index(Products $product)
    {
        return view('front.shop', compact('product'));
    }
}
