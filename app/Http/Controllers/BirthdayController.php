<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LogoChange;
use App\Birthday;
use App\Birthdaygallery;
use App\BirthdayPackage;

class BirthdayController extends Controller
{
    public function index()
    {
        $logochanges = \App\LogoChange::all();
        $birthdays = Birthday::all();

        return view('birthday_album', compact('logochanges', 'birthdays'));
    }

    public function adminIndex()
    {
        $logochanges = LogoChange::all();
        $birthdays = Birthday::all();

        return view('admin.birthday.birthday_view', compact('logochanges', 'birthdays'));
    }

    public function birthdayalbummake(Request $request)
    {
        $request->validate([
            'birthday_name' => 'required',
            'birthday_thumbnail' => 'required',
       ]);
        // echo 'yes!';
        $requestData = $request->except(['birthday_thumbnail']);
        $image = $request->birthday_thumbnail;
        //dd($request->all());
        if ($image) {
            $imageName = time().'_'.$image->getClientOriginalName();
            $image->move('birthdayfolder', $imageName);
            $path = $imageName;
        }

        Birthday::create([
            'birthday_name' => $request->birthday_name,
            'birthday_thumbnail' => $path,
            ]);

        return back()->with('PortraitAlbumUpload', 'Image Upload To album Successfully!');
    }

    public function birthdayImageToAlbum()
    {
        $birthdays = Birthday::all();
        $logochanges = LogoChange::all();

        return view('admin.birthday.albumgallerybday', compact('birthdays', 'logochanges'));
    }

    public function bdaygalleryoption(Request $request)
    {
        $requestData = $request->except(['birthday_album_thumbnail']);
        $image = $request->birthday_album_thumbnail;

        if ($image) {
            $imageName = time().'_'.$image->getClientOriginalName();
            $image->move('birthday_gallery', $imageName);
            $path = $imageName;
        } else {
            echo 'Please select a photo';
        }

        Birthdaygallery::create([
            'birthday_album_id' => $request->birthday_album_id,
            'birthday_album_thumbnail' => $path,
            ]);
        // dd($request->all());

        return back()->with('status', 'Image upload to album succesfully!');
    }

    public function birthdaySingleImage($id)
    {
        $logochanges = LogoChange::all();
        $birthdays = Birthday::find($id);
        $birthdaygalleries = Birthdaygallery::where('birthday_album_id', $id)->get();

        return view('birthdaySingleGallery', compact('logochanges', 'birthdays', 'birthdaygalleries'));
    }

    public function deleteBirthday($id)
    {
        Birthday::find($id)->delete();
        $albumimage = Birthdaygallery::where('birthday_album_id', $id)->get();
        foreach ($albumimage as $item) {
            Birthdaygallery::find($item->id)->delete();
        }

        return back()->with('deletenotification', 'Album delte Successfully!');
    }

    public function birthdaypackage(Request $request)
    {
        $birthdaypackages = new BirthdayPackage();
        $birthdaypackages->birthday_package_name = $request->birthday_package_name;
        $birthdaypackages->birthday_package_price = $request->birthday_package_price;

        $birthdaypackages->save();

        return redirect()->route('birthdayalbummake')->with('birthdaypackageaddnotification', 'Birthday Package Create Successfully!');
    }
}
