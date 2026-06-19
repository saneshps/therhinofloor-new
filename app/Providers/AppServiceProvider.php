<?php

namespace App\Providers;

use App\Models\Application;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
        //
        $applications = [];
        // $products = [];

        // $applications = Application::where(column: 'status', 1)->orderBy('menu_order', 'asc')->get();
        // $products = Product::get();
        $applications = DB::table('applications')
        ->leftjoin('locations','locations.id','applications.location_id')
        ->where('locations.short_code','=', 'sa')
        ->where('applications.status','=',1)
        // ->orWhere('locations.id' ,  '=', null)
        // ->select('blogs.*','locations.short_code','locations.id as location_id')
        ->orderBy('applications.menu_order', 'asc')
        ->get();
        View::composer('*', function ($view) use ($applications) {
            $view->with('applications',  $applications);
            //         ->with('allproducts',  $products);

        });
    }
}
