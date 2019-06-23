<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list() {
        
        $customers = [
            'John Doe',
            'Jane Doe',
            'Bob the Builder'
        ];
    
        return view('internals.customers', [
            //Array name passing to the view
            'customers' => $customers
        ]);
    }
}
