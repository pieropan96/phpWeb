<?php

namespace tasks\Http\Controllers;

use Illuminate\Http\Request;
use tasks\Task;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userID = Auth::user()->id;
        $produtos = Task::where('users_id', '!=',$userID)->get();
        return view('home', array('produtos' => $produtos));
    }
    public function negociar($id)
    {

        $produtos = Task::find($id);
        return view('home.negociar', array('produtos' => $produtos));
    }
}
