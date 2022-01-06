<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitInquiryRequest;
use App\Inquiry;
use App\Mail\SubmitInquiry;
use Illuminate\Http\Request;
use Mail;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function faqs()
    {
        return view('faqs');
    }

    public function sanger()
    {
        return view('sanger');
    }

    public function fragment()
    {
        return view('fragment');
    }

    public function kasp()
    {
        return view('kasp');
    }

    public function dnarna()
    {
        return view('dnarna');
    }

    public function oligo()
    {
        return view('oligo');
    }

    // inquiries submit
    public function submitInquiry(SubmitInquiryRequest $request){
        $inquiry = new Inquiry();

        $inquiry->name = $request->input('name');
        $inquiry->email = $request->input('email');
        $inquiry->subject = $request->input('subject');
        $inquiry->message = $request->input('message');
        $inquiry->save();

        // send mail
        Mail::send(new SubmitInquiry($inquiry));

        return redirect()->route('welcome')->with('success', 'Message send successfully...');
    }
}
