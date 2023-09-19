<?php include_once("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Admin HomePage</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0
    }

    body {
        background-color: white;

    }

    .nav {
        background-color: #DCDCDC;
        margin-bottom: 20px;

    }

    .nav-link {
        color: Black;

    }

    .nav-link:hover {
        color: Orangered;

    }


    .banner {
        width: 100%;
        height: 400px;
        position: relative;
        background: #e7e7e7;
        background-size: cover;
        background-position: center;
    }

    .banner-upload-btn {
        position: absolute;
        bottom: 20px;
        right: 20px;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: rgba(0, 0, 0, 0.1);
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }

    .banner-upload-btn img {
        width: 20px;
    }

    .blog {
        width: 70vw;
        min-width: 400px;
        height: 100px;
        display: block;
        margin: auto;
        padding: 50px 0;
    }

    textarea::-webkit-scrollbar {
        width: 10px;
    }

    textarea::-webkit-scrollbar-thumb {
        background: rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    .title,
    .article {
        width: 100%;
        min-height: 100px;
        height: auto;
        outline: none;
        font-size: 50px;
        font-weight: 600;
        color: #2d2d2d;
        resize: none;
        border: none;
        padding: 10px;
        border-radius: 10px;
    }

    .title::placeholder,
    .article::placeholder {
        color: #2d2d2d;
    }

    .article {
        height: 500px;
        font-size: 20px;
        margin-top: 20px;
        line-height: 30px;
        font-weight: 500;
        padding-bottom: 100px;
        white-space: pre-wrap;
    }

    .blog-options {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 60px;
        background: #fff;
        z-index: 9;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .btn {
        border: none;
        outline: none;
        cursor: pointer;
    }

    .btn.grey {
        background: #a5a5a5;
        color: #fff;
        margin-left: 20px;
        font-size: 14px;
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

    <div class="container">

        <?php
        if (isset($_POST['add'])) {
            $title = $_POST['title'];
            $post = $_POST['post'];


            $query = "insert into blog values(NULL,'$title','$post')";
            $query = mysqli_query($link, $query);


            if ($query) {
                echo '<script>alert("New Post Uploaded")</script>';
            } else {
                echo '<script>alert("")</script>';
            }
        }
        ?>


        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-8">
                    <div class="card p-3">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Blog title..."
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="">Post</label>
                                <textarea type="text" class="form-control" name="post"
                                          placeholder="Start writing here..." required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="">Upload image</label>
                                <input type="file" name="uploadfile1" required>
                            </div>
                            <button type="submit" name="upload" class="btn btn">upload</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>

        <?php

        if (isset($_POST['upload'])) {
            $title = $_POST['title'];
            $post = $_POST['post'];

            $filename1 = $_FILES['uploadfile1']['name'];
            $tempname1 = $_FILES['uploadfile1']['tmp_name'];
            $image_1 = "img/" . $filename1;
            move_uploaded_file($tempname1, $image_1);

            $query = "insert into blog values(NULL,'$title','$post','$image_1')";
            $query = mysqli_query($link, $query);


        }


        ?>


    </div>
</body>
</html>