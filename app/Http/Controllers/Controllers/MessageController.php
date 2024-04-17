<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function post(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'subject' => 'required|min:8',
            'message' => 'required',
        ]);

        Mail::send('email', [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'comment' => $request->get('comment') ],
            function ($message) {
                $message->from('youremail@your_domain');
                $message->to('youremail@your_domain', 'Your Name')
                    ->subject('Your Website Contact Form');
            });
        // Create and save a new message
        Message::create($validatedData);

        return back()->with('success', 'Your message has been sent and saved. Thank you!');
    }
}
