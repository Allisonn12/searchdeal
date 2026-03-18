<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Throwable;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate user-provided contact fields
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'subject' => 'sometimes|required|string|max:255',
            'phone' => 'sometimes|required|string|max:20',
        ]);

        // Mail::send() throws an exception on failure — use try/catch instead of
        // checking the return value (which is void/SentMessage and not reliably truthy).
        try {
            Mail::to('support@searchadeal.online')->send(new ContactMail($data));

            return redirect()->route('index')->with('success', 'Your message has been sent! We\'ll get back to you shortly.');
        } catch (Throwable $e) {
            // Log for observability without leaking internals to the user
            logger()->error('ContactMail failed: ' . $e->getMessage());

            return redirect()->back()->with('error', 'We could not send your message right now. Please try again later.');
        }
    }
}
