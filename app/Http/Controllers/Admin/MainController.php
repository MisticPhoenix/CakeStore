<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Products;
use App\Models\User;
use function view;

class MainController extends Controller
{
    public function index()
    {
        $productCount = Products::count();
        $userCount = User::count();
        $categoryCount = Category::count();

        return view('admin.main.index', compact('productCount',  'userCount', 'categoryCount',));
    }
}
