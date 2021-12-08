@extends('layouts.crud')

@section('content')
<div class="container">

  
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
 <form action="/create" method="POST">
 @csrf
  <h1>Test Case:</h1> <input type='text' name='title'/>
  <h1>Author:</h1><input type='text'  name='author'/>
  <h1>Executor:</h1><input type='text'  name='executor'/>
  <h1>Priority: </h1>
  <div class="box">
  <select name="priority">
    <option value="low" selected>Low</option>
    <option value="medium">Medium</option>
    <option value="high">High</option>
  </select>
</div>
  <h2>Short-description</h2>
  <textarea name="desription"></textarea>
  <h2>Pre-conditions</h2>
  <textarea name="conditions"></textarea>
  <h2>Test-steps</h2>
  <textarea name="steps"></textarea>
  <h2>Test-data</h2>
  <textarea name="data"></textarea>
  <h2>Expected result</h2>
  <textarea name="expected"></textarea>
  <h2>Actual result</h2>
  <textarea name="actual"></textarea>
  <h2>Comments</h2>
  <textarea name="comment"></textarea>
  <button class="button-5" role="button">Save</button>
  </form>
</div>


</div>
@endsection