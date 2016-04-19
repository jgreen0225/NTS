<?php

namespace App\Http\Controllers;

use Request;
use App\Customers;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CustController extends Controller
{
    public function customer(){
        $customers = Customers::all();

        return view ('Customers.view', compact('customers'));
    }
    public function show($id) {
        $customer = Customers::findOrFail($id);



        return view('Customers.show', compact('customer'));
    }
    public function createCust() {
        return view('Customers.create');
    }

    public function store()
    {



        Customers::create(Request::all());


        return redirect('Customers');
    }

}
