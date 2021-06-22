<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;
use Illuminate\Support\Facades\View;
use App\Menu;
use App\District;
use App\Product;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        //Danh sách menu
        $menus = Menu::where('parent_id',0)->where('prioritize',0)->where('status',0)->get();

        //Lấy danh sách các Quận tại Hà Nội [city_id = 01]
        $districts = District::where('city_id','01')->get()->toArray();
        $productOfDistricts = array();
        foreach ($districts as $district) {
            $products = Product::join('projects', 'projects.id', '=', 'products.project_id')
                            ->where('projects.adr_district_id', '=', $district['district_id'])
                            ->get();
            $district['num_product'] = $products->count();

            $productOfDistricts[] = $district;
        }
        //Sắp xếp giảm dần giá trị theo cột num_product
        array_multisort(array_column($productOfDistricts, 'num_product'), SORT_DESC, $productOfDistricts);


        View::share(['menus' => $menus, 'productOfDistricts' => $productOfDistricts]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
