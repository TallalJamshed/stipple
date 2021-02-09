@extends('frontend.layouts.access-layout')
@section('content')
<div class="row signup">

      <div class="row form">
        <div class="row heading">
            <div class="col">
              <h1>SIGN UP</h1>
              <h2>Already a member ? <a href="signin.php"> SIGN IN</a></h2>

            </div>

        </div>

        <div class="row fullname">
            <div class="col">
              <input type="text" placeholder="First Name" class="un" style="float: left;">
            </div>
            <div class="col">
              <input type="text" placeholder="Last Name" class="un" style="float: right;">
            </div>
            <p>Error Message</p>
        </div>

        <div class="row email">
            <div class="col">
              <h6>Email Address</h6>
              <input type="email" placeholder="" class="un" important>
              <p>Error Message</p>
            </div>

        </div>

        <div class="row password">
            <div class="col">
              <input type="password" placeholder="Password" class="un" style="float: left;">
            </div>
            <div class="col">
              <input type="password" placeholder="Confirm Password" class="un" style="float: right;">
            </div>
            <p>Error Message</p>
        </div>

        <div class="row dob">
            <div class="col">
              <input type="text" placeholder="Country" class="name" style="float: left;"> 
            </div>
            <div class="col">
              <input type="text" placeholder="Date Of Birth" class="name" style="float: right;">
            </div>
            <p>Error Message</p>

        </div>

        <div class="row checkbox">
            <div class="col">
              <input type="checkbox" id="checkbox" style="float: left;">
              <label for="checkbox" >By clicking Create account, I agree that I have read and
            accepted the Terms of Use and Privacy Policy.</label>
            <p>Error Message</p>
            </div>

        </div>

        <div class="row submit">
            <div class="col">
              <button type="submit" class=" btn btn-primary">SIGN UP</button>
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
