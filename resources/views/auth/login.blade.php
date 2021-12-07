@extends('layouts.app')
@section('content')
<div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="loginstyle/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>
              <p class="mb-4">Login to access the Testingpanel of Tik-Tasks</p>
            </div>
            <form action="{{ route('login') }}" method="post">
            @csrf
              <div class="form-group first">
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group last mb-4">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="password" placeholder="password">
                
              </div>
              <div class="form-group last mb-4">
              <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
               </button>
                
              </div>
              
    
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
@endsection
