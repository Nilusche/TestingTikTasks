@extends('layouts.crud')

@section('content')
<a class="button-5" role="button" href="/index">Back</a>
<div class="container">
<button class="menu__btn">
    <span class="menu__label">CLICK HERE TO SEE THE MENU</span>
    <div class="menu--hidden">
      <div class="menu__bg-layer menu__bg-layer-2"></div>
      <div class="menu__bg-layer menu__bg-layer-1"></div>
      <div class="menu__container">
        <span class="menu__title">Main menu</span>
        <ul class="menu__list">
          <li class="menu__item"><a href="/delete/{{$test->id}}">Delete Testcase</a></li>
          <li class="menu__item"><a href="/finish/{{$test->id}}">Mark as tested and finished</a></li>
          <li class="menu__item"><a href="https://www.softwaretestinghelp.com/test-case-template-examples/">Information about Testing</a></li>
          <li class="menu__item"><a href="/download/{{$test->id}}">Download Testcase PDF</a></li>
        </ul>
      </div>
    </div>
  </button>
  
<div class="content">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="list-group">
            @foreach ($errors->all() as $error)
                <li class="list-group-item"style="color:#ff5574;">{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif
 <form action="/update/{{$test->id}}" method="POST">
 @csrf
  <h1>Test Case:*</h1> <input type='text' name='title' value="{{$test->title}}"/>
  <h1>Author:*</h1><input type='text'  name='author' value="{{$test->author}}"/>
  <h1>Executor:</h1><input type='text'  name='executor' value="{{$test->executor}}"/>
  <h1>Priority:*</h1>
  <div class="box">
  <select name="priority">
    @if($test->priority=="low")
       <option value="low" selected>Low</option>
       <option value="medium">Medium</option>
       <option value="high">High</option>
      @elseif($test->priority=="medium")
      <option value="low" >Low</option>
       <option value="medium" selected>Medium</option>
       <option value="high">High</option>
      @elseif($test->priority=="high")
      <option value="low" >Low</option>
       <option value="medium">Medium</option>
       <option value="high" selected>High</option>
      @endif
  </select>
</div>
  <h2>Short-description*</h2>
  <textarea name="description">{{$test->short_description}}</textarea>
  <h2>Pre-conditions</h2>
  <textarea name="conditions">{{$test->pre_conditions}}</textarea>
  <h2>Test-steps*</h2>
  <textarea name="steps">{{$test->test_steps}}</textarea>
  <h2>Test-data*</h2>
  <textarea name="data">{{$test->test_data}}</textarea>
  <h2>Expected result*</h2>
  <textarea name="expected">{{$test->expected_result}}</textarea>
  <h2>Actual result*</h2>
  <textarea name="actual">{{$test->actual_result}}</textarea>
  <h2>Comments</h2>
  <textarea name="comment">{{$test->comments}}</textarea>
  <h4>All fields marked with * are non-optional</h4>
  <button class="button-5" role="button">Save</button>
  </form>
</div>


</div>


<div class="container mt-5">
        <form action="/upload-file/{{$test->id}}" method="post" enctype="multipart/form-data">
          <h3 class="text-center mb-5">Upload File in Laravel</h3>
            @csrf
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
          @endif

          @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif

            <div class="custom-file">
                <input type="file" name="files[]" class="custom-file-input" id="chooseFile" multiple>
                <label class="custom-file-label" for="chooseFile">Select file</label>
            </div>

            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                Upload Files
            </button>
        </form>
    </div>

@endsection