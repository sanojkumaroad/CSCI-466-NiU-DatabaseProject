<html>



<head>

<title> CrossFit Trainer  </title>

</head>


<body>

<b>


    <h1> <center>CrossFit Trainer</center> </h1>
    <center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJFrKN-pcSr1SI6m-NtqQFy34cl6P1hYGWRg&usqp=CAU" alt="Running Pro 3000"></center>



<?php

    include 'connection.php';

?>

	
<?php

    $queryP = mysqli_query($connection, "select ProductName, ProductPrice, ProductDescription, Qty from Products WHERE ProductName = 'CrossFit Trainer'");
    while($row = mysqli_fetch_array($queryP, MYSQLI_ASSOC)) { 
     ?>
	<h3> Name: </h3> <?php echo $row['ProductName']; ?> <br>
	<h3> Price: </h3> <?php echo $row['ProductPrice']; ?> <br>
	<h3> Description: </h3> <?php echo $row['ProductDescription']; ?> <br>
	<h3> Quantity: </h3> <?php echo $row['Qty']; ?> <br>
<?php  } ?>



	<h2> Add to Cart </h2>
	<form action="crossfit.php" method="post">

        <input type="text" placeholder="Qty" name="Quantity" required/><br>
	
	<input type="submit" name="adding" value="ADD">

        

	</form>

   

</b>


</body>





</html>
