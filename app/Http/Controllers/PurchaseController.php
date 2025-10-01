<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('purchase.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $detail_count = 0;
        return view('purchase.create', compact('detail_count'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    //    }
    }
    public function popup_media_vendor()
    {
        return view ('purchase.view_vendor');
    }
     public function popup_media_product($id_count = null)
    {
        return view ('purchase.view_product')->with('id_count',$id_count);
    }
}
