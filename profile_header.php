<?php include_once("connection.php");   ?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	<title>Foodies||Online Food Delivery Project</title>
	</head>

  <style>
    <style>
    *{margin:0;padding:0}
    body{
      background-color:#DCDCDC;
      
    }
    #wrapper{
    
      margin:0 auto;
    }
    .nav-link{
        color:black;
        }

    .banner-card{
        position:relative;
  
        }
    .banner-card img{
        max-width:100%;
        height:360px;
        opacity:30%;
        }
    .banner-text{
        position: absolute;
        top:45%;
        color:#ffff;
        padding:20px;
        left:39%;
        text-align:center;
        font-weight:300;
        }

    .tab{
      background-color:white;
    }
    .tab ul{
      list-style-type: none;
      
    }
    .tab ul li{
      display:inline-block;
    }
    .tab ul li a{
      text-decoration:none;
      color:black;
      font-size:17px;
    }
    .tab ul li a:hover{
      opacity:75%;
      color:orangered;
    }
    



  </style>

<body>
<div id="wrapper">
			
		<nav class="navbar sticky-top navbar-light bg-light">
          <a class="navbar-brand" href="home.htm">
          <img src="img/title.jpg" style= "width:30px; height:30px;" class="title_img" alt="">Foodies
          </a>
            <ul class="nav justify-content-end">
            <li class="nav-item">
            <a class="nav-link" href="order.php">Order</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="profile.php">Manage Profile</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
            </li>
            </ul>
    	</nav>
	  

    <div class="banner-card">
    <img src="img/b-2.jpg" alt=""style="width:100%;hight:auto">
    <div class="banner-text"style="text-align:center">
      <h3 style=" font-size:35px;color:black;">Profile</h3>
      <p style="margin-bottom:15px;padding-bottom:10px;border-bottom:2px solid #DCDCDC;font-size:18px;color:black;">Manage your profile,order history and more</p>
    </div>
    </div>


    <div class="tab my-2"> 		
        <ul  style="text-align:center;">
        <li class="nav-item">
        <a class="nav-link" href="profile.php">Profile</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="order_history.php">Order History</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="favorite.php">Favorite Restaurent</a>
        </li>
        </ul>
    </div>







</div>
