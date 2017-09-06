<?php include "base.php";include "header.php" ?>
<div id="wrapper">
<div class="container">
  <div class="header-image">
      <div class="row" style="background-color:none">
          <div class="col-lg-3">              
               <form name="capsform" role="form" action="selectpage.php" method="post">
                <h4 style="color:cyan;font-weight:600">Book a Ticket </h4>
                    <div class="form-group">
                    <label >Enter Source</label>
                    <input type="text" required name="caps1" size="40" value="" onchange="this.value=this.value.toUpperCase();"  class="form-control cii" id="source" /></div>
                   <center><button type="button" onclick="swap(this.form.caps1, this.form.caps2)" class="btn btn-sm"/><span class="glyphicon glyphicon-sort"></span></button></center>

                  <div class="form-group">
                    <label >Enter Destination</label>                    
                    <input type="text" required name="caps2" size="40" value="" onchange="this.value=this.value.toUpperCase();" class="form-control cii" id="destin" />
                  </div>
                  <div class="form-group">
                         <label>Date Of Journey</label>
                         <input type="text"  required style="background-color:white" name="date_of_journey" id="datepick" required readonly placeholder="Enter Journey Date" class="form-control" required> 
                  </div>
                  <input type="submit" class="btn btn-success btn-block" name="submit" value="Search Buses">
                </form>
          </div>
          <div class="col-lg-3"></div>
          <div class="col-lg-5 laxman"> <h4 style="color:cyan;font-weight:600">Our Updates..........</h4>
            <!-- <img src="http://indianautosblog.com/wp-content/uploads/2013/11/Volvo-9400-India.jpg" class="img-logo "> -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmcgASrGMk7Vh1NO1KgbVJvgxtCrAL0YoulcgM5vfKBQVqXKN_" class="img-logo">
                          <div class="carousel-caption">
                             <h3>Happy Dussera</h3>
                            <p>From Weekend Travels...@Laxman</p> 
                          </div>
                        </div>

                        <div class="item">
                          <img class="img-logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmcgASrGMk7Vh1NO1KgbVJvgxtCrAL0YoulcgM5vfKBQVqXKN_" alt="Chania">
                          <div class="carousel-caption">
                            <h3>Hello...</h3>
                            <p>Welcome to the Weekend Travels... Your Travel Expert</p>
                          </div>
                        </div>

                        <div class="item">
                          <img class="img-logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmcgASrGMk7Vh1NO1KgbVJvgxtCrAL0YoulcgM5vfKBQVqXKN_" alt="Flower">
                          <div class="carousel-caption">
                            <h3>Offers</h3>
                            <p>Get 30% OFF on Every Ticket You Book at Weekend Travels On Dussera</p>
                          </div>
                        </div>

                        <div class="item">
                          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmcgASrGMk7Vh1NO1KgbVJvgxtCrAL0YoulcgM5vfKBQVqXKN_" class="img-logo">
                          <div class="carousel-caption">
                            <h3>Easy Cancellation</h3>
                            <p>We are Accepting very less Cancellation fee.. i.e below 10%</p>
                          </div>
                        </div>
                      </div>

                      <!-- Left and right controls -->
                      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
          </div>          
      </div>
  </div>
