<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public function edit(){
        $settings= DB::table('settings')->where('id',1)->first();
        return view('admin.settings.setting',compact('settings'));
    }
    public function update(Request $request){
        $settings= Setting::find(1);

        $imageLogo= $settings->logo;
        $imageIcon= $settings->icon;
        if($request->hasFile('logo')) {

            $imageLogo = 'logo-'.md5(time()).'.'.$request->logo->getClientOriginalExtension();
            //set upload directory
            $path = $request->file('logo')->move('uploads/settings/', $imageLogo);
        }
        if($request->hasFile('icon')) {

           $imageIcon = 'icon-'.md5(time()).'.'.$request->icon->getClientOriginalExtension();
            //set upload directory
            $path = $request->file('icon')->move('uploads/settings/',$imageIcon);
        }
        //for update in table
        $settings->address=$request->address;
        $settings->phone=$request->phone;
        $settings->email=$request->email;
        $settings->work_day=$request->work_day;
        $settings->work_time=$request->work_time;
        $settings->logo=$imageLogo;
        $settings->icon=$imageIcon;
        $settings->save();
        toastr()->success('در خواست با موفقیت ثبت شد');

        return redirect()->back();
    }
}
