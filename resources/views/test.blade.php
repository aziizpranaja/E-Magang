<!DOCTYPE html>
<html>
<title>index</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
<link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/img/favicon.png')}}">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url ('/asset/img/foto1.jpg');
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
.kontener
{
 position: relative;
 overflow: hidden;
 box-sizing: border-box;
 margin:80px auto;
 width: 1100px;
 height: 480px;
}
.slider img
{
 width: 1100px;
 height: 450px;
 float: left;
}
.slider
{
 position: absolute;
 width:3900px;


 animation-name:slider;
 animation-duration:16s;
 animation-timing-function: ease-in-out;
 animation-iteration-count:infinite;
 -webkit-animation-name:slider;
 -webkit-animation-duration:16s;
 -webkit-animation-timing-function: ease-in-out;
 -webkit-animation-iteration-count:infinite;
 -moz-animation-name:slider;
 -moz-animation-duration:16s;
 -moz-animation-timing-function: ease-in-out;
 -moz-animation-iteration-count:infinite;
 -o-animation-name:slider;
 -o-animation-duration:16s;
 -o-animation-timing-function: ease-in-out;
 -o-animation-iteration-count:infinite;
}
.slider:hover
{
 -webkit-animation-play-state:paused;
 -moz-animation-play-state:paused;
 -o-animation-play-state:paused;
 animation-play-state:paused;
}

.kontener:after
{
 font-size: 150px;
 position: absolute;
 z-index: 12;
 color: rgba(255,255,255, 0);
 left: 300px; top: 80px;
 -webkit-transition: 1s all ease-in-out;
 -moz-transition: 1s all ease-in-out;
 transition: 0s all ease-in-out;
}
.kontener:hover:after
{
    color: rgba(255,255,255, 0.6);
}
@-moz-keyframes slider {
 0% {
 left: 0; opacity: 0;
 }
 2% {
 opacity: 1;
 }
 20% {
 left: 0; opacity: 1;
 }
 21% {
 opacity: 0;
 }
 24% {
 opacity: 0;
 }
 25% {
 left: -1100px; opacity: 1;
 }
 45% {
 left: -1100px; opacity: 1;
 }
 46% {
 opacity: 0;
 }
 48% {
 opacity: 0;
 }
 50% {
 left: -2200px; opacity: 1;
 }
 70% {
 left: -2200px; opacity: 1;
 }
 72% {
 opacity: 0;
 }
 74% {
 opacity: 0;
 }
 75% {
 left: -3300px; opacity: 1;
 }
 95% {
 left: -3300px; opacity: 1;
 }
 97% {
 left: -3300px; opacity: 0;
 }
 100% {
 left: 0; opacity: 0;
 }
}

@-webkit-keyframes slider {
 0% {
 left: 0; opacity: 0;
 }
 2% {
 opacity: 1;
 }
 20% {
 left: 0; opacity: 1;
 }
 21% {
 opacity: 0;
 }
 24% {
 opacity: 0;
 }
 25% {
 left: -1100px; opacity: 1;
 }
 45% {
 left: -1100px; opacity: 1;
 }
 46% {
 opacity: 0;
 }
 48% {
 opacity: 0;
 }
 50% {
 left: -2200px; opacity: 1;
 }
 70% {
 left: -2200px; opacity: 1;
 }
 72% {
 opacity: 0;
 }
 74% {
 opacity: 0;
 }
 75% {
 left: -3300px; opacity: 1;
 }
 95% {
 left: -3300px; opacity: 1;
 }
 97% {
 left: -3300px; opacity: 0;
 }
 100% {
 left: 0; opacity: 0;
 }
}


@keyframes slider {
 0% {
 left: 0; opacity: 0;
 }
 2% {
 opacity: 1;
 }
 20% {
 left: 0; opacity: 1;
 }
 21% {
 opacity: 0;
 }
 24% {
 opacity: 0;
 }
 25% {
 left: -1100px; opacity: 1;
 }
 45% {
 left: -1100px; opacity: 1;
 }
 46% {
 opacity: 0;
 }
 48% {
 opacity: 0;
 }
 50% {
 left: -2200px; opacity: 1;
 }
 70% {
 left: -2200px; opacity: 1;
 }
 72% {
 opacity: 0;
 }
 74% {
 opacity: 0;
 }
 75% {
 left: -3300px; opacity: 1;
 }
 95% {
 left: -3300px; opacity: 1;
 }
 97% {
 left: -3300px; opacity: 0;
 }

 100% {
 left: 0; opacity: 0;
 }
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="/" class="w3-bar-item w3-button w3-wide">E-MAGANG</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="/login" class="w3-bar-item w3-button"><i class="fa fa-user"></i> LOGIN </a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
<a href="/login" class="w3-bar-item w3-button"><i class="fa fa-user"></i> LOGIN</a>
</nav>

  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <a href = "https://www.facebook.com/aziiz.pranaja.1"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href = "https://www.instagram.com/aziizpranaja/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
  </div>
</header>

<div class="kontener" id="home">
  <div class="slider">
    <img src="{{ ('assets/img/gambar2.jpg') }}" alt="Gambar 1">
    <img src="{{ ('assets/img/gambar3.jpg') }}" alt="Gambar 2">
    <img src="{{ ('assets/img/gambar1.jpg') }}" alt="Gambar 3">
  </div>
</div>








<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <div class="w3-xlarge w3-section">
  <a href = "https://www.facebook.com/aziiz.pranaja.1"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href = "https://www.instagram.com/aziizpranaja/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
  </div>
</footer>

<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>

