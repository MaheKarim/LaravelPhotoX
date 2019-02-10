<?php

namespace App\Http\Controllers;

use App\LogoChange;
use Illuminate\Http\Request;
use App\ReviewPost;

class ReviewController extends Controller
{
    public function reviewpost(Request $request)
    {
        $requestData = $request->except(['image']);

        $image = $request->image;

        if ($image) {
            $imageName = time().'.'.$image->getClientOriginalName();
            $image->move('reviewpost', $imageName);
            $requestData['image'] = $imageName;
        }

        ReviewPost::create($requestData);
        $request->session()->flash('sentNotifications', 'Successfully created!');

        return back();
    }

    public function reviewpage()
    {
        $reviews = ReviewPost::all();
        $logochanges = LogoChange::all();

        return view('admin.review.review_view', compact('reviews', 'logochanges'));
    }

    public function delete($id)
    {
        ReviewPost::find($id)->delete();

        return back()->withdeletemsg('MSG Delete Successfully!');
    }
}
