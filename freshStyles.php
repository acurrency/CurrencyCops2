<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/fav.png">
        <!-- Author Meta -->
        <meta name="author" content="CodePixar">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>LinkUp</title>
        <style>
            html,
body {
  height:100%;
}
body {
  font-size:10px;
}

div.hheader {
  position: absolute;
  top: 0;
  left: 0;
  overflow: hidden;
  display:block;
  width: 100%;
  height:4em;
  background: #2d2d2d;
  box-shadow: 0px 1px 25px rgba(0, 0, 0, 0.5);
  z-index: 1;
}
div.hheader ul.nnav {
  overflow:hidden;
}
div.hheader ul.nnav li {
  float:left;
  margin:0 10px;
}
div.hheader ul.nnav li:first-child {
  margin-left:125px;
}
div.hheader ul.nnav li a {
  display:block;
  padding:0 10px;
  font-family: 'Englebert', Verdana, sans-serif;
  font-size:2em;
  letter-spacing:0.05em;
  line-height: 2.5em;
  text-decoration: none;
  text-transform: uppercase;
  text-shadow:1px 2px 2px #000000;
  color: #E5E5E5;
}

/* 3D scene */
.scene {
  overflow: hidden;
  margin:0 auto;
  width:100%;
  height:100%;
  perspective: 1000px;
  perspective-origin: 50% 25%;
  backface-visibility:  hidden;
  transform-style:  preserve-3d;
}

@-webkit-keyframes zoom-roll-top {
  50% {
    transform: rotateX(-10deg) translateZ(-200px);
  }
  100% {
    transform: rotateX(0) translateZ(0);
  }
}
@-webkit-keyframes zoom-roll-middle {
  50% {
    transform: rotateX(-10deg) translateZ(-200px);
  }
  100% {
    transform: rotateX(0) translateZ(0);
  }
}
@-webkit-keyframes zoom-roll-bottom {
  50% {
    transform: rotateX(-10deg) translateZ(-200px);
  }
  100% {
    transform: rotateX(0) translateZ(0);
  }
}
@-moz-keyframes zoom-roll-top {
  50% {
    transform: rotateX(-10deg) translateZ(-200px);
  }
  100% {
    transform: rotateX(0) translateZ(0);
  }
}
@-moz-keyframes zoom-roll-middle {
  50% {
    transform: rotateX(-10deg) translateZ(-200px);
  }
  100% {
    transform: rotateX(0) translateZ(0);
  }
}
@-moz-keyframes zoom-roll-bottom {
  50% {
    transform: rotateX(-10deg) translateZ(-200px);
  }
  100% {
    transform: rotateX(0) translateZ(0);
  }
}

.roll-camera {
  transform-style: preserve-3d;
}
.roll-camera .move-camera {
  transform-style: preserve-3d;
  transform: translateY(0px);
  transition: all 3s ease-in-out;
}

body.view-top-shelf .roll-camera {
  animation: zoom-roll-top 3s ease-in-out;
}
body.view-top-shelf .roll-camera .move-camera {
  transform: translateY(0px);
}

body.view-middle-shelf .roll-camera {
  animation: zoom-roll-middle 3s ease-in-out;
}
body.view-middle-shelf .roll-camera .move-camera {
  transform: translateY(-200px);
}

body.view-bottom-shelf .roll-camera {
  animation: zoom-roll-bottom 3s ease-in-out;
}
body.view-bottom-shelf .roll-camera .move-camera {
  transform: translateY(-400px);
}

