<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\product;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View

        {
            $products = product::all();
            return view ('products.index')->with('products', $products);
        }


    public function create(): View
    {
        return view('products.create');
    }

    public function store(Request $request): RedirectResponse
    {
           /* $validator=Validator::make($request->all(),[
            'name'=>'required|unique:products|max:255',
        ]);
        if($validator->fails()){
          return redirect('products')->with('flash_message', 'you can not duplicate product name');
        }
        else{}*/
        
        $input = $request->all();
        Product::create($input);
        return redirect('products')->with('flash_message', 'Product Added!');
    }


    public function show(string $id): View
    {
        $product = product::find($id);
        return view('products.show')->with('products', $product);


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):view
    {
        $product = Product::find($id);
        return view('products.edit')->with('products', $product);
    }


    public function update(Request $request, string $id): RedirectResponse
    {
        $product = product::find($id);
        $input = $request->all();
        $product->update($input);

        //$product->update($input);
        return redirect('products')->with('flash_message', 'product Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Product::destroy($id);
        return redirect('products')->with('flash_message', 'Student deleted!');
    }
}
