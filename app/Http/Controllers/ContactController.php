<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validasi input form
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Mengirim email
        Mail::send('emails.contact', [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
        ], function ($message) use ($validated) {
            $message->to('haerulali70@gmail.com')
                ->subject($validated['subject']);
        });

        return back()->with('success', 'Pesan berhasil di kirimkan!');
    }
}
