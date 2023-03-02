<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\sendMail;
use Illuminate\Support\facades\Mail;

class mailController extends Controller
{
    // 4. code in method
    public function queue(Request $request)
    {
        $requestData = $request->only('emails');//use only()
        //use explode for without commaa
        $emails = explode(',', $requestData['emails']);

        // mail data
        $name = "Rajib";
        $subject = "Hello dear";
        $message = "hi we have a new offer for you";

        foreach ($emails as $email) {

            // 5. set mail send code in method
            Mail::to($email)->send(new sendMail($name, $subject,$message));
    
        }
        return redirect('/queue')->with('status', 'Email Sent Successfully');

    }
}
