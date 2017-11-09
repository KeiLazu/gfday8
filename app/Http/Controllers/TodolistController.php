<?php

namespace App\Http\Controllers;

use App\todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todolistdata = todolist::all();
        return view('todoindex', compact('todolistdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todocreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $insertTodolist->title = $request->titletodolist;
        // $insertTodolist->container = $request->containertodolist;
        // $insertTodolist->status = $request->statustodolist;
        // dd($request->all());
        todolist::create($request->all());
        // $insertTodolist->save();
        return redirect()->route('todolist.index');
        // return view('todoindex');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\todolist  $todolist
     * @return \Illuminate\Http\Response
     */
    public function show(todolist $todolist)
    {
        // dd($todolist->id);
        $todolist = todolist::where('id', $todolist->id)->first();
        // dd($todolist);
        return view('tododetail', compact('todolist'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\todolist  $todolist
     * @return \Illuminate\Http\Response
     */
    public function edit(todolist $todolist)
    {
        $todolist = todolist::find($todolist);
        return view('todoedit', compact('todolist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\todolist  $todolist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, todolist $todolist)
    {
        $todolisting = todolist::find($todolist)->first()->update($request->all());
        return redirect()->route('todolist.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\todolist  $todolist
     * @return \Illuminate\Http\Response
     */
    public function destroy(todolist $todolist)
    {
        todolist::find($todolist)->first()->delete();
        return redirect()->route('todolist.index');
    }
}
