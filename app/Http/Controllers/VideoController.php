<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('video_gallery', ['videos' => $videos]);
    }

    public function viewVideo($fileVideo)
    {
        return response()->file(storage_path(env('PATH_VIDEO') . $fileVideo), [
            'Content-Type' => 'video/mp4',
            'Content-Disposition' => 'inline; filename="Lesson-file"'
        ]);

        return false;
    }

    public function create()
    {
        return view('video_insert');
    }

    public function store(Request $request)
    {
        $file = $request->file('video_src');
        $ext = $file->getClientOriginalExtension();

        $dateTime = date('Ymd_his');
        $newName = 'video_'.$dateTime.'.'.$ext;

        $file->move(storage_path(env('PATH_VIDEO')), $newName);

        $video = new Video;
        $video->video_title = $request->video_title;
        $video->video_desc = $request->video_desc;
        $video->video_src = $newName;
        $video->save();

        return redirect('video')->with('success', 'Video has been saved');
    }
}
