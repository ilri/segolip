<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Mail\OrderPlaced;
use App\Order;
use App\OrderDate;
use App\OrderService;
use Illuminate\Http\Request;
use Cart;
use Session;
use Auth;
use Mail;

class CheckoutController extends Controller
{

    public function index()
    {
        return view('checkout.index');
    }

    public function store(CheckoutRequest $request)
    {
        $order = $this->addToOrdersTables($request, null);

        Cart::destroy();

        // send mail
        Mail::send(new OrderPlaced($order));
        
        return redirect()->route('confirmation.thankyou')->with('success', 'Order placed successfully...');
    }

    protected function addToOrdersTables($request, $error)
    {
        $order = new Order;

        $order->user_id = Auth::user()->id;
        $latestOrder = Order::orderBy('created_at', 'DESC')->first();
        if (!$latestOrder) {
            $number = 0;
            $order->order_number = 'ORD' . sprintf('%06d', intval($number) + 1);
        } else {
            $number = substr($latestOrder->order_number, 3);
            $order->order_number = 'ORD' . sprintf('%06d', intval($number) + 1);
        }
        $order->order_total = getNumbers()->get('newTotal');
        $order->date = $request->input('date');
        $order->researcher = $request->input('researcher');
        $order->investigator = $request->input('investigator');
        $order->department = $request->input('department');
        $order->institution = $request->input('institution');
        $order->billing = $request->input('billing');
        $order->address = $request->input('address');
        $order->city = $request->input('city');
        $order->country = $request->input('country');
        $order->zipcode = $request->input('zipcode');
        $order->phone = $request->input('phone');
        $order->fax_number = $request->input('fax_number');
        $order->email = $request->input('email');
        $order->alter_email = $request->input('alter_email');
        if ($request->hasFile('form')) {
            $filename = $request->form->getClientOriginalName();
            if ($order->form) {
                Storage::delete('/public/docs/orders/forms/'.$order->order_number.'/'.$order->form);
            }
            $request->form->storeAs('docs/orders/forms/'.$order->order_number.'/', $filename, 'public');
            $order->form = $filename;
        }
        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            if ($order->image) {
                Storage::delete('/public/docs/orders/images/'.$order->order_number.'/'.$order->image);
            }
            $request->image->storeAs('docs/orders/images/'.$order->order_number.'/', $filename, 'public');
            $order->image = $filename;
        }
        $order->save();

        // insert into order_product table
        foreach (Cart::content() as $item) {
            OrderService::create([
                'order_id' => $order->id,
                'service_id' => $item->model->id,
                'quantity' => $item->qty,
                'price' => $item->subtotal,
            ]);
        }

        // add into order_dates table
        OrderDate::create([
            'order_id' => $order->id,
            'order_numbered' => $order->order_number,
            'ordercreated_date' => $order->created_at,
        ]);

        return $order;
    }

    public function thankyou()
    {
        if (!Session::has('success')) {
            return redirect()->route('ordering');
        }
        
        return view('confirmation.index');
    }

}
