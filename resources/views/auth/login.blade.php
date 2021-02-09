@extends('frontend.layouts.access-layout')
@section('content')
<div class="row signin">
    <form>

        <h1>SIGN IN</h1>
        <h2>Not a member yet ? <a href="{{route('register')}}"> SIGN UP</a></h2>

        <h6>Username/Email Address</h6>
        <input type="email" placeholder="" important><br>
        <input type="password" placeholder="Password" > <br>
        <a href="#" style="float: right;">Forgot Password?</a> <br>

        <button type="submit" class=" btn btn-primary">SIGN IN</button>
        <p>Or Sign In with ?</p>

        <a href="#"><img src="Images/fb1.png"></a>
        <a href="#"><img src="Images/g.png"></a>
    </form>
</div>
@endsection
