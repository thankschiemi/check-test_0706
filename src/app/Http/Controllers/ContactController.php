<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactsController;
use Illuminate\Auth\Events\Login;
use App\Models\Contact1;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function confirm(ContactRequest $request)
    {
    $contact = $request->only(['first_name', 'last_name', 'gender', 
     'email','tell', 'address', 'building', 'detail']);
        return view('confirm', compact('contact'));
    }
    public function store(ContactRequest $request)
    {
        $contact = $request->only([
            'first_name', 'last_name', 'gender',
            'email', 'tell', 'address', 'building', 'detail'
        ]);
        Contact::create($contact);
        return view('thanks');
    }

    public function register()
    {
        return view('register');
    }
    public function login(Request $request)
    {
        $contact1 = $request->only(['name', 'email', 'password']);
        return $contact1;
        return view('Login', compact('contact1'));
    }
    public function admin(Request $request)
    {
        $contact1 = $request->only(['name', 'email', 'password']);
        Contact1::create($contact1);
        return view('thanks');
    }

}

