<?php

namespace App;
use App\District;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\City;

class Contact extends Model
{
    protected $table = 'contact';
    public $timeStamps = true;
    public function getDistrictName(){
        $district = District::find($this->id);
        return $district->name_local;
    }

    public function getCityName(){
        if ($this->id_district =='0'){
            return 'Khu vực khác';
        }
        $city = DB::table('cities')->where('city_id',$this->id_district)->first();
        // return response()->json($this->id_district);
        return $city->name_local;
    }
    public static function insert($arrs){
        $contact = new Contact();
        foreach ($arrs as $key => $val){
            $contact->{$key} = $val;
        }
        $contact->save();
        return $contact;
    }

    public static function exists($data, $column = 'phone'){
        return Contact::where([$column => $data])->first() != null;
    }
}
