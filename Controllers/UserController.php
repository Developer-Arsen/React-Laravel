<?php

namespace App\Http\Controllers;

use App\User;
use App\Project;
use App\Task;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(20);

        return view('fronts.users', compact('users'));
    }

    public function profile($id)
    {
        $user = User::where('id', $id)->get();
        // $projects = Project::where('user_id', $id)->get()->random(8);
        $projects = Project::orderBy('like_count', 'desc')->take(8)->get();

        // dd($projects);  // dd($user);

        return view('fronts.user_profile', compact('user', 'projects'));
    }

    public function tasks($project_id)
    {
        //dd($project_id);
        $tasks = Task::where('project_id', $project_id)->get();
        // dd($tasks);
        return view('fronts.tasks', compact('tasks'));
    }
}
