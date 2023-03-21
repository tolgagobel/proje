<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\User;

class ProductController extends Controller
{
    public function index($slug_productname){
        $product = Product::where('slug', $slug_productname)->firstorFail();
        $categories = $product->categories()->distinct()->get();
        $categorys = Category::whereRaw('up_id is null')->get();

        return view('frontend.guncel', compact('product','categories','categorys'));
    }

    public function search(){
        $aranan = request()->input('aranan');
        $products = Product::where('title', 'like', "%$aranan%")
            ->orWhere('description', 'like', "%$aranan%")
            ->paginate(10);

        request()->flash();

        return view('arama', compact('products'));
    }
}
