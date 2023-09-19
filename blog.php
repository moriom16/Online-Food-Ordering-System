<?php include_once("connection.php");   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        .header{
        width: 100%;
        height:240px;
        background: url(img/blog.jpg);
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        color:white;
        }



        .blog, .article{
    position: relative;
    height: fit-content;
    padding-bottom: 0;
}

.article, .title{
    min-height: auto;
    height: fit-content;
    padding: 0 10px;
    white-space: normal;
}

.published{
    margin: 20px 0 60px;
    padding: 0 10px;
    text-transform: capitalize;
    font-style: italic;
    color: rgba(0, 0, 0, 0.5);
}

.published span{
    font-weight: 700;
    font-style: normal;
}

.article *{
    margin: 30px 0;
    color: #2d2d2d;
}

.article-image{
    max-width: 100%;
    max-height: 400px;
    display: block;
    margin: 30px auto;
    object-fit: contain;
}

.sub-heading{
    padding: 2px;
    color: #2d2d2d;
    font-weight: 500;
    font-size: 40px;
    margin-top: 80px;
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
		<a class="nav-link" href="view.php">view</a>
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
<br><br>

    <div class="container bg-dark">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
            <?php
 $blog_query ="SELECT * fROM blog";
 $blog_run=mysqli_query($link,$blog_query);
while($blog=mysqli_fetch_assoc($blog_run)){
?>
<div class="card pb-2 pt-2">
<img src="<?php echo $blog['image']; ?>" style="height:300px;"class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $blog['title']; ?></h5>
    <p class="card-text"><?php echo $blog['post']; ?></p>

  </div>
</div><br>
<?php }?>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>

</div>
</body>
</html>