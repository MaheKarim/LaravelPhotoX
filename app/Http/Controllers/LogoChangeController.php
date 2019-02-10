<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LogoChange;

class LogoChangeController extends Controller
{
    public function index()
    {

        $logochanges = LogoChange::all();
        $logochange = LogoChange::first();
        //dd($logochanges);
        return view('admin/logo/logochange',compact('logochanges', 'logochange'));
    }

    public function logo(Request $request)
    {
        $requestData = $request->except(['logo']);
        $logo = $request->logo;
        if ($logo) {
            $imageName = time().'.'.$logo->getClientOriginalName();
            $logo->move('logo', $imageName);
            $requestData['logo'] = $imageName;
        }
        LogoChange::create($requestData);
        $request->session()->flash('sentNotifications', 'Logo Change Successfully!');
        return back();
    }
    public function show($id){
        $logochanges = LogoChange::find($id);
        $logochanges = LogoChange::all();
        return view('admin.logo.logochange', compact('logochanges','logochanges'));
    }





public function update(Request $request, $id){

    $logochange = LogoChange::find($id);

    $requestData = $request->except(['logo']);
    $logo = $request->logo;
    if ($logo) {
        $imageName = time().'.'.$logo->getClientOriginalName();
        $logo->move('logo', $imageName);
        $requestData['logo'] = $imageName;
    }
    $logochange->update($requestData);

    return redirect()->back();
}
//public function update(Request $request, LogoChange $logochange){
//    $logochanges = LogoChange::find($request->logo);
//
//
//    $logochanges->logo = $request->logo;
//    // $category->publication_status = $request->publication_status;
//    $logochanges->save();
//
//    return redirect('/logochange');
//}
}
