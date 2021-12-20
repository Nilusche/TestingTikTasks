@extends('layouts.app')
@section('content')
<div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/undraw_software_engineer_re_fyew.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Register</h3>
              <p class="mb-4">Register to access the Testingpanel (use new email and not a private mail</p>
            </div>
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="form-group first">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="email" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group first">
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="password" placeholder="password">
                
                </div>
                <div class="form-group last mb-4">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
                </div>
                <div class="form-group last mb-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
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