<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
use Illuminate\Support\Facades\DB;
class ProjectsController extends Controller
{
    public function index(){
        $projects=Projects::with("brand","profile","glass")->paginate(5);
        return view('admin.projects.projects',compact('projects'));
    }
    public function destroy($id)
    {
        Projects::find($id)->delete();
        return redirect()->back();
    }
}
