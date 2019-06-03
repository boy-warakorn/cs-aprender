<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
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
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/styleSignUpHome.css">
    <link rel="stylesheet" type="text/css" href="css/styleTutor.css">
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
                    <li><a href="#header" class="page-scroll">TUTOR</a></li>
                    <li><a href="#footer" class="page-scroll">CONTACT</a></li>
                    <li><a data-toggle="modal" data-target="#loginModal"><span class="spanlog">login</span></a></li>
                    <li><a data-toggle="modal" data-target="#SignupModal"><span class="spansign">Signup</span></a></li>
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
                            <h3></h3>
                            <h1><b>Our Tutor</b></h1>
                        </div>
                        <div class="animate02 bounceIn animated slower delay-2s">
                            <h2></h2>
                        </div>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- dropdown level and subject section -->
    <div class="container">
        <div id="myBtnContainer">
            <button class="btn active" onclick="filterSelection('all')"> Show all</button>
            <button class="btn" onclick="filterSelection('math')"> Mathematics</button>
            <button class="btn" onclick="filterSelection('sci')"> Basic Science</button>
            <button class="btn" onclick="filterSelection('phy')"> Physic</button>
            <button class="btn" onclick="filterSelection('chem')"> Chemistry</button>
            <button class="btn" onclick="filterSelection('bio')"> Biology</button>
            <button class="btn" onclick="filterSelection('eng')"> English</button>
        </div>
    </div>
    <div class="container">
        <!-- Mathematics -->
        <div class="filterDiv math">
            <div class="row">
                <center>
                    <div class="section-title">
                        <h2 id="math"><b>MATHEMATICS</b></h2>
                    </div>
                </center>
                <div class="responsive col-3">
                    <div class="gallery">
                        <img src="img/boy2.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                        <div class="desc">
                            <p class="name center"><b>P'Boy</b></p>
                            <p class="center">
                                Primary<br>
                                Junior high school<br>
                            </p>
                            <div class="center">
                                <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                <button class="button">MORE INFORMATION</button>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="responsive col-3">
                    <div class="gallery">
                        <img src="img/dong.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                        <div class="desc">
                            <p class="name center"><b>P'Dong</b></p>
                            <p class="center">
                                Primary<br>
                                University<br>
                            </p>
                            <div class="center">
                                <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                <button class="button">MORE INFORMATION</button>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="responsive col-3">
                    <div class="gallery">
                        <img src="img/yee.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                        <div class="desc">
                            <p class="name center"><b>P'Lookyee</b></p>
                            <p class="center">
                                Junior high school<br>
                                University<br>
                                <div class="center">
                                    <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                    <a href="tutor-info.html">
                                        <button class="button"> MORE INFORMATION</button>
                                    </a>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="responsive col-3">
                    <div class="gallery">
                        <img src="img/pun.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                        <div class="desc">
                            <p class="name center"><b>P'Pun</b></p>
                            <p class="center">
                                Junior high school<br>
                                Senior high school<br>
                            </p>
                            <div class="center">
                                <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                <button class="button">MORE INFORMATION</button>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w3-row">
                    <div class="responsive col-3">
                        <div class="gallery">
                            <img src="img/fluke.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                            <div class="desc">
                                <p class="name center"><b>P'Fluke</b></p>
                                <p class="center">
                                    Primary<br>
                                    Senior high school<br>
                                </p>
                                <div class="center">
                                    <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                    <button class="button">MORE INFORMATION</button>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="responsive col-3">
                        <div class="gallery onesub">
                            <img src="img/p'muta.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                            <div class="desc">
                                <p class="name center"><b>P'Muta</b></p>
                                <p class="center">
                                    University<br>
                                </p>
                                <div class="center">
                                    <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                    <button class="button button1">MORE INFORMATION</button>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="responsive col-3">
                        <div class="gallery">
                            <img src="img/phoo.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                            <div class="desc">
                                <p class="name center"><b>P'Phoo</b></p>
                                <p class="center">
                                    Primary<br>
                                    Junior high school<br>
                                </p>
                                <div class="center">
                                    <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                    <button class="button">MORE INFORMATION</button>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="responsive col-3">
                        <div class="gallery onesub">
                            <img src="img/poon.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                            <div class="desc">
                                <p class="name center"><b>P'Kawpoon</b></p>
                                <p class="center">
                                    Senior high school<br>
                                </p>
                                <div class="center">
                                    <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                    <button class="button button1">MORE INFORMATION</button>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <!-- science -->
        <div class="filterDiv sci">
            <div class="row">
                <center>
                    <div class="section-title">
                        <h2 id="sci"><b>SCIENCE</b></h2>
                    </div>
                </center>

                <div class="responsive col-3">
                    <div class="gallery onesub">
                        <img src="img/boy2.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                        <div class="desc">
                            <p class="name center"><b>P'Boy</b></p>
                            <p class="center">
                                Primary<br>
                            </p>
                            <div class="center">
                                <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                <button class="button button1">MORE INFORMATION</button>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="responsive col-3">
                    <div class="gallery onesub">
                        <img src="img/pun.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                        <div class="desc">
                            <p class="name center"><b>P'Pun</b></p>
                            <p class="center">
                                Primary<br>
                            </p>
                            <div class="center">
                                <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                <button class="button button1">MORE INFORMATION</button>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="responsive col-3">
                    <div class="gallery onesub">
                        <img src="img/fluke.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                        <div class="desc">
                            <p class="name center"><b>P'Fluke</b></p>
                            <p class="center">
                                Primary<br>
                            </p>
                            <div class="center">
                                <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                <button class="button button1">MORE INFORMATION</button>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="responsive col-3">
                    <div class="gallery onesub">
                        <img src="img/poon.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                        <div class="desc">
                            <p class="name center"><b>P'Kawpoon</b></p>
                            <p class="center">
                                Primary<br>
                            </p>
                            <div class="center">
                                <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                <button class="button button1">MORE INFORMATION</button>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Physic -->
        <div class="filterDiv phy">
            <div class="row">
                <center>
                    <div class="section-title">
                        <h2 id="phy"><b>PHYSIC</b></h2>
                    </div>
                </center>

                <div class="responsive col-3">
                    <div class="gallery">
                        <img src="img/dong.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                        <div class="desc">
                            <p class="name center"><b>P'Dong</b></p>
                            <p class="center">
                                Junior high school<br>
                                Senior high school<br>
                            </p>
                            <div class="center">
                                <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                <button class="button">MORE INFORMATION</button>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="responsive col-3">
                    <div class="gallery onesub">
                        <img src="img/pun.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                        <div class="desc">
                            <p class="name center"><b>P'Pun</b></p>
                            <p class="center">
                                Senior high school<br>
                            </p>
                            <div class="center">
                                <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                <button class="button button1">MORE INFORMATION</button>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="responsive col-3">
                    <div class="gallery">
                        <img src="img/fluke.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                        <div class="desc">
                            <p class="name center"><b>P'Fluke</b></p>
                            <p class="center">
                                Jenior high school<br>
                                Senior high school<br>
                            </p>
                            <div class="center">
                                <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                <button class="button">MORE INFORMATION</button>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="responsive col-3">
                    <div class="gallery">
                        <img src="img/p'muta.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                        <div class="desc">
                            <p class="name center"><b>P'Muta</b></p>
                            <p class="center">
                                Senior high school<br>
                                University<br>
                            </p>
                            <div class="center">
                                <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                <button class="button">MORE INFORMATION</button>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w3-row">
                    <div class="responsive col-3">
                        <div class="gallery onesub">
                            <img src="img/phoo.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                            <div class="desc">
                                <p class="name center"><b>P'Phoo</b></p>
                                <p class="center">
                                    Senior high school<br>
                                </p>
                                <div class="center">
                                    <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                    <button class="button button1">MORE INFORMATION</button>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="responsive col-3">
                        <div class="gallery onesub">
                            <img src="img/chopper.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                            <div class="desc">
                                <p class="name center"><b>P'Chopper</b></p>
                                <p class="center">
                                    University<br>
                                </p>
                                <div class="center">
                                    <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                    <button class="button button1">MORE INFORMATION</button>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chemistry -->
        <div class="filterDiv chem">
            <div class="row">
                <center>
                    <div class="section-title">
                        <h2 id="chem"><b>CHEMISTRY</b></h2>
                    </div>
                </center>

                <div class="responsive col-3">
                    <div class="gallery">
                        <img src="img/dong.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                        <div class="desc">
                            <p class="name center"><b>P'Dong</b></p>
                            <p class="center">
                                Junior high school<br>
                                Senior high school<br>
                            </p>
                            <div class="center">
                                <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                <button class="button">MORE INFORMATION</button>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="responsive col-3">
                    <div class="gallery onesub">
                        <img src="img/yee.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                        <div class="desc">
                            <p class="name center"><b>P'Lookyee</b></p>
                            <p class="center">
                                Senior high school<br>
                                <div class="center">
                                    <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                    <a href="tutor-info.html">
                                        <button class="button button1"> MORE INFORMATION</button>
                                    </a>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="responsive col-3">
                    <div class="gallery">
                        <img src="img/p'muta.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                        <div class="desc">
                            <p class="name center"><b>P'Muta</b></p>
                            <p class="center">
                                Senior high school<br>
                                University<br>
                            </p>
                            <div class="center">
                                <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                <button class="button">MORE INFORMATION</button>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="responsive col-3">
                    <div class="gallery onesub">
                        <img src="img/phoo.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                        <div class="desc">
                            <p class="name center"><b>P'Phoo</b></p>
                            <p class="center">
                                Junior high school<br>
                            </p>
                            <div class="center">
                                <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                <button class="button button1">MORE INFORMATION</button>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w3-row">
                    <div class="responsive col-3">
                        <div class="gallery onesub">
                            <img src="img/poon.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                            <div class="desc">
                                <p class="name center"><b>P'Kawpoon</b></p>
                                <p class="center">
                                    Senior high school<br>
                                </p>
                                <div class="center">
                                    <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                    <button class="button button1">MORE INFORMATION</button>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="responsive col-3">
                        <div class="gallery onesub">
                            <img src="img/chopper.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                            <div class="desc">
                                <p class="name center"><b>P'Chopper</b></p>
                                <p class="center">
                                    University<br>
                                </p>
                                <div class="center">
                                    <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                    <button class="button button1">MORE INFORMATION</button>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Biology -->
        <div class="filterDiv bio">
            <div class="row">
                <center>
                    <div class="section-title">
                        <h2 id="bio"><b>BIOLOGY</b></h2>
                    </div>
                </center>

                <div class="responsive col-3">
                    <div class="gallery">
                        <img src="img/boy2.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                        <div class="desc">
                            <p class="name center"><b>P'Boy</b></p>
                            <p class="center">
                                Junior high school<br>
                                Senior high school<br>
                            </p>
                            <div class="center">
                                <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                <button class="button">MORE INFORMATION</button>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="responsive col-3">
                    <div class="gallery">
                        <img src="img/dong.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                        <div class="desc">
                            <p class="name center"><b>P'Dong</b></p>
                            <p class="center">
                                Junior high school<br>
                                Senior high school<br>
                            </p>
                            <div class="center">
                                <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                <button class="button">MORE INFORMATION</button>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="responsive col-3">
                    <div class="gallery">
                        <img src="img/pun.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                        <div class="desc">
                            <p class="name center"><b>P'Pun</b></p>
                            <p class="center">
                                Junior high school<br>
                                Senior high school<br>
                            </p>
                            <div class="center">
                                <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                <button class="button">MORE INFORMATION</button>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="responsive col-3">
                    <div class="gallery">
                        <img src="img/p'muta.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                        <div class="desc">
                            <p class="name center"><b>P'Muta</b></p>
                            <p class="center">
                                Senior high school<br>
                                University<br>
                            </p>
                            <div class="center">
                                <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                <button class="button">MORE INFORMATION</button>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- englsih -->
        <div class="filterDiv eng">
            <div class="row">
                <center>
                    <div class="section-title">
                        <h2 id="eng"><b>ENGLISH</b></h2>
                    </div>
                </center>

                <div class="responsive col-3">
                    <div class="gallery">
                        <img src="img/yee.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                        <div class="desc">
                            <p class="name center"><b>P'Lookyee</b></p>
                            <p class="center">
                                Junior high school<br>
                                Senior high school<br>
                                <div class="center">
                                    <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                    <button class="button">MORE INFORMATION</button>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="responsive col-3">
                    <div class="gallery">
                        <img src="img/pun.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                        <div class="desc">
                            <p class="name center"><b>P'Pun</b></p>
                            <p class="center">
                                Junior high school<br>
                                Senior high school<br>
                            </p>
                            <div class="center">
                                <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                <button class="button">MORE INFORMATION</button>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="responsive col-3">
                    <div class="gallery">
                        <img src="img/fluke.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                        <div class="desc">
                            <p class="name center"><b>P'Fluke</b></p>
                            <p class="center">
                                Primary<br>
                                Senior high school<br>
                            </p>
                            <div class="center">
                                <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                <button class="button">MORE INFORMATION</button>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="responsive col-3">
                    <div class="gallery">
                        <img src="img/phoo.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                        <div class="desc">
                            <p class="name center"><b>P'Phoo</b></p>
                            <p class="center">
                                Junior high school<br>
                                Senior high school<br>
                            </p>
                            <div class="center">
                                <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                <button class="button">MORE INFORMATION</button>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w3-row ">
                    <div class="responsive col-3">
                        <div class="gallery onesub">
                            <img src="img/poon.JPG" alt="" width="600" height="400" class="w3-hover-opacity">
                            <div class="desc">
                                <p class="name center"><b>P'Kawpoon</b></p>
                                <p class="center">
                                    Primary<br>
                                </p>
                                <div class="center">
                                    <!---<a class="btn btn-tutor" href="#">MORE INFORMATION</a>-->
                                    <button class="button button1">MORE INFORMATION</button>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
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
                        126 Pracha Uthit Rd., Bang Mod, Thung Khru, Bangkok 10140, Thailand
                    </p>
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
                <p>&copy; 2019 APRENDER. All rights reserved. Design by APRENDER GROUP</a>
                </p>
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
</body>

<script type="text/javascript" src="js/tutor.js"></script>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="js/contact_me.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/AllSign.js"></script>

</html>