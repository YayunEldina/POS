<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    public function show(): Response
    {
        $category = str_replace('-',' ', basename(request()->path()));
        return response()->view(
            'product.products',
                [
                    'datas' => [
                        'food-beverage' => [
                            'Sate', 'Salad', 'Seblak', 'Burger'
                        ],
                        'beauty-health' => [
                            'Eyeliner', 'Lipstik', 'Blush On', 'Foundation'
                        ],
                        'home-care' => [
                            'Sapu', 'Stella', 'Kanebo'
                        ],
                        'baby-kid' => [
                            'Nutrilon Royal', 'Sun Milna', 'MamyPoko', 'CussonsBaby'
                        ]  
                    ],
                    'category' => $category,
                    'categoryUrl' => basename(request()->path())
                ]
        );
    }
}
