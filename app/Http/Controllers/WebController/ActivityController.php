<?php

namespace App\Http\Controllers\WebController;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ActivityController extends Controller
{
    public function index()
    {
        $title = 'My Todo Lists';
        $activities = [];
        if (Auth::user()) {
            $activities = Activity::where('user_id', '=', Auth::user()->id)
                ->orderBy('created_at', 'desc')->paginate(5);
        }
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

    public function listPerticular($id)
    {
        $activity = Activity::find($id);
        $activity['time'] = Carbon::parse($activity->time)->format('Y-m-d\TH:i');
        return view('activities.edit')->with('editActivity', $activity);
    }

    public function AddTodo(Request $request)
    {
        $validator =  Validator::make($request->all(), [
            'task' => 'required|string|min:5|max:255',
            'time' => 'required|date'
        ]);

        if ($validator->fails()) {
            // return response($validator->errors()->first(), 422);
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }



        $act = new Activity();

        $act->task = $request->task;
        $act->time = $request->time;
        $act->user_id = Auth::user()->id;
        $act->save();

        return redirect('/')->with('Your Todo List Has Been Inserted', 200);
    }

    public function EditTodo(Request $request, $id)
    {
        $validator =  Validator::make($request->all(), [
            'task' => 'required|string|min:5|max:255',
            'time' => 'required|date'
        ]);

        if ($validator->fails()) {
            // return response($validator->errors()->first(), 422);
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }



        $edit = Activity::find($id);
        $edit->task = $request->task;
        $edit->time = $request->time;
        $edit->save();

        return redirect('/')->with('Your Todo List Has Been Updated !..', 200);
    }

    public function done(Request $request, $id)
    {
        $d = Activity::findOrFail($id);
        $d->delete();
        return redirect('/')->with('Your Todo Has Been Deleted !..', 200);
    }
}
