<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetail;

class MainController extends Controller
{
    public function index(){

        $categories = Category::whereRaw('up_id is null')->get();

        //    $product_slider = ProductDetail::with('product')->where('goster_slider', 1)->take(5)->get();



        $goster_manset = ProductDetail::with('product')
            ->where('goster_manset', 1)
            ->where('active',1)
            ->take(10)
            ->orderBy('id', 'DESC')
            ->get();

        $goster_ust_manset = ProductDetail::with('product')
            ->where('goster_ust_manset',1)
            ->where('active',1)
            ->take(5)
            ->orderBy('id', 'DESC')
            ->get();

        $goster_ust_manset2 = ProductDetail::with('product')
            ->where('goster_ust_manset2',1)
            ->where('active',1)
            ->where('active',1)
            ->take(5)
            ->orderBy('id', 'DESC')
            ->get();

        $goster_sag_manset = ProductDetail::with('product')
            ->where('goster_sag_manset',1)
            ->where('active',1)
            ->take(5)
            ->get();
        $goster_manset_alti = ProductDetail::with('product')
            ->where('goster_manset_alti',1)
            ->where('active',1)
            ->take(5)
            ->get();
        $goster_kutu_haber = ProductDetail::with('product')
            ->where('goster_kutu_haber',1)
            ->where('active',1)
            ->take(5)
            ->get();
        $goster_son_dakika = ProductDetail::with('product')
            ->where('goster_son_dakika',1)
            ->where('active',1)
            ->take(5)
            ->get();

        return view('frontend.index',compact('categories','goster_manset','goster_ust_manset',
            'goster_ust_manset2','goster_sag_manset','goster_manset_alti','goster_kutu_haber','goster_son_dakika'));
    }


    public function  showProduct($user_id){
        $products=Product::where('user_id',$user_id)->get();
    }
}
