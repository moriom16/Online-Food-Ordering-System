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
    .form-section{
        
    }
    
    .nav-link{
    color:black;
    }

    </style>
  </head>
  <body>
	<div id="wrapper">
	<div>
	<nav class="navbar sticky-top navbar-light bg-light">
		<a class="navbar-brand" href="home.htm">
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

    <div>
    <section>
    <div class="container">
        <div class="row">
        <div class="col-12">
            <p style="margin-top:25px; border-bottom:2px solid gray; ">We are always here to help.If you have any requirement/queries about our services;fillup the contact form below and we'll do our best to reply within 24 hours.Alternatively simply pickup the phone and give us a call.</p>
        </div>
        </div>
    </div>
    </section>
    <?php 
                if(isset($_POST['add'])){
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $msg=$_POST['msg'];

                $query="insert into msg values(NULL,'$name','$email','$msg')";
                $query = mysqli_query($link,$query);
                if($query){
                    echo '<script>alert("Message Sent To Admin")</script>'; 
                }else{
                    echo '<script>alert("")</script>'; 
                }


            }
        ?>
<form method="POST" class="form-section">
    <div class="container">
    <div class="row">
        <div class="col-6">   
            <div class="form-row">
            <div class="form-group col-6">
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" required>
            </div>
            <div class="form-group col-6">
                <input type="email" class="form-control" placeholder="Enter Your Email" name="email" required>
            </div>
            </div>

            <div class="form-row">
            <div class="form-group col-6">
                <input type="number" class="form-control" placeholder="Your Contact number">
            </div>
            <div class="form-group col-6">
                <select class="form-control" name="" id="">
                    <option selected>Bangladesh +017...</option>
                </select>
            </div>
            <div class="form-row">
                <div class="form-group col-12 text-center">
                    <textarea placeholder="write your query..." cols="50" rows="3" name="msg"></textarea>
                </div>
            </div>

            <div class="form-row">
            <div class="form-group col-12 text-center">
                <button type="submit" name="add" class="btn btn-primary">
                    <i class="fas fa-paper-plane"></i>
                    Send Message
                </button>
            </div>
            </div>
        </div></div></div></div>

    <div class="container">
        <div class="row">
            <div class="col-6">

                </div>
                    <div class="col-6 address">
                        <h5>Call Us/WhatsApp</h5>
                        <p><a href="tel:+987654321">
                            <i class="fas fa-phone"></i>    +(017)987654321</a></p>
                            <h5>Email/Website</h5>
                            <p><a href="#"><i class="fas fa-envelope">  abc@gmail.com</i></a><br>
                            <a href="#"><i class="fas fa-globe">    www.abc.tech</i></a> 
                        </p>
                        <h5>Working hours</h5>
                        <p>
                            Sunday-Thursday:9am-6pm
                        </p>
                        <h5>Address</h5>
                        <p> 123 state,Bangladesh</p>
                    </div>
                </div>
            </div>
                   
                </form>
            </div>
        </div>
    </div>
</form>



<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>



<div class="panel-footer">
    <p style="text-align:center; padding:5px;">&copy;2022</p>
</div>
</body>
</html>
