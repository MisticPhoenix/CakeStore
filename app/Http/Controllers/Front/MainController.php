<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Support\Facades\Storage;
use function view;

class MainController extends Controller
{
    public function index($categoryId = 0)
    {
        $products = Products::all();
        $categories = Category::all();

        if($categoryId){
            $products = $products->where('category_id', $categoryId);
        }

        return view('front.index', compact('products', 'categories', 'categoryId'));
    }
}
