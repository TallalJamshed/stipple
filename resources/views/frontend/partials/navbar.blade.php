<!-- <div class="row head">
            <a href="Stippple.html" class="logo"><img class="logo" src="Images/stippple-logo.png"></a>

            <ul>
                <li><a href="#" class="a">DESIGNERS</a></li>
                <li><a href="#">MEETUPS</a></li>
                <li><a href="#">SHOPS</a></li>
                <li><a href="#">JOBS</a></li>
            </ul>

            <div class="row search">
                <button><i class="fas fa-search"></i></button>
                <input type="text" placeholder="">
            </div>

            <a href="#" class="btns"><i class="fas fa-comment"></i></a>
            <a href="#" class="btns"><i class="fas fa-bell"></i></a>
            <a href="profile.html" class="img"> <img src="Images/avatar.png"></a>
            <button class="btn btn-primary load">UPLOAD</button>

        </div> -->

        <div class="row , nav1">

    		<div class="col-2 , col1">
            <a href="{{route('home')}}"> <img src="{{asset('Images/stippple-logo.png')}}"> </a>
            </div>

            <div class="col-8 , col2">
                <a href="" > Designers </a>
                <a href=""> Meetups </a>
                <a href=""> Shop </a>
                <a href=""> Jobs </a>
            </div>

            <div class="col-2 , col3">
                @guest
                    <a href="{{route('login')}}" class="signin-btn btn btn-primary">SIGN IN</a>  
                @else
                    <button class="signin-btn btn btn-primary " onclick="$('#logout-form').submit()">SIGN OUT</button>
                    <form id="logout-form" action="{{route('logout')}}" method="POST">
                        @csrf
                    </form> 
                @endguest
            </div>

        </div>