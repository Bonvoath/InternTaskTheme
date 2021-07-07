<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests;
use Session;


class ImageController extends Controller
{
    public function index()
    {
        return view('images.index');
    }
//    dropzone upload images


    public function list()
    {
        //List all image and directory from storage as json.
        $files = Storage::allFiles($directory);
    }

    public function makeDir(Request $request)
    {
        try
        {
            $disk = $request->path;
            $dir_name = $request->name;
            $type = $request->type; // local, public, s3

            $diskPath = $disk.$dir_name;

            Storage::disk($type)->makeDirectory($diskPath);
        }
        catch (\Exception $e) {
            $this->ezx($e->getMessage());
        }

        return response()->json($this->result);
    }

    public function uploadFile(Request $request)
    {
        // upload file or image to storage.
    }
}
