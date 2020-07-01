<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    
    public function index()
    {
        $todo=Todo::orderBy('completed')->get();
        return view('todo.index')->with('todo',$todo);
    }

    public function create(){
    
        return view('todo.create');
    }

    public function edit($id)
    {
        $todo=Todo::findOrFail($id);

         return view ('todo.edit')->with(['todo'=>$todo]);        
    }
    
    public function store(Request $request)
    {
   
       Todo::create($request->all());
       return redirect()->back()->with('message','task create successfully');   
    }

    public function update(Request $request, Todo $todo)
    {

        $todo->title=$request->title;
        $todo->save();
       return redirect()->route('todo.index')->with('message','task updated successfully'); 
    
    }
    
    public function completed (Request $request, Todo $todo){
        $todo->update(['completed'=>1]);
        return redirect()->back()->with('message','task completed !'); 

    }
     public function incompleted (Request $request ,Todo $todo){
        $todo->update(['completed'=>0]);
        return redirect()->back()->with('message','task incompleted !'); 

    }
    public function delete(Request $request,Todo $todo)
    {
        $todo->delete();
        return redirect()->back()->with('message','task deleted !'); 

    }

    public function show(Todo $todo)
    {
        //
    }
}
