<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Mail\EnquiryMail;
use Illuminate\Support\Facades\Mail;
use Str;

class HomeController extends BaseController
{
    //
    public function index(Request $request)
    {
        
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        $news = News::orderBy('created_at', 'desc')->take(3)->get();
        $banners = Banner::orderBy('created_at', 'desc')->get();
        $suppliers = Supplier::orderBy('id', 'desc')->get();
        $products = Product::orderBy('id', 'desc')->get();
       
        // dd([
        //     'path' => $request->path(),
        //     'prefix' => $request->route()->getPrefix(),
        //     'isAdmin' => Str::startsWith($request->path(), 'admin'),
        // ]);
        return view('index', compact('blogs', 'news', 'banners', 'suppliers', 'products'));
    }
    public function ourStory()
    {
        return view('our-story');
    }
    public function contactUs()
    {
        return view('contact-us');
    }
    public function faq()
    {
        return view('faq');
    }
    public function privacyPolicy()
    {
        return view('privacy-policy');
    }
    public function gallery()
    {
        $gallery = Gallery::orderBy('created_at', 'desc')->get();
        return view('our-works', compact('gallery'));
    }
    public function contactMail(Request $request)
    {

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
            'suject' => $request->subject,
            'message' => $request->message,
        );

        Mail::to($to_email)->cc($to_cc)->send(new EnquiryMail($data));
        return redirect()->back()->with('message','Mail Send Successfully');
    }
    
    
public function sitemap()
{
    $path = public_path('sitemap.xml');

    if (!file_exists($path)) {
        abort(404, 'Sitemap file not found.');
    }

    return response()->file($path, [
        'Content-Type' => 'application/xml'
    ]);
}

    
    public function robots()
    {
        $path = public_path('robots.txt');

        if (!file_exists($path)) {
            abort(404, 'Robots.txt not found.');
        }

        return response()->file($path, [
            'Content-Type' => 'text/plain',
        ]);
    }
}
