
<?php
session_start();


if (!isset($_SESSION['email'])) {
    header("location:login.php");
}


?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Foodies||Online Food Delivery Project</title>

   
<style>

     *{
          box-sizing:border-box;
     }
     #wrapper{
          background-image:url(img/b-2.jpg);
          background-repeat:no-repeat;
          background-size:cover;
     }
     .nav-link{
    color:black;
    }
     .banner-card{
          position:relative;
     }
     .banner-card img{
          max-width:100%;
          height:auto;
     }
     .banner-text{
          position: absolute;
          top:40%;
          color:#ffff;
          padding:20px;
          left:35%;
          text-align:center;
     }
     .banner-text h4{
          font-size:56px;
          font-weight:300;
          font-family:'Lato';
          color:white;
          margin-top:20px;
          margin-bottom:10px;
     }
     .box{
          background-color:orangered;
     }

    
     .restro-category-section {
          margin-top: 16px;
     }
     .restro-category-section__inner-wrapper{
          padding-top: 24px;
          padding-bottom: 24px;
     }
     .section-container {
          padding-left: 80px;
          padding-right: 80px;
     }
     .restro-category-title {
          text-transform: none;
          display: flex;
          flex-direction: row;
          align-items: center;
     }
     .list {
          list-style-type: none;
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
     }
     .card {
     padding: 16px;
     display: flex;
     box-shadow: 0 0.1rem 0.5rem rgb(0 0 0 / 15%);
     cursor: pointer;
     border-radius: 4px;
     overflow: hidden;
     position: relative;
     width: 49%;
     margin-top: 16px;
     }
     .restro-react-root {
     width: 100%;
     display: flex;
     flex-direction: column;
     justify-content: space-between;
     }
     .restro-info-container {
     display: flex;
     justify-content: space-between;
     align-items: flex-start;
     }
     .name {
     font-size: 1.6rem;
     font-weight: 600;
     margin: 0;
     line-height: 1.25;
     color: var(--colorNeutralPrimary);
     overflow: hidden;
     text-overflow: ellipsis;
     white-space: nowrap;
     }
     .card picture {
     flex: none;
     height: 88px;
     width: 88px;
     
     background-position: 50%;
     background-repeat: no-repeat;
     background-size: 55px 50px;
     position: relative;
     margin-bottom: -28px;
     margin-left: 16px;
     border-radius: 2px;
     overflow: hidden;
     }
     .card .action-bar {
     display: flex;
     justify-content: space-between;
     align-items: center;
     flex: 0 0 auto;
     white-space: nowrap;
     margin-top: 4px;
     }
     .area-container {
     display: flex;
     align-items: center;
     justify-content: flex-start;
     }
     .dish-card .action-bar .area {
     font-size: 1.6rem;
     font-weight: 500;
     line-height: 1.25;
     margin: 0;
     color: var(--colorNeutralPrimary);
     text-align: right;
     }

</style>
</head>
  <body>
  
  
	<div id="wrapper">
	<header> 
	<div id="header"> 
		<h2> </h2>
		<p> 	</p>
	</div>
	</header>
	<nav class="navbar sticky-top navbar-light bg-light">
		<a class="navbar-brand" href="#">
		<img src="img/title.jpg" style= "width:30px; height:30px;" class="title_img" alt="">Foodies
		</a>
		<ul class="nav justify-content-end">
		<li class="nav-item">
		<a class="nav-link" href="home.htm">Home</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="profile.php">Manage Profile</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="#">Logout</a>
		</li>
		</ul>
	</nav>
     <div class="banner-card">
          <img src="img/banner.jpg" alt="">
          <div class="banner-text">
               <h4>Find food you love </h4>
               <p>Order food online for the fastest delivery</p>
              
          </div>
     
     </div>

     <div class="sections section-how-it-works">
          <div class="container" style="text-align:center;margin-top:25px;">
          <h2>How it works</h2>
          <p class="center">Get your favourite food in 4 simple steps</p>
          
          <div style="padding-top: 20px;"class="row">
          <div style="margin: 10px 0px 10px 0px;" class="col-md-3 col-sm-3 center ">

               <div class="box">
               <div class="steps step1-icon">
                     <img style="padding-top: 8px;" src="img/step1.png">
               </div>
                    <h3>Search</h3>
                    <p>Find all restaurants available near you.</p>
               </div>
               </div>

               <div style="margin: 10px 0px 10px 0px;" class="col-md-3 col-sm-3 center ">
               <div class="box">
               <div class="box-icon">
                    <img style="padding-top: 8px;" src="img/step2.png">
               </div>
                    <h3>Choose</h3>
                    <p>Browse hundreds of menus to find the food you like</p>
               </div>
               </div>

               <div style="margin: 10px 0px 10px 0px;" class="col-md-3 col-sm-3  center ">
               <div class="box">
               <div class="steps step2-icon">
                    <img style="padding-top: 8px;" src="img/step3.png">
               </div>
                    <h3>Pay</h3>
                    <p>  It's quick, secure <br>and easy</p>
               </div>
               </div>

               <div style="margin: 10px 0px 10px 0px;" class="col-md-3 col-sm-3  center ">
               <div class="box">
               <div class="steps step2-icon">
                    <img style="padding-top: 8px;" src="img/step4.png">
               </div>
                    <h3>Enjoy</h3>
                    <p>Food is prepared &amp; delivered to your door</p>
               </div>
               </div>

          </div>
          </div>
  
  
     </div>
     </div>


