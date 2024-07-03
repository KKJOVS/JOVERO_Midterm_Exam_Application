<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show() {
        return view('candy', [
            'products' => [
                [
                    'name' => 'Orange Candy',
                    'description' => 'A delicious and tangy orange flavored candy.',
                    'price' => '₱50'
                ],
                [
                    'name' => 'Apple Candy',
                    'description' => 'A sweet and crispy apple flavored candy.',
                    'price' => '₱45'
                ],
                [
                    'name' => 'Banana Candy',
                    'description' => 'A soft and chewy banana flavored candy.',
                    'price' => '₱40'
                ],
                [
                    'name' => 'Grapes Candy',
                    'description' => 'A juicy and flavorful grapes flavored candy.',
                    'price' => '₱55'
                ]
            ]
        ]);
    }
}
