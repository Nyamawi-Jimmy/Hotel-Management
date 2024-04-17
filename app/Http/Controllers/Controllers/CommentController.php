<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CommentController extends Controller{

    public function post(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        if (Mail::send('emails/comments', [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'comment' => $request->get('message') ],
            function ($message) {
                $message->from('rickiey@rickieyngambo.xyz');
                $message->to('gambo@rickieyngambo.xyz', 'Jimmy Nyamawi')
                    ->subject('Your Website Contact Form');
            })) {
            Comment::create($validatedData);

            $response = 'Your message has been sent and saved. Thank you!';
            return response()->json(['response'=> $response]);
        } else {
            $response = 'An error occurred. Try again later!';
            return response()->json(['response'=> $response]);
        }
    }
}
