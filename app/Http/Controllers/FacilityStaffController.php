<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use Alert;

class FacilityStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::all();

        return view('hospital.staff.index')->withStaffs($staff);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospital.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:staff,email|email',
            'phone' => 'required|max:255',
            'password' => 'required|min:6',
            'confirm' => 'required|min:6|same:password',
        ]);

        $staff = new Staff;
        $staff->name = $request->name;
        $staff->email = $request->email;
        $staff->phone = $request->phone;
        $staff->password = bcrypt($request->password);
        $staff->save();

        alert()->success('Staff has been created successfully', 'Success')->persistent('Close');

        return redirect('hospital/staff');

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
        $staff = Staff::find($id);

        return view('hospital.staff.edit')->withStaff($staff);
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
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:staff,email,'.$id,
            'phone' => 'required|max:255',
            'password' => 'nullable|min:6',
            'confirm' => 'nullable|required_with:password|min:6|same:password',
        ]);

        $staff = Staff::find($id);
        $staff->name = $request->name;
        $staff->email = $request->email;
        $staff->phone = $request->phone;

        if (!is_null($request->password)) {
            $staff->password = bcrypt($request->password);
        }
        
        $staff->save();

        return redirect('hospital/staff');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::find($id);
        $staff->delete();


        alert()->success('Staff has been deleted successfully', 'Success')->persistent('Close');

        return redirect()->back();
    }
}
