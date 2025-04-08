<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
        
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
            'subject' => 'sometimes|required|string',
            'phone' => 'sometimes|required|string',
        ]);

        $mailer = Mail::to('support@searchadeal.online')->send(new ContactMail($data));

        // dd($mailer);
        if ($mailer) {
            echo "<script>alert('Success')</sccript>";
            return redirect()->route('index')->with('success', 'Your message has been sent!');         

        }else{
            return redirect()->back()->with('error', "An error occurred while submitting the form. Please try again");

        }
        // return back()->with('success', 'Your message has been sent!');
    }
}
