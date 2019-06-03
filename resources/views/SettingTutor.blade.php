<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TUTOR ACCOUNT</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
        #clock {
            background-image: url('{{ Auth::user()->avatar }}');
            background-size: cover;
            position: relative;left: 33% ;
            height: 250px;
            width: 250px;
            border: 1px solid #bbb;
        }

    </style>


    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Stylesheet
    ================================================== -->

    <link rel="stylesheet" type="text/css" href="css/styleHome.css">
    <link rel="stylesheet" type="text/css" href="css/styleTutorSetting.css">
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
                    <li class="active"><a href="/" class="page-scroll">HOME</a></li>
                    <li><a href="tutor" class="page-scroll">TUTOR</a></li>
                    <li><a href="#footer" class="page-scroll">CONTACT</a></li>


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
    <header id="header">
        <div class="intro">
            <div class="container">
                <div class="row">
                    <div class="intro-text">
                        <div class="animate01 fadeInLeft animated slow delay-1s">
                            <h3><b></b></h3>
                            <h1><b>YOUR PROFILE</b></h1>
                        </div>
                        <div class="animate02 fadeInLeft animated slower delay-2s">
                            <h2><b></b></h2>
                        </div>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="space_nav _mobile"></div>
        <div class="section-title text-center">
            <h2><b>Tutor setting</b></h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                   <div id="clock"></div>
                <button class="btn edit"><a href="/profile/{!! Auth::id()!!}/edit">Edit Profile</a></button>
            </div>
            <table>
                <tr class="blue">
                    <td>
                        <h3 style="color: white; font-size: 25px;">Your Information</h3>
                    </td>
                </tr>
                <tr class="yellow">
                    <td>
                        <p class="yellow2" style="padding-top: 10px;">Name : {{ Auth::user()->name }}</p>
                    </td>
                </tr>
                <tr class="yellow">
                    <td>
                        <p class="yellow2">Nickname : {{ Auth::user()->nickname }}</p>
                    </td>
                </tr>
                <tr class="yellow">
                    <td>
                        <p class="yellow2">Email : {{ Auth::user()->email }}</p>
                    </td>
                </tr>
            </table>
            <br>
            <table>
                <tr class="blue">
                    <td>
                        <h3 style="color: white; font-size: 25px;">Your Education</h3>
                    </td>
                </tr>
                <tr class="yellow">
                    <td>
                        <p class="yellow2" style="padding-top: 10px;">Status : {{ Auth::user()->status }}</p>
                    </td>
                </tr>
                <tr class="yellow">
                    <td>
                        <p class="yellow2">Institution : {{ Auth::user()->institution }}</p>
                    </td>
                </tr>
                <tr class="yellow">
                    <td>
                        <p class="yellow2">Faculty : {{ Auth::user()->faculty }}</p>
                    </td>
                </tr>
                <tr class="yellow">
                    <td>
                        <p class="yellow2">Department:{{ Auth::user()->department }}</p>
                    </td>
                </tr>
            </table>
            <br>
            <table class="left">
                <tr class="blue">
                    <td>
                        <h3 style="color: white; font-size: 25px;">Subject For Teaching</h3>
                    </td>
                </tr>
                <tr class="yellow">
                    <td>
                        <p class="yellow2" style="padding-top: 10px;">Subject: {{ Auth::user()->subject }}</p>
                    </td>
                </tr>
                <tr class="yellow">
                    <td>
                        <p class="yellow2">Level: {{ Auth::user()->level }}</p>
                    </td>
                </tr>
            </table>

        </div>
    </div>
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
