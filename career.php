<?php include_once("connection.php");   ?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Foodies||Online Food Delivery Project</title>


    <style>
    *{margin:0;padding:0}
    body{
    background-color:white;

    }
    #wrapper{
        width:960px;
        margin:0 auto;
    }
    
    .nav-link{
        color:black;
    }

    .container{
        width:960px;
       
    }
    .box{
        width:300px;
        float:left;
        margin-right:10px;
       
        margin-top:25px;
        margin-bottom:15px;
    }

    .lastchild{
        margin-right:0px;
    }
    .box h3{
        text-align:center;
        color:orange;
    }

    .box p{
        text-align:justify;
        font-weight:400;
    }

    .box a{
        display:block;
        text-align:center;
        text-decoration:none;
        background-color:orange;
        color:white;
        
        transition:all 0.5s ease;
    }

    .box a:hover{
        background-color:white;
        color:orange;
        
    }
</style>


  </head>
  <body>
	<div id="wrapper">
    <div>
    <nav class="navbar sticky-top navbar-light bg-light">
            <a class="navbar-brand" href="#">
            <img src="img/title.jpg" style= "width:30px; height:30px;" class="title_img" alt="">Foodies
            </a>
            <ul class="nav justify-content-end">
            <li class="nav-item">
            <a class="nav-link" href="home.htm">About Us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="career.php">Career</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="order.php">Order</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Login &amp; Signup</a>
            </li>
            </ul>
            </nav>
    </div>
	
			
	

    <div class="container-text" style="padding:15px;text-align:center;">
    <h2>  Together We Win  </h2>
    <p> If you’re passionate about good food and great work, you’re in the right place.We are a potluck of cultures and personalities.
    Our values are what unite us and we’re always on the lookout for driven, talented and passionate to join our diverse and fast-paced team.
    In return, we offer a challenging, dynamic and highly collaborative environment where you can grow and develop your career with the right support, every step of the way.   
    </p>
        
    </div>

    <div class="container">
		
		<div class="box">
			<img style="width:300px; height:200px;" src="img/join us/restaurent.jpg" alt="" />
			<h3>Restaurent Owner</h3>
			<p>We’re responsible for identifying new business opportunities, promoting existing activities and ensuring fast, sustainable growth.</p>
			<a href="admin_career.php">Join Us</a>
		</div>		
		<div class="box">
			<img style="width:300px; height:200px;" src="img/join us/homechef.png" alt="" />
			<h3>Home Chef</h3>
			<p> The journey of housewife to succssful home chef.When passion become a profession then sky is the limit.Find yourself in our team</p>
			<a href="admin_career.php">Join Us</a>
		</div>
		<div class="box lastchild">
			<img style="width:300px; height:200px;" src="img/join us/rider.jpg" alt="" />
			<h3>Rider</h3>
			<p> Flexible times to work; Flexible number of hours to work; 
			Increased productivity; More motivation to get things done; Feel more in control your life
			</p>
			<a href="admin_career.php">Join Us</a>
		</div>


    </div>

	<div class="panel panel-default container">
    <div class="panel-body">
       
        
    <form method="post">
    <table class="table">
        <thead>
            <tr>
                <th>Job Title</th>
                <th>Category</th>
                <th>Location</th>
            </tr>
        </thead>

        <tbody>
        <?php
                $query="SELECT * FROM `career`;";
                $result=$link->query($query);
                while($show=$result->fetch_assoc()){

                
        
        
        ?>
            <tr>
                <td><?php echo $show['title']; ?></td>
                <td><?php echo $show['category']; ?></td>
                <td><?php echo $show['location']; ?></td>
            </tr>
    
        <?php  }  ?>
        </tbody>
       
    </table>
    <button class="btn btn-white" name="att" type="submit">
        <a href="admin_career.php"style="text-decoration:none;color:black;">  Apply Now </a></button>
    </form>
   
    </div>



    <div class="panel-footer">
        <p style="text-align:center; padding:5px;">&copy;2022</p>
    </div>
    </div>
	
	
	</div>
	
	
	
	
		
	</div>	
	</div>		
	
</body>
</html>