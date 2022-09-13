<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
class HeaderController extends Controller
{
    public function edit(){
        $header= DB::table('header')->where('id',1)->first();
        return view('admin.header.edit',compact('header'));
    }
    public function update(Request $request){
        $data=array();
        $image=$request->input('image');
        $headerImage= DB::table('header')->where('image',$image)->first();
        if ($request->file('image')) {
            $imagePath = $request->file('image');
            $headerImage = 'header-'.md5(time()).'.'.$request->image->getClientOriginalExtension();
            //set upload directory
            $path = $request->file('image')->move('uploads/headers', $headerImage);
        }
        $data['title']=$request->title;
        $data['description']=$request->description;
        $data['image']=$headerImage;
        DB::table('header')->where('id',1)->update($data);
        toastr()->success('در خواست با موفقیت ثبت شد');

        return redirect()->back();
    }
}
