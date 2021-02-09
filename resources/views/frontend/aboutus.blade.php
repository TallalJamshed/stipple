@extends('frontend.layouts.default-layout')
@section('content')
<div class="container-fluid aboutus">
<div class="row r2">
        <div class="col-4 c1">
                <h1 class="h1">#<span style="color: #533e99;">OUR</span>STORY</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
        </div>
        <div class="col-8 c2">
                <img src="Images/stipple3.png">
        </div>

    </div>



    <div class="row r3">
        <a href=""><img src="Images/stipp.png" ></a>
        <a href=""><img src="Images/sg1.png" ></a>
        <a href=""><img src="Images/proto1.png" ></a>
       <a href=""><img src="Images/sketch1.png" ></a>
       <a href=""><img src="Images/glug1.png" ></a>
        <a href=""><img src="Images/nic1.png" ></a>

    </div>
 
    <div class="row r4">
        <div class="row r1">
        <h1 class="h1">#<span style="color: #533e99;">OUR</span>TEAM</h1>
    </div>
    
                <div class="col">
                    <img src="Images/avatar.png">
                    <h1>John Doe</h1>
                    <p>CEO</p>
                </div>
                <div class="col">
                    <img src="Images/avatar.png">
                    <h1>John Doe</h1>
                    <p>CTO</p>
                </div>
                <div class="col">
                    <img src="Images/avatar.png">
                    <h1>John Doe</h1>
                    <p>Advisor</p>
                </div>
                <div class="col">
                    <img src="Images/avatar.png">
                    <h1>John Doe</h1>
                    <p>Software Engineer</p>
                </div>
      
    </div>

    <div class="row r5">
        <div class="col-3 c1">
            
        </div>
        <div class="col-6 c2">
            <h1 class="h1">#<span style="color: #533e99;">WINNING</span>STARTUP 2019</h1>
            <p>We are pleased to announce that Stippple secured <br>    First Prize at 'The World Bank's Innovation Hackathon' <br>       organized by Code For Pakistan.</p>
            <img src="Images/wb.png"> <img src="Images/cfp.png" style="border-left: 2px solid #808080; padding: 5px 0px 5px 10px; margin-left: 10px;">
        </div>
        <div class="col-3 c3">
            <img src="Images/cup.png">
        </div>
    </div>




    <div class="row r6">
        <form id="usrform">
            <h1>WRITE US HERE !</h1>
            <input type="name" placeholder="First Name" class="name" style="float: left;">   
            <input type="name" placeholder="First Name" class="name" style="float: right;"><br>
            <h6>Email Address</h6>
            <input type="email" placeholder="Username" class="un"><br>
            <h6>Write your message</h6>
            <textarea name="comment" form="usrform">Write Here...</textarea><br>
            <button class="btn btn-primary">SEND</button>
        </form>
        
    </div>
</div>


@endsection