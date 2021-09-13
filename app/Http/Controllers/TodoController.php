<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function home(){

        $todos = Todo ::all();

        //dd($todos);



            return view('home',['todos'=>$todos]);
    }
    public function store(Request $request){

        $validateData = $request->validate([
            'title'=>['required','max:124']
        ]);

        Todo::create($validateData);


        // $todo= new Todo;
        // // $todo->title=$request->post('title');
        // $todo->title=$request->title;
        // $todo -> save();
         return redirect(route('home'));

    }
    public function edit(Todo $todo){

        // $todo=Todo::findorFail($id);
        // if(!$todo) return abort(404);
        // return view('update',['todo'=>$todo]);
        return view('update',compact('todo'));

    }
    public function update(Request $request, Todo $todo){
        $validateData = $request->validate([
            'title'=>['required','max:124']
        ]);
        // $todo->title=$validateData['title'];
        // $todo->save();
        $todo->update($validateData);
        return redirect(route('home'));

    }
    public function delete(Todo $todo){
        $todo->delete();
        return back();
    }
}
