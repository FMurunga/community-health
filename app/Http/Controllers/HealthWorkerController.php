<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Communityhealthworker;
use App\Models\CommunityHealthWorkerType;
use Alert;

class HealthWorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $health_worker = Communityhealthworker::all();

        return view('hospital.communityhealthworker.index')->withCommunityhealthworker($health_worker);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chwType = CommunityHealthWorkerType::all();
        return view('hospital.communityhealthworker.create')->withChw($chwType);
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
            'email' => 'required|unique:communityhealthworkers,email|email',
            'phone' => 'required|max:255|unique:communityhealthworkers,phone',
            'chw_type_id'=> 'required|integer',
            'password' => 'required|min:6',
            'confirm' => 'required|min:6|same:password',

        ]);

        $health_worker= new Communityhealthworker;
        $health_worker->name=$request->name;
        $health_worker->email=$request->email;
        $health_worker->chw_type_id=$request->chw_type_id;
        $health_worker->phone=$request->phone;
        $health_worker->password=bcrypt($request->password);
        $health_worker->save();

        alert()->success('Health Worker has been created successfully', 'Success');

        return redirect('hospital/communityhealthworker');
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
        $health_worker = Communityhealthworker::find($id);
        $chwType = CommunityHealthWorkerType::all();

        return view('hospital.communityhealthworker.edit')->withWorker($health_worker)->withChw($chwType);
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
            'email' => 'required|email|unique:communityhealthworkers,email,'.$id,
            'phone' => 'required|max:255|unique:communityhealthworkers,phone,'.$id,
            'chw_type_id'=> 'required|integer',
            'password' => 'nullable|min:6',
            'confirm' => 'nullable|required_with:password|min:6|same:password',
        ]);

            $health_worker = Communityhealthworker::find($id);
            $health_worker->name=$request->name;
            $health_worker->email=$request->email;
            $health_worker->chw_type_id=$request->chw_type_id;
            
        if (!is_null($request->password)) {
            $health_worker->password=bcrypt($request->password);
        }
        
        $health_worker->save();

        return redirect('hospital/communityhealthworker');
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

        $health_worker = Communityhealthworker::find($id);
        $health_worker->delete();


        alert()->success('Health worker has been deleted successfully', 'Success');

        return redirect()->back();
    }
}
