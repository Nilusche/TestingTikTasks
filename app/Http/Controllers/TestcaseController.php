<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade as PDF;
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
            'short_description' => $request->description,
            'pre_conditions' =>$request->condition,
            'test_steps' => $request->steps,
            'test_data' => $request->data,
            'expected_result' =>$request->expected,
            'actual_result' =>$request->actual,
            'comments' => $request->comment,
        ]);

        return redirect('/index');
    }

    public function edit( $testid){
        $test = Testcase::find($testid);
        return view('edit')->with('test', $test);
    }

    public function update($testid,CaseRequest $request ){
        $test = Testcase::find($testid);
        $test->update($request->all());
        return redirect('/index');
    }

    public function download($testid){
        $test = Testcase::find($testid);
        $data = Testcase::where('id', $testid)->get();
        $pdf = PDF::loadView('invoice',compact('data'));
        return $pdf->download('Testcase_'. $testid.'_'.$test->title.'.pdf');
    }
}
