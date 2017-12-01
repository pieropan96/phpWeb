<?php

namespace tasks\Http\Controllers;

use tasks\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use tasks\Troca;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userID = Auth::user()->id;
        $produtos = Task::where('users_id', '=', $userID)->get();
        $trocas = Troca::where('users_recebeu', '=', $userID)->get();
        //preciso ler tasks_id.user_id;
        return view('tasks.index', array('produtos' => $produtos), array('trocas' => $trocas));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userID = Auth::user()->id;
        $produto = new Task();
        $produto->title = $request->input('title');
        $produto->description = $request->input('description');
        $produto->valor = $request->input('valor');
        $produto->users_id = $userID;
        if ($produto->save()) {
            return redirect()->route('home');
        }
        //Task::create($request->all());
        //return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \tasks\Task $task
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userID = Auth::user()->id;
        $produtos = Task::find($id);
        $meusprodutos = Task::where('users_id', '=', $userID)->get();
        $itens = array();
        foreach ($meusprodutos as $meusproduto) {
            $itens[$meusproduto->id] = $meusproduto->title;
        }
        return view('tasks.show', array('produto' => $produtos, 'meusprodutos' => $itens), array('userl' => $userID));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \tasks\Task $task
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Task::find($id);
        return view('tasks.edit', array('produto' => $produto));
    }

    public function enviarProposta($id, Request $request)
    {
        $userID = Auth::user()->id;
        dd($request);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \tasks\Task $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $userID = Auth::user()->id;
        $produto = Task::find($id);
        if ($request->hasFile('fotoproduto')) {
            $imagem = $request->file('fotoproduto');
            $nomearquivo = md5($id) . "." . $imagem->getClientOriginalExtension();
            $request->file('fotoproduto')->move(public_path('./img/produtos/'), $nomearquivo);
        }
        $produto->title = $request->input('title');
        $produto->description = $request->input('description');
        $produto->valor = $request->input('valor');
        $produto->users_id = $userID;
        $produto->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \tasks\Task $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
