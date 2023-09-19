<?php include_once("connection.php");   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <title>Check Your Message</title>
</head>
<style>
     *{margin:0;padding:0}
    body{
        background-color:white;
    }
    .nav{
        background-color:#DCDCDC;

    }
    .nav-link{
        color:Black;
        
    }

    .nav-link:hover{
        color:Orangered;
	    
    }
    .table{
        margin-top:20px;
        width:760px;
        margin:0 auto;
        
    }
</style>
<body>
<div id="wrapper">
    <div>
    <ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link" href="#">Dashboard </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="admin_blog.php">Write a Blog </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="admin_msg.php">Check Message</a>
    </li>
    </ul>
    </div>

    <form method="POST">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                
            </tr>
        </thead>

        <tbody>
        <?php
                $query="SELECT * FROM `msg`;";
                $result=$link->query($query);
                while($show=$result->fetch_assoc()){

                
        
        
        ?>
            <tr>
                <td><?php echo $show['name']; ?></td>
                <td><?php echo $show['email']; ?></td>
                <td><?php echo $show['msg']; ?></td>

            </tr>
        <?php  }  ?>

      

        
    </table>
    </form>

     
</div> 
</body>
</html>