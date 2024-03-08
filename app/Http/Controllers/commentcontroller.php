<?php

namespace App\Http\Controllers;
use App\Models\comment;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class commentcontroller extends Controller
{
    function comment()
    {
        $comments = comment::orderby('id', 'desc')->get();
        return view('admin.comment',compact('comments'));
    }
    function addcomment()
    {
        return view('admin.addcomment');
    }
    function insertdata(Request $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['comment'] = $request->comment;
       $ins=DB::table('comment')->insert($data);
        return Redirect()->back();
    }


}


