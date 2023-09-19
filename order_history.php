<?php include_once("connection.php"); ?>
<?php include_once("profile_header.php"); ?>


<style>
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
        margin: 0 auto;
        padding: 16px;
        display: flex;
        box-shadow: 0 0.1rem 0.5rem rgb(0 0 0 / 15%);
        cursor: pointer;
        border-radius: 4px;
        overflow: hidden;
        position: relative;
        width: 70%;
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
        justify-content: space-between;
    }

    .dish-card .action-bar .price {
        margin: 0;
        color: var(--colorNeutralPrimary);
        text-align: left;
    }

</style>
<!--after ".tab-container" order history style start-->


<div class="dish-category-section">
    <div class="dish-category-section__inner-wrapper section-container">

        <ul class="dish-list">
            <?php
            $menu_query = "SELECT * fROM menu";
            $query_run = mysqli_query($link, $menu_query);
            while ($menu = mysqli_fetch_assoc($query_run)) {
                ?>
                <li class="dish-card" data-testid="menu-product">
                    <div class="item-react-root">
                        <div class="dish-info-container  with-image" aria-hidden="true">
                            <div class="dish-info">
                                <h3 class="dish-name text-success"><span
                                            data-testid="menu-product-name"><?php echo $menu['restaurent']; ?></span>
                                </h3>
                                <h5 class="dish-category-title"
                                    data-testid="menu-category-section-title"><?php echo $menu['title']; ?></h5>
                            </div>
                            <picture data-testid="menu-product-image">
                                <img src="img/<?php echo $menu['image']; ?>" style="width:100px;" alt="">
                            </picture>
                        </div>
                        <section class="action-bar">
                            <div class="action-bar-content">
                                <div class="price-tags-container" aria-hidden="true">
                                    <span class="price"
                                          data-testid="menu-product-price">Tk: <?php echo $menu['price']; ?></span>
                                </div>
                                <div class="tags-container">
                                    <a href="report.php">
                                        <button type="submit" name="add" class="btn btn-danger">
                                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                            Report to Admin
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </section>

                    </div>

                </li>
            <?php } ?>


        </ul>
    </div>
</div>


<div class="panel-footer">
    <p style="text-align:center; padding:5px;">&copy;2022</p>
</div>

</div>
</body>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</html> 