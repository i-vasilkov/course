<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\User;
use Illuminate\Http\Request;

class FirstTestController extends Controller
{
    public function index()
    {
//        $user = new User();
//        $user->name = 'First user';
//        $user->password = 'pass';
//        $user->email = 'new@new.new';
//        $user->save();
//
//        $user = User::where('email', 'new@new.new')->first();
//        $user->name = 'New Name 1';
//        $user->save();
//
//        $user = User::where('email', 'new@new.new')->first();
//        dump($user->name);
//
//        User::where('email', 'new@new.new')
//            ->update(['name' => 'New Name 2']);
//
//        $user = User::where('email', 'new@new.new')->first();
//        dump($user->name);
//        $user = User::where('email', 'new@new.new')->first();
//
//        $task = new Task();
//        $task->name = 'First task name';
//        $task->description = 'First task description';
//        $task->user_id = $user->id;
//
//        $task->save();

        $user = User::where('email', 'new@new.new')->first();

        $task = Task::create([
            'name' => 'name',
            'description' => 'desc',
            'user_id' => $user->id,
        ]);
    }
}