.wallpaper {
  position: absolute;
  width: 200%;
  height: 2000px;
  margin-left:-50%;
  background-image: linear-gradient(-40deg, #769a31 10%, #526b22 25%);
}
.wallpaper:before {
  content:"";
  display:block;
  width:100%;
  height:100%;
  background: url('https://raw.github.com/peterwestendorp/shelves/master/images/white_wall.png');
}
.shelf {
  position: absolute;
  left:50%;
  margin-left:-325px;
  transform-style:  preserve-3d;
  backface-visibility:  hidden;
  transform: rotateY(90deg) rotateX(90deg) translateX(199px);
}
.shelf.top {
  top: 450px;
}
.shelf.middle {
  top: 650px;
}
.shelf.bottom {
  top: 850px;
}
.shelf .face {
  position: absolute;
  top:0;
  left:0;
  background-color: #fff7eb;
  box-shadow: inset 0 0 75px 1.5px rgba(0, 0, 0, .1);
}
.shelf .front {
  width: 100px;
  height: 700px;
  transform-style: preserve-3d;
  transform: translateX(35px) translateY(-350px) translateZ(10px);
}
.shelf .back {
  width: 100px;
  height: 700px;
  transform: translateX(35px) translateY(-350px) translateZ(-10px);
}
.shelf .left {
  width: 20px;
  height: 700px;
  background: linear-gradient(0deg, #eae3d8 0%, #fff7eb 100%);
  transform: translateX(25px) translateY(-350px) rotateY(-90deg) translateZ(0);
}
.shelf .top {
  width: 20px;
  height: 100px;
  transform: translateX(75px) translateY(300px) rotateX(90deg) rotateZ(90deg);
}
.shelf .bottom {
  width: 20px;
  height: 100px;
  transform: translateX(75px) translateY(-400px) rotateX(90deg) rotateZ(90deg);
}

/* lighting */
.shelf:before {
  content:"";
  display:block;
  width: 670px;
  height:20px;
  box-shadow: 0 -30px 30px 20px rgba(0, 0, 0, 0.5);
  transform:  rotateX(90deg)
              rotateY(90deg)
              translateX(-20px)
              translateZ(-200px)
              skew(-45deg);
}
.shelf .back:before {
  content:"";
  position: absolute;
  display:block;
  width: 100%;
  height:100%;
  background: rgba(0, 0, 0, 0.65);
}
.shelf .top:before,
.shelf .bottom:before,
.shelf .left:before,
.shelf .right:before {
  content:"";
  position: absolute;
  display:block;
  width: 100%;
  height:100%;
  background: rgba(0, 0, 0, 0.25);
}


/* photo cards */
.shelf .photocard {
  position: relative;
  display:block;
  width: 150px;
  height:100px;
  transform-style:  preserve-3d;
  transform:        rotateX(-90deg)
                    rotateY(270deg)
                    translateY(-50px)
                    translateZ(25px);
}
.shelf .photocard:after {
  content:"";
  position: absolute;
  bottom:0px;
  right:0;
  display:block;
  width: 100px;
  height:1px;
  box-shadow: 0 30px 30px 20px rgba(0, 0, 0, 0.5);
  transform:  rotateX(90deg)
              rotateZ(180deg)
              translateX(25px)
              translateY(-15px)
              skew(-45deg);
  
  /* don't apply box-shadow to FF (render bug) */
  -moz-transform: scale(0);
}
.shelf .photocard:nth-child(1n) {
  top:75px;
}
.shelf .photocard:nth-child(2n){
  top:200px;
}
.shelf .photocard:nth-child(3n){
  top: 325px;
}
.shelf .photocard img {
  display:block;
  width:150px;
  height: 100px;
  outline: 1px solid transparent; /* triggers anti-anliasing in FF */
}
</style>


<script>
$(function(){
  var centerShelfs,
      $body = $('body'),
      $topShelf = $('.shelf.top'),
      $middleShelf = $('.shelf.middle'),
      $bottomShelf = $('.shelf.bottom');

  centerShelfs = function(){
    var topShelfPosition = $body.height()/2;

    $topShelf.css('top', topShelfPosition);
    $middleShelf.css('top', topShelfPosition + 200);
    $bottomShelf.css('top', topShelfPosition + 400);
  };

  moveToShelf = function(e){
    e.preventDefault();
    $body.attr('class', '');
    $body.addClass(e.target.id);
  };

  // bind events
  $(window).on('resize', centerShelfs);
  $('.nnav a').on('click', moveToShelf);

  // move to start position
  centerShelfs();
  
  window.setTimeout(function(){
    $body.addClass('view-middle-shelf');
  }, 500);
});
</script>


        <link href = "img/product/llogo.png" rel = "icon" type = "image/x-icon">

        <!--
            CSS
            ============================================= -->
        <link rel="stylesheet" href="css/linearicons.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/themify-icons.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/nouislider.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
</head>

<body id="category">

<!--<section class="banner-area organic-breadcrumb">
                <div class="container">
                        
                </div>
    </section>-->

<div class="hheader">
    <ul class="nnav">
      <li><a href="/" id="view-top-shelf">Shelf 1</a></li>
      <li><a href="/" id="view-middle-shelf">Shelf 2</a></li>
      <li><a href="/" id="view-bottom-shelf">Shelf 3</a></li>
    </ul>
  </div>
  <div class="scene">
    <!-- camera -->
    <div class="roll-camera">
      <div class="move-camera">
        <div class="wallpaper"></div>
          <!-- shelf -->
          <div class="shelf top">
            <div class="face top"></div>
            <div class="face front">

              <a href="#" data-img-url="../photos/1.jpg" class="photocard">
                <img src="https://raw.github.com/peterwestendorp/shelves/master/photos/1.jpg" alt="">
              </a>
              <a href="#" class="photocard">
                <img src="https://raw.github.com/peterwestendorp/shelves/master/photos/2.jpg" alt="">
              </a>
              <a href="#" class="photocard">
                <img src="https://raw.github.com/peterwestendorp/shelves/master/photos/3.jpg" alt="">
              </a>

            </div>
            <div class="face back"></div>
            <div class="face left"></div>
            <div class="face bottom"></div>
          </div>
          <!-- /shelf -->

          <!-- shelf -->
          <div class="shelf middle">
            <div class="face top"></div>
            <div class="face front">

              <a href="#" data-img-url="../photos/1.jpg" class="photocard">
                <img src="https://raw.github.com/peterwestendorp/shelves/master/photos/4.jpg" alt="">
              </a>
              <a href="#" class="photocard">
                <img src="https://raw.github.com/peterwestendorp/shelves/master/photos/5.jpg" alt="">
              </a>
              <a href="#" class="photocard">
                <img src="https://raw.github.com/peterwestendorp/shelves/master/photos/6.jpg" alt="">
              </a>

            </div>
            <div class="face back"></div>
            <div class="face left"></div>
            <div class="face bottom"></div>
          </div>
          <!-- /shelf -->

          <!-- shelf -->
          <div class="shelf bottom">
            <div class="face top"></div>
            <div class="face front">

              <a href="#" data-img-url="../photos/1.jpg" class="photocard">
                <img src="https://raw.github.com/peterwestendorp/shelves/master/photos/7.jpg" alt="">
              </a>
              <a href="#" class="photocard">
                <img src="https://raw.github.com/peterwestendorp/shelves/master/photos/8.jpg" alt="">
              </a>
              <a href="#" class="photocard">
                <img src="https://raw.github.com/peterwestendorp/shelves/master/photos/9.jpg" alt="">
              </a>

            </div>
            <div class="face back"></div>
            <div class="face left"></div>
            <div class="face bottom"></div>
          </div>
          <!-- /shelf -->
        </div>
        <!-- /camera -->
      </div>
  </div>






































<script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>