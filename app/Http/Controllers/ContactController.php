<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactStoreRequest;
use App\Models\Contact;
use App\Services\ConfigService;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('client.contact-us');
    }
    public function store(ContactStoreRequest $request)
    {
        Contact::create([
            'subject' => $request->subject,
            'name' => $request->name,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'پیام شما با موفقیت ثبت شد.');
    }

}
