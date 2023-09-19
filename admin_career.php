<?php include_once("connection.php");   ?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title> </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"/>
    
<style>

    .default-container{
        width:960px;
        margin:20px;
        padding:2% 10%;
    }
    .form-group{
        margin-bottom:9px;
    }
    p{
        font-weight:500;
        font-size:18px;
    }
</style>
</head>
<body>

<div class="default-container">
	<div id="wrapper">
	<header> 
	<div id="header"> 
		<h2 style="text-align:center;">Apply Job Post </h2>
	</div>
	</header>





        <form method="POST">

        <div class="form-group">
            <label for="inputTitle">Full Name:</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="inputTitle">Email Address: </label>
            <input type="email" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="inputTitle">Contact Number: </label>
            <input type="numeric" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="location">Location: </label>
            <input type="text" name="location" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select id="category" class="form-control" required>
            <option selected > </option>
            <option>Rider</option>
            <option>Restaurent Owner</option>
            <option>Commercial</option>
            </select>
        </div>
        <br>
        <div class="form-group">
            <p>How much of experience do you have in influencer marketing, campaign marketings and social media marketings?*  </p>
            <textarea name="" id="" cols="100%" rows="3"></textarea>

        </div>

        <div class="form-group">
            <p>What is your current monthly salary*  </p>
            <textarea name="" id="" cols="100%" rows="1"></textarea>

        </div>

        <div class="form-group">
            <p>What are your salary expectations?  </p>
            <textarea name="" id="" cols="100%" rows="1"></textarea>

        </div>


        <div class="form-group">
            <label for="FormControlFile1">Attach Resume/CV</label><br>
            <input type="file" class="form-control-file" id="FormControlFile1">
        </div>



        <button style= "margin-top:10px; margin-bottom:10px;" class="btn btn-success" type="submit" name="add">Submit</button>
        </form>
      </div>
<br>
</div>
</div>


    <div class="panel-footer">
        <p style="text-align:center;padding:5px;">&copy;2022</p>
    </div>
</div>
	
	
	</div>
	
	
	
	
		
	</div>	
			
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>