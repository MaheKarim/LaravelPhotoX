<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LogoChange;
use App\Birthday;
use App\Birthdaygallery;
use App\BirthdayPackage;
use App\BirthdayPackageGallery;

class BirthdayController extends Controller
{
    public function index()
    {
        // dd('ok');
        $logochanges = LogoChange::all();
        $birthdays = Birthday::all();
        $birthdaypackages = BirthdayPackage::all();
        //$birthdaypackages = BirthdayPackage::find(1);
        $birthdaypackagegalleries = BirthdayPackageGallery::all();

        return view('birthday_album', compact('logochanges', 'birthdays', 'birthdaypackages', 'birthdaypackagegalleries'));
    }

    public function adminIndex()
    {
        $logochanges = LogoChange::all();
        $birthdays = Birthday::all();
        $birthdaypackages = BirthdayPackage::all();

        return view('admin.birthday.birthday_view', compact('logochanges', 'birthdays', 'birthdaypackages'));
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
        //dd($request->all());
        $birthdaypackages = new BirthdayPackage();
        $birthdaypackages->birthday_package_name = $request->birthday_package_name;
        $birthdaypackages->birthday_package_price = $request->birthday_package_price;

        $birthdaypackages->save();
        //dd($request->all());

        return redirect()->route('adminIndex')->with('birthdaypackageaddnotification', 'Birthday Package Create Successfully!');
    }

    public function birthdaydatasendpackage()
    {
        $logochanges = LogoChange::all();
        $birthdaypackages = BirthdayPackage::all();

        return view('admin.birthday.datasendpage', compact('logochanges', 'birthdaypackages'));
    }

    public function birthdayDataToPackage(Request $request)
    {
        $birthdaypackagegalleries = new BirthdayPackageGallery();
        $birthdaypackagegalleries->birthday_package_id = $request->birthday_package_id;
        $birthdaypackagegalleries->birthday_package_description = $request->birthday_package_description;

        $birthdaypackagegalleries->save();

        return redirect()->route('birthdaydatasendpackage')->with('birthdayPackageAdd', 'Package Create Successfully!');
    }

    public function deletebirthdayPackage($id)
    {
        $birthdaypackages = BirthdayPackage::findOrfail($id)->delete();

        return redirect()->route('adminIndex')->withbirthdaypackagedelete('Package Delete Succesfully!');
    }
}
