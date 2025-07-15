<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactStoreRequest;
use App\Models\Contact;
use App\Services\ConfigService;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('client.client');
    }
    public function store(ContactStoreRequest $request)
    {
        $data = Contact::create([
            'subject' => $request->subject,
            'name' => $request->name,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        if ($request->has('message')) {
            $data->message = $request->message;
            $data->save();
        }
        return redirect()->back()->with('success', 'پیام شما با موفقیت ثبت شد.');
    }

}
