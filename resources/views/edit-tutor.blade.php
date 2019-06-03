<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT PROFILE</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('css/styleHome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styleSignin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styleSignUpHome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rochester" rel="stylesheet">

    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/core.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
    <script type="text/javascript" src="js/contact_me.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/AllSign.js"></script>

    <style>
        #eventBtn {
            width: 30%;
            position: relative;
            bottom: 215px;
        }
        #subj{
            width: 70%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="space_nav _mobile"></div>
        <div class="section-title text-center">
            <h2><b>Edit Profile</b></h2>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h3 class="topic"><b>Your Information</b></h3>
            </div>
        </div>


        {{ Form::open(['action' => ['ProfilesController@update', $user->id] , 'class' => 'upload-form' , 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
        @method('PUT')
            <div class="form-group">
                {{Form::label('title', 'Name' , ['class' => 'col-form-label'])}}
                {{Form::text('name', $user->name, ['class' => 'form-control col-sm-6'])}}
                {{-- {{Form::label('subject', 'Category' , ['class' => 'col-form-label'])}} --}}
             
                {{Form::label('title', 'Nickname', ['class' => 'col-form-label'])}}
                {{Form::text('nickname', $user->nickname, ['class' => 'form-control col-sm-6'])}}

                {{Form::label('users', 'institution', ['class' => 'col-form-label'])}}     
                {{Form::text('institution', $user->institution, ['class' => 'form-control col-sm-6'])}}

                {{Form::label('users', 'status', ['class' => 'col-form-label'])}}
                {{Form::select('status', ['Study' => 'Study', 'Worked' => 'Worked', 'Other' => 'Other'] , $user->status , ['class' => 'form-control col-sm-6'])}}

                {{Form::label('users', 'faculty', ['class' => 'col-form-label'])}}
                {{Form::text('faculty', $user->faculty, ['class' => 'form-control col-sm-6'])}}

                {{Form::label('users', 'department', ['class' => 'col-form-label'])}}
                {{Form::text('department', $user->department, ['class' => 'form-control col-sm-6'])}}

                {{Form::label('users', 'subject', ['class' => 'col-form-label'])}}
                {{Form::select('subject', ['Math' => 'Math', 'Basic Science' => 'Basic Science', 'Physic' => 'Physic', 'Chemistry' => 
                'Chemistry', 'Biology' => 'Biology', 'English' => 'English', 'Other' => 'Other'] , $user->subject , ['class' => 'form-control col-sm-6'])}}

                {{Form::label('users', 'level', ['class' => 'col-form-label'])}}
                {{Form::text('level', $user->level, ['class' => 'form-control col-sm-6'])}}

            </div>
            <div class="form-group">
                {{Form::label('file_location', 'Profile Picture', ['class' => 'col-form-label'])}}
                {{Form::file('file_location', ['class' => 'form-control-file'])}}
            </div>
            
                {{Form::submit('Update Profile',['class' => 'btn btn-warning btn-submit float-right rounded-0'])}}
                {{ Form::close() }}



</body>

</html>