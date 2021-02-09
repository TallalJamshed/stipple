@extends('frontend.layouts.access-layout')
@section('content')
<div class="row signup">
    <form method="POST" action="{{ route('register') }}">
        <h1>SIGN UP</h1>
        <h2>Already a member ? <a href="{{route('login')}}"> SIGN IN</a></h2>
        <input type="text" placeholder="First Name" class="first_name @error('name') is-invalid @enderror  full_name" value="{{ old('name') }}" style="float: left;" important>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="text" placeholder="Last Name" class="last_name full_name" style="float: right;" important>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <br>
        <h6>Email Address</h6>
        <input type="email" placeholder="" class="un" important>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <br>
        <input type="password" placeholder="Password" class="name" style="float: left;">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="password" placeholder="Confirm Password" class="name" style="float: right;">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <br>
        <input type="text" placeholder="Country" class="name" style="float: left;">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="text" placeholder="Date Of Birth" class="name" style="float: right;">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <br>
        <input type="checkbox" id="checkbox" style="float: left;">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <label for="checkbox">By clicking Create account, I agree that I have read and
            accepted the Terms of Use and Privacy Policy.</label>
        <button type="submit" class=" btn btn-primary">SIGN UP</button>
        <p>Or Sign Up with ?</p>
        <a href="#"><img src="Images/fb1.png"></a>
        <a href="#"><img src="Images/g.png"></a>
    </form>
</div>
@endsection
