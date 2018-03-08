<?php
    try{
        include ("config.php");
    
        if(isset($_POST['user_submit'])){
            if(empty($_POST['user_roll'])){
                $error_message = ("Give your roll no.");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['user_name'])){
                $error_message = ("Give your name");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['user_email'])){
                $error_message = ("Give your email");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['user_father_name'])){
                $error_message = ("Give your father's name");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['user_birthday'])){
                $error_message = ("Give your birthday");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['user_address'])){
                $error_message = ("Give your address");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['user_phone'])){
                $error_message = ("Give your phone no.");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['user_SSC'])){
                $error_message = ("Give your SSC result");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['user_HSC'])){
                $error_message = ("Give your HSC result");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['user_BSc'])){
                $error_message = ("Give your BSc result");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else{
                if(isset($_POST['user_name']))
                    $user_name = $_POST['user_name'];
                if(isset($_POST['user_email']))
                    $user_email = $_POST['user_email'];
                if(isset($_POST['user_roll']))
                    $user_roll = $_POST['user_roll'];
                if(isset($_POST['user_phone_no']))
                    $user_phone = $_POST['user_phone'];
                if(isset($_POST['user_father_name']))
                    $user_father_name = $_POST['user_father_name'];
                if(isset($_POST['user_birthday']))
                    $user_birthday = $_POST['user_birthday'];
                if(isset($_POST['user_address']))
                    $user_address = $_POST['user_address'];
                if(isset($_POST['user_phone']))
                    $user_phone = $_POST['user_phone'];
                if(isset($_POST['user_SSC']))
                    $user_SSC = $_POST['user_SSC'];
                if(isset($_POST['user_HSC']))
                    $user_HSC = $_POST['user_HSC'];
                if(isset($_POST['user_BSc']))
                    $user_BSc = $_POST['user_BSc'];
                
                $statement = $db->prepare("INSERT INTO user_info 
				(
					user_roll,
					user_father_name,
                    user_birthday,
                    user_address,
					user_name, 
					user_email,
                    user_phone
				) 
				VALUES (?,?,?,?,?,?,?)");
				$statement->execute(array(		
					$user_roll,
					$user_father_name,
                    $user_birthday,
                    $user_address,
					$user_name,
					$user_email,
                    $user_phone
				));
                $statement = $db->prepare("INSERT INTO user_qualification 
				(
					user_roll,
                    user_SSC,
                    user_HSC,
                    user_BSc
				) 
				VALUES (?,?,?,?)");
				$statement->execute(array(		
					$user_roll,
                    $user_SSC,
                    $user_HSC,
                    $user_BSc
				));
                
				$message = "Thanks! information is Saved successfully.";
				echo "<script type='text/javascript'>alert('$message');</script>";
				//throw new Exception("Thanks! information is Saved.!");
                
                header("Location: Default.php");
                echo "<script type='text/javascript'>(Math.random();)</script>";
                exit;
            }
        }
    }catch(Exception $e) {
        $error_message = $e->getMessage();
        echo($error_message);
    }
?>
