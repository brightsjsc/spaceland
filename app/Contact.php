<?php

namespace App;
use App\District;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    public $timeStamps = true;
    public function getDistrictName(){
        $district = District::find($this->id);
        return $district->name_local;
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
