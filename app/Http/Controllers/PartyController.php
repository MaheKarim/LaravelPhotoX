<?php

namespace App\Http\Controllers;

use App\LogoChange;
use Illuminate\Http\Request;
use App\Party;
use App\Partygallery;

class PartyController extends Controller
{
    public function index()
    {
        $logochanges = LogoChange::all();
        $parties = Party::all();

        return view('/party_album', compact('logochanges', 'parties'));
    }

    public function partyadmin()
    {
        $logochanges = LogoChange::all();

        $parties = Party::all();

        return view('admin.party.party_view', compact('logochanges', 'parties'));
    }

    public function partyalbummake(Request $request)
    {
        // $request->validate
        $request->validate([
            'party_name' => 'required',
            'party_thumbnail' => 'required',
        ]);
        $requestData = $request->except(['party_thumbnail']);
        $image = $request->party_thumbnail;

        if ($image) {
            $imageName = time().'_'.$image->getClientOriginalName();
            $image->move('partyfolder', $imageName);
            $path = $imageName;
        }

        Party::create([
            'party_name' => $request->party_name,
            'party_thumbnail' => $path,
            ]);

        return back()->with('eAlbumUpload', 'Image To album Successfully!');
    }

    public function partyalbumtoImage()
    {
        $logochanges = LogoChange::all();
        $parties = Party::all();
        // dd($parties);

        return view('admin.party.imagesendtoalbum', compact('logochanges', 'parties'));
    }

    public function partygalleryoption(Request $request)
    {
        $requestData = $request->except(['party_album_thumbnail']);

        $image = $request->party_album_thumbnail;

        if ($image) {
            $imageName = time().'_'.$image->getClientOriginalName();
            $image->move('party_gallery', $imageName);
            $path = $imageName;
        } else {
            echo 'Please select a photo';
        }

        Partygallery::create([
            'party_album_id' => $request->party_album_id,
            'party_album_thumbnail' => $path,
            ]);

        return back()->with('status', 'Image upload to album succesfully!');
    }

    public function partyAlbumToImageAlbum($id)
    {
        $logochanges = LogoChange::all();
        $parties = Party::find($id);
        $partygalleries = Partygallery::where('party_album_id', $id)->get();

        return view('/partySingleGallery', compact('logochanges', 'parties', 'partygalleries'));
    }

    public function deleteParty($id)
    {
        Party::find($id)->delete();

        $allImage = Partygallery::where('party_album_id', $id)->get();

        foreach ($allImage as $itme) {
            Partygallery::find($itme->id)->delete();
        }

        return back()->with('deletenotification', 'Album delte Successfully!');
    }
}
