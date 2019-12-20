<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list(){
        //$customers = Customer::all();
        $activeCustomers = Customer::active()-> get();
        $inactiveCustomers = Customer::inactive() ->get();

       // dd($customers);

        return view('internals.customers', compact('activeCustomers', 'inactiveCustomers'));
        
    }
    public function store()
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
        ]);
    
        Customer::create($data); 
     
        return back();
    }
}
