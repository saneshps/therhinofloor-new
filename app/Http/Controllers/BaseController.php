<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use DB;
use App;
use App\Models\Category;
use App\Models\Product;

class BaseController extends Controller
{
    //
    public function __construct()
    {
    //    $total_categories
    //         = Category::where('parent_id', '=', 0)
    //         ->get();
        $locationShortCode = 'sa'; // get dynamically if needed

        $total_categories = Category::with([
            'products' => function ($query) use ($locationShortCode) {
                $query->whereHas('location', function ($q) use ($locationShortCode) {
                    $q->where('short_code', $locationShortCode);
                });
            },
            'childs'
        ])->get();
       
        // $total_products = Product::orderBy('id', 'desc')->take(5)->get();

        $total_products = Product::with('location')
        ->whereHas('location', function ($q) {
            $q->where('short_code', 'sa');
        })
        // ->orWhereNull(column: 'location_id')
        ->orderBy('id', 'desc')
        ->take(5)
        ->get();
        // dd(vars: $total_products  );

        $sub_categories = collect();
        foreach ($total_categories  as  $category) {
            $sub_categories->push($sub = Category::where('parent_id', '=', $category->id)
                ->get());
        }
       
        $sub_categories = $sub_categories->flatten();
        $sub_categories_count = collect();
        foreach ($total_categories  as  $category) {
            $sub_categories_count->push(Category::where('parent_id', '=', $category->id)
                ->get()->count());
        }
        $sub_categories_count = $sub_categories_count->flatten();
        View::share('total_categories', $total_categories);
        View::share('total_products', $total_products);
        View::share('sub_categories', $sub_categories);
        View::share('sub_categories_count', $sub_categories_count);
    }
}
