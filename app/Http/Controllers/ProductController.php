<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductBrand;
use App\Models\ProductType;

class ProductController extends Controller
{
    public function index()
    {
        $accessories = Product::join('product_type as t', 'product.type', '=', 't.id')
        ->where('t.name', 'Accessories')
        ->select('product.*')
        ->limit(8)
        ->get();
        $populares = Product::orderBy('rating', 'desc')->limit(8)->get();
        return view('home', compact('accessories','populares'));
    }

    public function shop()
    {
        $products = Product::all();
        $brands = ProductBrand::all();
        return view('shop', compact('products', 'brands'));
    }

    public function product_by_categories($id)
    {
        $brands = ProductBrand::all();
        $products = Product::join('product_type as t', 'product.type', '=', 't.id')
            ->where('t.name', $id)
            ->select('product.*')
            ->get();
            return view('shop', compact('products', 'brands'));
    }

    public function product_by_brand($id)
    {
        $brands = ProductBrand::all();
        $products = Product::join('product_brand as b', 'product.brand', '=', 'b.id')
            ->where('b.name', $id)
            ->select('product.*')
            ->get();
            return view('shop', compact('products', 'brands'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
            return view('product', compact('product'));
    }

    public function onSale()
    {
        $brands = ProductBrand::all();
        $products = Product::where('sale', true)->get();
        return view('shop', compact('products', 'brands'));
    }
}
