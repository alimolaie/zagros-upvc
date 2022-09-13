<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;

class AboutUsController extends Controller
{
    public function edit(){
        $aboutUs= DB::table('about_us')->where('id',1)->first();
        return view('admin.about-us.edit',compact('aboutUs'));
    }
    public function update(Request $request){
        $AboutUs= AboutUs::find(1);

        $imageName= $AboutUs->image;
        if($request->hasFile('image')) {

            $imageName = 'about-'.md5(time()).'.'.$request->image->getClientOriginalExtension();
            //set upload directory
            $path = $request->file('image')->move('uploads/about/', $imageName);
        }
        //for update in table
       $AboutUs->description=$request->description;
       $AboutUs->image=$imageName;
       $AboutUs->save();
        toastr()->success('در خواست با موفقیت ثبت شد');
        return redirect()->back();
    }

}
