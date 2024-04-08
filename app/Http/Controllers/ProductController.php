<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // GET: /products
    // HIển thị toàn bộ sản phẩm
    function index()
    {
        $products = DB::table('products')->get();
        return view('product.index', ['products' => $products]);
    }
}
