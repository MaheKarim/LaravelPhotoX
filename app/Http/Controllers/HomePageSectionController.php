<?php

namespace App\Http\Controllers;

use App\LogoChange;
use Illuminate\Http\Request;
use App\HomePage;
use App\SliderImage;

class HomePageSectionController extends Controller
{
    public function homepagesection()
    {
        $logochanges = LogoChange::all();
        $homepages = HomePage::all();
        $sliderimages = SliderImage::all();

        return view('admin.indexpage.homepagesection', compact('logochanges', 'homepages', 'sliderimages'));
    }

    public function indexpageaddimage()
    {
        $logochanges = LogoChange::all();

        return view('admin.indexpage.addimagepage', compact('logochanges'));
    }

    public function indexpagerawimage(Request $request)
    {
        $requestData = $request->except(['image']);

        //[bracket er vetor req  name theke je asbe]

        $image = $request->image;

        if ($image) {
            $imageName = time().'.'.$image->getClientOriginalName();
            $image->move('homepagerow', $imageName);
            $path = $imageName;
        }

        HomePage::create([
            'image' => $request->image,
            'image' => $path,
        ]);
//         $homepages = HomePage::find('');
//
//        $image = $request->image;
//        if ($image) {
//            $imageName = time().'.'.$image->getClientOriginalName();
//            $image->move('indexpage', $imageName);
//            $homepages->image = $imageName;
//        }
//
//        $homepages->save();
//        return back()->with('status', 'Image upload to album succesfully!');
        return redirect()->route('homepagesection')->with('status', 'Image Upload Successfully!');
    }

    public function deletehp($id)
    {
        HomePage::find($id)->delete();

        return back()->with('deletemsg', 'Image Deleted Successfully!');
    }

    public function imageaddtoslider()
    {
        // echo 'Hello World!';
        $logochanges = LogoChange::all();
        $sliderimages = SliderImage::all();

        return view('admin.sliderimage.view', compact('logochanges', 'sliderimages'));
    }

    public function sliderpageimage(Request $request)
    {
        //dd($request->all());
        $requestData = $request->except(['sliderimage']);

        //[bracket er vetor req  name theke je asbe]

        $image = $request->sliderimage;

        if ($image) {
            $imageName = time().'.'.$image->getClientOriginalName();
            $image->move('sliderimage', $imageName);
            $path = $imageName;
        } else {
            $path = '';
        }

        SliderImage::create([
            'image' => $request->image,
            'image' => $path,
        ]);

        return redirect()->route('homepagesection')->with('status3', 'Image Upload Successfully!');
    }

    public function deleteslider($id)
    {
        SliderImage::find($id)->delete();

        return back()->with('delete_slider', 'Image Deleted Successfully!');
    }
}
