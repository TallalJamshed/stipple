@extends('frontend.layouts.access-layout')
@section('content')
<div class="row signin">

       <div class="row form">
        <div class="row heading">
            <div class="col">
              <h1>SIGN IN</h1>
              <h2>Not a member yet ? <a href="signin.php"> SIGN UP</a></h2>

            </div>

        </div>

        

        <div class="row email">
            <div class="col">
              <h6>Email Address</h6>
              <input type="email" placeholder="" class="un" important>
              <p>Error Message</p>
            </div>

        </div>

        <div class="row email">
            <div class="col">
              <input type="password" placeholder="Password" class="un" important>
              <p>Error Message</p>
              <a href=""><h5 style="font-size:1vw;">Forgot Password?</h5></a>
            </div>

        </div>

        

        
        
        <div class="row submit">
            <div class="col">
              <button type="submit" class=" btn btn-primary">SIGN IN</button>
            </div>

        </div>

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
