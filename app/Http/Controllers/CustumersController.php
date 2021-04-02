<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustumersController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers', compact('customers'));
    }

    public function create()
    {
        return view('customers.new');
    }

    public function store(Request $request)
    {
        $cus = new Customer();
        $cus->name = $request->input('cus_name');
        $cus->birthday = $request->input('cus_birthday');
        $cus->phone = $request->input('cus_phone');
        $cus->email = $request->input('cus_email');
        $cus->address = $request->input('cus_address');
        $cus->zip_code = $request->input('cus_zip_code');
        $cus->city = $request->input('cus_city');
        $cus->state = $request->input('cus_state');

        $cus->save();

        return redirect('customers');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $cus = Customer::find($id);
        if (isset($cus)) {
            return view('customers.edit', compact('cus'));
        }

        return redirect('/customers');
    }

    public function update(Request $request, $id)
    {
        $cus = Customer::find($id);
        if (isset($cus)) {
            $cus->name = $request->input('cus_name');
            $cus->birthday = $request->input('cus_birthday');
            $cus->phone = $request->input('cus_phone');
            $cus->email = $request->input('cus_email');
            $cus->address  = $request->input('cus_address');
            $cus->zip_code = $request->input('cus_zip_code');
            $cus->city = $request->input('cus_city');
            $cus->state = $request->input('cus_state');

            $cus->save();
        }

        return redirect('/customers');
    }

    public function destroy($id)
    {
        $cus = Customer::find($id);
        if (isset($cus)) {
            $cus->delete();
        }

        return redirect('/customers');
    }
}
