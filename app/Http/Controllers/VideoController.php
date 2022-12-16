<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use \Illuminate\Support\Facades\DB;
 
class VideoController extends Controller
{
    //
    public function listvideo(){
        $videos = Video::all();
        return view('list-video',compact('videos'));
    }
    Public function add(){
        $videos = Video::all();
        return view ('add');
    }
    public function addvideo(Request $request)
    {
        if ($request->isMethod('POST')) {
                $newVideo = new Video();
                $newVideo->name = $request->name;
                $newVideo->video_url = $request->video_url;
                $newVideo->Description = $request->description;
                $newVideo->category = $request->category;
                $newVideo->save();
                return redirect()->route('listvideo')->with('message','Add Music success!');
            }
    }
    public function destroy($id)
    {
        $video = Video::find($id);
        $video->delete();
        return redirect()->route('listvideo');
        
    }
    public function editvideo($id)
    {
        $video = Video::find($id);
        return view('update',['video'=>$video]);
    }
    public function update(Request $request)
    {
        if($request->isMethod('POST')){
            $video = Video::find($request->id);
            if($video != null){
                $video->name = $request->name;
                $video->video_url = $request->video_url;
                $video->description = $request->description;
                $video->category = $request->category;
                $video->save();
                return redirect()->route('listvideo');
            }
            else{
                return redirect()->route('listvideo');
            }
        }
    }
    public function buy($id)
    {
        $video = Video::find($id);
        return view('buy',['video'=>$video]);
    }
 }

