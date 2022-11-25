<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    //
    public function create(){
        $images = DB::select('select * from images');

        return view('images.create', ['images' => $images]);
    }

    public function store(Request $request){
        $path = $request->file('image')->store('images', 's3');
        $image = Image::create([
            'filename' => basename($path),
            'url' => storage::disk('s3')->url($path)
        ]);
        $images = DB::select('select * from images');

        return view('images.create', ['images' => $images]);
    }

    public function show(Image $image){
        return Storage::disk('s3')->response('images/'. $image->filename);
    }
}
