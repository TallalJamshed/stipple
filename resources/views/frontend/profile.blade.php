@extends('frontend.layouts.default-layout')
@section('content')
<div class="container-fluid profile">


<!-- RowB col1 -->
        <div class="row b">
            <div class="col-2 bc1">
                <img src="Images/avatar.png">
                <h1>Luca Pisanu</h1>
                <p><i class="fas fa-star" style="color: #533e99; margin-right: 10px;"></i>4.5</p>
                <h2>Visual Development Artist</h2>
                <h2>DreamWorks Animation</h2>
                <a href="#" style="text-decoration: none;">
                    <h2>http//:stipple.com</h2>
                </a>
                <h3><i class="fas fa-map-marker-alt"></i> Los Angeles, CA, USA. </h3>
                <button id="follow-button" class="btn btn-primary">FOLLOW</button>

                <h4>SKILLS</h4>
                <button id="btn" class="btn btn-primary">UI/UX</button>
                <button id="btn" class="btn btn-primary">illustration</button>
                <button id="btn" class="btn btn-primary">photography</button>
                <button id="btn" class="btn btn-primary">print design</button>
                <button id="btn" class="btn btn-primary">web design</button>


            </div>






    <!-- RowB Col2 -->
            <div class="col-10 bc2">
                <div class="row r1">
                    <div class="col ">
                        <caption>
                            <h1>Projects</h1>
                            <p>20</p>
                        </caption>

                    </div>
                    <div class="col">
                        <h1>Appreciations</h1>
                        <p><i class="far fa-heart icon" style="color:red; font-size: 2vw; margin: 5px;"></i>999</p>
                    </div>
                    <div class="col">
                        <h1>Followers</h1>
                        <p>200</p>
                    </div>
                    <div class="col">
                        <h1>Following</h1>
                        <p>1000</p>
                    </div>
                </div>





                <!--RowB col2  Projects Section -->
                <div class="row r2 " id="load">
                    <div class="col">
                        <div class="card">
                            <a href="#"><img src="Images/card.jpg"></a>
                            <div class="card1">
                                <h1>UX/UI</h1>
                                <p>10 Projects</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <img src="Images/card.jpg">
                            <div class="card1">
                                <h1>Print Design</h1>
                                <p>05 Projects</p>
                            </div>
                        </div>
                    </div>



                    <div class="col">
                        <div class="card">
                            <img src="Images/card.jpg">
                            <div class="card1">
                                <h1>Animation</h1>
                                <p>04 Projects</p>
                            </div>
                        </div>
                    </div>

                </div>





                <!--RowB col1 Slide with Cards -->
                <div class="row r3" id="load1" style="display: none;">

                    <div class="row r31">
                        <div class="col-2">
                            <a class="prev" style="max-width: 25%; " href="#myCarousel" role="button" data-slide="prev">
                                <img src="Images/left.png" style="float: left;  max-width: 25%;">
                                <h2 style="float:left;">UX/UI</h2>
                            </a>

                        </div>
                        <div class="col-8">
                            <h1>#PrintDesign</h1>
                        </div>
                        <div class="col-2">
                            <a class="next " style="max-width: 25%;" href="#myCarousel" role="button" data-slide="next">
                                <img src="Images/right.png" style="float: right; max-width: 25%;">
                                <h2 style="float:right;">Animation</h2>
                            </a>
                        </div>
                    </div>


                    
                    <div id="myCarousel" class="carousel slide" data-interval="false">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row r32">
                                    <div class="col">
                                        <img src="Images/card.jpg">
                                        <div class="row items">
                                            <div class="col">
                                                <p>John Doe</p>
                                            </div>
                                            <div class="col">
                                                <p><i class="fas fa-star"
                                                        style="color: #533e99; margin-right: 4px;"></i>4.5</p>
                                            </div>
                                            <div class="col">
                                                <p style="float: right;"><i class="far fa-heart h"
                                                        style="color:red;     margin-right: 4px;" height="1"
                                                        width="1"></i>799</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <img src="Images/card.jpg">
                                        <div class="row items">
                                            <div class="col">
                                                <p>John Doe</p>
                                            </div>
                                            <div class="col">
                                                <p><i class="fas fa-star"
                                                        style="color: #533e99; margin-right: 4px;"></i>4.5</p>
                                            </div>
                                            <div class="col">
                                                <p style="float: right;"><i class="far fa-heart h"
                                                        style="color:red;     margin-right: 4px;" height="1"
                                                        width="1"></i>799</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <img src="Images/card.jpg">
                                        <div class="row items">
                                            <div class="col">
                                                <p>John Doe</p>
                                            </div>
                                            <div class="col">
                                                <p><i class="fas fa-star"
                                                        style="color: #533e99; margin-right: 4px;"></i>4.5</p>
                                            </div>
                                            <div class="col">
                                                <p style="float: right;"><i class="far fa-heart h"
                                                        onclick="myFunction(this)"
                                                        style="color:red;  margin-right: 4px;" height="1"
                                                        width="1"></i>799</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="carousel-item">
                                2

                            </div>
                            <div class="carousel-item">
                                3
                            </div>
                        </div>

                    </div>


                </div>
            </div>


<!-- ROW C -->
            <div class="row c">
                <div class="col">
                    <h1>#<span style="color: #533e99;">MEETUPS</span>NEAR<span style="color: #533e99;">YOU</span></h1>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <img src="Images/row4.jpg">
                                <div class="card1">
                                    <h2>Free</h2>
                                    <div class="details">
                                        <h3>sketch islamabad</h3>
                                        <h4><i class="far fa-calendar-alt" style="color: #fa6753;"></i> SAt, Jul 25
                                            17:00.
                                        </h4>
                                        <h4><i class="fas fa-map-marker-alt" style="color: #fa6753;"></i> Pearl
                                            Continental
                                            Hotel, Islamabad. </h4>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="Images/row4.jpg">
                                <div class="card1">
                                    <h2>&#36;10</h2>
                                    <div class="details">
                                        <h3>sketch islamabad</h3>
                                        <h4><i class="far fa-calendar-alt" style="color: #fa6753;"></i> SAt, Jul 25
                                            17:00.
                                        </h4>
                                        <h4><i class="fas fa-map-marker-alt" style="color: #fa6753;"></i> Pearl
                                            Continental
                                            Hotel, Islamabad. </h4>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="Images/row4.jpg">
                                <div class="card1">
                                    <h2>Free</h2>
                                    <div class="details">
                                        <h3>sketch islamabad</h3>
                                        <h4><i class="far fa-calendar-alt" style="color: #fa6753;"></i> SAt, Jul 25
                                            17:00.
                                        </h4>
                                        <h4><i class="fas fa-map-marker-alt" style="color: #fa6753;"></i> Pearl
                                            Continental
                                            Hotel, Islamabad. </h4>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

    </div>
    <script>
         

            $(document).ready(function () {
                $("#follow-button").click(function () {
                    if ($("#follow-button").text().trim() == "FOLLOW") {
                        $("#follow-button").text('FOLLOWING');
                        $("#follow-button").css({ 'background-color': '#ededed', 'color': ' #808080', 'border': '1px solid #8a898a' });
                    } else {
                        $("#follow-button").text('FOLLOW');
                        $("#follow-button").css({ 'background': '#fd624d', 'color': 'white', 'border': '1px solid #fd624d' });

                    }
                });

                $('.card').click(function () {

                    $('#load').css({ 'display': 'none' });
                    $('#load1').css({ 'display': 'block' });

                });

                $(".h").click(function () {
                    $(this).toggleClass('far');
                    $(this).toggleClass('fas');
                });

            });




        </script>

@endsection