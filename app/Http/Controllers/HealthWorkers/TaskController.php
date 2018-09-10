<?php

namespace App\Http\Controllers\HealthWorkers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task = Task::all();
        return view('communityhealthworker.tasks.index')->withTasks($task);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('communityhealthworker.tasks.create');
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
            'task_title' => 'required|max:255',
            'task_date' => 'required|date',
            
        ]);
        $task= new Task;
        $task->task_title = $request->task_title;
        $task->task_date = $request->task_date;


        $task->save();
          alert()->success('Task has been created successfully', 'Success')->persistent('Close');

        return redirect('communityhealthworker/tasks');

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
        $task = Task::find($id);

       return view('commmunityhealthworker.tasks.edit')->withTasks($task);
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
            'task_title' => 'required|max:255',
            'task_date' => 'required|date',
            
        ]);

        $task = Task::find($id);
        $task->task_title = $request->task_title;
        $task->task_date = $request->task_date;


        $task->save();

        return redirect('communityhealthworker/tasks');

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
          $task = Task::find($id);
        $task = delete();

        alert()->success('Task has been deleted successfully', 'Success')->persistent('Close');
    }
    
}
