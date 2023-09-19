<?php include_once("connection.php");   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Restaurent Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


</head>
<style>
    * {
    box-sizing: border-box;
}
.dish-category-section {
    margin-top: 16px;
}
.dish-category-section__inner-wrapper{
    padding-top: 24px;
    padding-bottom: 24px;
}
.section-container {
    padding-left: 80px;
    padding-right: 80px;
}
.dish-category-title {
    text-transform: none;
    display: flex;
    flex-direction: row;
    align-items: center;
}
.dish-list {
    list-style-type: none;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
.dish-card {
    padding: 16px;
    display: flex;
    box-shadow: 0 0.1rem 0.5rem rgb(0 0 0 / 15%);
    cursor: pointer;
    border-radius: 4px;
    overflow: hidden;
    position: relative;
    width: 100%;
    margin-top: 16px;
}
.item-react-root {
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.dish-info-container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}
.dish-name {
    font-size: 1.6rem;
    font-weight: 600;
    margin: 0;
    line-height: 1.25;
    color: var(--colorNeutralPrimary);
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.dish-card picture {
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
.dish-card .action-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex: 0 0 auto;
    white-space: nowrap;
    margin-top: 4px;
}
.price-tags-container {
    display: flex;
    align-items: center;
    justify-content: flex-start;
}
.dish-card .action-bar .price {
    font-size: 1.6rem;
    font-weight: 500;
    line-height: 1.25;
    margin: 0;
    color: var(--colorNeutralPrimary);
    text-align: right;
}
</style>
<body>
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
		<a class="nav-link" href="View.php">view</a>
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



<div class="container"><br><br>
<div class="row">
    <div class="col-lg-7"></div>
    <div class="col-lg-5">
    <form method="GET">
        <div class="input-group mb-3">
           <input type="text" name="search" class="form-control"value="<?php if(isset($_GET['search'])){ echo $_GET['search']; } ?>" placeholder="Search" required>
            <div class="input-group-append">
            <button type="submit" name="sear" class=" btn  text-dark font-weight-bold">
                Search
            </button>
         </div>
    </div>
    </form>
    </div>

</div>
<div class="row">
<div class="col-lg-4"></div>
    <div class="col-lg-8">
        
    <table class="table bg-white" style="width:100%">
    <thead class=" text-dark font-weight-bold text-center">
        <tr>
            <th class="font-weight-bold text-dark" style="width:10%"> Id</th>
            <th class="font-weight-bold text-dark"style="width:5%">title</th>
            <th class="font-weight-bold text-dark"style="width:5%">Category</th>
            <th class="font-weight-bold text-dark"style="width:5%">Description</th>
        
            
    </thead>
    <tbody>

<?php 
          

    if(isset($_GET['sear']))
    {
        $filtervalues = $_GET['search'];
        $query = "SELECT * FROM menu WHERE  CONCAT(category) LIKE '%$filtervalues%' ORDER BY id DESC";

        $query_run = mysqli_query($link, $query);


        if(mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $view)
            {
?>

                <tr class="text-dark bg-light text-center">
                            
                                <td class="" style="font-weight: bold;"><?php echo $view['id']; ?></td>
                                <td class="" style="font-weight: bold;"><?php echo $view['title']; ?></td>
                                <td class="" style="font-weight: bold;"><?php echo $view['category']; ?></td>
                                <td class="" style="font-weight: bold;"><?php echo $view['description']; ?></td>
                          
                                </div></td>

                </tr>   
    <?php
            }
        }
        else
        {
            ?>
            <tr>
            <td colspan="4">No Found</td>
            </tr>
            <?php
        }
    }
    ?> 
    </tbody>
</table>

    </div>
   
</div>
</div>

<div class="dish-category-section" data-testid="menu-category-section">
    <div class="dish-category-section__inner-wrapper section-container" id="menu__category">
        
        <ul class="dish-list">
        <?php
            $menu_query ="SELECT * fROM menu";
            $query_run=mysqli_query($link,$menu_query);
while($menu=mysqli_fetch_assoc($query_run)){
        ?>
        <li class="dish-card" data-testid="menu-product">
            <div class="item-react-root">
            <div class="dish-info-container  with-image" aria-hidden="true">
            <picture data-testid="menu-product-image">
            <img src="img/<?php echo $menu['image'];  ?>" style="width:100px;"alt="">
            </picture>
            <div class="dish-info">
                <h3 class="dish-name text-success"><span data-testid="menu-product-name"><?php echo $menu['title'];?></span></h3>
                <h5 class="dish-category-title" data-testid="menu-category-section-title">Category: <?php echo $menu['category'];?></h5>
                <p data-testid="menu-product-description" class="dish-description"><?php echo $menu['description'];?></p>
            </div>
            </div>
        <section class="action-bar">
            <div class="action-bar-content">
            <div class="price-tags-container" aria-hidden="true">
            <span class="price" data-testid="menu-product-price">Tk: <?php echo $menu['price'];?></span>
            <div class="tags-container">

            </div></div></div></section></div>
        </li>
        <?php } ?>
        
    
        </ul></div></div>

</body>
</html>