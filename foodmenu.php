<?php include_once("connection.php");   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Restaurent Owner HomePage</title>
</head>
<style>
    *{margin:0;padding:0}
    body{
        background-color:white;
        
    }
    .nav{
        background-color:#DCDCDC;
        margin-bottom:20px;
    }
    .nav-link{
        color:Black;
        
    }

    .nav-link:hover{
        color:Orangered;
	    border-bottom:0.2px solid orangered;
    }
    .menu-table{
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
            <a class="nav-link active" href="owner.php">Create Menu </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="foodmenu.php">Manage Menu</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Order List</a>
        </li>
        
        </ul>
        </div>

      <form method="post">
       <div class="menu-table">
         <h5 style="text-align:center;">Available Food List:</h5><br>
       <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Image</th>
              <th scope="col">Category</th>
              <th scope="col">Description</th>
              <th scope="col">Price</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
                $query="SELECT * FROM `menu`;";
                $result=$link->query($query);
                while($show=$result->fetch_assoc()){
        ?>
         <tr>
                <td><?php echo $show['id']; ?></td>
                <td><?php echo $show['title']; ?></td>
                <td><?php echo $show['image']; ?></td>
                <td><?php echo $show['category']; ?></td>
                <td><?php echo $show['description']; ?></td>
                <td><?php echo $show['price']; ?></td>
                <td>
                
                    <input type="button" name=" " value="Update">
                    <input type="button" name=" " value="Delete">
                </td>
            </tr>
    
        <?php  }  ?>



          </tbody>
        </table>
        <button class="btn btn-success" name=" " type="submit">submit</button>
       </div>
      </form>
    </div>
</body>
</html>