<?php

namespace App\Http\Controllers;

use App\City;
use App\Commune;
use App\District;
use Illuminate\Http\Request;

class ApiController extends Controller {

    public function getCity(){
        $arySelect = [
            'name_local',
            'name_global',
            'alias',
            'city_id',
            'level',
        ];
        $allCity = City::select($arySelect)->get()->toArray();
        usort($allCity, function($a, $b){
            return $a['alias'] > $b['alias'];
        });
        return response()->json([
            'code' => 200,
            'datas' => $allCity
        ]);
    }

    public function getDistrict(Request $request){
        $cityID = $request->city_id ?? '0';
        $arySelect = [
            'name_local',
            'name_global',
            'alias',
            'district_id',
            'level',
            'city_id',
        ];
        $allDistrict = District::select($arySelect)->where('city_id', $cityID)->get()->toArray();
        usort($allDistrict, function($a, $b){
            return $a['alias'] > $b['alias'];
        });
        return response()->json([
            'code' => 200,
            'datas' => $allDistrict
        ]);
    }

    public function getCommunes(Request $request){
        $districtID = $request->district_id ?? '0';
        $arySelect = [
            'name_local',
            'name_global',
            'alias',
            'commune_id',
            'level',
            'district_id',
        ];
        $allCommune = Commune::select($arySelect)->where('district_id', $districtID)->get()->toArray();
        usort($allCommune, function($a, $b){
            return $a['alias'] > $b['alias'];
        });
        return response()->json([
            'code' => 200,
            'datas' => $allCommune
        ]);
    }

}
