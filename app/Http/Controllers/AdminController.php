<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function blog2()
    {
        $blogs = DB::table("blogs")->get();
        return view("blog", compact('blogs'));
    }

    function delete($id)
    {
        DB::table("blogs")->where('id', $id)->delete();
        return redirect('/blog2');
    }

    function about2()
    {
        $name = 'Sasis srikokpho';
        $date = '20 May 2025';
        return view('about2', compact('name', 'date'));
    }

    function create()
    {
        return view('from');
    }

    function insert(Request $request)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];

        DB::table("blogs")->insert($data);
        return redirect('/blog2');
    }
}
