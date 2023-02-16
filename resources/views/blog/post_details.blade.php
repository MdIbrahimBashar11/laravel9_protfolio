<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>Blog - Personal Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

   <!-- Template CSS Files -->
   <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{asset('css/preloader.min.css')}}" rel="stylesheet">
   <link href="{{asset('css/circle.css')}}" rel="stylesheet">
   <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
   <link href="{{asset('css/fm.revealator.jquery.min.css')}}" rel="stylesheet">
   <link href="{{asset('css/style.css')}}" rel="stylesheet">

   <!-- CSS Skin File -->
   <link href="{{asset('css/skins/yellow.css')}}" rel="stylesheet">

   <!-- Live Style Switcher - demo only -->
   <link rel="alternate stylesheet" type="text/css" title="blue" href="{{asset('css/skins/blue.css')}}" />
   <link rel="alternate stylesheet" type="text/css" title="green" href="{{asset('css/skins/green.css')}}" />
   <link rel="alternate stylesheet" type="text/css" title="yellow" href="{{asset('css/skins/yellow.css')}}" />
   <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="{{asset('css/skins/blueviolet.css')}}" />
   <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="{{asset('css/skins/goldenrod.css')}}" />
   <link rel="alternate stylesheet" type="text/css" title="magenta" href="{{asset('css/skins/magenta.css')}}" />
   <link rel="alternate stylesheet" type="text/css" title="orange" href="{{asset('css/skins/orange.css')}}" />
   <link rel="alternate stylesheet" type="text/css" title="purple" href="{{asset('css/skins/purple.css')}}" />
   <link rel="alternate stylesheet" type="text/css" title="red" href="{{asset('css/skins/red.css')}}" />
   <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="{{asset('css/skins/yellowgreen.css')}}" />
   <link rel="stylesheet" type="text/css" href="{{asset('css/styleswitcher.css')}}" />

   <script src="{{asset('js/modernizr.custom.js')}}"></script>
</head>

<body class="blog-post">
<!-- Live Style Switcher Starts - demo only -->
<div id="switcher" class="">
    <div class="content-switcher">
        <h4>STYLE SWITCHER</h4>
        <ul>
            <li>
                <a href="#" onclick="setActiveStyleSheet('purple');" title="purple" class="color"><img src="img/styleswitcher/purple.png" alt="purple"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color"><img src="img/styleswitcher/red.png" alt="red"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('blueviolet');" title="blueviolet" class="color"><img src="img/styleswitcher/blueviolet.png" alt="blueviolet"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color"><img src="img/styleswitcher/blue.png" alt="blue"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod" class="color"><img src="img/styleswitcher/goldenrod.png" alt="goldenrod"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color"><img src="img/styleswitcher/magenta.png" alt="magenta"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('yellowgreen');" title="yellowgreen" class="color"><img src="img/styleswitcher/yellowgreen.png" alt="yellowgreen"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color"><img src="img/styleswitcher/orange.png" alt="orange"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color"><img src="img/styleswitcher/green.png" alt="green"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color"><img src="img/styleswitcher/yellow.png" alt="yellow"/></a>
            </li>
        </ul>

       <div id="hideSwitcher">&times;</div>
    </div>
</div>
<div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
<!-- Live Style Switcher Ends - demo only -->
<!-- Header Starts -->
<header class="header" id="navbar-collapse-toggle">
    <!-- Fixed Navigation Starts -->
    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
        <li class="icon-box active">
            <i class="fa fa-home"></i>
            <a href="{{url('/')}}">
                <h2>Home</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-user"></i>
            <a href="{{url('about')}}">
                <h2>About</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-briefcase"></i>
            <a href="{{url('protfolio')}}">
                <h2>Portfolio</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-envelope-open"></i>
            <a href="{{url('contact')}}">
                <h2>Contact</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-comments"></i>
            <a href="{{url('blog')}}">
                <h2>Blog</h2>
            </a>
        </li>
    </ul>
    <!-- Fixed Navigation Ends -->
    <!-- Mobile Menu Starts -->
    <nav role="navigation" class="d-block d-lg-none">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul class="list-unstyled" id="menu">
                <li class="active"><a href="{{url('/')}}"><i class="fa fa-home"></i><span>Home</span></a></li>
                <li><a href="{{url('about')}}"><i class="fa fa-user"></i><span>About</span></a></li>
                <li><a href="{{url('protfolio')}}"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
                <li><a href="{{url('contact')}}"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
                <li><a href="{{url('blog')}}"><i class="fa fa-comments"></i><span>Blog</span></a></li>
            </ul>
        </div>
    </nav>
    <!-- Mobile Menu Ends -->
</header>
<!-- Header Ends -->
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>my <span>blog</span></h1>
    <span class="title-bg">posts</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->

<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <!-- Article Starts -->
        
           <article class="col-12">
            <!-- Meta Starts -->
            <div class="meta open-sans-font">
                <span><i class="fa fa-user"></i>Md Ibrahim Bashar</span>
                <span class="date"><i class="fa fa-calendar"></i>{{$post->created_at}}</span>
                <span><i class="fa fa-tags"></i> Md Ibrahim bashar Protfolio</span>
            </div>
            <!-- Meta Ends -->
            <!-- Article Content Starts -->
            <h1 class="text-uppercase text-capitalize">{{$post->title}}</h1>
            <img src="/post/img/{{$post->image}}"
             class="img-fluid" alt="Blog image">

       
            <div class="blog-excerpt open-sans-font pb-5">
                <h5>
                    {{$post->descriptions}}
                </h5>
            </div>
            <!-- Article Content Ends -->
        </article>
       
            <!-- Article Ends -->
        </div>
    </div>
</section>
<!-- Template JS Files -->
<script src="{{asset('js/jquery-3.5.0.min.js')}}"></script>
<script src="{{asset('js/styleswitcher.js')}}"></script>
<script src="{{asset('js/preloader.min.js')}}"></script>
<script src="{{asset('js/fm.revealator.jquery.min.js')}}"></script>
<script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('js/classie.js')}}"></script>
<script src="{{asset('js/cbpGridGallery.js')}}"></script>
<script src="{{asset('js/jquery.hoverdir.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

</body>


</html>
