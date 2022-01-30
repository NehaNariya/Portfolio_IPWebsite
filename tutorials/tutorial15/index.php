<?php
require 'db.php';

session_start();
if(isset($_SESSION['message']))
{
    echo $_SESSION['message'];
    unset($_SESSION['message']);    
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial15</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">

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
	<div class="container mt-4">
    <h2 class="text-success" align="center">Book's Details</h2>        
             
        <div class="row p-1">
            <div class="col-md-9">
                <a href="registration.php" class="link-primary"><button type="button" class="btn btn-success">Insert Data</button></a> 
                <!-- <a class="link-primary" href="registration.php"><h5>Insert Data</h5></a> -->
            </div>
            <div class="col-md-4">
                <form action="" method="post" class="form-inline">    
                        <input type="text" name="search" class="form bg-light">
                        <input type="submit" name="btnsearch" class="form btn-success" value="Search">
                </form>
            </div>
        </div>
        
        <table  class="table table-hover table-dark text-white" border="5" align="center" style="width:100%;" "height:100%;">
    		<thead>
                <tr>
                    <th style="text-align:center" ><b>No</b></th>
                    <th style="text-align:center" ><b>Image</b></th>
                    <th style="text-align:center" ><b>Book Title</b></th>
                    <th style="text-align:center" ><b>Author</b></th>
                    <th style="text-align:center" ><b>Price</b></th>
                    <th style="text-align:center" ><b>Stock</b></th>
                    <th style="text-align:center" ><b>IssueCount</b></th>
                    <th style="text-align:center" ><b>Action</b></th>
                </tr>
            </thead>
        
            <?php

            $search=isset($_POST['search'])?$_POST['search']:'';

            $sql="";
            if($search!="")
            {
                $sql = "select * from books where id like '%$search%' OR title like '%$search%' or author like '%$search%' OR price like '%$search%' OR stock like '%$search%'";    
            }
            else
            {
                $sql = "select 
                    b.id,
                    b.title,
                    b.author,
                    b.price,
                    b.stock,
                    b.titleurl,
                    count(bi.bookid) as issuecount
                from
                    books as b left join
                    bookissue as bi on
                    bi.bookid=b.id
                group by
                    bi.bookid";
            }
            $result = $db->query($sql);
            $count=1;

            if($result->num_rows<=0)
            {   
            ?>
                <tbody class="table-light text-center">
                    <td colspan="8"><h5>No Records Found</h5></td>
                </tbody>
            <?php
            }
            while ($row = $result->fetch_assoc()) 
            {      
                 //print_r($row);
                
            ?>
            
            <tbody class="table table-dark text-dark">
            <tr>
                    <td><?=$count++;?></td>
                    <td><img src="pic/<?=$row['titleurl'];?>" width="50" height="40"></td>
                    <td><?=$row['title']?></td>
                    <td><?=$row['author']?></td>
                    <td><?=$row['price']?></td>
                    <td><?=$row['stock']?></td>
                    <td><?=$row['issuecount']?></td>
                    <td>
                        <button class="btn btn-success"><a class="text-white" href="registration.php?id=<?php echo $row['id'];?>">Edit</a></button>
                        <button class="btn btn-danger"><a class="text-white" href="book_delete.php?id=<?php echo $row['id'];?>" onclick=" return confirm('Are You Sure..?')">Delete</a></button>
                    </td>
            </tr>
        </tbody>
            <?php
            	}
            ?>
      
    	</table>

</div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>