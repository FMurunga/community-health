<?php

namespace App\Http\Controllers\Staff;


use Illuminate\Http\Request;
use App\Models\Survey;
use App\Http\Controllers\Controller;

use Alert;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $survey=Survey::all();
        return view('staff.surveys.index')->withsurveys($survey);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('staff.surveys.create');
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
        $request->validate([
            'survey_title' => 'required|max:255',
            'survey_date' => 'required|date',
            
        ]);
        $survey= new Survey;
        $survey->survey_title = $request->survey_title;
        $survey->survey_date = $request->survey_date;


        $survey->save();
          alert()->success('Survey has been created successfully', 'Success')->persistent('Close');

        return redirect('staff/surveys');


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
        $survey = Survey::find($id);

        return view('staff.surveys.edit')->withSurveys($survey);

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
            'survey_title' => 'required|max:255',
            'survey_date' => 'required|date',
            
        ]);

        $survey = Survey::find($id);
        $survey->survey_title = $request->survey_title;
        $survey->survey_date = $request->survey_date;


        $survey->save();

        return redirect('staff/surveys');

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
        $survey = Survey::find($id);
        $survey = delete();

        alert()->success('Survey has been deleted successfully', 'Success')->persistent('Close');
    }
}
