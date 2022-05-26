<?php

namespace App\Http\Controllers;

use App\Mail\HelloEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    //
    public function sendEmail(Request $req)
    {
        /**
         * Store a receiver email address to a variable.
         */
        $to = $req->input("email-to", "admin@nikolav.rs");

        /**
         * Import the Mail class at the top of this page,
         * and call the to() method for passing the
         * receiver email address.
         *
         * Also, call the send() method to incloude the
         * HelloEmail class that contains the email template.
         */
        Mail::to($to)->send(new HelloEmail);

    }
}
