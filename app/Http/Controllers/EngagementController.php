<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Request;
use App\Engagement;
use App\LogoChange;
use App\EngagementGallery;
use App\EngagementPackage;
use App\EngagementPackageGallery;

class EngagementController extends Controller
{
    public function index()
    {
        //dd('ok');
        $logochanges = \App\LogoChange::all();
        $engagements = Engagement::all();
        $engagementpackages = EngagementPackage::all();
        $engagement_package_name = EngagementPackageGallery::all();

        // $engagementpackages = EngagementPackage::find(7);
        // dd($engagementpackages->package);

        return view('engagement_album', compact('logochanges', 'engagements', 'engagementpackages', 'engagement_package_name'));
    }

    public function engagementphotography()
    {
        $logochanges = \App\LogoChange::all();
        $engagements = Engagement::all();
        $engagementpackages = EngagementPackage::all();

        return view('admin.engagement.engagement-section', compact('logochanges', 'engagements', 'engagementpackages'));
    }

    public function engagemnetalbum(Request $request)
    {
        $requestData = $request->except(['engagemnet_thumbnail']);
        $image = $request->engagement_thumbnail;
        if ($image) {
            $imageName = time().'.'.$image->getClientOriginalName();
            $image->move('engagementfolder', $imageName);
            $path = $imageName;
        }

        Engagement::create([
            'engagement_name' => $request->engagement_name,
            'engagement_thumbnail' => $path,
            ]);

        return back()->with('eAlbumUpload', 'Image To album Successfully!');
    }

    public function engagementimagetoalbum()
    {
        $logochanges = LogoChange::all();
        $engagements = Engagement::all();

        return view('admin.engagement.albumtoimage', compact('logochanges', 'engagements'));
    }

    public function engagementAlbumToImage(Request $request)
    {
        $requestData = $request->except(['engagement_album_thumbnail']);

        $image = $request->engagement_album_thumbnail;

        if ($image) {
            $imageName = time().'_'.$image->getClientOriginalName();
            $image->move('engagement_gallery', $imageName);
            $path = $imageName;
        } else {
            echo 'Please select a photo';
        }

        EngagementGallery::create([
            'engagement_album_id' => $request->engagement_album_id,
            'engagement_album_image' => $path,
            ]);

        return back()->with('status', 'Image upload to album succesfully!');
    }

    public function engagementToSingleAlbum($id)
    {
        $engagement_name = Engagement::find($id);
        $engagementgalleries = EngagementGallery::where('engagement_album_id', $id)->get();
        $logochanges = LogoChange::all();

        return view('engagement-single-gallery', compact('engagementgalleries', 'logochanges', 'engagement_name'));
    }

    public function deleteEngagement($id)
    {
        Engagement::find($id)->delete();

        $allImage = EngagementGallery::where('engagement_album_id', $id)->get();

        foreach ($allImage as $itme) {
            EngagementGallery::find($itme->id)->delete();
        }

        return back()->with('deletenotification', 'Album delte Successfully!');
    }

    public function engagementpackage(Request $request)
    {
        // $request->validate([
        //     'engagement_package_name' => 'required|unique:engagementpackages,engagement_package_name',
        // ]);
        $engagementpackages = new EngagementPackage();
        $engagementpackages->engagement_package_name = $request->engagement_package_name;
        $engagementpackages->engagement_package_price = $request->engagement_package_price;

        $engagementpackages->save();

        return redirect()->route('engagementphotography')->withpackagecreate('Package name Create Successfully!');
    }

    public function deleteEngagementPackage($id)
    {
        $engagementpackages = EngagementPackage::findOrfail($id)->delete();

        return redirect()->route('engagementphotography')->withpackagedelete('Package Delete Succesfully!');
    }

    public function addEngagementPackage()
    {
        $logochanges = \App\LogoChange::all();
        $engagements = Engagement::all();
        $engagementpackages = EngagementPackage::all();
        $engagementpackagegallries = EngagementPackageGallery::find(1);

        return view('admin.engagement.dataToPackage', compact('logochanges', 'engagements', 'engagementpackages', 'engagementpackagegallries'));
    }

    public function engagementDataToPackage(Request $request)
    {
        $engagementpackagegallries = new EngagementPackageGallery();
        $engagementpackagegallries->engagement_package_id = $request->engagement_package_id;
        $engagementpackagegallries->engagement_package_description = $request->engagement_package_description;

        $engagementpackagegallries->save();

        return redirect()->route('addEngagementPackage')->with('PackageToDescription', 'Package Description Create Successfully!');
    }
}
