<?php

namespace App\Http\Controllers;


use App\Models\Brand;
use App\Models\Glass;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class GlassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()//لیست شیشه ها
    {
        $glass=Glass::paginate(5);//صفحه بندی صفحات به صورت 5 تایی
        return view('admin.glass.index',compact('glass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.glass.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//اضافه کردن
    {
        $glass=new Glass();
        $glass->title_glass = $request->input('title');
        $glass->save();
        toastr()->success('در خواست با موفقیت ثبت شد');
        return redirect()->route('glass.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Glass  $glass
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Glass  $glass
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $glass=Glass::find($id);
        return view('admin.glass.edit',compact('glass'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Glass  $glass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $glass= Glass::find($id);
        $glass->title_glass = $request->input('title');
        $glass->save();
        return redirect()->route('glass.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Glass  $glass
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Glass::find($id)->delete();
        return redirect()->route('glass.index');
    }
}
