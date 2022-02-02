<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('front.contact');
    }

    public function contactSubmit(Request $request)
    {
        Contact::contactSubmit($request);
        return redirect()->back()->with('message', 'Form Submitted!');
    }
}