</div>
<div class="container" style="background-color:azure;margin-top:200px;padding:10px;border-radius:10px;" >
  <div class="row">     <div class="col-lg-1"></div>

    <div class="col-lg-5" >
                    <h3 class="Padder10 TextBold Grey Small" style="color:#445B84">Top Bus Routes</h3>
                        <ul> <div class="col-lg-12">
                            <li class="LB  BMargin"><a title="Hyderabad-Bangalore" class="test-quick" href="http://www.redbus.in/bus-tickets/hyderabad-to-bangalore.aspx" target="_blank">Hyderabad-Bangalore</a></li>
                            <li class="LB  BMargin"><a title="Hyderabad-Bangalore" class="test-quick" href="http://www.redbus.in/bus-tickets/hyderabad-to-bangalore.aspx" target="_blank">Guntur-Bangalore</a></li>
                            <li class="LB  BMargin"><a title="Bangalore-Chennai" class="test-quick" href="http://www.redbus.in/bus-tickets/bangalore-to-chennai.aspx" target="_blank">Bangalore-Chennai</a></li>
                            <li class="LB  BMargin"><a title="Chennai-Coimbatore"  class="test-quick" href="http://www.redbus.in/bus-tickets/chennai-to-coimbatore.aspx" target="_blank">Chennai-Coimbatore</a></li>
                            <li class="LB  BMargin"><a title="Pune-Bangalore" class="test-quick" href="http://www.redbus.in/bus-tickets/pune-to-bangalore.aspx" target="_blank">Pune-Bangalore</a></li>
                            <li class="LB  BMargin"><a title="Mumbai-Bangalore"class="test-quick"  href="http://www.redbus.in/bus-tickets/mumbai-to-bangalore.aspx" target="_blank">Mumbai-Bangalore</a></li>
                            <li class="LB  BMargin"><a title="Chennai-Madurai" class="test-quick" href="http://www.redbus.in/bus-tickets/chennai-to-madurai.aspx" target="_blank">Chennai-Madurai</a></li>
                            <li class="LB  BMargin"><a title="Chennai-Madurai" class="test-quick" href="http://www.redbus.in/bus-tickets/chennai-to-madurai.aspx" target="_blank">Bangalore-Goa</a></li>
                            </div><!-- <div class="col-lg-6"><li class="LB  BMargin"><a title="Hyderabad-Chennai" href="http://www.redbus.in/bus-tickets/hyderabad-to-chennai.aspx" target="_blank">Hyderabad-Chennai</a></li>
                            <li class="LB  BMargin"><a title="Pune-Hyderabad" href="http://www.redbus.in/bus-tickets/pune-to-hyderabad.aspx" target="_blank">Pune-Hyderabad</a></li>
                            <li class="LB  BMargin"><a title="Coimbatore-Bangalore" href="http://www.redbus.in/bus-tickets/coimbatore-to-bangalore.aspx" target="_blank">Coimbatore-Bangalore</a></li>
                            <li class="LB  BMargin"><a title="Mumbai-Hyderabad" href="http://www.redbus.in/bus-tickets/mumbai-to-hyderabad.aspx" target="_blank">Mumbai-Hyderabad</a></li>
                            <li class="LB  BMargin"><a title="Routes Directory" href="http://www.redbus.in/bus-tickets/routes-directory.aspx" target="_blank">More Routes&gt;&gt;</a></li>
                            <li class="LB  BMargin"><a title="Pune-Goa" href="http://www.redbus.in/bus-tickets/pune-to-goa.aspx" target="_blank">Pune-Goa</a></li>
                            <li class="LB  BMargin"><a title="Bangalore-Goa" href="http://www.redbus.in/bus-tickets/bangalore-to-goa.aspx" target="_blank">Bangalore-Goa</a></li>
                            <li class="LB  BMargin"><a title="Cities Directory" href="all_cities.php" target="_blank" style="font-size:20px;color:green">View All Cities&gt;&gt;</a></li>
                      </div> --> <li class="LB  BMargin"><a title="Cities Directory" href="all_cities.php" target="_blank" style="font-size:20px;color:green">View All Cities&gt;&gt;</a></li></ul>
    </div>
    <div class="col-lg-5">

                        <h3 class="Padder10 TextBold Grey Small" style="color:#445B84">Top Bus Operators</h3>
                        <ul><div class="col-lg-12">
                            <li class="LB  BMargin"><a title="SRS Travels " href="http://srs-travels.redbus.in/" target="_blank">SRS Travels </a></li>
                            <li class="LB  BMargin"><a title="VRL  Travels" href="http://vrl-travels.redbus.in/" target="_blank">VRL  Travels</a></li>
                            <li class="LB  BMargin"><a title="Kesineni Travels " href="http://kesineni-travels.redbus.in/" target="_blank">Kesineni Travels </a></li>
                            <li class="LB  BMargin"><a title="KPN Travels" href="http://kpn-travels.redbus.in/" target="_blank">KPN Travels</a></li>
                            <li class="LB  BMargin"><a title="Kallada Travels (Suresh Kallada)" href="http://kallada-travels.redbus.in/" target="_blank">Kallada Travels (Suresh Kallada)</a></li>
                            <li class="LB  BMargin"><a title="Neeta Tours and Travels" href="http://neeta-travels.redbus.in/" target="_blank">Neeta Tours and Travels</a></li>
                            <li class="LB  BMargin"><a title="SRM Transports" href="http://srm-travels.redbus.in/" target="_blank">SRM Transports</a></li>
                            <li class="LB  BMargin"><a title="Orange Tours &amp; Travels" href="http://www.redbus.in/travels/orange-travels-orange.aspx" target="_blank">Orange Tours &amp; Travels</a></li>
                            </div><!-- <div class="col-lg-6"><li class="LB  BMargin"><a title="SVR Tours &amp; Travels" href="http://svr-travels.redbus.in/" target="_blank">SVR Tours &amp; Travels</a></li>
                            <li class="LB  BMargin"><a title="Sea bird Tourist" href="http://seabird-travels.redbus.in/" target="_blank">Sea bird Tourist</a></li>
                            <li class="LB  BMargin"><a title="Paulo Travels" href="http://www.redbus.in/travels/paulo-travels.aspx" target="_blank">Paulo Travels</a></li>
                            <li class="LB  BMargin"><a title="Kaveri Kamakshi Travels" href="http://kaveri-kamakshi-travels.redbus.in/" target="_blank">Kaveri Kamakshi Travels</a></li>
                            <li class="LB  BMargin"><a title="Sharma Transports " href="http://sharma-travels.redbus.in/" target="_blank">Sharma Transports </a></li>
                            <li class="LB  BMargin"><a title="Prasanna Purple Travels" href="http://prasanna-travels.redbus.in/" target="_blank">Prasanna Purple Travels</a></li>
                            
                        </div> --><li class="LB  BMargin"><a title="Operators Directory" href="all_operators.php" target="_blank" style="font-size:20px;color:green">View All Travels&gt;&gt;</a></li></ul>
          </div> 
    </div>
</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$(".test-quick").click(function(e) {
			e.preventDefault();
			var a = $(this).html();
			var parts = a.split('-');
			$('#source').val(parts[0]);
			$('#destin').val(parts[1]);
		})
	})
</script>
<footer>
    <div class="conatainer-fluid footer">
      <div class="col-lg-10">
        <p style="color:white">Copyright 2015 By Weekend Travels. All Rights Reserved</p>
      </div>
      <div class="col-lg-2">
        <p>Developer: Laxman@lucky</p>
      </div>
    </div>
  </footer>