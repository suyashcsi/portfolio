<!DOCTYPE html>
<html>
    <head>
        <title>User Registration form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .top_margin{
                margin-top:20px;
            }
   .footer{
   padding: 10px 0;
  background-color: #000;
 color:#9d9d9d;
 bottom:0;
 width:100%;
 font-size:14px;
 text-align:center;
 height:40px;
}
        </style>
    </head>
</head>
<body>
       <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">Ctrl Budget</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="aboutus.php"><span class="glyphicon glyphicon-info-sign"></span> About us</a></li>
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="loginup1.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
        </div>
      </div>
    </nav>
    <div class="container">
            <div class="row top_margin">
                <div class="col-xs-6 col-xs-offset-3"><br><br>
                <div class="panel panel-primary">
                    <div class="panel-heading">User Registration</div>
                    <div class="panel-body">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <h4>Signup Form</h4>
                     <form method="POST" action="user_registration.php"> 
                         <div class="form-group"><strong><p>Name</p></strong>
                            <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                        </div>
                         <div class="form-group"><strong><p>Email</p></strong>
                            <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true">
                        </div>
                         <div class="form-group"><strong><p>Password</p></strong>
                            <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                        </div>
                         <div class="form-group"><strong><p>PhoneNo.</p></strong>
                            <input type="number" class="form-control" placeholder="PhoneNo" pattern=".{6,}" name="phone" required = "true">
                        </div>
                        
                        <!-- Use date type or pattern="(?:(?:0[1-9]|1[0-2])[\/\\-. ]?(?:0[1-9]|[12][0-9])|(?:(?:0[13-9]|1[0-2])[\/\\-. ]?30)|(?:(?:0[13578]|1[02])[\/\\-. ]?31))[\/\\-. ]?(?:19|20)[0-9]{2}"-->
                        <div class="form-group"><strong><p>Date Of Birth</p></strong>
                            <input type="Date" class="form-control"  placeholder="dob" name="dob" required = "true">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
                </div>
            </div>
            </div>
    </div>
       
    <footer>
                    <div class="footer">
                        <p> Copyright @ Control Budget.All Rights Reserved | Contact Us: +91-8448444853.</p>
                    </div>
                </footer>
</body>
</html>
