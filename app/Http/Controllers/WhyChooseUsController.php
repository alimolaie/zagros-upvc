<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\WhyChooseUs;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WhyChooseUsController extends Controller
{
    public function edit(){
        $chooseUs= DB::table('why_choose_us')->where('id',1)->first();
        return view('admin.why-about-us.edit',compact('chooseUs'));
    }
    public function update(Request $request){
        $chooseUs= WhyChooseUs::find(1);

        $imageName= $chooseUs->image;
        if($request->hasFile('image')) {

            $imageName = 'choose-us-'.md5(time()).'.'.$request->image->getClientOriginalExtension();
            //set upload directory
            $path = $request->file('image')->move('uploads/why_choose_us/', $imageName);
        }
        //for update in table
        $chooseUs->title=$request->title;
        $chooseUs->description=$request->description;
        $chooseUs->image=$imageName;
        $chooseUs->save();
        toastr()->success('در خواست با موفقیت ثبت شد');

        return redirect()->back();
    }
}
