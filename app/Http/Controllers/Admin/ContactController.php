<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contactDetails(Request $request)
    {
        $name = $request -> input("name");
        $contact_email = $request -> input("contact_email");
        $message = $request -> input("message");

        date_default_timezone_set("Asia/Kolkata");
        $contact_time = date("h:i:sa");
        $contact_date = date("d-m-Y");

        $result = Contact::insert([

            "name" => $name,
            "contact_email" => $contact_email,
            "message" => $message,
            "contact_date" => $contact_date,
            "contact_time" => $contact_time
        ]);

        return $result;

        // $contact_date = $request -> input("contact_date"); 
        // $contact_time = $request -> input("contact_time"); 
    }
}
