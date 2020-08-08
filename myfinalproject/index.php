

<html>
    <head>
        <title>E-commerce</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
        <style>
            .first{
    display: none;
}

@media (min-width:320px) {  .container {
                                width: 320px;
                            } }
@media (min-width:481px) {   .container {
                                 width: 481px;
                             } }
@media (min-width:641px) {   .container {
                                 width: 641px;
                             } }
@media (min-width:961px) {   .container {
                                 width: 961px;
                             } }
@media (min-width:1000px) {  .container {
                                 width: 1000px;
                             } 
    .first{
        display:box;
    }

body{
 width: 100%;
 height: 100%;
 margin: 0;
}
a{
 text-decoration: none;
 background-color: transparent;
 color:#ededed;
}
.header {
  background-color:#000;
 color:#fff;
 border-color: #080808;
 min-height: 50px;
 border: 1px solid transparent
}
.inner-header{
width:80%;
 margin:auto;
}
h4{
    font:italic small-caps bolder 16px arial, sans-serif;
}

.logo{
 float: left;
 height: 50px;
 padding:none;
 font-size: 20px;
 font-weight: bold;
}
.header-link{
  float:right;
 font-size:14px;
 height: 50px;
 padding: 15px;
 font-size:16px;
 font-weight: bold;

}
.content{
    min-height: 600px;
}
.banner-image{
    padding-top: 25px;
  padding-bottom: 100px;
 margin-bottom: 20px;
 text-align: center;
 color: #f8f8f8;
 background: url(background_image.jpg);
 background-size: cover; 
 background-position: center;
}
.inner-banner-image{
    padding-top: 12%;
 width:80%;
 margin:auto;
}
.banner-content{
    position: relative;
 padding-top: 6%;
 padding-bottom: 6%;
 overflow:hidden;
 margin-top: 12%;
 margin-bottom: 12%;
 background-color: rgba(0, 0, 0, 0.7);
 max-width: 660px;
}
.button{
  color: #fff;
 background-color: #c9302c;
 border-color: #ac2925;
 box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
 padding: 10px 16px;
 font-size: 18px;
 border-radius: 6px;
}
footer{
    padding: 10px 0;
  background-color: #000;
 color:#9d9d9d;
 bottom:0;
 width:100%;
 font-size:14px;
 position: fixed;
 text-align:center;
 height:40px;
}
.glyphicon.glyphicon-sunglasses {
    font-size: 200px;
    color: black;
}
.glyphicon.glyphicon-camera{
    font-size: 200px;
    color: black;
}
.glyphicon.glyphicon-headphones{
    font-size: 200px;
    color: black;
}
 .search-box {
        position: absolute;
        top: 20%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #666666;
        height: 40px;
        border-radius: 40px;
        padding: 10px;
        display: flex;
        justify-content: space-between;
      }
      .search-box:hover > .search-txt {
        width: 240px;
        padding: 0 6px;
      }
      .search-box:hover > .search-btn {
        background: white;
        color: black;
      }
      .search-btn {
        color: #eeeeee;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: #2f3640;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 0.4s;
        color: white;
        cursor: pointer;
        text-decoration: none;
      }
      .search-btn > i {
        font-size: 30px;
      }
      .search-txt {
        border: none;
        background: none;
        outline: none;
        padding: 0;
        color: white;
        font-size: 16px;
        transition: 0.4s;
        line-height: 40px;
        width: 0px;
        font-weight: bold;
      }

        </style>
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
            <div class ="header">
         <div class="inner-header">
            <div class="logo"> 
                <h4><a href="#">Ctrl Budget</a></h4>
            </div>
                <div class="header-link">
                    <a href="loginup1.php">login</a></div>   
             <div class="header-link"> <a href="signup.php">Sign up</a>
                 <div class="header-link">
                     <a href="aboutus.php">About Us</a></div>
                    </div>
                </div>
            </div>
        
       
        
        <div class="content">
            <div class="banner-image">
                
              
                <div class="inner-banner-image">
                    <div class="banner-content">
                        <h1>We help you to control your budget</h1>
                        <a href="Home.php" class="btn btn-success btn-lg active">Add Plan</a>
                        <a href="products.php" class="btn btn-success btn-lg active">Go to Cart</a>
                    <div class="search-box">
      <input type="text" name="name" class="search-txt" placeholder="Type to search" />
      <a class="search-btn" href="products.php">
        <i class="fa fa-search" aria-hidden="true"></i>
      </a>
    </div>
                    
                    </div>
                    
                </div>
              
        
        
        
                    <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#headphones" >
                            <span class="glyphicon glyphicon-headphones"></span>
                             
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#camera" >
                            <span class=" glyphicon glyphicon-camera "></span>
                                
                            
                        </a>
                    </div>
                    

                    <div class="col-sm-4">
                        <a href="products.php#sunglasses" >
                            
         
                         
    <span class="glyphicon glyphicon-sunglasses"></span>       
                           
                        </a>
                    </div>
                </div>
            </div>
            <!--Item categories listing end-->
        </div>
    </div>
        
    
        
        <footer>
                    <div class="container">
                        <p> Copyright @ Lifestyle Store.All Rights Reserved | Contact Us:+91 966352735</p>
                    </div>
                </footer>
             
    </body>
</html>


