@extends('frontend.layouts.access-layout')
@section('content')
<div class="row signup">

      <div class="row form">
        <div class="row heading">
            <div class="col">
              <h1>SIGN UP</h1>
              <h2>Already a member ? <a href="{{route('login')}}">SIGN IN</a></h2>
            </div>
        </div>

        <div class="row fullname">
            <div class="col-md-6">
              {{-- <input type="text" placeholder="First Name" class="un" style="float: left;"> --}}
              <input id="first_name" placeholder="First Name" type="text"  class="un @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" style="float: left;" autocomplete="first_name">
              @error('first_name')
                  <span class="">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <p class="Error-msg">Error Message</p>
            </div>
            <div class="col-md-6">
              {{-- <input type="text" placeholder="Last Name" class="un" style="float: right;"> --}}
              <input id="last_name" placeholder="Last Name" type="text"  class="un is-invalid" name="last_name" value="{{ old('last_name') }}" style="float: right;" autocomplete="last_name">
              @error('first_name')
                  <span class="invalid-message">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              {{-- <p class="Error-msg">Error Message</p> --}}
            </div>
        </div>

        <div class="row email">
            {{-- <div class="col-md-12"> --}}
              {{-- <h6>Email Address</h6> --}}
              {{-- <input type="email" placeholder="" class="un" important> --}}
              <input id="email" placeholder="Email" type="text"  class="un @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" style="float: left;" autocomplete="email">
              @error('email')
                  <span class="">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <p class="Error-msg">Error Message</p>
            {{-- </div> --}}

        </div>

        <div class="row password">
            <div class="col">
              {{-- <input type="password" placeholder="Password" class="un" style="float: left;"> --}}
              <input id="password" placeholder="Password" type="password"  class="un @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" style="float: left;" autocomplete="password">
              @error('password')
                  <span class="">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="col">
              {{-- <input type="password" placeholder="Confirm Password" class="un" style="float: right;"> --}}
              <input id="password_confirmation" placeholder="Confirm Password" type="password"  class="un @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="{{ old('password_confirmation') }}" style="float: right;" autocomplete="password_confirmation">
              @error('password_confirmation')
                  <span class="">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <p class="Error-msg"> Error Message</p>
        </div>

        <div class="row dob">
            <div class="col">
              {{-- <input type="text" placeholder="Country" class="un" style="float: left;">  --}}
              <input id="country" placeholder="Country" type="text"  class="un @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" style="float: left;" autocomplete="country">
              @error('country')
                  <span class="">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="col">
              {{-- <input type="text" placeholder="Date Of Birth" class="un" style="float: right;"> --}}
              <input id="date_of_birth" placeholder="Date Of Birth" type="text"  class="un @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" style="float: right;" autocomplete="date_of_birth">
              @error('date_of_birth')
                  <span class="">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <p class="Error-msg">Error Message</p>

        </div>

        <div class="row checkbox">
            <div class="col">
              <input type="checkbox" id="checkbox" style="float: left;">
              <label for="checkbox" class="not-checked">By clicking Create account, I agree that I have read and
            accepted the Terms of Use and Privacy Policy.</label>
            
            </div>

        </div>

        <div class="row submit">
            <div class="col">
              <input class="signup-btn btn btn-primary" type="submit" value="SIGN UP" name="signup">
              {{-- <a class=" btn btn-primary" href="{{route('register')}}">SIGN UP</a> --}}
              {{-- <button type="submit" class=" btn btn-primary">SIGN UP</button> --}}
            </div>

        </div>

        <div class="row links">
            <div class="col">
              <p>Or Sign Up with ?</p>

          <a href="#"><img src="Images/fb1.png"></a>
          <a href="#"><img src="Images/g.png"></a>
            </div>

        </div>

      </div>
   

     </div>

@endsection
