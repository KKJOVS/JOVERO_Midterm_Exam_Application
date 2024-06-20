<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // Array of products containing the product name, its description and then price.
        $products = [
            ['name' => 'Orange Candy', 'description' => 'Delicious orange-flavored candy', 'price' => 'P 69'],
            ['name' => 'Banana Candy', 'description' => 'Sweet banana-flavored candy', 'price' => 'P 55.10'],
            ['name' => 'Apple Candy', 'description' => 'Tangy apple-flavored candy', 'price' => 'P 63.1'],
            ['name' => 'Grapes Candy', 'description' => 'Juicy grapes-flavored candy', 'price' => 'P 71.22'],
            ['name' => 'Strawberry Candy', 'description' => 'Fresh strawberry-flavored candy', 'price' => 'P 61.55'],
            ['name' => 'Blueberry Candy', 'description' => 'Blueberry-flavored candy bursting with flavor', 'price' => 'P 75.55'],
            ['name' => 'Melon Candy', 'description' => 'Cool melon-flavored candy', 'price' => 'P 66.65'],
        ];

        // products

        return view('products.index', compact('products'));
    }
}
