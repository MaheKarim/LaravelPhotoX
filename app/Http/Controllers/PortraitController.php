<?php

namespace App\Http\Controllers;

use App\Engagement;
use Illuminate\Http\Request;
use App\Portrait;
use App\LogoChange;
use App\Portraitgallery;
use App\PortraitPackage;

class PortraitController extends Controller
{
    // home page for public view
    public function index()
    {
        $logochanges = LogoChange::all();
        $portraits = Portrait::all();

        return view('portraits_album', compact('logochanges', 'portraits'));
    }

    // Home Page For admin
    public function adminindex()
    {
        $logochanges = \App\LogoChange::all();
        $engagements = Engagement::all();
        $portraits = Portrait::all();

        return view('admin.portrait.view', compact('logochanges', 'engagements', 'portraits'));
    }

    public function portraitalbummake(Request $request)
    {
        $request->validate([
                    'portrait_name' => 'required',
                    'portrait_thumbnail' => 'required',
               ]);
        $requestData = $request->except(['portrait_thumbnail']);
        $image = $request->portrait_thumbnail;
        //dd($request->all());
        if ($image) {
            $imageName = time().'_'.$image->getClientOriginalName();
            $image->move('portraitfolder', $imageName);
            $path = $imageName;
        }

        Portrait::create([
            'portrait_name' => $request->portrait_name,
            'portrait_thumbnail' => $path,
            ]);

        return back()->with('PortraitAlbumUpload', 'Image Upload To album Successfully!');
    }

    // delete

    public function deletePortrait($id)
    {
        Portrait::find($id)->delete();
        $albumimage = Portraitgallery::where('portrait_album_id', $id)->get();
        foreach ($albumimage as $item) {
            Portraitgallery::find($item->id)->delete();
        }

        return back()->with('deletenotification', 'Album delte Successfully!');
    }

    public function imagetoalbum()
    {
        $portraits = Portrait::all();
        $logochanges = LogoChange::all();

        return view('admin.portrait.albumsendtogallery', compact('portraits', 'logochanges'));
    }

    public function portraitgalleryoption(Request $request)
    {
        // dd($request->all());
        $requestData = $request->except(['porttrait_album_thumbnail']);
        $image = $request->porttrait_album_thumbnail;

        if ($image) {
            $imageName = time().'_'.$image->getClientOriginalName();
            $image->move('portrait_gallery', $imageName);
            $path = $imageName;
        } else {
            echo 'Please select a photo';
        }

        Portraitgallery::create([
            'portrait_album_id' => $request->portrait_album_id,
            'porttrait_album_thumbnail' => $path,
            ]);
        // dd($request->all());

        return back()->with('status', 'Image upload to album succesfully!');
    }

    public function portraitSingleImage($id)
    {
        $logochanges = LogoChange::all();
        $portraits = Portrait::find($id);
        $portraitgalleries = Portraitgallery::where('portrait_album_id', $id)->get();

        return view('portraitSingleGallery', compact('logochanges', 'portraits', 'portraitgalleries'));
    }

    public function portraitpackge(Request $request)
    {
        $portraitpackages = new PortraitPackage();
        $portraitpackages->portrait_package_name = $request->portrait_package_name;
        $portraitpackages->portrait_package_price = $request->portrait_package_price;

        $portraitpackages->save();
        // dd($request->all());

        return redirect()->route('portraitsection')->withportraitPackCreate('Package name Create Successfully!');
    }
}
