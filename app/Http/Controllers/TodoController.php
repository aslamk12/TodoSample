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
}
