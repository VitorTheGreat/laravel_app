<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; //VScode creates it automatically, ! REMEMBER TO IMPORT IT!!!
use App\Mail\ContactFormMail; //ContactFromMail USE

class ContactFormController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        // dd(request()->all()); //* testing if the data is ok

        //* SEND AN EMAIL, to SOMEONE using the ContactFormMail class, see: /Mail/ContactFormMail, that is where is calling the template
        Mail::to('test@test.com.br')->send(new ContactFormMail($data));

        //session()->flash('message', 'Thanks for your message');
        //return redirect('contact'); //Other way of flashing data to our views
        //or
        //with() - returns something to the redirect, in this case a message ONLY ONCE!
        return redirect('contact')->with('message', 'Thanks for your message');


        // Trying to flash error messages
        // if(Mail::to('test@test.com.br')->send(new ContactFormMail($data))) {
        //     session()->flash('message.type', 'green');
        //     session()->flash('message.text', 'Thanks for your message');
        //     return redirect('contact');
        // }
        // else {
        //     session()->flash('message.type', 'danger');
        //     session()->flash('message.text', 'Something went wrong');
        //     return redirect('contact');
        // }

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
