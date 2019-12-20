<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Company;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list(){
        //$customers = Customer::all();
        $activeCustomers = Customer::active()-> get();
        $inactiveCustomers = Customer::inactive() ->get();
        $companies =  Company::all();

       // dd($customers);

        return view('internals.customers', compact('activeCustomers', 'inactiveCustomers', 'companies'));
        
    }
    public function store()
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required',
        ]);
    
        Customer::create($data); 
     
        return back();
    }
}
