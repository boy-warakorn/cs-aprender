<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>APRENDER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>

</body>

</html>>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>APRENDER</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Stylesheet
          ================================================== -->
    <link rel="stylesheet" type="text/css" href="css/styleHome.css">
    <link rel="stylesheet" type="text/css" href="css/styleSignin.css">
    <link rel="stylesheet" type="text/css" href="css/styleSignUp.css">
    <link rel="stylesheet" type="text/css" href="css/styleSignUpHome.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rochester" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation
          ==========================================-->
    <nav id="menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#header" class="page-scroll">HOME</a></li>
                    <li><a href="tutor" class="page-scroll">TUTOR</a></li>
                    <li><a href="#contactus" class="page-scroll">CONTACT</a></li>
                    

                    @if (Route::has('login'))
                    @auth

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           <i class="fa fa-user"></i> Welcome | {{ Auth::user()->nickname }}<span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fa fa-share-square-o "></i><b> {{ __('Logout') }} </b>
                            </a><br>
                            <a class="dropdown-item" href="tutor-setting">
                                <i class="fa fa-user"></i>&nbsp;<b> Profile</b>
                            </a><br>
                            <a class="dropdown-item" href="/profile">
                                <i class="fa fa-user"></i>&nbsp;<b> Upload Picture</b>
                                </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @else
                    <li><a href="login"><span class="spansign">Login</span></a></li>
                    <li><a href="register  "><span class="spanlog">Signup</span></a></li>
                    @endauth
                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <div id="loginModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content1">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal"> &times;</button>
                    <h4>
                        <center>STUDENT & TUTOR</center>
                    </h4>
                    <form>
                        <div class="form-group">
                            <label for="email">Your Email</label><input type="text" placeholder="Email" id="email"
                                name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Your Password</label>
                            <input type="password" placeholder="Password" id="password" name="password" required>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                        <button type="submit" class="Signin">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="SignupModal" class="modal fade">
        <div class="modal-content2">
            <button type="button" class="close" data-dismiss="modal"> &times;</button>
            <div class="column" id="fortutor">
                <img src="img/tutor.png" class="img-responsive" id="tutor_signup">
                <div class="overlay">
                    <div class="content-tutor">
                        <b>For Tutor</b>
                        <a href="SignUp-tutor.html" class="page-scroll">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="column" id="forstudent">
                <img src="img/student.png" class="img-responsive" id="student_signup">
                <div class="overlay">
                    <div class="content-student">
                        <b style="color: white;">For Student</b>
                        <a href="SignUp-student.html" style="color: black;">Click Here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header id="header">
        <div class="intro">
            <div class="container">
                <div class="row">
                    <div class="intro-text">
                        <div class="animate01 fadeInLeft animated slow delay-1s">
                            <h3><b>WELCOME TO</b></h3>
                            <h1><b>APRENDER</b></h1>
                        </div>
                        <div class="animate02 fadeInLeft animated slower delay-2s">
                            <h2><b>MATCH | FIND | TUTOR</b></h2>
                        </div>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Features Section -->
    <div id="features" class="text-center">
        <div class="container">
            <div class="section-title">
                <h2><b>ABOUT US</b></h2>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="features-item">
                        <h3 class="tutor-student2"><b>TUTOR</b></h3>
                        <img src="img/teacher.png" class="img-responsive tutor-student" alt="">
                        <p>
                            Get free teaching jobs no charge
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="features-item">
                        <h3 class="tutor-student2"><b>STUDENT</b></h3>
                        <img src="img/children.png" class="img-responsive tutor-student" alt="">
                        <p>
                            <ul>
                                <li>Find tutor who are right and suitable for the learning style</li>
                                <li>Choose day, time, and place for studying by yourself</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section -->
    <div id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-6 about-img"> </div>
                <div class="col-xs-12 col-md-3 col-md-offset-1" id="story">
                    <div class="about-text">
                        <div class="section-title">
                            <h2><b>Our Story</b></h2>
                        </div>
                        <p>
                            <b id="word"> Aprender </b> is a website that can help you to find the tutor who is
                            appropriate for you
                            and it can help you to manage your time for studying and enhance learning skills.
                            You can choose a place for studying by yourself.
                        </p>
                        <p>
                            You can go to see information about a tutor
                            who you are interested. The information about tutor consists of his or her education,
                            subjects,
                            schedule, and places which the tutor teaches. You can choose your tutor as you like.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Gallery Section -->
    <center>
        <div class="section-title">
            <h2><b>RECOMMEND</b></h2>
        </div>
    </center>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!--Carousel Recommend-->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <a href="#" target="_blank">
                    <img src="img/Recommend.jpg" alt="INTRO" width="100%" height="1080">
                </a>
            </div>

            <div class="item">
                <a href="#" target="_blank">
                    <img src="img/RecommendBoy.jpg" alt="INTRO" width="100%" height="auto">
                </a>
            </div>

            <div class="item">
                <a href="#" target="_blank">
                    <img src="img/RecommendDong.jpg" alt="INTRO" width="100%" height="auto">
                </a>
            </div>
        </div>


        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Contact Us-->
    <div id="contactus"></div>
    <div class="real-contactus">
        <center>
            <div class="section-title">
                <h2><b>Contact Us</b></h2>
            </div>
        </center>
        <div class="col-lg-2"></div>
        <div class="col-lg-8" id="allcontact">
            <div class="block block2">
                <img src="img/phone.png" class="pic-contact"><br>
                <p class="blue"><b>082 095 0072</b></p>
            </div>
            <div class="block block2">
                <img src="img/mail.png" class="pic-contact"><br>
                <p class="red"><b>aprender@gmail.com</b></p>
            </div>
            <div class="block block2">
                <img src="img/facebook.png" class="pic-contact"><br>
                <p class="blue"><b>Aprender</b></p>
            </div>
            <div class="block block2">
                <img src="img/line.png" class="pic-contact"><br>
                <p class="red"><b>@aprender</b></p>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>

    <!-- Team Section -->
    <div id=team>
        <div class="w3-row-padding">
            <center>
                <div class="section-title">
                    <h2 id="ourteam"><b>OUR TEAM</b></h2>
                </div>
            </center>
            <div class="w3-third w3-container w3-margin-bottom">
                <img src="img/boy2.jpg" alt="" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p class="name"><b>Warakorn Chantranupong</b></p>
                    <p>
                        Nickname : Boy <br>
                        Computer Science, School Information of Technology <br>
                        King Mongkut’s University of Technology Thonburi
                    </p>
                </div>
            </div>

            <div class="w3-third w3-container w3-margin-bottom">
                <img src="img/dong.jpg" alt="" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p class="name"><b>Tawan Vongsombun</b></p>
                    <p>
                        Nickname : Dong <br>
                        Computer Science, School Information of Technology <br>
                        King Mongkut’s University of Technology Thonburi
                    </p>
                </div>
            </div>

            <div class="w3-third w3-container w3-margin-bottom">
                <img src="img/yee2.jpg" alt="" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p class="name"><b>Krittiya Onbun-ua</b></p>
                    <p>
                        Nickname : Lookyee <br>
                        Computer Science, School Information of Technology <br>
                        King Mongkut’s University of Technology Thonburi
                    </p>
                </div>
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-third w3-container w3-margin-bottom">
                <img src="img/fluke.jpg" alt="" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p class="name"><b>Vorapol Charoenkitmongkol</b></p>
                    <p>
                        Nickname : Fluke <br>
                        Computer Science, School Information of Technology <br>
                        King Mongkut’s University of Technology Thonburi
                    </p>
                </div>
            </div>

            <div class="w3-third w3-container w3-margin-bottom">
                <img src="img/pun.jpg" alt="" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p class="name"><b>Vorawut Permsaengsuwan</b></p>
                    <p>
                        Nickname : Pun <br>
                        Computer Science, School Information of Technology <br>
                        King Mongkut’s University of Technology Thonburi
                    </p>
                </div>
            </div>

            <div class="w3-third w3-container w3-margin-bottom">
                <img src="img/logo.png" alt="Aprender's Logo" class="w3-hover-opacity"
                    style="width:100%; margin:55px 0px;">
            </div>

        </div>
    </div>

    <!-- Contact Section -->
    <div id="contact" class="text-center gray">
        <div class="container text-center">
            <div class="col-md-4">
                <h3>Reservations</h3>
                <div class="contact-item">
                    <p>Please call</p>
                    <p>(887) 654-3210</p>
                </div>
            </div>
            <div class="col-md-4">
                <h3>Address</h3>
                <div class="contact-item">
                    <p>King Mongkut’s University of Technology Thonburi (KMUTT)
                        126 Pracha Uthit Rd., Bang Mod, Thung Khru, Bangkok 10140, Thailand</p>
                    <p></p>
                </div>
            </div>
            <div class="col-md-4">
                <h3>Opening Hours</h3>
                <div class="contact-item">
                    <p>Mon-Thurs: 10:00 AM - 11:00 PM</p>
                    <p>Fri-Sun: 11:00 AM - 02:00 AM</p>
                </div>
            </div>
        </div>
    </div>
    <div id="footer" class="gray">
        <div class="container text-center">
            <div class="col-md-6">
                <p>&copy; 2019 APRENDER. All rights reserved. Design by APRENDER GROUP</a></p>
            </div>
            <div class="col-md-6">
                <div class="social">
                    <ul>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
    <script type="text/javascript" src="js/contact_me.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/AllSign.js"></script>

</body>

</html>
