<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list()
    {

        $customers = Customer::all(); //Here we have a list of 'customers'

        // dd($customers); //for testing

        return view('internals.customers', [
            //Array name passing to the view
            'customers' => $customers
        ]);
    }

    public function create()
    {
        // dd(request('name')); //for testing

        $data = request()->validate([
            'name' => 'required|min:3' //|min:3 = minimum of the 3 characters - see https://laravel.com/docs/master/validation#available-validation-rules for more
        ]); //Here laravel is validating for us if the request really has a data(if the user passed some information to the input)

        $customer = new Customer();
        $customer->name = request('name');
        $customer->save();

        return back(); //returning to the page we were
    }
}
