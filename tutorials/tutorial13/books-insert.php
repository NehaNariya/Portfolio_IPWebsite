<?php
session_start();
require 'db.php';
$msg = isset($_SESSION['status'])?$_SESSION['status']:"";
$imagefile = isset($_SESSION['imagefile'])?$_SESSION['imagefile']:"";
$imagetype = isset($_SESSION['imagetype'])?$_SESSION['imagetype']:"";
$imagesize = isset($_SESSION['imagesize'])?$_SESSION['imagesize']:"";
$id = isset($_GET['id'])?$_GET['id']:"";

if($imagetype != "")
{
    echo "<script>alert('File must be Image');</script>";
    unset($_SESSION['imagetype']);
}

if($imagesize != "")
{
    echo "<script>alert('Image must be less than 100KB');</script>";
    unset($_SESSION['imagesize']);
}

if($imagefile != "")
{
    echo "<script>alert('Select Image');</script>";
    unset($_SESSION['imagefile']);
}

if($id=="")
{
    $title = "";
    $author = "";
    $price = "";
    $stock = "";
}
else
{
    $sql = "select * from books where id=$id";
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
    $title = $row['title'];
    $author = $row['author'];
    $price = $row['price'];
    $stock = $row['stock'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial13</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>

    <style>
    table{
              color:white;
              max-width:100%;
              text-align:left;
              border-radius:20px;
              border:10px double  #4caf50;
              margin-top:50px;
              margin-bottom:50px;
              box-shadow:0 0 50px white,0 0 10px black,0 0 10px black;
              border-spacing:0;
                            
          }

</style>

</head>
<body>
	<div class="container-fluid mt-5">
        <div class="row justify-content-center">
        <div class="col-md-8 alert alert-success">
        <form action="books-add.php" method="post" enctype="multipart/form-data" id="register">
        <input type="hidden" name="id" value="<?=$id?>">
            
            <div class="row p-2">
                <div class="col-md-4">
                    Book Title
                </div>
                <div class="col-md-8">
                    <input type="text" name="title" placeholder="Title" value="<?=$title?>" class="form-control" id="title">
                </div>
            </div>
            
            <div class="row p-2">
                <div class="col-md-4">
                    Book Author
                </div>
                <div class="col-md-8">
                    <input type="text" name="author" placeholder="Author" value="<?=$author?>" class="form-control" id="author">
                </div>
            </div>

            <div class="row p-2">
                <div class="col-md-4">
                    Book Price
                </div>
                <div class="col-md-8">
                    <input type="text" name="price" placeholder="Price" value="<?=$price?>" class="form-control" id="price">
                </div>
            </div>

            <div class="row p-2">
                <div class="col-md-4">
                    Book Stock
                </div>
                <div class="col-md-8">
                    <input type="text" name="stock" value="<?=$stock?>" placeholder="Stock" class="form-control" id="stock">
                </div>
            </div>

            <div class="row p-2">
                <div class="col-md-4">
                    Book Image
                </div>
                <div class="col-md-8">
                    <input type="file" name="bookimage" class="form-control" id="image" accept=".jpg,.png,.jpeg,.bmp,.jfif">
                </div>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-center m-3">
                <input type="submit" value="Sumbit" class="btn btn-success" required>
            </div>
        </form>
        </div>
        </div>
    </div>


<script>
        $(document).ready(function(){
            $('#register').click(function(){
                $title = $('#title').val().toString();
                $author = $('#author').val().toString();
                $price = $('#price').val().toString();
                $stock = $('#stock').val().toString();
                
                if($title == "" | $author == "" | $price == "" | $stock == "")
                {
                    alert("Please Fill All Values");
                    return false;
                }
            });
        });
    </script>
</body>
</html>