<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Models\News;
use Illuminate\Http\Request;
use DB;
class NewsController extends BaseController
{
    //
    public function index()
    {
        // $news = News::orderBy('created_at', 'desc')->get();
        // ->get();
        $news = DB::table('news')
        ->leftjoin('locations','locations.id','news.location_id')
        ->where('locations.short_code','=', 'sa')
        // ->orWhere('locations.id' , '=', null)
        // ->select('blogs.*','locations.short_code','locations.id as location_id')
        ->orderBy('news.created_at', 'desc')
        ->get();
        return view('news.index', compact('news'));
    }
}
