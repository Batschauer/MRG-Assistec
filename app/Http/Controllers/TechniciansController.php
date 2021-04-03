<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technician;

class TechniciansController extends Controller
{
    public function index()
    {
        $technicians = Technician::all();
        return view('technicians', compact('technicians'));
    }

    public function create()
    {
        return view('technicians.new');
    }

    public function store(Request $request)
    {
        $tec = new Technician();
        $tec->name = $request->input('tec_name');
        $tec->phone = $request->input('tec_phone');
        $tec->email = $request->input('tec_email');

        $tec->save();

        return redirect('technicians');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $tec = Technician::find($id);
        if (isset($tec)) {
            return view('technicians.edit', compact('tec'));
        }

        return redirect('/technicians');
    }

    public function update(Request $request, $id)
    {
        $tec = Technician::find($id);
        if (isset($tec)) {
            $tec->name = $request->input('tec_name');
            $tec->phone = $request->input('tec_phone');
            $tec->email = $request->input('tec_email');

            $tec->save();
        }

        return redirect('/technicians');
    }

    public function destroy($id)
    {
        $tec = Technician::find($id);
        if (isset($tec)) {
            $tec->delete();
        }

        return redirect('/technicians');
    }
}
