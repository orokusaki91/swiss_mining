<?php

namespace App\Http\Controllers;

use Mail;
use Session;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    public function post(ContactFormRequest $request) {
        try {
            // info@swissmining.io
            Mail::to('disabledbyfb@gmail.com')->send(new ContactMail($request));
        	Session::flash('success', 'Vielen Dank für Ihre Nachricht. Wir melden uns innert 48 Stunden bei Ihnen.');
        } catch (Exception $e) {
            Session::flash('error', 'Etwas ist schief gelaufen. Bitte versuchen Sie es erneut.');
        }

    	return response()->json([
        	'success' => true
        ]);
    }
}
