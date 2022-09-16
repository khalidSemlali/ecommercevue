<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder()
            ->whereActive(true)
            ->take(16)
            ->get();

        return Inertia::render('Products/index', [
            'products' => $products
        ]);
    }

    public function store(Request $request)
    {
        $product = Product::where('id', $request->productId)->first();
        $count = (new CartRepository())->add($product);

        return response()->json([
            'count' => $count
        ]);
    }
}
