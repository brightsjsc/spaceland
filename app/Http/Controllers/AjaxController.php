<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\District;
use App\Project;
use App\ProductCate;

class AjaxController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function getDistrictOfKeyword(Request $request)
    {
        if ($request->ajax()) {
            $districts = District::where('name_local', 'like', '%'.$request->district.'%')->where('city_id','01')->get();
            return response()->json($districts);
        }
    }

    public function getProjectOfKeyword(Request $request)
    {
        if ($request->ajax()) {
            if ($request->district == '' && $request->projects == '') {
                $projects = Project::where('adr_city_id','01')->get();

            } elseif ($request->district == '' && $request->projects != '') {
                $projects = Project::where('name', 'like', '%'.$request->projects.'%')->where('adr_city_id','01')->get();

            } elseif ($request->district != '' && $request->projects == '') {
                $district = District::where('name_local', $request->district)->first();

                $projects = Project::where('adr_district_id',$district->district_id)->where('adr_city_id','01')->get();

            } else {
                $district = District::where('name_local', $request->district)->first();

                $projects = Project::where('adr_district_id',$district->district_id)
                                        ->where('name', 'like', '%'.$request->projects.'%')
                                        ->where('adr_city_id','01')
                                        ->get();
            }

            return response()->json($projects);
        }
    }

    public function getProductCateOfKeyword(Request $request)
    {
        if ($request->ajax()) {
            $product_cates = ProductCate::where('name', 'like', '%'.$request->product_cate.'%')->where('parent_id','<>','0')->get();
            return response()->json($product_cates);
        }
    }

}
