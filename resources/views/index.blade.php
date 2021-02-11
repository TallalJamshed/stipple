@extends('frontend.layouts.default-layout')
@section('content')
<style>
  a img{
    width:20%;
    padding: 3px
  }
  a img:hover{
    border:3px solid #533e99;
    border-radius: 5px;
  }
</style>
<div class="container-fluid stpple">


    <div class="row py-3  row2">
        <div class="col">
            <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
                <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" id="btn1" data-slide-to="0" class="active" onclick="indicateFunction()"></li>
                        <li data-target="#carouselExampleIndicators" id="btn2" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" id="btn3" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner vertical ">
                            <div class="carousel-item active">
                            <div class="caption">
                            <h2>Marketplace for the <span style="color:#fa6753; font-family: rockstar; ">Designers</span></h2>
                            <p>Hunderd of agencies use Strippple to hire talent.</p>
                            <button type="button" class="btn btn-primary">HIRE A DESIGNER</button>
                            <h5>#DESIGNERS HUB</h5>
                            </div>

                          <img class="d-block img1"  src="Images/slide1.png" alt="First slide" ">

                        </div>
                         <div class="carousel-item">
                             <div class="caption">
                            <h2>Printing <span style="color:#fa6753; font-family: rockstar;" >ideas</span> come to life</h2>
                            <p>Earn recurring revenue through merchandising.</p>
                            <button type="button" class="btn btn-primary">SHOP NOW</button>
                            <h5>#MERCHANDISING</h5>
                            </div>

                         <img class="d-block img2" id="img2" src="Images/slide2.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                             <div class="caption">
                              <h2>Connect to<span style="color:#fa6753; font-family: rockstar;"> Creatives</span></h2>
                            <p>We believe every dot has a story to share.</p>
                            <button type="button" class="btn btn-primary">GET TICKET</button>
                            <h5>#COMMUNITY</h5>
                            </div>

                          <img class="d-block img3" id="img3" src="Images/slide3.png" alt="Third slide">

                            </div>
                </div>
                 <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <img src="Images/nextbtn.png">
                  </a>


            </div>

        </div>


        </div>













        <div class="row row3">
            <div class="col">
                <a href=""><img src="Images/dribble.png" ></a>
                 <a href=""><img src="Images/sg.png" ></a>
                 <a href=""><img src="Images/proto.png"></a>
                <a href=""><img src="Images/sketch.png"></a>
                <a href=""><img src="Images/glug.png" ></a>
                 <a href=""><img src="Images/nic.png"></a>
            </div>
        </div>





        <div class="row row4">
            <div class="col">
                 <h1>#<span style="color: #533e99;">PAST</span>MEETUPS</h1>
                 <p>Explore our past inspirational meetups.</p>

                 <div class="row inrow">
                     <div class="col col1">
              
                       <div class="row">
                        
                          <h1>Hello Creative! Peshawar Meetup</h1>
                          <h2>Peshawar,Pakistan</h2>
                        </div>
                   
                     </div>
                     <div class="col col1">
                     </div>
                     <div class="col col1">
                     </div>
                 </div>
                  <div class="row inrow">
                     <div class="col col1">
                     </div>
                     <div class="col col1">
                     </div>
                     <div class="col col1">
                     </div>
                 </div>
            </div>
        </div>



 <div class="row row5">

            <h1 class="h1">#<span style="color: #533e99;">TOP</span>PORTFOLIOS</h1>
                 <p class="p">Explore   &amp; get Inspired With Projects Made By Our <span style="color: #533e99;"> Stippplers. </span></p>

                 <div id="carouselExampleControls2" class="carousel car slide" data-interval="false">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="row">
                          <div class="col">
                               <div class="card-deck">
                          <div class="card" style="float: left;">
                            <img class="card-img-top" src="Images/card.jpg" alt="Card image cap">
                            <div class="btnon">
                              <button type="button" class="btn btn-primary">FOLLOW</button>
                            </div>
                            
                            <div class=" row">
                                <div class="col">
                                    <p>John Doe</p>
                                </div>
                                <div class="col">
                                    <p><i class="fas fa-star" style="color: #533e99; margin-right: 4px;"></i>4.5</p>
                                </div>
                                <div class="col">
                                    <p style="float: right;"><i class="fas fa-heart" style="color:red;     margin-right: 4px;" height="1" width="1"></i>799</p>
                                </div>

                            </div>
                            </div>
                        </div>
                          </div>
                          <div class="col">
                                        <div class="card-deck">
                          <div class="card" style="float: left;">
                            <img class="card-img-top" src="Images/card.jpg" alt="Card image cap">

                            <div class="btnon">
                              <button type="button" class="btn btn-primary">FOLLOW</button>
                            </div>
                            <div class=" row">
                                <div class="col">
                                    <p>John Doe</p>
                                </div>
                                <div class="col">
                                    <p><i class="fas fa-star" style="color: #533e99; margin-right: 4px;"></i>4.5</p>
                                </div>
                                <div class="col">
                                   <p style="float: right;"><i class="fas fa-heart" style="color:red;    margin-right: 4px; " height="1" width="1"></i>799</p>
                                </div>

                            </div>
                            </div>
                        </div>
                          </div>
                          <div class="col">
                                        <div class="card-deck">
                          <div class="card" style="float: left;">
                            <img class="card-img-top" src="Images/card.jpg" alt="Card image cap">
                            <div class="btnon">
                              <button type="button" class="btn btn-primary">FOLLOW</button>
                            </div>
                            <div class=" row">
                                <div class="col">
                                    <p>John Doe</p>
                                </div>
                                <div class="col">
                                    <p><i class="fas fa-star" style="color: #533e99; margin-right: 4px;"></i>4.5</p>
                                </div>
                                <div class="col">
                                   <p style="float: right;"><i class="fas fa-heart" style="color:red;     margin-right: 4px;" height="1" width="1"></i>799</p>
                                </div>

                            </div>
                            </div>
                        </div>
                          </div>
                          <div class="col">
                                        <div class="card-deck">
                          <div class="card" style="float: left;">
                            <img class="card-img-top" src="Images/card.jpg" alt="Card image cap">
                            <div class="btnon">
                              <button type="button" class="btn btn-primary">FOLLOW</button>
                            </div>
                            <div class=" row">
                                <div class="col">
                                    <p>John Doe</p>
                                </div>
                                <div class="col">
                                    <p><i class="fas fa-star" style="color: #533e99; margin-right: 4px;"></i>4.5</p>
                                </div>
                                <div class="col">
                                   <p style="float: right;"><i class="fas fa-heart" style="color:red;    margin-right: 4px;" height="1" width="1"></i>799</p>
                                </div>

                            </div>
                            </div>
                        </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col">
                                        <div class="card-deck">
                          <div class="card" style="float: left;">
                            <img class="card-img-top" src="Images/card.jpg" alt="Card image cap">
                            <div class="btnon">
                              <button type="button" class="btn btn-primary">FOLLOW</button>
                            </div>
                            <div class=" row">
                                <div class="col">
                                    <p>John Doe</p>
                                </div>
                                <div class="col">
                                    <p><i class="fas fa-star" style="color: #533e99; margin-right: 4px;"></i>4.5</p>
                                </div>
                                <div class="col">
                                   <p style="float: right;"><i class="fas fa-heart" style="color:red;    margin-right: 4px;" height="1" width="1"></i>799</p>
                                </div>

                            </div>
                            </div>
                        </div>
                          </div>
                          <div class="col">
                                        <div class="card-deck">
                          <div class="card" style="float: left;">
                            <img class="card-img-top" src="Images/card.jpg" alt="Card image cap">
                            <div class="btnon">
                              <button type="button" class="btn btn-primary">FOLLOW</button>
                            </div>
                            <div class=" row">
                                <div class="col">
                                    <p>John Doe</p>
                                </div>
                                <div class="col">
                                    <p><i class="fas fa-star" style="color: #533e99; margin-right: 4px;"></i>4.5</p>
                                </div>
                                <div class="col">
                                   <p style="float: right;"><i class="fas fa-heart" style="color:red;    margin-right: 4px; " height="1" width="1"></i>799</p>
                                </div>

                            </div>
                            </div>
                        </div>
                          </div>
                          <div class="col">
                                        <div class="card-deck">
                          <div class="card" style="float: left;">
                            <img class="card-img-top" src="Images/card.jpg" alt="Card image cap">
                            <div class="btnon">
                              <button type="button" class="btn btn-primary">FOLLOW</button>
                            </div>
                            <div class=" row">
                                <div class="col">
                                    <p>John Doe</p>
                                </div>
                                <div class="col">
                                    <p><i class="fas fa-star" style="color: #533e99; margin-right: 4px;"></i>4.5</p>
                                </div>
                                <div class="col">
                                   <p style="float: right;"><i class="fas fa-heart" style="color:red;    margin-right: 4px; " height="1" width="1"></i>799</p>
                                </div>

                            </div>
                            </div>
                        </div>
                          </div>
                          <div class="col">
                                        <div class="card-deck">
                          <div class="card" style="float: left;">
                            <img class="card-img-top" src="Images/card.jpg" alt="Card image cap">
                            <div class="btnon">
                              <button type="button" class="btn btn-primary">FOLLOW</button>
                            </div>
                            <div class=" row">
                                <div class="col">
                                    <p>John Doe</p>
                                </div>
                                <div class="col">
                                    <p><i class="fas fa-star" style="color: #533e99; margin-right: 4px;"></i>4.5</p>
                                </div>
                                <div class="col">
                                   <p style="float: right;"><i class="fas fa-heart" style="color:red;     margin-right: 4px; " height="1" width="1"></i>799</p>
                                </div>

                            </div>
                            </div>
                        </div>
                          </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="..." alt="Third slide">
                      <div class="row">
                          <div class="col"></div>
                          <div class="col"></div>
                          <div class="col"></div>
                          <div class="col"></div>
                      </div>
                      <div class="row">
                          <div class="col"></div>
                          <div class="col"></div>
                          <div class="col"></div>
                          <div class="col"></div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="..." alt="Third slide">
                      <div class="row">
                          <div class="col"></div>
                          <div class="col"></div>
                          <div class="col"></div>
                          <div class="col"></div>
                      </div>
                      <div class="row">
                          <div class="col"></div>
                          <div class="col"></div>
                          <div class="col"></div>
                          <div class="col"></div>
                      </div>
                    </div>
                  </div>
                 
                 </div>

                 <div class="row row2">
                    <div class="col-10 col1">
                      <button type="button" class="btn btn-primary btn1">STIPPLE NOW</button></div>  
                      <div class="col-2 col2">
                    <a class="carousel-control-prev" style="max-width: 130%;" href="#carouselExampleControls2" role="button" data-slide="prev">
                   <img src="Images/left.png" style=" max-width: 130%;">
                  </a>
                  <a class="carousel-control-next " style="max-width: 130%;" href="#carouselExampleControls2" role="button" data-slide="next">
                 <img src="Images/right.png"  style="margin-left: 0.1vw; max-width: 130%;">
                  </a>
                     </div>         
                 </div>
        </div>










        <div class="row row6">
           

                <div class="row row1">
                    <div class="col-10 col1">
                        <h1>#<span style="color: #533e99;">OUR</span>PRODUCTS</h1>
                        <p>Explore &amp; Get Inspired With Products Made By Our <span style="color: #533e99;"> Stippplers. </span></p>
                    </div>
                    <div class="col-2 col2">
                        <a class="carousel-control-prev" href="#carouselExampleControls3" role="button" data-slide="prev" style="max-width: 130%;">
                        <img src="Images/left.png" style="max-width: 130%; ">
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls3" role="button" data-slide="next" style="max-width: 130%;">
                      <img src="Images/right.png" style="max-width: 130%; ">
                      </a>
                   </div>
                </div>

                    <div id="carouselExampleControls3" class="carousel slide" data-interval="false">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <div class="row">
                            <div class="col">
                                <img src="Images/img1.jpg">
                            </div>
                            <div class="col">
                                <img src="Images/img2.jpg">
                            </div>
                            <div class="col">
                                <img src="Images/img3.jpg">
                            </div>
                            <div class="col">
                                <img src="Images/img4.jpg">
                            </div>
                              
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="..." alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="..." alt="Third slide">
                        </div>
                      </div>
                      
                    </div>

    


