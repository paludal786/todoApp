<?php

namespace App\Http\Controllers\WebController;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Validation\Rule;

class ActivityController extends Controller
{
    public function index()
    {
        $title = 'My Todo Lists';
        $activities = Activity::where('time', '<=', Carbon::now())
            ->orderBy('created_at', 'desc')->paginate(5);
        $data = array(
            'title' => $title,
            'activities' => $activities
        );
        return view('activities.index')->with($data);
    }
    public function AddTodoForm()
    {
        return view('activities.add');
    }

    public function show($id)
    {
        $activity = Activity::find($id);
        return view('activities.edit')->with('editActivity', $activity);
    }

    public function AddTodo(Request $request)
    {
        $validator =  Validator::make($request->all(), [
            'task' => 'required|string',
            'time' => 'required|date'
        ]);

        if ($validator->fails()) {
            return response($validator->errors()->first(), 422);
        }

        $act = new Activity();

        $act->task = $request->task;
        $act->time = $request->time;

        $act->save();

        return redirect('/')->with('Your Todo List Has Been Inserted', 200);
    }

    public function EditTodo(Request $request, $id)
    {
        $validator =  Validator::make($request->all(), [
            'task' => 'required|string',
            'time' => 'required|date'
        ]);

        if ($validator->fails()) {
            return response($validator->errors()->first(), 422);
        }

        $edit = Activity::find($id);
        $edit->task = $request->task;
        $edit->time = $request->time;
        $edit->save();

        return redirect('/')->with('Your Todo List Has Been Updated !..', 200);
    }
}
