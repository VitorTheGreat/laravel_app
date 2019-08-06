<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Company;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    // List the table
    public function index()
    {

        // $customers = Customer::all(); //Here we have a list of 'customers'

        // $activeCustomers = Customer::where('active', 1)->get(); //Where active column is equal to 1
        // $inactiveCustomers = Customer::where('active', 0)->get(); //Where active column is equal to 0
        // or we do this way

        // Scope Method using the model
        $customers = Customer::all();
        $companies = Company::all();
        // dd($customers); //for testing

        //Passing data to the views
        // return view('internals.customers', [
        //     //Array name passing to the view
        //     'activeCustomers' => $activeCustomers,
        //     'inactiveCustomers' => $inactiveCustomers

        // ]);

        // or

        return view('customers.index', compact('customers', 'companies')); //Simple and cleaner way of passing 2 or more variables
    }

    public function create()
    {
        $companies = Company::all();

        return view('customers.create', compact('companies'));
    }

    public function store()
    {
        // dd(request('name')); //for testing

        $data = request()->validate([
            'name' => 'required|min:3', //|min:3 = minimum of the 3 characters - see https://laravel.com/docs/master/validation#available-validation-rules for more
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required'
        ]); //Here laravel is validating for us if the request really has a data(if the user passed some information to the input)

        // dd($data);

        Customer::create($data); //doing this we need to go to model and create protected fields to 'mass assignment' data
        //::create($var) is the same as we do the code above
        // $customer = new Customer();
        // $customer->name = request('name');
        // $customer->email = request('email');
        // $customer->active = request('active');
        // $customer->save();

        return redirect('customers'); //returning to the page we were
    }

    //? We have this way to do in LARAVEL, passing the variable and using the model inside it
    // public function show($customer)
    // {

    //     // $customer = Customer::find($customer); //It does not bring an error page like expected so we do:
    //     $customer = Customer::where('id', $customer)->firstOrFail(); //This method bring us an error page if the 'ID' passed is null

    //     // dd($customer);

    //     return view('customers.show', compact('customer'));
    // }

    //? But we also have this way to do, it is exactly the same thing as the above, but LARAVEL made it simple using 'Route Model Binding'
    //! the variable here has to match, be named, exaclty the same in the web.php(Routes)
    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }
}
