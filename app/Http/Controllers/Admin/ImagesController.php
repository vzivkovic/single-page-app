<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    public function index()
    {
        $images = Image::all();

        return view('admin.OurRecentWork.index', compact('images'));
    }

    public function create()
    {
        return view('admin.OurRecentWork.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
/*               'image' => 'required|mimes:jpeg,jpg,png|max:1000'*/
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $this->makePhoto($request->file('image'));

        return redirect()->route('images.index');
    }

    public function show(Image $image)
    {
        return view('admin.OurRecentWork.show', compact('image'));
    }

    public function edit(Image $image)
    {
        return view('admin.OurRecentWork.edit', compact('image'));
    }

    public function update(Request $request ,Image $image)
    {
        $this->validate($request, [
            'image' => 'required|mimes:jpeg,jpg,png|max:1000'
        ]);

        $this->makePhoto($request->file('image'), $image);

        return redirect()->back();
    }

    public function delete(Image $image)
    {
        Storage::delete($image->image);

        $image->delete();

        return redirect()->route('images.index');
    }

    public function makePhoto(UploadedFile $file, $image = null)
    {
        Image::imageName(time().$file->getClientOriginalName(), $image)->storeImage($file);
    }

    public function getImage(Image $image)
    {
        $file = Storage::get($image->image);
        return new Response($file, 200);
    }
}
