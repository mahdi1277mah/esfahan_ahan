<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Teacher;

class UserController extends Controller
{
    public function Apping(User $user, Course $course)
    {
        $lists = auth()->user()->teachers()->get();

        return view('Home.dashboard.index' , compact( 'user', 'course', 'lists'));
    }

}
