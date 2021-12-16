<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Http\Requests\CaseRequest;
use App\Models\Testcase;
use App\Models\File;
use Storage;

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
            'pre_conditions' =>$request->conditions,
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
        $files = File::where('testcases_id', $testid)->get();

        return view('edit')->with('test', $test)->with('files', $files);
    }

    public function update($testid,CaseRequest $request ){
        $test = Testcase::find($testid);
        $test->title = $request->title;
        $test->author = $request->author;
        $test->executor =$request->executor;
        $test->priority =$request->priority;
        $test->short_description = $request->description;
        $test->pre_conditions =$request->conditions;
        $test->test_steps = $request->steps;
        $test->test_data =$request->data;
        $test->expected_result =$request->expected;
        $test->actual_result =$request->actual;
        $test->comments = $request->comment;
        $test->save();
        return redirect('/index');
    }

    public function download($testid){
        $test = Testcase::find($testid);
        $data = Testcase::where('id', $testid)->get();
        $files = File::where('testcases_id', $testid)->get();
        $pdf = PDF::loadView('invoice',compact('data', 'files'));
        return $pdf->download('Testcase_'. $testid.'_'.$test->title.'.pdf');
    }

    public function destroy($testid){
        $test = Testcase::find($testid);

        $files = File::where('testcases_id', $test->id)->get();
        foreach($files as $file){
            unlink('uploads/uploads/'. $file->name);
        }

        $test->delete();

        return redirect('/index');
    }

    public function finish($testid){
        $test = Testcase::find($testid);
        $test->done = true;
        $test->save();
        return redirect('/index');
    }

}
