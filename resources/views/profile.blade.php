<html>

<head>
    <style>
        #clock {
            background-image: url('{{ Auth::user()->avatar }}');
            background-size: cover;
            background-position: center;
            height: 250px;
            width: 250px;
            border: 1px solid #bbb;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<div class="container">
    <div class="row">
        @if ($message = Session::get('success'))

        <div class="alert alert-success alert-block">

            <button type="button" class="close" data-dismiss="alert">×</button>

            <strong>{{ $message }}</strong>

        </div>

        @endif

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>

    <div id="clock"></div>

    <!-- <div class="row justify-content-center">

        <div class="profile-header-container">
            <div class="profile-header-img">
                <img class="rounded-circle" src="{{ '' }}" />
                 badge 
                <div class="rank-label-container">
                    <span class="label label-default rank-label">{{ $user->name}}</span>
                </div>
            </div>
        </div>

    </div> -->
    <!-- <div class="row justify-content-center">
            <form action="/profile" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <input type="file" class="form-control-file" style="padding-left: 20%;" name="avatar" id="avatarFile" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted ">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" style="width:50%;">Submit</button>

            </form>
        </div>  -->

    <input type='file' id='getval' /><br /><br />
    <button id="submit"> Submit</button>

</div>
<script>
    // document.getElementById('getval').addEventListener('change', readURL, true);
    $("document").ready(function(){
        $("#submit").click(function() {
            let x = {avatar: null};
            getBase64(document.getElementById("getval").files[0], x);
        })
    })

    function uploadProfile(x) {
        let obj = JSON.stringify(x);
        $.post('/profile', x).done(function(e) {
            console.log(e);
        });
    }

    function readURL() {
        var file = document.getElementById("getval").files[0];
        var reader = new FileReader();
        reader.onloadend = function() {
            document.getElementById('clock').style.backgroundImage = "url(" + reader.result + ")";
        }
        // console.log(file)
        if (file) {
            return getBase64(file);
        } else {}
    }

    function getBase64(file, x) {
        var reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = function() {
            // console.log();
            x.avatar = reader.result;
            uploadProfile(x);
        };
        reader.onerror = function(error) {
            console.log('Error: ', error);
        };
    }
</script>

</html>