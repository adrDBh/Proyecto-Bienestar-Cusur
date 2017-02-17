<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNurseryCapture;
use App\Models\Patient;
use App\Models\VitalSigns;
use Illuminate\Http\Request;
use League\Flysystem\Exception;

class NurseryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Patient::all();
        return view('nursery.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nursery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNurseryCapture $request)
    {
        // Filling out the patient partially
        $patient_data = new Patient();
        $patient_data->first_name = $request->get('first_name');
        $patient_data->first_lastname = $request->get('first_lastname');
        $patient_data->second_lastname = $request->get('second_lastname');
        //Saving new patient
        $patient_data->save();

        // Filling out VitalSigns
        $vs_data = new VitalSigns();
        $vs_data->mmHG = $request->get('mmHG');
        $vs_data->FC = $request->get('FC');
        $vs_data->FR = $request->get('FR');
        $vs_data->Temp = $request->get('Temp');
        $vs_data->patient_id = $patient_data->id;
        // Saving new VitalSigns
        $vs_data->save();
        return redirect('nursery');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
