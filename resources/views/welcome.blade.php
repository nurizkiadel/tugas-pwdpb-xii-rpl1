<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
        <style type="text/css">
    body {
	    font-family: 'Open Sans', sans-serif !important;
        background: #fff;
        color: #222;
    }
    .navbar-shrink{
    padding-top: 0;
    padding-bottom: 0;
}
.mybg-dark {
    background: #ccbbff !important;
}
header.masthead {
    position: relative;
    height: 100vh;
    background: url(' image/pmng.jpg') no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    padding-top: 8rem;
    padding-bottom: 8rem;
}
header.masthead .overlay{position:absolute;background-color:#212529;height:100%;width:100%;top:0;left:0;opacity:.3}
@media (min-width:768px) {
    header.masthead {
        padding-top: 12rem;
        padding-bottom: 12rem;
    }
    header.masthead h3 {
        font-size: 4rem;
    }
}
.testimonials{
    padding-top:5rem;
    padding-bottom:5rem;
    
}
.myform-control {
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #fff;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
button.btn.btn-light {
    position: absolute;
    background: transparent;
    border: none;
    height: 38px;
    right: 23px;
}
a.btn.btn-default.btn-scroll {
    border: 2px solid #fff;
    color: #fff;
    border-radius: 100%;
}
.big-img img {
    height: 325px;
    width:100%;
    object-fit: cover;
}
.inner-section{
 position:relative;   
}
.container.slider-top-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.btn-login {
    width: 138px;
    background: #ffc0cb !important;
    border: 1px solid #ca8011 !important;
}
.btn-login:hover{
    background: #070f81 !important;
    border: 1px solid #25a0ad !important;
}
.mfa-white {
    color: rgb(47, 228, 188) !important;
}
h3.my-heading {
    font-family: 'Kaushan Script', cursive;
    color: rgb(0, 255, 254);
    font-weight: bold;
    font-size: 30px;
    margin:0;
}
p.myp-slider.text-center {
    color: rgb(255, 255, 255);
}
.btn-register {
    width: 138px;
    background: #ffc0cb !important;
    border: 1px solid #ca8011 !important;
}
.btn-register:hover{
    background: #000080 !important;
    border: 1px solid #25a0ad !important;
}
.btn-join {
    background: #00ff00 !important;
    border: 1px solid #1fc6d8 !important;
}
section#about {
    width: 100%;
    padding-top: 2.1rem;
    padding-bottom: 2.1rem;
}
.btn-circle {
    border-radius: 50%;
}

a.btn.btn-circle.my-social-btn {
    color: #800080;
    height: 40px;
    width: 40px;
}
.inner-section h3 {
    text-transform: uppercase;
    font-weight:bold;
}
.inner-section h3:after {
    content: '';
    position: absolute;
    border-bottom: 4px solid #800080;
    width: 100%;
    max-width: 10%;
    top: 37px;
    left: 0;
}
span.bg-main {
    color: #cbaacb;
}
hr.my-border {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 2px solid #008ba3;
    width: 117px;
}
.linear-grid img {
    width: 100%;
    height: 124px;
    object-fit: cover;
}
 
.h-262 {
    height: 262px !important;
}
h3.title-heading.text-center {
    color: #fff;
    font-weight: bold;
}
p.myp.text-center {
    color: #fff;
    font-size: 14px;
    margin-bottom: 3rem;
}
.big-img2 img {
    height: 472px;
    width: 100%;
    object-fit: cover;
}
.my-grid img {
    height: 228px;
    width: 100%;
    object-fit: cover;
}
.text-block {
    min-height: 228px;
    height: auto;
    background: #fff;
    padding: 15px;
}
h5.events-heading {
    font-weight: bold;
    font-size: 17px;
}
p.myp-font {
    font-size: 15px;
}
section#group {
    background: #fff;
    height: 100%;
    width: 100%;
    padding-top: 2rem;
    padding-bottom: 2rem;
}
.card {
    font-size: 1em;
    overflow: hidden;
    padding: 0;
    border: none !important;
    border-radius: .28571429rem;
}
.card:hover {
    color: #222 !important;
    box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
}
.card-block {
    font-size: 1em;
    position: relative;
    margin: 0;
    padding: 1em;
    border: none !important;
    border-top: 1px solid rgba(34, 36, 38, .1);
    box-shadow: none;
}
.card-img-top {
    display: block;
    width: 100%;
    height: auto;
}
.card-title {
    font-size: 1.28571429em;
    font-weight: 700;
    line-height: 1.2857em;
}
.card-text {
    clear: both;
    margin-top: .5em;
    color: rgba(0, 0, 0, .68);
}
.card-footer {
    font-size: 1em;
    position: static;
    top: 0;
    left: 0;
    max-width: 100%;
    padding: .75em 1em;
    color: rgba(0, 0, 0, .4);
    border-top: 1px solid rgba(0, 0, 0, .05) !important;
    background: #fff;
}
.card-inverse .btn {
    border: 1px solid rgba(0, 0, 0, .05);
}
.mybg-music {
    background-color: #343a40;
          background: url(' image/pmng.jpg') no-repeat center center;
    background-size: cover;
}
section#marketplace {
    background: #f7f7f7;
    height: 100%;
    width: 100%;
    padding-top: 5rem;
    padding-bottom: 5rem;
}
section#marketplace .card {
    font-size: 1em;
    overflow: hidden;
    padding: 0;
    border: none;
    border-radius: .28571429rem;
    box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
}
section#artist {
    background: #fff;
    height: 100%;
    width: 100%;
    padding-top: 2rem;
    padding-bottom: 2rem;
}
a.link-color {
    color: #008ba3;
    font-weight: bold;
}
.my-right-text {
    padding-top: 3rem;
}
/***music gallery***/
.gal-item {
overflow: hidden;
}
.gal-item .box {
overflow: hidden;
}
.box img {
height: 160px;
width: 100%;
object-fit: cover;
-o-object-fit: cover;
}
/****/
.item {
position: relative;
}
.item img {
max-width: 100%;
-moz-transition: all 0.3s;
-webkit-transition: all 0.3s;
transition: all 0.3s;
}
.item:hover img {
-moz-transform: scale(1.4);
-webkit-transform: scale(1.4);
transform: scale(1.4);
}
/*sidebar navigation*/
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}
.sidenav a:hover {
    color: #f1f1f1;
}
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 0px;
    font-size: 36px;
    margin-right: 15px;
}
#main {display: none;}
#main {
	float: right;
    transition: margin-right .5s;
    
}
a.openNav {
    font-size: 26px;
    color: #ffffff;
    text-decoration: none;
}
.sidenav .nav-link {
	font-size: 13px;
	font-weight: bold;
}
.mob-ul {
    list-style-type: none;
    padding-left: 0;
}
.sidenav li{
	padding: 0 3px !important;
    position: relative;
}
.sidenav li a {
    padding: 10px 15px;
    text-transform: uppercase;
}
.sidenav ul li:hover .nav-link {
    color: #008ba3;
}
li.nav-item a:hover {
    background: #008ba3;
    color: #fffbfb !important;
}
.floating-arrow {
    -webkit-animation: floating-arrow 1.6s infinite ease-in-out 0s;
    -o-animation: floating-arrow 1.6s infinite ease-in-out 0s;
    animation: floating-arrow 1.6s infinite ease-in-out 0s;
}
 