</div>





<div class="row row7">
            <div class="col">

                <div class="row row1">
                    <div class="col col1">
                        <h1>#<span style="color: #533e99;">STIPPPLE</h1> <h1 style="letter-spacing: 2px;">OFFICIAL INSTAGRAM</h1>
                    </div>                  
                </div>

    <div id="instafeed"></div>

                {{-- <div id="feed" class="row row2"> --}}
                    {{-- @for ($i = 0; $i < 5; $i++)
                      <img class="img-fluid" src="Images/i3.jpg" >  
                    @endfor      --}}
                        {{-- <img class="img-fluid" src="Images/i3.jpg">
               
                        <img class="img-fluid" src="Images/i3.jpg">
              
                        <img class="img-fluid" src="Images/i3.jpg">
                 
                        <img class="img-fluid" src="Images/i3.jpg"> --}}
                {{-- </div> --}}
            </div>
        </div>        
    </div>

@endsection

@section('scripts')
<script type="text/javascript">
  var feed = new Instafeed({
              accessToken: 'IGQVJXZAFhmejBJYmRmMzg4ZAEdTc3JjWXhRSElUYmMyWVBQc3RZAMU81TzdLX0tvVVhrSUZAaZAE9LdkREUHRETHBiSUR4al9JWWtVd3FYUHFaUzNlWHZAka1Jha05xT1FLMGN0Q3d6Q05iNVlNZAV9FM01WaAZDZD',
              limit: 5,
            });
  feed.run();
</script>
@endsection