<div class="restro-category-section" data-testid="restro-section">
<div class="restro-category-section__inner-wrapper section-container" id=" ">
     <h2 style="margin-bottom:30px;text-align:center;">Featured Restaurent</h2>
     <div class="restro-section" id="restro">
          <ul class="list">
         

          
   
        <li class="card" data-testid="restro-product">
            <div class="restro-react-root">
            <div class="restro-info-container  with-image" aria-hidden="true">
            <div class="restro-info">
                <h3 class="name"><span data-testid="restro-name">Pizza Hut</span></h3>
                <p data-testid="description" class="restro-description">Italian Fast Food</p>
            </div>
            <picture data-testid="image">
            
            </picture></div>
        <section class="action-bar">
            <div class="action-bar-content">
            <div class="area-container" aria-hidden="true">
            <span class="area" data-testid="area">Zindabazar Point</span>
            <div class="tags-container">

            </div></div></div></section></div></li>

            <li class="card" data-testid="restro-product">
            <div class="restro-react-root">
            <div class="restro-info-container  with-image" aria-hidden="true">
            <div class="restro-info">
                <h3 class="name"><span data-testid="restro-name">Pizza Hut</span></h3>
                <p data-testid="description" class="restro-description">Italian Fast Food</p>
            </div>
            <picture data-testid="image">
            
            </picture></div>
        <section class="action-bar">
            <div class="action-bar-content">
            <div class="area-container" aria-hidden="true">
            <span class="area" data-testid="area">Zindabazar Point</span>
            <div class="tags-container">

            </div></div></div></section></div></li>

            <li class="card" data-testid="restro-product">
            <div class="restro-react-root">
            <div class="restro-info-container  with-image" aria-hidden="true">
            <div class="restro-info">
                <h3 class="name"><span data-testid="restro-name">Pizza Hut</span></h3>
                <p data-testid="description" class="restro-description">Italian Fast Food</p>
            </div>
            <picture data-testid="image">
            
            </picture></div>
        <section class="action-bar">
            <div class="action-bar-content">
            <div class="area-container" aria-hidden="true">
            <span class="area" data-testid="area">Zindabazar Point</span>
            <div class="tags-container">

            </div></div></div></section></div></li>

        <li class="card" data-testid="restro-product">
            <div class="restro-react-root">
            <div class="restro-info-container  with-image" aria-hidden="true">
            <div class="restro-info">
                <h3 class="name"><span data-testid="restro-name">Pizza Hut</span></h3>
                <p data-testid="description" class="restro-description">Italian Fast Food</p>
            </div>
            <picture data-testid="image">
            
            </picture></div>
        <section class="action-bar">
            <div class="action-bar-content">
            <div class="area-container" aria-hidden="true">
            <span class="area" data-testid="area">Zindabazar Point</span>
            <div class="tags-container">

            </div></div></div></section></div></li>
</div>
<div class="panel-footer">
        <p style="text-align:center; padding:5px;">&copy;2022</p>
    </div>


    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>