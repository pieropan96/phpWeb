<?php

namespace tasks\Http\Controllers;

use tasks\Troca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrocasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function enviarProposta($id,Request $request){
        $userID = Auth::user()->id;
        $troca = new Troca();
        $troca->tasks_id = $id;
        $troca->users_id = $userID;
        $troca->descricao = $request->input('descricao');
        $troca->valor = $request->input('valor');
        $troca->tasks_id_my = $request->input('tasks_id_my');
        $troca->users_recebeu= $request->input('users_recebeu');
        if ($troca->save()) {
            return redirect()->route('home');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \tasks\Troca  $troca
     * @return \Illuminate\Http\Response
     */
    public function show(Troca $troca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \tasks\Troca  $troca
     * @return \Illuminate\Http\Response
     */
    public function edit(Troca $troca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \tasks\Troca  $troca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Troca $troca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \tasks\Troca  $troca
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $troca = Troca::find($id);
        $troca->delete();
        return redirect()->back();
    }
}
