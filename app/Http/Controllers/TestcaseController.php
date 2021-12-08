<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CaseRequest;
use App\Models\Testcase;
class TestcaseController extends Controller
{
    public function show(){
        return view('create');
    }

    public function create(CaseRequest $request){
        Testcase::create([
            'title' => $request->title,
            'author' => $request->author,
            'executor' =>$request->executor,
            'priority' =>$request->priority,
            'short_description' => $request->desription,
            'pre_conditions' =>$request->condition,
            'test_steps' => $request->steps,
            'test_data' => $request->data,
            'expected_result' =>$request->expected,
            'actual_result' =>$request->actual,
            'comments' => $request->comment,
        ]);

        return redirect('/index');
    }
}
