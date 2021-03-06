<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $users = User::all(); //追加
        $userCount = $users->count(); // 追加
        $from_user_id = Auth::id(); // 追加
        return view('home', compact('users','userCount','from_user_id')); // 追加
    }
}
