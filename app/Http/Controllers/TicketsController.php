<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Technician;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets', compact('tickets'));
    }

    public function create()
    {
        return view('tickets.new');
    }

    public function store(Request $request)
    {
        $tic = new Ticket();
        $tic->title = $request->input('tic_title');
        $tic->description = $request->input('tic_description');
        $tic->status = $request->input('tic_status');
        $tic->priority = $request->input('tic_priority');
        $tic->opening_date = $request->input('tic_opening_date');
        $tic->closing_date = $request->input('tic_closing_date');
        $tic->customer_id = $request->input('tic_customer_id');
        $tic->technician_id = $request->input('tic_technician_id');

        $tic->save();

        return redirect('tickets');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $tic = Ticket::find($id);
        if (isset($tic)) {
            return view('tickets.edit', compact('tic'));
        }

        return redirect('/tickets');
    }

    public function update(Request $request, $id)
    {
        $tic = Ticket::find($id);
        if (isset($tic)) {
            $tic->title = $request->input('tic_title');
            $tic->description = $request->input('tic_description');
            $tic->status = $request->input('tic_status');
            $tic->priority = $request->input('tic_priority');
            $tic->opening_date = $request->input('tic_opening_date');
            $tic->closing_date = $request->input('tic_closing_date');
            $tic->customer_id = $request->input('tic_customer_id');
            $tic->technician_id = $request->input('tic_technician_id');

            $tic->save();
        }

        return redirect('/tickets');
    }

    public function destroy($id)
    {
        $tic = Ticket::find($id);
        if (isset($tic)) {
            $tic->delete();
        }

        return redirect('/tickets');
    }

    public static function getCustomerName($id)
    {
        $ticket = Ticket::find($id);
        if (isset($ticket))
        {
            $customer = Customer::find($ticket['customer_id']);
            if (isset($customer))
                return $customer->name;
        }
    }

    public static function getTechnicianName($id)
    {
        $ticket = Ticket::find($id);
        if (isset($ticket))
        {
            $technician = Technician::find($ticket['technician_id']);
            if (isset($technician))
                return $technician->name;
        }
    }
}
