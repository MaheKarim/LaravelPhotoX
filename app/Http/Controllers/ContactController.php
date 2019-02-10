<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\LogoChange;

class ContactController extends Controller
{
    public function contactview()
    {
        $contacts = Contact::all();
        $logochanges = LogoChange::all();

        return view('admin.contact.contact_admin', compact('contacts', 'logochanges'));
    }

    public function contactsendview(Request $request)
    {
        //dd($request->all());
        Contact::insert([
            'name' => $request->name,
            'mail' => $request->mail,
            'msg' => $request->msg,
            ]);

        $request->session()->flash('alert-success', 'Your Message Successfully Sent!');

        return back();
    }

    public function deleteContact($id)
    {
        Contact::find($id)->delete();

        return back()->withdeletemsg('MSG Delete Successfully!');
    }
}
