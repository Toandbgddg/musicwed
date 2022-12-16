<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Video;

class HomeController extends Controller
{
    public  function home(){
        $videos = video::all();
        return view('home', compact('videos'));
    }
    
    public function search(Request $request)
    {
        $search =$request ->keyWord;
        $videos = Video::query()
        ->where('name', 'LIKE', "%{$search}%")
        ->orwhere('category','LIKE', "%{$search}%")
        ->get();

        return view('home',compact('videos'),['successMsg'=>'Search results for '.$search]);
    }

    public function searchlist(Request $request)
    {
        $search =$request ->keyWord;
        $videos = Video::query()
        ->where('name', 'LIKE', "%{$search}%")
        ->orwhere('category','LIKE', "%{$search}%")
        ->get();

        return view('list-video',compact('videos'),['successMsg'=>'Search results for '.$search]);
    }
    
}
