<?php include "header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>

.carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
    height: 400px!important;
}
#lala { 
  margin-top: 100px;
  padding: 10px;
}
  </style>
</head>
<body >

<div class="container">
  <div class="row" id="lala">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4" ></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
        <li data-target="#myCarousel" data-slide-to="7"></li>
        <li data-target="#myCarousel" data-slide-to="8"></li>
        <li data-target="#myCarousel" data-slide-to="9"></li>
        <li data-target="#myCarousel" data-slide-to="10"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="img-logoq" src="http://www.abhibus.com/content-pages/operators/diwakar-travels/Diwakar-travels-benz-multiaxle-2.jpg" alt="Flower" width="460" height="345">
        </div>
        <div class="item ">
          <img class="img-logoq" src="http://3.bp.blogspot.com/-DdPTzG4rdCQ/UTnVPj_Y4QI/AAAAAAAAspE/SuHhmOn-6FI/s1600/IMG_7266+copy.jpg" alt="Chania" width="460" height="345">
        </div>
        <div class="item ">
          <img class="img-logoq" src="http://www.team-bhp.com/forum/attachments/commercial-vehicles-india/875101d1327156740-intercity-buses-operated-various-private-travels-stus-img_3273.jpg"  alt="Chania" width="460" height="345">
        </div>

        <div class="item">
          <img class="img-logoq" src="http://www.telugudesam.org/tdpcms/images/2012/bus.jpg" alt="Chania" width="460" height="345">
        </div>       

        <div class="item">
          <img class="img-logoq" src="http://2.bp.blogspot.com/-nAP6wmwrNx4/UEXyh4U-LoI/AAAAAAAAGs0/EZY11uOxKbg/s1600/Volvo%20B9R%209400PX.jpg" alt="Flower" width="460" height="345">
        </div>
        <div class="item">
          <img class="img-logoq" src="https://lh4.googleusercontent.com/-B27GF26WLdg/UWxR71wkZbI/AAAAAAAAIgg/hFW-J05-jb8/s800/1_DSC_0012.jpg" alt="Flower" width="460" height="345">
        </div>
        <div class="item">
          <img class="img-logoq" src="http://4.bp.blogspot.com/-XjvWxSY95co/VOiRydfactI/AAAAAAAAtoY/R7qSICYRzUY/s1600/DSC_1304(1).jpg" alt="Flower" width="460" height="345">
        </div>
        <div class="item">
          <img class="img-logoq" src="http://1.bp.blogspot.com/-kSKyb2Jp_AM/VWa8VzKKjeI/AAAAAAAAAms/0TPYuv4muec/s1600/22120_10206889468819645_4502027745278085319_n.jpg" alt="Flower" width="460" height="345">
        </div>
        <div class="item">
          <img class="img-logoq" src="http://1.bp.blogspot.com/-CVvV_lOl278/VTAUEPhP5uI/AAAAAAAAyic/0UMZKfJiThQ/s1600/DSC_2791.jpg" alt="Flower" width="460" height="345">
        </div>
        <div class="item">
          <img class="img-logoq" src="http://farm9.staticflickr.com/8534/8617600579_663a88c620.jpg" alt="Flower" width="460" height="345">
        </div>
        <div class="item">
          <img class="img-logoq" src="http://www.abhibus.com/content-pages/operators/diwakar-travels/diwakar-travels-vovlo-multiaxle.jpg" alt="Flower" width="460" height="345">
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
    <div class="col-lg-1"></div>
  </div>
</div>
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

</body>
</html>
