<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    // List the table
    public function list()
    {

        // $customers = Customer::all(); //Here we have a list of 'customers'

        // $activeCustomers = Customer::where('active', 1)->get(); //Where active column is equal to 1
        // $inactiveCustomers = Customer::where('active', 0)->get(); //Where active column is equal to 0
        // or we do this way

        // Scope Method using the model
        $activeCustomers = Customer::active()->get();
        $inactiveCustomers = Customer::inactive()->get();

        // dd($customers); //for testing

        //Passing data to the views
        // return view('internals.customers', [
        //     //Array name passing to the view
        //     'activeCustomers' => $activeCustomers,
        //     'inactiveCustomers' => $inactiveCustomers

        // ]);

        // or

        return view('internals.customers', compact('activeCustomers', 'inactiveCustomers')); //Simple and cleaner way of passing 2 or more variables
    }

    public function create()
    {
        // dd(request('name')); //for testing

        $data = request()->validate([
            'name' => 'required|min:3', //|min:3 = minimum of the 3 characters - see https://laravel.com/docs/master/validation#available-validation-rules for more
            'email' => 'required|email',
            'active' => 'required'
        ]); //Here laravel is validating for us if the request really has a data(if the user passed some information to the input)

        // dd($data);

        Customer::create($data); //doing this we need to go to model and create protected fields to 'mass assignment' data
        //::create($var) is the same as we do the code above
        // $customer = new Customer();
        // $customer->name = request('name');
        // $customer->email = request('email');
        // $customer->active = request('active');
        // $customer->save();

        return back(); //returning to the page we were
    }
}
