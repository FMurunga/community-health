<?php

namespace App\Http\Controllers\HealthWorkers;

use Illuminate\Http\Request;
use App\Models\Refferal;
use App\Models\Patient;
use App\Models\HouseHold;
use App\Http\Controllers\Controller;
use Alert;

class ReferralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient_referral= Refferal::all();
        $patient=Patient::all();
        #$house=HouseHold::find($id);
        return view('communityhealthworker.patientreferrals.index')->withReferrals($patient_referral)->withPatients($patient);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $patient_referral= Refferal::find($id);
        $patient=Patient::all();
        #$house=HouseHold::find($id);
        return view('communityhealthworker.patientreferrals.edit')->withReferrals($patient_referral)->withPatients($patient);
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:255|unique:patient,phone,'.$id,
            'notes'=> 'required|max:255',
            'refferal_date'=>'required|date',
        ]);
    
           

            $patient = Patient::find($id);
            $patient_referral=Refferal::find($id);
            $patient->name=$request->name;
            $patient->phone=$request->phone;
            $patient->notes=$request->notes;
            $patient_referral->refferal_date->$request->refferal_date;

            $health_worker->save();

            return redirect('communityhealthworker/patientreferrals');
                }
 
       
        
                    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