footer.footer{padding-top:4rem;padding-bottom:4rem}
li.list-inline-item a {
    color: #fff;
    text-decoration: none;
}
 
    .text-block {
        padding: 15px;
    }
    .linear-grid img {
        width: 100%;
        height: 181px;
    }
    .my-grid img {
        width: 100%;
    }
   
   
}
@media screen and (max-width: 767px) {
    .btn-login{
       width:100%; 
    }
    .btn-register {
         width:100%; 
    }
} 
@media only screen and (min-width: 600px) and (max-width: 767px) {
    h5.events-heading {
    font-size: 20px;
}
p.myp-font {
    font-size: 15px;
}
	.navbar-toggler {display: none !important;}
	#main {display: block;}
	.header-wrap .navbar .nav-link {color: #fff;}
	.mob-ul{list-style-type: none; padding-left: 0;}
	.header-wrap .sub-menu {width: 250px;}	
	.box img {height: 100%;}
}
</style>
<title>Tugas Laravel</title>


<body>
   <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <div class="container">
            <div id="main">
                <a href="javascript:void(0)" class="openNav"><span class="fa fa-bars" onclick="openNav()"></span></a>
            </div>
        </div>


            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-link">
                        <a class="btn btn-primary btn-block btn-login" href="http://localhost:8000">BERANDA</a>
                    </li>
                    <li class="nav-link">
                        <a class="btn btn-primary btn-block btn-register" href="http://localhost:8000/profil">PROFIL</a>
                    </li>
                    <li class="nav-link">
                      <a class="btn btn-primary btn-block btn-register" href="http://localhost:8000/galeri">GALERI</a>
                  </li>

                </ul>
            </div>

        </div>
    </nav>

    
    <header class="masthead text-light ">
        <div class="overlay"></div>
        <div class="container slider-top-text">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="my-heading">  <span class="bg-main"> annyeonghaseo.. </span></h3>
                    <br>
                    <h4 class="myp-slider text-center"><b>tugas pwb membuat web menggunakan framework laravel</b></h4>
                   
                </div>
            </div>
        </div>
    </header>
 
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-6 text-center text-lg-left my-auto  wow zoomIn">
                    <ul class="list-inline mb-2">
                    </ul>
                    <p style="color:rgb(0, 0, 128);">* Nurizki Adelia Azzahro</p>
                    <p style="color:rgb(0, 0, 128);">* XII RPL 1</p>
                    <p style="color:rgb(0, 0, 128);">* Rekayasa Perangkat Lunak</p>
                </div>
                <div class="col-lg-6 text-center text-lg-right my-auto  wow zoomIn">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <a href="https://id-id.facebook.com/">
                                <i class="fa fa-facebook fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="https://twitter.com/login?lang=id">
                                <i class="fa fa-twitter fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/accounts/login/">
                                <i class="fa fa-instagram fa-2x fa-fw"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
     <script>
              new WOW().init();
              </script>
    <script>
        $(window).scroll( function(){
 
          var topWindow = $(window).scrollTop();
          var topWindow = topWindow * 1.5;
          var windowHeight = $(window).height();
          var position = topWindow / windowHeight;
          position = 1 - position;
        
          $('#bottom').css('opacity', position);
        
        });
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.display = "0";
            document.body.style.backgroundColor = "white";
        }
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginRight= "0";
            document.body.style.backgroundColor = "white";
        }
 
     $(window).on("scroll", function() {
            if ($(this).scrollTop() > 10) {
                $("nav.navbar").addClass("mybg-dark");
                $("nav.navbar").addClass("navbar-shrink");
              
            } else {
                $("nav.navbar").removeClass("mybg-dark");
                $("nav.navbar").removeClass("navbar-shrink");
               
            }
            
      
        });
        
        $(function() {
  $('#bottom').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 500);
        return false;
      }
    }
  });
});
</script>

<script>
    $(document).ready(function(){
      $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>
    </body>
  </html>