<?php 

include('func.php');  
include('newfunc.php');
$con = mysqli_connect("localhost", "root", "", "myhmsdb");

$logFile = 'connection_log.txt'; // Define the log file path

// Check MySQL connection and log the result
if (mysqli_connect_errno()) {
  $error_message = "Failed to connect to MySQL: " . mysqli_connect_error();
  error_log($error_message . PHP_EOL, 3, $logFile); // Log error message to file
} else {
  $success_message = "Connection successful!";
  error_log($success_message . PHP_EOL, 3, $logFile); // Log success message to file
}


?>


<html>

<head>
    <title>HMS</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">

    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">

    <style>
    .form-control {
        margin-top: 14px;
        border-radius: 0.75rem;
    }

    .hm {
        padding-top: 30px;

    }

    .welcome-container {
        background-image: url('./images/bg.jpg'); /* Replace 'your-image.jpg' with your image file name */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 100%;
        height: 100vh;
        
        /* Apply blur effect */
        /* filter: blur(2px);  */
        
    }
    .welcome-text {
        position: absolute; /* Positioning text over the blurred background */
        z-index: 2; /* Ensures text stays above the background */
        color: black; /* Adjust text color for better visibility */
        font-size: 4rem;
    }
    </style>

    <script>
    var check = function() {
        if (document.getElementById('password').value ==
            document.getElementById('cpassword').value) {
            document.getElementById('message').style.color = '#5dd05d';
            document.getElementById('message').innerHTML = 'Matched';
        } else {
            document.getElementById('message').style.color = '#f55252';
            document.getElementById('message').innerHTML = 'Not Matching';
        }
    }

    function alphaOnly(event) {
        var key = event.keyCode;
        return ((key >= 65 && key <= 90) || key == 8 || key == 32);
    };

    function checklen() {
        var pass1 = document.getElementById("password");
        if (pass1.value.length < 6) {
            alert("Password must be at least 6 characters long. Try again!");
            return false;
        }
    }
    </script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#"
                style="margin-top: 10px; margin-left:-65px; font-family: 'IBM Plex Sans', sans-serif;">
                <h4 style="color:blue;"><i class="fa fa-user-plus"  aria-hidden="true"></i>&nbsp ABC HOSPITAL</h4>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" style="margin-right: 40px;">
                        <a class="nav-link js-scroll-trigger" href="index.php"
                            style="color: blue; font-family: 'IBM Plex Sans', sans-serif;">
                            <h6>HOME</h6>
                        </a>
                    </li>

                    <li class="nav-item" style="margin-right: 40px;">
                        <a class="nav-link js-scroll-trigger" href="services.html"
                            style="color: blue; font-family: 'IBM Plex Sans', sans-serif;">
                            <h6>ABOUT US</h6>
                        </a>
                    </li>

                    <li class="nav-item" style="margin-right: 40px;">
                        <a class="nav-link js-scroll-trigger" href="contact.html"
                            style="color: blue; font-family: 'IBM Plex Sans', sans-serif;">
                            <h6>CONTACT</h6>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="login_ui.php"
                            style="color: blue; font-family: 'IBM Plex Sans', sans-serif;">
                            <h6>LOGIN</h6>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div>
    <div class="row" style="margin-start: 50%">
        <div class="col-md-12 d-flex justify-content-center align-items-center welcome-container">
            <h4 class="welcome-text">
                <i class="fa fa-user-plus" aria-hidden="true"></i> Welcome to ABC Hospital
            </h4>
        </div>
    </div>
</div>

    <!-- Bootstrap 4 JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>