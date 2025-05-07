<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\order;
use Illuminate\View\View;

class orderController extends Controller
{

    public function index(): View

        {
            $orders = order::all();
            return view ('orders.index')->with('orders', $orders);
        }
    public function create(): View
    {
        return view('orders.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Order::create($input);
        return redirect('orders')->with('flash_message', 'order Added!');
    }


    public function show(string $id): View
    {
        $order = order::find($id);
        return view('orders.show')->with('orders', $order);


    }


    public function edit(string $id )
    {

    }


    public function update(Request $request, string $id): RedirectResponse
    {
        $order = order::find($id);
        $input = $request->all();
        $order->update($input);

        return redirect('orders')->with('flash_message', 'order Updated!');
    }


    public function destroy(string $id): RedirectResponse
    {
        Order::destroy($id);
        return redirect('orders')->with('flash_message', 'Order deleted!');
    }
}
