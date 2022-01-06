<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{

    public function index()
    {
        return view('cart.index');
    }

    public function store(Service $service)
    {
        $id = $service->id;

        $duplicates = Cart::search(function ($cartItem, $id){
            return $cartItem->id === $id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Item already in added! Update quantity!');
        }

        Cart::add($id, $service->name, 1, $service->price)->associate(Service::class);

        return redirect()->route('cart.index')->with('success', 'Item added successfully...');
    }

    public function update(Request $request, $id)
    {
        $qty=$request->qty;
        $proId=$request->prodId;

        Cart::update($id, $request->qty);

        return redirect()->route('cart.index')->with('success', 'Quantity updated successfully...');
    }

    public function destroy($id)
    {
        Cart::remove($id);

        return redirect()->route('cart.index')->with('success', 'Item removed successfully...');
    }
}
