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
    }
    .nav-link{
        color:Black;
        
    }

    .nav-link:hover{
        color:Orangered;
	      border-bottom:3px solid orangered;
    }
    .menu-form{
        position:center;
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

  <div class="menu-form">
  <?php 
            if(isset($_POST['add'])){
                $title=$_POST['title'];
                $image=$_POST['image'];
                $category=$_POST['category'];
                $description=$_POST['description'];
                $price=$_POST['price'];
               

            $query="insert into menu values(NULL,'$title','$image','$category','$description','$price')";
            $query = mysqli_query($link,$query);
            if($query){
                echo '<script>alert("Item Added")</script>'; 
            }else{
                echo '<script>alert("")</script>'; 
            }


        }
    ?>

  <form method="POST" style="width:760px; margin-top:20px;">
    <div class="form-group row">
        <label for="title" class="col-sm-2 col-form-label">Food Name</label>
        <div class="col-sm-10">
        <input type="text" name="title" class="form-control" id=" " placeholder=" ">
        </div>
    </div>
  
    <fieldset class="form-group">
      <div class="row">
        <legend class="col-form-label col-sm-2 pt-0">Category</legend>
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="category" id="gridRadios1" value="Pizza" checked>
            <label class="form-check-label" for="gridRadios1">
              Pizza
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="category" id="gridRadios2" value="Burger">
            <label class="form-check-label" for="gridRadios2">
              Burger
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="category" id="gridRadios3" value="Soup">
            <label class="form-check-label" for="gridRadios3">
              Soup
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="category" id="gridRadios4" value="Pasta">
            <label class="form-check-label" for="gridRadios4">
              Pasta
            </label>
          </div>
          
        </div>
      </div>
      <div class="form-group">
          <label for="image">Choose Image</label><br>
          <input type="file" name="image" class=" " id=" ">
      </div>
      <div class="form-group row">
          <label for="title" class="col-sm-2 col-form-label">Description</label>
          <div class="col-sm-10">
          <input type="text" name="description" class="form-control" id=" " placeholder=" ">
          </div>
      </div>
      <div class="form-group row">
          <label for="title" class="col-sm-2 col-form-label">Price</label>
          <div class="col-sm-10">
          <input type="text" name="price" class="form-control" id=" " placeholder=" ">
          </div>
      </div>
    </fieldset>
    
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" name="add" class="btn btn-primary">save </button> 
       
      </div>
    </div>

  </form>
 
  </div>


   
    </div>
    
</body>
</html>