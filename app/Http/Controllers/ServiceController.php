<?php

namespace App\Http\Controllers;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Models\Service;
class ServiceController extends Controller
{
    public function index(){
        $services=Service::paginate(5);
        return view('admin.services.index',compact('services'));
    }
    public function create(){
        return view('admin.services.create');
    }
    public function store(Request $request){
        $service=new Service();
        $name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->move('uploads/service', $name);
        $service->title = $request->input('title');
        $service->image = $name;
        $service->save();
        toastr()->success('در خواست با موفقیت ثبت شد');

        return redirect()->route('service.index');
    }
    public function edit($id){
        $service=Service::find($id);
        return view('admin.services.edit',compact('service'));
    }
    public function update(Request $request,$id){
        $service= Service::find($id);

        $imageName= $service->image;
        if($request->hasFile('image')) {

            $imageName = 'service-'.md5(time()).'.'.$request->image->getClientOriginalExtension();
            //set upload directory
            $path = $request->file('image')->move('uploads/service/', $imageName);
        }
        //for update in table
        $service->title = $request->input('title');
        $service->image=$imageName;
        $service->save();
        toastr()->success('در خواست با موفقیت ثبت شد');

        return redirect()->route('service.index');
    }
    public function destroy($id)
    {
        Service::find($id)->delete();
        toastr()->success('در خواست با موفقیت ثبت شد');

        return redirect()->route('service.index');
    }
}
