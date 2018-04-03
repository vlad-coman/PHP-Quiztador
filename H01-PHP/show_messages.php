<!DOCTYPE HTML> 
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
      <link rel="stylesheet" href="./public/styles.css">
	</head>
		<body>
			


<?php 
session_start();
	$conn = mysqli_connect('localhost', 'root', '' , 'H01');
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
        //generating table with messages for logged in user
        if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
	        	  echo "<h1 id='name'>Welcome ".$_SESSION['username']. "!</h1>";
	        	  $result = $conn->query("SELECT `first_name`, `last_name`,`message` FROM `users`");
	              if (mysqli_num_rows($result) > 0) {
	        	      echo "<table id='table' class='table table-bordered'><tr><th>First Name</th><th>Last Name</th><th>Message</th></tr>";
	        	      while($row = $result->fetch_assoc()) {
	        	          echo "<tr><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] ."</td><td>". $row["message"] . "</td></tr>" ;
	                    } 
	                    echo "</table>";
	                } 
                  
	              else { 
	              	echo "no results";
	              }

            echo "<div id='logout'><a  class='ui red huge label' href='contact.php?action=logout'> LogOut </a></div>"; 
	    } 
        else {

        	//Manage the situation when user access this section without being logged in
        	echo "<h1 id='not_logged'>You must be logged in to see these informations</h1>"; 
            echo "<div id='back'><a href='contact.php' class='ui blue big label'>Go Back and Login</a></div>";
        }
   
?>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="./public/scripts.js"></script>
 
 </body>
</html>


	     