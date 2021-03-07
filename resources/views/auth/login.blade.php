@extends('frontend.layouts.access-layout')
@section('content')
<div class="container-fluid signup signin">
  <div class="row">
    <div class="col-5 signin-img">
      <img class="back-btn" src="Images/stipple4.png" alt="">
    </div>
    <div class="col-7 signup-form">
      <div class="row">
      <div class="col-1">
      <a href="./"><img class="back-btn" src="Images/left.png" alt=""></a>
      </div>
      </div>
      
      
    <div class="row form-row">
  <div class="row form">
    <div class="row heading mb-3">
      <div class="col">
        <h1>SIGN IN</h1>
        <h2>Not a member yet ? <a href="{{route('register')}}">SIGN UP</a></h2>
      </div>
    </div>

        <form action="{{route('login')}}" method="POST">
          @csrf
          <div class="row email mb-4">
              <div class="col">
                {{-- <h6>Email Address</h6> --}}
                {{-- <input type="email" placeholder="" class="un" important> --}}
                <input id="email" type="email" placeholder="Email" class="un @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
                {{-- <p>Error Message</p> --}}
                @error('email')
                    <span class="input-error">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
          </div>

          <div class="row email mb-4">
              <div class="col">
                {{-- <input type="password" placeholder="Password" class="un is-invalid" important> --}}
                <input id="password" type="password" placeholder="Password" class="un @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                {{-- <p class="Error-msg">Error Message</p> --}}
                @error('password')
                    <span class="input-error">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <a href=""><h5 style="font-size:1vw; margin-top:1.3vw;">Forgot Password?</h5></a>
              </div>
          </div>

          <div class="row submit">
              <div class="col">
                <input type="submit" value="SIGN IN" name="submit" class=" signin-btn btn btn-primary">
              </div>
          </div>
        </form>

        <div class="row links">
            <div class="col">
              <p>Or Sign In with ?</p>
          <a href="#"><img src="Images/fb1.png"></a>
          <a href="#"><img src="Images/g.png"></a>
            </div>

        </div>

      </div>


    
     </div>
@endsection
