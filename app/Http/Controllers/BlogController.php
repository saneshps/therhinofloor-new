<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use DB;
class BlogController extends BaseController
{
    //
    public function index()
    {
        // $response = Http::get(env('APP_BLOG_API_LIST_URL'));
        // if ($response->successful()) {
        //     $blogs = $response->json();

        //     return view('blogs.index', compact('blogs'));
        // } else {
        //     return response()->json(['error' => 'Failed to retrieve blog data'], $response->getStatusCode());
        // }
        // $blogs = Blog::orderBy('created_at', 'desc')->get();
        $blogs = DB::table('blogs')
        ->leftjoin('locations','locations.id','blogs.location_id')
        ->where('blogs.status', 1)
        ->where(function($query) {
            $query->where('locations.short_code','=', 'sa')
                  ->orWhereNull('locations.id');
        })
        ->select('blogs.*','locations.short_code','locations.id as location_id')
        ->orderBy('blogs.created_at', 'desc')
        ->get();

        return view('blogs.index', compact('blogs'));
    }

    // public
    // function removeArrayBySlug($multiArray, $slugValue)
    // {
    //     foreach ($multiArray as $key => $subArray) {
    //         if (isset($subArray['slug']) && $subArray['slug'] === $slugValue) {
    //             unset($multiArray[$key]);
    //         }
    //     }
    //     return $multiArray;
    // }


    public function blogDetail($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $recent_posts =  Blog::where('blogs.id', '<>', $blog->id)
        ->leftjoin('locations','locations.id','blogs.location_id')
        ->where(function($query) {
            $query->where('locations.short_code','=', 'sa')
                  ->orWhereNull('locations.id');
        })
        ->latest('blogs.created_at')->take(3)->get();
        return view('blogs.detail', compact('blog', 'recent_posts'));
    }
}
