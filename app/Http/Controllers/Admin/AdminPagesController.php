<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    function dashboard_view(){
        return view("admin.dashboard");
    }
    function mentor_view(){
        return view("admin.mentor");
    }
    function mentee_view(){
        return view("admin.mentee");
    }
    function videocall_view(){
        return view("admin.video_call");
    }
}
