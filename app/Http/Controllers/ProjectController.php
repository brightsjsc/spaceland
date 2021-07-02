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
use Intervention\Image\ImageManagerStatic as Image;


class ProjectController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderby('id', 'desc')->get();
        // return response()->json($projects);
        return view('admins.projects.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        return view('admins.projects.create', ['cities' => $cities]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|min:2|max:255',
            'adr_city_id' => 'required',
            'adr_district_id' => 'required',
            'adr_commune_id' => 'required',
            'address' => 'required',
        ], [
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
        // $value = $request->all();
        // return response()->json($value);
        $imgPath = '/uploads/images/projects';
        $thumbPath = '/uploads/images/projects/thumbs';

        $image = $request->file('background_img');
        if ($request->hasFile('background_img')) {
            $imgName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName);

            Image::make(public_path() . $imgPath . "/" . $imgName)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName);
        } else {
            $imgName = '';
        }

        $image = $request->file('image_des');
        if ($request->hasFile('image_des')) {
            $imgName_2 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_2);

            Image::make(public_path() . $imgPath . "/" . $imgName_2)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_2);
        } else {
            $imgName_2 = '';
        }

        $image = $request->file('image_scale');
        if ($request->hasFile('image_scale')) {
            $imgName_3 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_3);

            Image::make(public_path() . $imgPath . "/" . $imgName_3)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_3);
        } else {
            $imgName_3 = '';
        }

        $image = $request->file('image_locate');
        if ($request->hasFile('image_locate')) {
            $imgName_4 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_4);

            Image::make(public_path() . $imgPath . "/" . $imgName_4)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_4);
        } else {
            $imgName_4 = '';
        }

        $image = $request->file('image_investor');
        if ($request->hasFile('image_investor')) {
            $imgName_5 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_5);

            Image::make(public_path() . $imgPath . "/" . $imgName_5)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_5);
        } else {
            $imgName_5 = '';
        }

        $image = $request->file('image_utilities');
        if ($request->hasFile('image_utilities')) {
            $imgName_6 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_6);

            Image::make(public_path() . $imgPath . "/" . $imgName_6)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_6);
        } else {
            $imgName_6 = '';
        }

        $image = $request->file('image_more');
        if ($request->hasFile('image_more')) {
            $imgName_7 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_7);

            Image::make(public_path() . $imgPath . "/" . $imgName_7)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_7);
        } else {
            $imgName_7 = '';
        }

        $image = $request->file('image_more_2');
        if ($request->hasFile('image_more_2')) {
            $imgName_8 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_8);

            Image::make(public_path() . $imgPath . "/" . $imgName_8)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_8);
        } else {
            $imgName_8 = '';
        }

        $image = $request->file('image_more_3');
        if ($request->hasFile('image_more_3')) {
            $imgName_9 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_9);

            Image::make(public_path() . $imgPath . "/" . $imgName_9)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_9);
        } else {
            $imgName_9 = '';
        }

        $image = $request->file('image_ground');
        if ($request->hasFile('image_ground')) {
            $imgName_10 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_10);

            Image::make(public_path() . $imgPath . "/" . $imgName_10)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_10);
        } else {
            $imgName_10 = '';
        }

        $image = $request->file('image_design');
        if ($request->hasFile('image_design')) {
            $imgName_11 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_11);

            Image::make(public_path() . $imgPath . "/" . $imgName_11)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_11);
        } else {
            $imgName_11 = '';
        }

        $image = $request->file('image_house');
        if ($request->hasFile('image_house')) {
            $imgName_12 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_12);

            Image::make(public_path() . $imgPath . "/" . $imgName_12)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_12);
        } else {
            $imgName_12 = '';
        }

        $image = $request->file('image_furniture');
        if ($request->hasFile('image_furniture')) {
            $imgName_13 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_13);

            Image::make(public_path() . $imgPath . "/" . $imgName_13)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_13);
        } else {
            $imgName_13 = '';
        }

        $image = $request->file('image_payment');
        if ($request->hasFile('image_payment')) {
            $imgName_14 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_14);

            Image::make(public_path() . $imgPath . "/" . $imgName_14)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_14);
        } else {
            $imgName_14 = '';
        }


        $image = $request->file('thumbnail_img');
        if ($request->hasFile('thumbnail_img')) {
            $imgName_15 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_15);

            Image::make(public_path() . $imgPath . "/" . $imgName_15)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_15);
        } else {
            $imgName_15 = $request->image_payment_pre;
        }


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        } else {
            Project::create([
                'name' => $request->name,
                'alias' => Str::slug($request->name),
                'adr_city_id' => $request->adr_city_id,
                'adr_district_id' => $request->adr_district_id,
                'adr_commune_id' => $request->adr_commune_id,
                'address' => $request->address,
                'background_img' => $imgName,
                'image_des' => $imgName_2,
                'image_scale' => $imgName_3,
                'image_locate'=> $imgName_4,
                'image_investor' =>$imgName_5,
                'image_utilities' =>$imgName_6,
                'image_more' =>$imgName_7,
                'image_more_2' =>$imgName_8,
                'image_more_3' =>$imgName_9,
                'image_ground' =>$imgName_10,
                'image_design' =>$imgName_11,
                'image_house'=>$imgName_12,
                'image_furniture' =>$imgName_13,
                'image_payment' =>$imgName_14,
                'thumbnail_img' =>$imgName_15,
                'investor' => $request->investor,
                'dev_unit' => $request->dev_unit,
                'acreage' => $request->acreage,
                'density' => $request->density,
                'scale' => $request->scale,
                'invest_type' => $request->invest_type,
                'start_build' => $request->start_build,
                'end_build' => $request->end_build,
                'juridical' => $request->juridical,
                'owned_type' => $request->owned_type,
                'advisory' => $request->advisory,
                'utilities' => $request->utilities,
                'description' => $request->description,
                'description_scale' => $request->description_scale,
                'description_locate' => $request->description_locate,
                'description_investor' => $request->description_investor,
                'description_utilities' => $request->description_utilities,
                'description_more' => $request->description_more,
                'description_more_2' => $request->description_more_2,
                'description_more_3' => $request->description_more_3,
                'ground' => $request->ground,
                'design' => $request->design,
                'model_house' => $request->model_house,
                'furniture' => $request->furniture,
                'payment' => $request->payment,
                'quest_1' => $request->quest_1,
                'answer_1' => $request->answer_1,
                'quest_2' => $request->quest_2,
                'answer_2' => $request->answer_2,
                'quest_3' => $request->quest_3,
                'answer_3' => $request->answer_3,
                'quest_4' => $request->quest_4,
                'answer_4' => $request->answer_4
            ]);
            return redirect()->route('admin.project.index')->with('result', 'Thêm dự án thành công!');
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

        $districts = District::where('city_id', $project->adr_city_id)->get();

        $communes = Commune::where('district_id', $project->adr_district_id)->get();
        // return response()->json($project);
        return view('admins.projects.edit', ['project' => $project, 'cities' => $cities, 'districts' => $districts, 'communes' => $communes, 'id' => $id]);
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

        $imgPath = '/uploads/images/projects';
        $thumbPath = '/uploads/images/projects/thumbs';

        $image = $request->file('background_img');
        if ($request->hasFile('background_img')) {
            $imgName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName);

            Image::make(public_path() . $imgPath . "/" . $imgName)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName);
        } else {
            $imgName = $request->background_img_pre;
        }

        $image = $request->file('image_des');
        if ($request->hasFile('image_des')) {
            $imgName_2 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_2);

            Image::make(public_path() . $imgPath . "/" . $imgName_2)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_2);
        } else {
            $imgName_2 = $request->image_des_pre;
        }

        $image = $request->file('image_scale');
        if ($request->hasFile('image_scale')) {
            $imgName_3 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_3);

            Image::make(public_path() . $imgPath . "/" . $imgName_3)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_3);
        } else {
            $imgName_3 = $request->image_scale_pre;
        }

        $image = $request->file('image_locate');
        if ($request->hasFile('image_locate')) {
            $imgName_4 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_4);

            Image::make(public_path() . $imgPath . "/" . $imgName_4)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_4);
        } else {
            $imgName_4 = $request->image_locate_pre;
        }

        $image = $request->file('image_investor');
        if ($request->hasFile('image_investor')) {
            $imgName_5 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_5);

            Image::make(public_path() . $imgPath . "/" . $imgName_5)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_5);
        } else {
            $imgName_5 = $request->image_investor_pre;
        }

        $image = $request->file('image_utilities');
        if ($request->hasFile('image_utilities')) {
            $imgName_6 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_6);

            Image::make(public_path() . $imgPath . "/" . $imgName_6)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_6);
        } else {
            $imgName_6 = $request->image_utilities_pre;
        }

        $image = $request->file('image_more');
        if ($request->hasFile('image_more')) {
            $imgName_7 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_7);

            Image::make(public_path() . $imgPath . "/" . $imgName_7)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_7);
        } else {
            $imgName_7 = $request->image_more_pre;
        }

        $image = $request->file('image_more_2');
        if ($request->hasFile('image_more_2')) {
            $imgName_8 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_8);

            Image::make(public_path() . $imgPath . "/" . $imgName_8)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_8);
        } else {
            $imgName_8 = $request->image_more_2_pre;
        }

        $image = $request->file('image_more_3');
        if ($request->hasFile('image_more_3')) {
            $imgName_9 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_9);

            Image::make(public_path() . $imgPath . "/" . $imgName_9)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_9);
        } else {
            $imgName_9 = $request->image_more_3_pre;
        }

        $image = $request->file('image_ground');
        if ($request->hasFile('image_ground')) {
            $imgName_10 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_10);

            Image::make(public_path() . $imgPath . "/" . $imgName_10)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_10);
        } else {
            $imgName_10 = $request->image_ground_pre;
        }

        $image = $request->file('image_design');
        if ($request->hasFile('image_design')) {
            $imgName_11 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_11);

            Image::make(public_path() . $imgPath . "/" . $imgName_11)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_11);
        } else {
            $imgName_11 = $request->image_design_pre;
        }

        $image = $request->file('image_house');
        if ($request->hasFile('image_house')) {
            $imgName_12 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_12);

            Image::make(public_path() . $imgPath . "/" . $imgName_12)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_12);
        } else {
            $imgName_12 = $request->image_house_pre;
        }

        $image = $request->file('image_furniture');
        if ($request->hasFile('image_furniture')) {
            $imgName_13 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_13);

            Image::make(public_path() . $imgPath . "/" . $imgName_13)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_13);
        } else {
            $imgName_13 = $request->image_furniture_pre;
        }

        $image = $request->file('image_payment');
        if ($request->hasFile('image_payment')) {
            $imgName_14 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_14);

            Image::make(public_path() . $imgPath . "/" . $imgName_14)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_14);
        } else {
            $imgName_14 = $request->image_payment_pre;
        }

        $image = $request->file('thumbnail_img');
        if ($request->hasFile('thumbnail_img')) {
            $imgName_15 = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path() . $imgPath, $imgName_15);

            Image::make(public_path() . $imgPath . "/" . $imgName_15)->resize(299, 199)->save(public_path() . $thumbPath . "/" . $imgName_15);
        } else {
            $imgName_15 = $request->image_payment_pre;
        }

        // return response()->json($imgName);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        } else {
            $project = Project::findOrFail($id);

            $project->update([
                'name' => $request->name,
                'alias' => Str::slug($request->name),
                'adr_city_id' => $request->adr_city_id,
                'adr_district_id' => $request->adr_district_id,
                'adr_commune_id' => $request->adr_commune_id,
                'address' => $request->address,
                'background_img' => $imgName,
                'image_des' => $imgName_2,
                'image_scale' => $imgName_3,
                'image_locate'=> $imgName_4,
                'image_investor' =>$imgName_5,
                'image_utilities' =>$imgName_6,
                'image_more' =>$imgName_7,
                'image_more_2' =>$imgName_8,
                'image_more_3' =>$imgName_9,
                'image_ground' =>$imgName_10,
                'image_design' =>$imgName_11,
                'image_house'=>$imgName_12,
                'image_furniture' =>$imgName_13,
                'image_payment' =>$imgName_14,
                'thumbnail_img' =>$imgName_15,
                'investor' => $request->investor,
                'dev_unit' => $request->dev_unit,
                'acreage' => $request->acreage,
                'density' => $request->density,
                'scale' => $request->scale,
                'invest_type' => $request->invest_type,
                'start_build' => $request->start_build,
                'end_build' => $request->end_build,
                'juridical' => $request->juridical,
                'owned_type' => $request->owned_type,
                'advisory' => $request->advisory,
                'utilities' => $request->utilities,
                'description' => $request->description,
                'description_scale' => $request->description_scale,
                'description_locate' => $request->description_locate,
                'description_investor' => $request->description_investor,
                'description_utilities' => $request->description_utilities,
                'description_more' => $request->description_more,
                'description_more_2' => $request->description_more_2,
                'description_more_3' => $request->description_more_3,
                'ground' => $request->ground,
                'design' => $request->design,
                'model_house' => $request->model_house,
                'furniture' => $request->furniture,
                'payment' => $request->payment,
                'quest_1' => $request->quest_1,
                'answer_1' => $request->answer_1,
                'quest_2' => $request->quest_2,
                'answer_2' => $request->answer_2,
                'quest_3' => $request->quest_3,
                'answer_3' => $request->answer_3,
                'quest_4' => $request->quest_4,
                'answer_4' => $request->answer_4
            ]);

            return redirect()->route('admin.project.edit', ['id' => $id])->with('result', 'Sửa dự án thành công!');
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
        $project->delete();
        return redirect()->route('admin.project.index')->with('result', 'Xóa dự án thành công!');
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
