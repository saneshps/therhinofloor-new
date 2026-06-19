<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Mail\ExpressInterestMail;
use Illuminate\Support\Facades\Mail;

class ProductController extends BaseController
{
    //
    public function index()
    {
        

        $location = session('location_short_code');

     
        // Example query
        $products = Product::where(function ($query) use ($location) {
            $query->whereNull('location_id')
                ->orWhereHas('location', function ($q) use ($location) {
                    $q->where('short_code', $location);
                });
        })->get();
        

        return view('products.index', compact('products'));
    }
    public function category($slug)
    {
       
        $category = Category::where('short_code', $slug)->first();
        // dd($category);
        $categories = Category::where('parent_id', $category->id)->with('products')->orderBy('created_at', 'desc')->get();
        // $products = $category->products;
        // $products = Product::orderBy('products.id', 'desc')
        // ->leftJoin('locations','locations.id','=','products.location_id')
        // ->where('products.category_id','=', $category->id)
        // ->where('locations.short_code','=', 'sa')
        // ->orWhereNull(column: 'location_id')

        // ->get();

        $products = $category->products()
        ->where(function ($query) {
            $query->whereNull('location_id')
                ->orWhereHas('location', function ($q) {
                    $q->where('short_code', 'sa');
                });
        })
        ->with('location')
        ->get();

        // dd($products);

        $faqs = \DB::table('faqs')
            ->where('type', 'category')
            ->where('reference_id', $category->id)
            ->where('status', 1)
            ->orderBy('id', 'asc')
            ->get();

        return view('products.category', compact('categories', 'category', 'products', 'faqs'));
    }
    public function productDetail($slug)
    {
        $product = Product::where('slug', $slug)->with(['product_images', 'product_videos', 'product_catalogues', 'product_models', 'product_specfications', 'product_manager'])->first();

        $product_banner = ProductImage::where('product_id', $product->id)->where('image_type', 'banner')->first();
        $product_gallery = ProductImage::where('product_id', $product->id)->where('image_type', 'gallery')->get();

        $faqs = \DB::table('faqs')
            ->where('type', 'product')
            ->where('reference_id', $product->id)
            ->where('status', 1)
            ->orderBy('id', 'asc')
            ->get();

        return view('products.detail', compact('product', 'product_banner', 'product_gallery', 'faqs'));
    }
    public function expressInterest(Request $request){
         $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',

        ]);
        $to_email = env('MAIL_FROM_ADDRESS');
        $to_cc = env('MAIL_CC');
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'product' => $request->product,
       
        );

        Mail::to($to_email)->cc($to_cc)->send(new ExpressInterestMail($data));
         return response()->json([
            'success' =>  'Express Interest Mail Send Successfully',
        ]);
        
        
        
    }
}
