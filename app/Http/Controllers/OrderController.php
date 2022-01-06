<?php

namespace App\Http\Controllers;

use App\Mail\DataUploaded;
use App\Mail\InvoiceUploaded;
use App\Mail\PaymentUploaded;
use App\Mail\ReceiptUploaded;
use App\Mail\ServiceUploaded;
use App\Mail\SignedUploaded;
use App\Order;
use App\OrderDate;
use App\OrderService;
use App\Service;
use Mail;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    // all orders
    public function index()
    {
        $orders = Order::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.orders', compact('orders'));
    }

    // staff view single order
    public function staffViewSingleOrder($id)
    {
        $order = Order::findOrFail($id);

        $order_services = OrderService::where('order_id', $id)->get();

        $services = Service::join('order_services', 'services.id', '=', 'order_services.service_id');

        return view('admin.show', compact(['order', 'order_services','services']));
    }

    // client view single order
    public function clientViewSingleOrder($id)
    { 
        $order = Order::findOrFail($id);

        $order_services = OrderService::where('order_id', $id)->get();

        $services = Service::join('order_services', 'services.id', '=', 'order_services.service_id');

        return view('client.show', compact(['order', 'order_services','services']));
    }

    // client orders
    public function getClientOrders()
    {
        $orders = Auth::user()->orders()->orderBy('created_at', 'desc')->paginate(10);

        return view('client.index', compact('orders'));
    }

    // form
    public function downloadForm(Order $order, $form)
    {
        return response()->download('storage/docs/orders/forms/'.$order->order_number.'/'.$form);
    }

    // Gel Image
    public function downloadImage(Order $order, $image)
    {
        return response()->download('storage/docs/orders/images/'.$order->order_number.'/'.$image);
    }

    // Service specification
    public function getService(Order $order)
    {
        return view('admin.orders.service_speci', compact('order'));
    }
    public function uploadService(Request $request, Order $order)
    {
        $request->validate([
            'service_speci'=>'required|mimes:pdf',
        ]);

        if ($request->hasFile('service_speci')) {
            $filename = $request->service_speci->getClientOriginalName();
            if ($order->service_speci) {
                Storage::delete('/public/docs/orders/service_specification/'.$order->order_number.'/'.$order->service_speci);
            }
            $request->service_speci->storeAs('docs/orders/service_specification/'.$order->order_number.'/', $filename, 'public');
            $order->service_speci = $filename;
            $order->save();

            // send mail
            // Mail::send(new ServiceUploaded($order));

            $order_dates = OrderDate::where('order_id', $order->id)->get();
            foreach($order_dates as $order_date){
                $order_date->service_date = $order->updated_at;
                $order_date->save();
            }

            return redirect()->route('all-orders.get-service', [$order])->with('success', 'Document uploaded successfully...');
        }
        return redirect()->route('all-orders.get-service', [$order])->with('error', 'Document not uploaded!');
    }
    public function downloadService(Order $order, $service_speci)
    {
        return response()->download('storage/docs/orders/service_specification/'.$order->order_number.'/'.$service_speci);
    }

    // Signed service specification
    public function getSigned(Order $order)
    {
        return view('client.orders.signed', compact('order'));
    }
    public function uploadSigned(Request $request, Order $order)
    {
        $request->validate([
            'signed_service_speci'=>'required|mimes:pdf',
        ]);

        if ($request->hasFile('signed_service_speci')) {
            $filename = $request->signed_service_speci->getClientOriginalName();
            if ($order->signed_service_speci) {
                Storage::delete('/public/docs/orders/signed/'.$order->order_number.'/'.$order->signed_service_speci);
            }
            $request->signed_service_speci->storeAs('docs/orders/signed/'.$order->order_number.'/', $filename, 'public');
            $order->signed_service_speci = $filename;
            $order->save();

            $order_dates = OrderDate::where('order_id', $order->id)->get();
            foreach($order_dates as $order_date){
                $order_date->signedservi_date = $order->updated_at;
                $order_date->save();
            }

            // send mail
            // Mail::send(new SignedUploaded($order));

            return redirect()->route('my-orders.get-signed', [$order])->with('success', 'Document uploaded successfully...');
        }
        return redirect()->route('my-orders.get-signed', [$order])->with('error', 'Document not uploaded!');
    }
    public function downloadSigned(Order $order, $signed)
    {
        return response()->download('storage/docs/orders/signed/'.$order->order_number.'/'.$signed);
    }

    // Invoice
    public function getInvoice(Order $order)
    {
        return view('admin.orders.invoice', compact('order'));
    }
    public function uploadInvoice(Request $request, Order $order)
    {
        $request->validate([
            'invoice'=>'required|mimes:pdf',
        ]);

        if ($request->hasFile('invoice')) {
            $filename = $request->invoice->getClientOriginalName();
            if ($order->invoice) {
                Storage::delete('/public/docs/orders/invoice/'.$order->order_number.'/'.$order->invoice);
            }
            $request->invoice->storeAs('docs/orders/invoice/'.$order->order_number.'/', $filename, 'public');
            $order->invoice = $filename;
            $order->save();

            $order_dates = OrderDate::where('order_id', $order->id)->get();
            foreach($order_dates as $order_date){
                $order_date->invoice_date = $order->updated_at;
                $order_date->save();
            }

            // send mail
            // Mail::send(new InvoiceUploaded($order));

            return redirect()->route('all-orders.get-invoice', [$order])->with('success', 'Document uploaded successfully...');
        }
        return redirect()->route('all-orders.get-invoice', [$order])->with('error', 'Document not uploaded!');
    }
    public function downloadInvoice(Order $order, $invoice)
    {
        return response()->download('storage/docs/orders/invoice/'.$order->order_number.'/'.$invoice);
    }

    // Proof of payment
    public function getPayment(Order $order)
    {
        return view('client.orders.payment', compact('order'));
    }
    public function uploadPayment(Request $request, Order $order)
    {
        $request->validate([
            'payment'=>'required|mimes:pdf',
        ]);

        if ($request->hasFile('payment')) {
            $filename = $request->payment->getClientOriginalName();
            if ($order->payment) {
                Storage::delete('/public/docs/orders/payment/'.$order->order_number.'/'.$order->payment);
            }
            $request->payment->storeAs('docs/orders/payment/'.$order->order_number.'/', $filename, 'public');
            $order->payment = $filename;
            $order->save();

            $order_dates = OrderDate::where('order_id', $order->id)->get();
            foreach($order_dates as $order_date){
                $order_date->payment_date = $order->updated_at;
                $order_date->save();
            }

            // send mail
            // Mail::send(new PaymentUploaded($order));

            return redirect()->route('my-orders.get-payment', [$order])->with('success', 'Document uploaded successfully...');
        }
        return redirect()->route('my-orders.get-payment', [$order])->with('error', 'Document not uploaded!');
    }
    public function downloadPayment(Order $order, $payment)
    {
        return response()->download('storage/docs/orders/payment/'.$order->order_number.'/'.$payment);
    }

    // Receipt
    public function getReceipt(Order $order)
    {
        return view('admin.orders.receipt', compact('order'));
    }
    public function uploadReceipt(Request $request, Order $order)
    {
        $request->validate([
            'receipt'=>'required|mimes:pdf',
        ]);

        if ($request->hasFile('receipt')) {
            $filename = $request->receipt->getClientOriginalName();
            if ($order->receipt) {
                Storage::delete('/public/docs/orders/receipt/'.$order->order_number.'/'.$order->receipt);
            }
            $request->receipt->storeAs('docs/orders/receipt/'.$order->order_number.'/', $filename, 'public');
            $order->receipt = $filename;
            $order->save();

            $order_dates = OrderDate::where('order_id', $order->id)->get();
            foreach($order_dates as $order_date){
                $order_date->receipt_date = $order->updated_at;
                $order_date->save();
            }

            // send mail
            // Mail::send(new ReceiptUploaded($order));

            return redirect()->route('all-orders.get-receipt', [$order])->with('success', 'Receipt uploaded successfully...');
        }
        return redirect()->route('all-orders.get-receipt', [$order])->with('error', 'Receipt not uploaded!');
    }

    public function downloadReceipt(Order $order, $receipt)
    {
        return response()->download('storage/docs/orders/receipt/'.$order->order_number.'/'.$receipt);
    }

    // Data
    public function getData(Order $order)
    {
        return view('admin.orders.data', compact('order'));
    }
    public function uploadData(Request $request, Order $order)
    {
        // $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
        
        $request->validate([
            // 'data'=>'required|regex:'.$regex,
            'data'=>'url',
        ]);

        $order->where('id', $order->id)->update(request(['data']));

        $order_dates = OrderDate::where('order_id', $order->id)->get();
        foreach($order_dates as $order_date){
            $order_date->dataupload_date = $order->updated_at;
            $order_date->save();
        }

        // if ($request->hasFile('data')) {
        //     $filename = $request->data->getClientOriginalName();
        //     if ($order->data) {
        //         Storage::delete('/public/docs/orders/data/'.$order->order_number.'/'.$order->data);
        //     }
        //     $request->data->storeAs('docs/orders/data/'.$order->order_number.'/', $filename, 'public');
        //     $order->data = $filename;
        //     $order->save();

        //     Mail::send(new DataUploaded($order));

        //     return redirect()->route('all-orders.get-data', [$order])->with('success', 'Data uploaded...');
        // }
        return redirect()->route('all-orders.get-data', [$order])->with('success', 'Link uploaded successfully...');
    }
    // public function downloadData(Order $order, $data)
    // {
    //     return response()->download('storage/docs/orders/data/'.$order->order_number.'/'.$data);
    // }

    // Status
    public function getStatus(Order $order)
    { 
        return view('admin.orders.status', compact('order'));
    }

    public function updateStatus(Request $request, Order $order)
    {
        $order->status = $request->input('status');

        $order->save();

        return redirect()->route('all-orders.get-status', [$order])->with('success', 'Status updated...');
    }

    public function charts()
    {
        return view('admin.charts');
    }
}
