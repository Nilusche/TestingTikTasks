@extends('layouts.indexlayout')

@section('content')
  <div style="padding-bottom:10em;margin-top:5em; ">
  <!-- Navigation -->
  <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light mb-5" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="#">Tik Tasks</a> 

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text" href="index.html">Zinc</a> -->

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item dropdown">
                        
                        
                    </li>
                </ul>
                @if(!Auth::guest())
                <span class="nav-item">
                    <a class="btn-solid-sm" href="/create-test">Create Test</a>
                </span>
                <span class="nav-item">
                    <a class="btn-solid-sm" href="/logout">Logout</a>
                </span>
                @endif
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

      
@foreach($tests as $test)
<div class="blog-card">
    <div class="meta">
      <div class="photo" style="background-image: url(images/prog.svg")></div>
      <ul class="details">
        <li class="author"><a href="#">{{$test->author}}</a></li>
        <li class="date">created: {{$test->created_at}}</li>
        <li class="tags">
          <ul>
            <li><a href="">{{$test->priority}}</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="description">
      <h1>{{$test->title}}</h1>
      <h2>Last updated: {{$test->updated_at}}</h2>
      <p>{{$test->short_description}}</p>
      <p class="read-more">
        <a href="/edit/{{$test->id}}">Read More</a>
      </p>
    </div>
  </div>
@endforeach
  </div>
@endsection