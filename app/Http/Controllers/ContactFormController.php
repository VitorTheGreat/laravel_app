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

        return redirect('contact');
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
