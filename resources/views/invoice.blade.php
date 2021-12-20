<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Webpage Title -->
    <title>Testing</title>
    
    <!-- Styles -->
    
    <style>
        .page-break{
            page-break-after:always;
        }
        @import url(https://fonts.googleapis.com/css?family=Space+Mono:400,700);

    body {
    background: #efefef; 
    font-family: "Space Mono";
    font-weight:400;
    color: #555;
    }

    input, button {
    font-family: "Space Mono";
    font-size:1em;
    }

    a {text-decoration: none;color:inherit;}

    .container {
    transition: all 0.2s cubic-bezier(.7,.2,.17,1);
    box-shadow: 0 0 2px hsla(0,0%,0%,0.1); 
    overflow:scroll;
    position: relative;
    margin:5% 10%;
    height: 900px;
    background: hsla(0,0%,100%,0.5);
    }



    .content {
    padding: 5%;
    overflow: scroll;
    }

    h1 {color:#ff5574;}
    p {color: #777;}

    input[type=text],
    input[type=password] {
        width: 100%;
        height: 32px;
        padding: 0px 10px;
        background-color: rgba(0,0,0,0.03);
        border: none;
        display: inline;
        color: #303030;
        font-size: 16px;
        font-weight: 400;
        float: left;
        
        -webkit-box-shadow: inset 1px 1px 0px rgba(0,0,0,0.05), 1px 1px 0px rgba(255,255,255,1);
        -moz-box-shadow: inset 1px 1px 0px rgba(0,0,0,0.05), 1px 1px 0px rgba(255,255,255,1);
        box-shadow: inset 1px 1px 0px rgba(0,0,0,0.05), 1px 1px 0px rgba(255,255,255,1);
    }

    input[type=text]:focus,
    input[type=password]:focus {
        background-color: #f8f8c6;
        outline: none;
    }

    input[type=submit]  {
    width: 100%;
    height: 48px;
    margin-top: 24px;
    padding: 0px 20px;
    font-family: 'Quicksand', sans-serif;
        font-weight: 700;
        font-size: 18px;
        color: #fff;
    line-height: 40px;
    text-align: center;
    background-color: #87314e;
        border: 1px #87314e solid;
        opacity: 1;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #df405a;
    border: 1px #df405a solid;
    }

    input[type=submit]:focus {
        outline: none;
    }

    /* --- menu --- */


    .menu__btn {
    float:left;
    background: none;
    border:none;
    padding: 1em 0.5em;
    }


    .menu__label {
    writing-mode: vertical-lr;
    font-size: 0.8em;
    letter-spacing: 0.1em;
    font-weight:bold;
    color: #ff5574;
    }

    .menu__title {font-size:1.3em;}

    .menu__container {
    transition: all 0.4s 0.3s cubic-bezier(.4,0,.17,1);
    transform: translateX(-20em);
    padding: 1em;
    color:white;
    font-size:1em;
    top:0;
    left:40%;
    font-weight:bold;
    text-align:left;
    opacity:0;
    visibility:hidden;
    position:absolute;
    }

    .menu__list {
    padding:0;
    margin-top:2em;
    }

    .menu__item {
    transition: all 0.2s;
    list-style: none;
    }

    .menu__item:hover {
    color:black;
    }

    .menu__item:before,
    .menu__item:last-child:after {
    content:'';
    display:block;
    width:100px;
    height:1px;
    background: hsla(0,0%,100%,0.5);
    margin: 1em 0;
    }

    .menu__bg-layer {
    transition: all 0.4s cubic-bezier(0.4, 0.0, 0.2, 1);
    border-radius:50%;
    opacity:0;
    position:absolute;
    transform: translate(-50%, -50%);
    background: #ff5574;
    height:0;
    width:0;
    }

    .menu__btn:hover .menu__container {
    transform: translateX(0);
    transition-delay:0;
    width:100%;
    heigth:100%;
    visibility:visible;
    opacity:1;
    }

    .menu__btn:hover .menu__bg-layer {
    padding-bottom: 250%;
    width:250%;
    opacity:1;
    }

    .menu__btn:hover .menu__bg-layer-2 {
    background: #FAFF7F;
    }

    .menu__btn:hover .menu__bg-layer-1 {
    transition-delay:0.2s;
    }
    .box select {
        background-color: #ff5574;
        color: white;
        padding: 12px;
        width: 250px;
        border: none;
        font-size: 20px;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
        -webkit-appearance: button;
        appearance: button;
        outline: none;
        cursor:pointer;
    }
    
    .box::before {
        content: "\f13a";
        font-family: FontAwesome;
        position: absolute;
        top: 0;
        right: 0;
        width: 20%;
        height: 100%;
        text-align: center;
        font-size: 28px;
        line-height: 45px;
        color: rgba(255, 255, 255, 0.5);
        background-color: rgba(255, 255, 255, 0.1);
        cursor:pointer;
    }
    
    .box:hover::before {
        color: rgba(255, 255, 255, 0.6);
        background-color: rgba(255, 255, 255, 0.2);
        cursor:pointer;
    }
    
    .box select option {
        padding: 30px;
        cursor:pointer;
    }

    textarea {
        width: 100%;
        height: 100vh;
        padding: 12px 20px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        font-size: 16px;
        resize: none;
    }



    
    /* CSS */
    .button-5 {
        align-items: center;
        background-clip: padding-box;
        background-color: #ff5574;
        border: 1px solid transparent;
        border-radius: .25rem;
        box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
        box-sizing: border-box;
        color: #fff;
        cursor: pointer;
        display: inline-flex;
        font-family: system-ui,-apple-system,system-ui,"Helvetica Neue",Helvetica,Arial,sans-serif;
        font-size: 16px;
        font-weight: 600;
        justify-content: center;
        line-height: 1.25;
        margin: 0;
        min-height: 3rem;
        padding: calc(.875rem - 1px) calc(1.5rem - 1px);
        position: relative;
        text-decoration: none;
        transition: all 250ms;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        vertical-align: baseline;
        width: 100px;
    }
    
    .button-5:hover,
    .button-5:focus {
        background-color: #fb8332;
        box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
    }
    
    .button-5:hover {
        transform: translateY(-1px);
    }
    
    .button-5:active {
        background-color: #c85000;
        box-shadow: rgba(0, 0, 0, .06) 0 2px 4px;
        transform: translateY(0);
    }
        .img {
    max-width: 100%;
    height: auto;
    
    }

    .imgitem {
        width: 90%;
        height: auto;
        margin: auto;
        
        padding: 3px;
        padding-bottom:5em;
    }

    </style>
</head>
<body>
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
@foreach($data as $test)
 <form action="/update/{{$test->id}}" method="POST">
 @csrf
  <h1>Test Case:</h1> <input type='text' name='title' value="{{$test->title}}"/>
  <h1>Use Case Referencenumber*: A_...</h1><input type='text'  name='reference' value="{{sprintf("%03d", $test->reference)}}"/>
  <h1>Author:</h1><input type='text'  name='author' value="{{$test->author}}"/>
  <h1>Executor:</h1><input type='text'  name='executor' value="{{$test->executor}}"/>
  <h1>Priority: </h1>

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
<div class="page-break"></div>
  <h2>Short-description</h2>
  <textarea name="description">{{$test->short_description}}</textarea>
  <h2>Pre-conditions</h2>
  <textarea name="conditions">{{$test->pre_conditions}}</textarea>
  <h2>Test-steps</h2>
  <textarea name="steps">{{$test->test_steps}}</textarea>
  <h2>Test-data</h2>
  <textarea name="data">{{$test->test_data}}</textarea>
  <h2>Expected result</h2>
  <textarea name="expected">{{$test->expected_result}}</textarea>
  <h2>Actual result</h2>
  <textarea name="actual">{{$test->actual_result}}</textarea>
  <h2>Comments</h2>
  <textarea name="comment">{{$test->comments}}</textarea>
  </form>
</div>

@foreach($files as $file)
<div class="imgitem">
    @if($file->type=="png"||$file->type=="jpeg")
        <img class="img"src="{{ public_path('file/'.$file->name) }}" alt="png">
    @endif
</div>
@endforeach
</div>
@endforeach

</body>
</html>
