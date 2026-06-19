<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Models\Application;
use App\Models\ApplicationImage;
use App\Models\ApplicationVideo;
use Illuminate\Http\Request;
use DB;
class ApplicationController extends BaseController
{
    //
    public function index()
    {
        // $applications = Application::orderBy('id', 'desc')

        // ->get();
         $applications = DB::table('applications')
        ->leftjoin('locations','locations.id','applications.location_id')
        ->where('locations.short_code','=', 'sa')
        // ->orWhere('locations.id' , operator: '=', null)
        // ->select('blogs.*','locations.short_code','locations.id as location_id')
        ->orderBy('applications.id', 'desc')
        ->get();
        return view('applications.index', compact('applications'));
    }
    public function applicationDetail($slug)
    {
        $applications = Application::orderBy('id', 'desc')->get();
        $application = Application::where('slug', $slug)->with(['application_meta', 'application_videos'])->first();
        $application_banner = ApplicationImage::where('application_id', $application->id)->where('image_type', 'banner')->first();
        // dd($application_banner);
        $application_gallery = ApplicationImage::where('application_id', $application->id)->where('image_type', 'gallery')->orderBy('priority', 'asc')->get();

        $faqs = \DB::table('faqs')
            ->where('type', 'application')
            ->where('reference_id', $application->id)
            ->where('status', 1)
            ->orderBy('id', 'asc')
            ->get();

        return view('applications.detail', compact('application', 'applications', 'application_banner', 'application_gallery', 'faqs'));
    }
}
