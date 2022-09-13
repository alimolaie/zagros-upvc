<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Models\Brand;
use App\Models\Glass;
use App\Models\Profile;
use App\Models\Projects;
use Illuminate\Support\Facades\DB;
use App\Models\Service;
use App\Http\Requests\StoreProjectRequest;
class WebController extends Controller
{
    public function index(){
        $header= DB::table('header')->where('id',1)->first();
        $about= DB::table('about_us')->where('id',1)->first();
        $why= DB::table('why_choose_us')->where('id',1)->first();
        $services=Service::all();
         $brands=Brand::take(4)->get();
         $glass=Glass::all();
         $profiles=Profile::all();
        return view('front.index',compact('header','about','services','why','profiles','brands','glass'));
    }
    public function service(){
        $services=Service::all();
        return view('front.services',compact('services'));
    }
    public function storeProject(StoreProjectRequest $request){
        $validateData=$request->validated();
      $praject= new Projects();
      $praject->height=$request->input('height');
      $praject->weight=$request->input('weight');
      $praject->full_name=$request->input('full_name');
      $praject->mobile=$request->input('mobile');
      $praject->nationality_code=$request->input('nationality_code');
      $praject->address=$request->input('address');
      $praject->glass_id=$request->input('glass_id');
      $praject->profile_id=$request->input('profile_id');
      $praject->brand_id=$request->input('brand_id');
      $praject->save();
        toastr()->success('در خواست با موفقیت ثبت شد');
        return redirect()->back()->with($validateData);
    }
    public function contactUs(){
        $settings= DB::table('settings')->where('id',1)->first();
        $services=Service::all();
        return view('front.contact',compact('settings','services'));
    }
    public function storeContactUs(ContactUsRequest $request){
        $validateData=$request->validated();
        $data=array();
        $data['full_name']=$request->full_name;
        $data['email']=$request->email;
        $data['mobile']=$request->mobile;
        $data['subject']=$request->subject;
        $data['message']=$request->message;
        DB::table('contact_us')->insert($data);
        toastr()->success('با موفقیت ثبت شد');
        return redirect()->back()->with($validateData);
    }
}
