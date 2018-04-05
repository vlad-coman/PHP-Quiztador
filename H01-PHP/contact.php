	<!DOCTYPE HTML>  
	<html>
	<head>
		<title>Contact form</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">

		<link rel="stylesheet" href="./public/styles.css">
	</head>
	<body>

		<?php 

			// Connection with DB
		$conn = mysqli_connect('localhost', 'root', '' , 'H01');
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

	        //Managing login
		session_start();
		if(isset($_POST['btnLogin'])){
			$username = $_POST["username"];
			$password = hash('sha256',$_POST['password']);
			$result = mysqli_query($conn, 'SELECT * FROM `users` WHERE username="'.$username.'" AND password="'.$password.'"');
			if (mysqli_num_rows($result) === 1) {
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				header('Location: show_messages.php');

			} else {
				echo "<p id='invalid_account' class='error'>Invalid account</p>";
			}
		}
	
	        //Deleting session when logged in user hits "LogOut" button
			if (isset($_POST['btnLogOut'])) {
			session_destroy();
		} 

			//Managing form validation 
		$first_nameErr = $last_nameErr = $emailErr = $messageErr = "";
		$first_name = $last_name = $email = $message= "";
		$sql_first_name = $sql_last_name = $sql_email = $sql_message = null;
			
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		if (isset($_POST['Submit'])) {
			if (empty($_POST["first_name"])) {
				$first_nameErr = "First Name required";
			} else {
				$first_name = test_input($_POST["first_name"]);
				if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
					$first_nameErr = "Only letters and white space allowed"; 
				} else {
					$sql_first_name=$first_name;
				}
				
			}
		}

		if (isset($_POST['Submit']))  {
			if (empty($_POST["last_name"])) {
				$last_nameErr = "Last Name required ";
			} else {
				$last_name = test_input($_POST["last_name"]);
				if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
					$last_nameErr = "Only letters and white space allowed"; 
				} else {
					$sql_last_name=$last_name;
				}
				
			}
		}
		if (isset($_POST['Submit'])) {
			if (empty($_POST["email"])) {
				$emailErr = "Email required";
			} else {
				$email = test_input($_POST["email"]);
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$emailErr = "Invalid email format"; 
				} else {
					$sql_email=$email;
				}
				
			}
		}
		if (isset($_POST['Submit'])) {
			if (empty($_POST["message"])) {
				$messageErr = "Message required";
			} else {
				$message = test_input($_POST["message"]);
				$sql_message=$message;
			}

		}

		       //Insert data from FORM into DB if FORM's data is in the right format and all fields filled
		if($sql_first_name && $sql_last_name && $sql_email && $sql_message){
			$sql = "INSERT INTO `users` (first_name, last_name, email, message)
			VALUES ('{$sql_first_name}', '{$sql_last_name}', '{$sql_email}', '{$sql_message}')";
			if (mysqli_query($conn, $sql)) {
				mysqli_close($conn);
				echo "<div id='flash_message' class='alert alert-success'<p >Message succesfully sent</p></div>";
			} else {
				echo "Message not sent";
			}       
		}
		
		
		?>

		<!--NAVBAR  -->
		<form method="POST" > 
			<div class="ui inverted menu">
				<div class=" item">
					<div class="ui icon input">
						<input  type="text" placeholder="Login" name="username">
					</div>
				</div>   
				
				<div class=" item">
					<div class="ui icon input">
						<input id="user" type="password" placeholder="Password" name="password">
					</div>
				</div>
				<div class=" item">
					<div class="ui icon input">
						<button id ="but" class="ui inverted button" type="submit" name="btnLogin">Go</button>
					</div>
				</div>
			</div>
		</form>

		<!-- MESSAGE FORM -->
		<div class="ui main text container segment">
			<p><span class="error">* required field.</span></p>
			<div class="ui huge header">New Message </div>
			<form class="ui form"  method="POST">
				<div class="field">
					<label>
						<span class="error">*</span>
						First Name
						<span class="err error"><?php echo $first_nameErr;?></span>
					</label>
					<input type="text" name="first_name" placeholder= "e.g   Alin" >
					
				</div>
				<div class="field">
					<label>
						<span class="error">*</span>
						Last Name
						<span class="err error"><?php echo $last_nameErr;?></span>
					</label>
					<input type="text" name="last_name" placeholder="e.g   Popescu">
				</div>
				<div class="field">
					<label>
						<span class="error">*</span>
						Email
						<span class="err error"><?php echo $emailErr;?></span>
					</label>
					<input type="text" name="email" placeholder="e.g   name@domain.com">
				</div>

				<div class="field">
					<label>
						<span class="error">*</span>
						Message
						<span class="err error"><?php echo $messageErr;?></span>
					</label>
					<textarea name="message"></textarea>
				</div>
				<input class="ui big violet inverted button" type="submit" name="Submit" value="Submit">
			</form>
		</div>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="./public/scripts.js"></script>
	</body>
	</html>
