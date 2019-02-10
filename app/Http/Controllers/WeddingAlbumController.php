<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Request;
use App\Album;
use App\LogoChange;
use App\Gallery;

class WeddingAlbumController extends Controller
{
    public function index()
    {
        $logochanges = \App\LogoChange::all();
        $albums = Album::all();

        return view('/wedding-album', compact('logochanges', 'albums'));
    }

    public function indexadmin()
    {
        $logochanges = \App\LogoChange::all();
        $albums = Album::all();

        return view('/admin.wedding.wedding_view', compact('logochanges', 'albums'));
    }

    //make album form submission

    public function makeAlbum(Request $request)
    {
        //dd('ok!');
//        $path = null;
//        if ($request->has('thumbnail')) {
//            // code...
//            $path = $request->file('thumbnail')->store('weddingAlbum');
//        } ;

        //[bracket er vetor req  name theke je asbe]
        $requestData = $request->except(['thumbnail']);
        $image = $request->thumbnail;

        if ($image) {
            $imageName = time().'.'.$image->getClientOriginalName();
            $image->move('newweddingalbum', $imageName);
            $path = $imageName;
        }

        Album::create([
            'name' => $request->album_name,
            'thumbnail' => $path,
            ]);

        return back()->with('status', 'Album Create Successfully!');
    }

    public function addImageToAlbum()
    {
        $logochanges = LogoChange::all();
        $albums = Album::all();

        return view('admin.wedding.imageToAlbum', compact('logochanges', 'albums'));
    }

    //image upload to album from submission
    public function imageUploadToAlbum(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'album' => 'required',
            'thumbnail' => 'required',
        ]);

        // $path = $request->file('thumbnail')->store('gallery');

        $requestData = $request->except(['thumbnail']);

        //[bracket er vetor req  name theke je asbe]

        $image = $request->thumbnail;

        if ($image) {
            $imageName = time().'.'.$image->getClientOriginalName();
            $image->move('albumgallery', $imageName);
            $path = $imageName;
        }

        Gallery::create([
            'album_id' => $request->album,
            'image' => $path,
            ]);

        return back()->with('status', 'Image upload to album succesfully!');
    }

    public function singleGallery($id)
    {
        $album_info = Album::find($id);
        $logochanges = LogoChange::all();
        $galleries = Gallery::where('album_id', $id)->get();

        return view('admin.wedding.singlegallery', compact('logochanges', 'galleries', 'album_info'));
    }

    public function deleteWedding($id)
    {
        Album::find($id)->delete();
        $albumimage = Gallery::where('album_id', $id)->get();
        foreach ($albumimage as $item) {
            Gallery::find($item->id)->delete();
        }

        return back()->with('deletenotification', 'Album delte Successfully!');
    }
}
