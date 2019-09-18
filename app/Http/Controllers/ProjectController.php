<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProjectController extends Controller
{
    function index()
    {
        $industrial = DB::table('project_table')->paginate(12);
        $funded = DB::table('funded_project_table')->paginate(12);
        return view('/project',compact(['industrial','funded']));
    }
}
