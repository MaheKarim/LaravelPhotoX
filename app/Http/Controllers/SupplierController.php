<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use App\LogoChange;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $suppliers = Supplier::all();
        $suppliers = Supplier::all();
        $logochanges = LogoChange::all();

        return view('admin.supplier.view', compact('suppliers', 'logochanges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $logochanges = LogoChange::all();

        return view('admin.supplier.create', compact('logochanges'));
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
        $supplier = new Supplier();
        $supplier->supplier_name = $request->supplier_name;
        $supplier->supplier_phn = $request->supplier_phn;
        $supplier->supplier_mail = $request->supplier_mail;
        $supplier->supplier_company = $request->supplier_company;
        $supplier->supplier_address = $request->supplier_address;
        $supplier->publication_status = $request->publication_status;
        $supplier->save();

        return redirect('/supplier')->withnotifications('Supplier info added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::find($id);

        return view('admin.supplier.update', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $supplier = Supplier::find($id);
        $supplier->supplier_name = $request->supplier_name;
        $supplier->supplier_phn = $request->supplier_phn;
        $supplier->supplier_mail = $request->supplier_mail;
        $supplier->supplier_company = $request->supplier_company;
        $supplier->supplier_address = $request->supplier_address;
        $supplier->publication_status = $request->publication_status;
        $supplier->save();

        return redirect('supplier')->withupdatenotification('Update Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Supplier::find($id);
        $supplierall = $supplier->delete();

        return redirect('/supplier')->withupdatenotification('Deleted Successfully!!');
    }

    // public function unpublishedSupplier($id)
    // {
    //     $supplier = Supplier::find($id);
    //     $supplier->publication_status = 0;
    //     $supplier->save();

    //     return redirect('/supplier');
    // }

    // public function publishedSupplier($id)
    // {
    //     $supplier = Supplier::find($id);
    //     $supplier->publication_status = 1;
    //     $supplier->save();

    //     return redirect('/supplier');
    // }
}
