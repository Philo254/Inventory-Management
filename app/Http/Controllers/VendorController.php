<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\vendor;
use Illuminate\View\View;
use Yajra\DataTables\DataTables;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         {
            $vendors = vendor::all();
            return view ('vendors.index')->with('vendors', $vendors);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        //
    }

    public function datatable(){

        $data = Vendor::all();
        return Datatables::of($data)
        ->addColumn('action', function ($data) {
          $url_edit = url('vendor/'.$data->id.'/edit');
          $url = url('vendor/'.$data->id);
          $view = "<a class='btn btn-action btn-primary' href='".$url."' title='view'><i class='nav-icon fas fa-eye'></i></a>" ;
          $edit = "<a class='btn btn-action btn-warning' href='".$url_edit."' title='Edit'><i class='nav-icon fas fa-edit'></i></a>" ;
          $delete = "<button data-url= '".$url."' onclick='deleteData(this)' class ='btn btn-action btn-danger' title='Delete'><i class='nav-icon fas fa-trash-alt'></i></button>";

          return $view."".$edit."".$delete;
        })
        ->editColumn('address',function ($data){
            return str_ireplace(search:"\r\n", replace:',', $data->address );
        })

        ->editColumn('phone',function ($data){
            return str_ireplace(search:"\r\n", replace:',', $data->phone );
        })
        -> rawColumns (['action'])
        ->editColumn ('id', 'ID:{{$id}}')
        ->make(true);

    }
}
