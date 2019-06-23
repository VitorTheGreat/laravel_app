<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list() {

        $customers = Customer::all(); //Here we have a list of 'customers'
        
        dd($customers); //for testing

        return view('internals.customers', [
            //Array name passing to the view
            'customers' => $customers
        ]);
    }
}
