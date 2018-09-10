<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Communityhealthworker;
use App\Models\CommunityHealthWorkerType;
use App\Http\Controllers\Controller;
use Validator;
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
        $health_workers = Communityhealthworker::all();

        return response()->json([
            'status' => 'success',
            'status_code' => '200',
            'health_workers' => $health_workers
        ], 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|unique:communityhealthworkers,email|email',
            'phone' => 'required|max:255|unique:communityhealthworkers,phone',
            'chw_type_id'=> 'required|integer',
            'password' => 'required|min:6',
            'confirm' => 'required|min:6|same:password',

        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()]);
        }

        $health_worker= new Communityhealthworker;
        $health_worker->name=$request->name;
        $health_worker->email=$request->email;
        $health_worker->chw_type_id=$request->chw_type_id;
        $health_worker->phone=$request->phone;
        $health_worker->password=bcrypt($request->password);
        $health_worker->save();

        return response()->json([
            'status' => 'success',
            'status_code' => '200',
            'message' => 'worker has been'
        ], 200);
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
