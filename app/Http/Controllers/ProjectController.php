<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Str;
use Validator;
use App\Project;
use App\City;
use App\District;
use App\Commune;

class ProjectController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderby('id','desc')->get();
        return view('admins.projects.index',['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        return view('admins.projects.create',['cities'=>$cities]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|min:2|max:255',
            'adr_city_id' => 'required',
            'adr_district_id' => 'required',
            'adr_commune_id' => 'required',
            'address' => 'required',
        ],[
            'name.required' => 'Bạn chưa nhập tên thể loại',
            'name.min'      => 'Tên thể loại phải có độ dài từ 2 đến 255 ký tự',
            'name.max'      => 'Tên thể loại phải có độ dài từ 2 đến 255 ký tự',
            'adr_city_id.required' => 'Vui lòng chọn 1 Tỉnh / Thành phố',
            'adr_district_id.required' => 'Vui lòng chọn 1 Quận / Huyện',
            'adr_commune_id.required' => 'Vui lòng chọn 1 Phường / Xã',
            'address.required' => 'Bạn chưa nhập địa chỉ',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validator($request->all());

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }else{
            Project::create([
                'name' => $request->name,
                'alias' => Str::slug($request->name),
                'adr_city_id' => $request->adr_city_id,
                'adr_district_id' => $request->adr_district_id,
                'adr_commune_id' => $request->adr_commune_id,
                'address' => $request->address
            ]);
            return redirect()->route('admin.project.index')->with('result','Thêm dự án thành công!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        
        $cities = City::all();

        $districts = District::where('city_id',$project->adr_city_id)->get();

        $communes = Commune::where('district_id',$project->adr_district_id)->get();

        return view('admins.projects.edit',['project'=>$project, 'cities'=>$cities, 'districts'=>$districts, 'communes'=>$communes, 'id'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validator form when update
        $validator = $this->validator($request->all());

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }else{
            $project = Project::findOrFail($id);

            $project->update([
                'name' => $request->name,
                'alias' => Str::slug($request->name),
                'adr_city_id' => $request->adr_city_id,
                'adr_district_id' => $request->adr_district_id,
                'adr_commune_id' => $request->adr_commune_id,
                'address' => $request->address
            ]);

            return redirect()->route('admin.project.edit',['id' => $id])->with('result','Sửa dự án thành công!');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $project = Project::findOrFail($id);
        $project -> delete();
        return redirect()->route('admin.project.index')->with('result','Xóa dự án thành công!');
    }

    public function showDistrictOfCity(Request $request)
    {
        if ($request->ajax()) {
            $districts = District::where('city_id', $request->city_id)->get();

            return response()->json($districts);
        }
    }

    public function showCommuneOfDistrict(Request $request)
    {
        if ($request->ajax()) {
            $communes = Commune::where('district_id', $request->district_id)->get();

            return response()->json($communes);
        }
    }

    public function showProjectOfCity(Request $request)
    {
        if ($request->ajax()) {
            $projects = Project::where('adr_city_id', $request->city_id)->get();
            return response()->json($projects);
        }
    }

    public function showProjectOfDistrict(Request $request)
    {
        if ($request->ajax()) {
            $projects = Project::where('adr_district_id', $request->district_id)->get();
            return response()->json($projects);
        }
    }

    public function showProjectOfCommune(Request $request)
    {
        if ($request->ajax()) {
            $projects = Project::where('adr_commune_id', $request->commune_id)->get();
            return response()->json($projects);
        }
    }
}
