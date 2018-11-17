<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Resources\TaskCollection as TaskCollection;
use \App\Http\Resources\Task as TaskResource;
use \App\Task as Task;

class TaskController extends Controller
{
    /**
     * Create one Task.
     *
     * @param  Request  $request
     * @return Response
     */

    public function create(Request $request){

        $request->validate([
            'task' => 'required'
        ]);
        

        try{
            $task = new Task;
            $task->task = $request->task;
            $task->completed = 0;
            $task->save();
            if($task){
                return response()->json([
                    'created' => true
                ]);
            }
        }catch(\Exception $e ){
           
        }

        

        
    }

     /**
     * Get a collection of all Tasks
     *
     * @param  Request  $request
     * @return Response
     */

    public function all(){
        return new TaskCollection(Task::all());
    }

    /**
     * Get the specified Task.
     *
     * @param  Request  $request
     * @return Response
     */

    public function find(Request $request){
        return new TaskResource(Task::find($request->id));
    }

    /**
     * Update the specified Task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function update(Request $request)
    {
        $task = Task::find($request->id);
        $task->task = $request->task;
        $task->completed = $request->completed;
        $task->save();
    }

    public function delete(Request $request)
    {
        // return $request->id;
        $task = \App\Task::find( $request->id )->delete();
        if($task){
            return response()->json([
                'deleted' => true
            ]);
        }
    }
}
