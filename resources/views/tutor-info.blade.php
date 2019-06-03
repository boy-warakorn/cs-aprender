<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TUTOR INFORMATION</title>

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
    <link rel="stylesheet" type="text/css" href="css/styleTutorInfo.css">
    <link rel="stylesheet" type="text/css" href="css/styleBooking.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rochester" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="container-fluid">
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
                    <li><a href="/" class="page-scroll">HOME</a></li>
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
                                 <i class = "fa fa-share-square-o "></i><b> {{ __('Logout') }} </b>
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
    <!--Header : Picture and Tutor information-->
    <header class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8 row">
                <center><img src="img/nametag1.png" alt="Name Tutor" class="img-responsive" id="tagname"></center>
            </div>
            <div class="col-sm-2"></div>
        </div>

        <div class="row" id="hearder">
            <div class="col-sm-2"></div>
            <div class="col-sm-8 row">
                <div class="col-sm-6">
                    <img src="img/lookyee.png" alt="me" class="img-responsive" id="pic" />
                </div>
                <div class="col-sm-6" id="aboutme">
                    <p class="strong"><strong>NAME :</strong></p>
                    <p class="ans"><strong>Krittiya Onbun-ua (Lookyee)</strong></p>
                    <p class="strong"><strong>AGE :</strong></p>
                    <p class="ans"><strong>19 years old</strong></p>
                    <p class="strong"><strong>STUDY AT :</strong></p>
                    <p class="ans"><strong>King Mongkut’s University of Technology Thonburi (KMUTT)</strong></p>
                    <p class="strong"><strong>DEPARTMENT & FACULTY :</strong></p>
                    <p class="ans"><strong>Computer Science, School Information of Technology (SIT)</strong></p>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </header>

    <!--Section-->
    <div id="features">
        <div class="container">
            <!---<div class="section-title">
            <h2 id="subject"><b>SUBJECT</b></h2>
          </div>-->
            <div class="col-sm-2"></div>
            <div class="col-sm-8" id="sub">
                <div class="section-title text-center">
                    <h2 id="subject"><b>SUBJECT</b></h2>
                </div>
                <div class="col-sm-4">
                    <img src="img/subject01.png" alt="" />
                </div>
                <div class="col-sm-4">
                    <img src="img/subject02.png" alt="" />
                </div>
                <div class="col-sm-4">
                    <img src="img/subject03.png" alt="" />
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>

        <!-- <div class="container text-center">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <div class="section-title">
          <h2 id="schedule">
            <b>SCHEDULE</b>
          </h2>
          <img src="img/schedule.png" class="img-responsive" id="timeday"/>
        </div>
        <div>
          <table class="table-responsive">
            <tr>
              <th>Time</th>
              <th>Day</th>
            </tr>
            <tr>
              <td>10.00 p.m.</td>
              <td>Saturday & Sunday</td>
            </tr>
            <tr>
              <td>14.00 p.m.</td>
              <td>Monday</td>
            </tr>
            <tr>
              <td>16.30 p.m.</td>
              <td>Tuesday-Thursday</td>
            </tr>
          </table>
        </div>
      </div>
      <div class="col-sm-2"></div>
    </div> -->

        <div class="container text-center">
            <div class="col-sm-2"></div>
            <div class="col-sm-8" id="sub">
                <div class="section-title">
                    <h2 id="place"><b>PLACES FOR TEACHING</b></h2>
                </div>
                <img src="img/map.png" alt="" class="img-responsive" id="map">
            </div>
            <div class="col-sm-2"></div>
        </div>

        <div class="container">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="col-sm-4"></div>
                <div class="col-sm-4 btn-cta3">
                    <center>
                        <!-- <br><br><br><br><br> -->
                        <button onclick="window.location.href = 'mailto:name@email.com'"
                            style="position:relative; top:108px;">
                            <b>Booking Tutor</b></button>
                        </a>
                    </center>
                    <div id="id03" class="modal3" id="info_student">
                        <form class="modal-content3 animate booking" action="/action_page.php">
                            <div class="col-md-12 text-center">
                                <br>
                                <span onclick="document.getElementById('id03').style.display='none'" class="close"
                                    id="close3" title="Close">&times;</span>
                                <h3><b>Student Information</b></h3>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="fname">NAME</label><input class="input2" type="text"
                                        placeholder="Enter Your Firstname" name="fname" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="lname">SURNAME</label><input class="input2" type="text"
                                        placeholder="Enter Your Lastname" name="lname" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="nickname">NICKNAME</label><input class="input3" type="text"
                                        placeholder="Enter Your Nickname" name="nickname" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="age">AGE</label><input class="input4" type="number" name="age" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="genger">GENDER</label>
                                    <select class="gender">
                                        <option class="active">Select</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="Email">EMAIL</label><input class="input2" type="email"
                                        placeholder="Enter Your Email" name="email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="Tel">TEL</label><input class="input5" type="tel"
                                        placeholder="Enter Your Telephone" name="tel" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="convenient">CINVENIENT CONTACT</label>
                                    <select class="convenient">
                                        <option class="active">Select</option>
                                        <option>Facebook</option>
                                        <option>Line</option>
                                        <option>Email</option>
                                        <option>Message</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="contact">YOUR CONTACT</label><input class="input6" type="text"
                                        placeholder="Enter Your Contact" name="contact" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="subject">SUBJECT</label>
                                    <select class="subject">
                                        <option class="active">Select</option>
                                        <option>Primary Mathematics</option>
                                        <option>Junior High School Mathematics</option>
                                        <option>Senior High School Chemisry</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="place">PLACE</label>
                                    <select class="place">
                                        <option class="active">Select</option>
                                        <option>Siam Paragon</option>
                                        <option>Seacon Bangkae</option>
                                        <option>The Mall BangKea</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit"><b>Confirmed</b></button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
    <!-- Contact Section -->
    <div id="contact">
        <div class="container-fluid text-center">
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
    <div id="footer">
        <div class="container-fluid text-center">
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
