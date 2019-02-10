<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\LogoChange;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd('ok');
        $categories = Category::all();
        $logochanges = LogoChange::all();

        return view('admin.category.view', compact('categories', 'logochanges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $logochanges = LogoChange::all();

        return view('admin.category.addCategory', compact('logochanges'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|unique:categories,category_name',
        ]);
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        // $category->publication_status = $request->publication_status;
        $image = $request->category_image;
        if ($image) {
            $imageName = time().'.'.$image->getClientOriginalName();
            $image->move('aboutfolder', $imageName);
            $category->category_image = $imageName;
        }

        $category->save();

        return redirect()->route('category.index')->withnotifications('Category Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Category $category
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category, $id)
    {
        $category = Category::find($id);
        $logochanges = LogoChange::all();

        return view('admin.category.categoryShow', compact('category', 'logochanges'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Category $category
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Category            $category
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category = Category::find($request->category_id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->category_image = $request->category_image;
        //  $category->publication_status = $request->publication_status;
        $category->save();
        $logochanges = LogoChange::all();

        return redirect('/category', compact('logochanges'))->withupdatenotification('Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Category $category
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, $id)
    {
        $category = Category::findOrfail($id)->delete();
        //$category->delete();
        $logochanges = LogoChange::all();

        return redirect()->route('category.index')->withdeletenotifications('Delete Succesfully!');
    }

    // public function unpublishedCategory($id)
    // {
    //     $category = Category::find($id);
    //     $category->publication_status = 0;
    //     $category->save();

    //     return redirect('/category');
    // }

    // public function publishedCategory($id)
    // {
    //     $category = Category::find($id);
    //     $category->publication_status = 1;
    //     $category->save();

    //     return redirect('/category');
    // }
}
