<?php
    include ("config.php");
    $user_roll = htmlspecialchars($_GET["id"]);
    if(empty($_GET["id"]))
        header('Location: Document.php');

    session_start();
    $_SESSION["user_roll"] = $user_roll;
    $user_roll = $_SESSION['user_roll'];


    $statement1 = $db->prepare("SELECT * FROM user_info WHERE user_roll=$user_roll");
    $statement1->execute();
    $result1 = $statement1->fetchAll(PDO::FETCH_OBJ);

    $statement2 = $db->prepare("SELECT * FROM  user_qualification WHERE user_roll=$user_roll");
    $statement2->execute();
    $result2 = $statement2->fetchAll(PDO::FETCH_OBJ);

    $statement = $db->prepare("SELECT admin_password FROM admin WHERE admin_ID=$temp");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_OBJ);


    $temp = $_SESSION['admin_ID'];
    if($_SESSION['admin_ID'] == "_")
        header('Location: Default.php');
    $temp = 0;
    foreach($result as $row){
        if($row->admin_password == $_SESSION['admin_password'])
            $temp = 1;
    }
    if($temp == 0)
        header('Location: Default.php');




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
                if(isset($_POST['user_phone']))
                    $user_phone = $_POST['user_phone'];
                if(isset($_POST['user_father_name']))
                    $user_father_name = $_POST['user_father_name'];
                if(isset($_POST['user_birthday']))
                    $user_birthday = $_POST['user_birthday'];
                if(isset($_POST['user_address']))
                    $user_address = $_POST['user_address'];
                if(isset($_POST['user_SSC']))
                    $user_SSC = $_POST['user_SSC'];
                if(isset($_POST['user_HSC']))
                    $user_HSC = $_POST['user_HSC'];
                if(isset($_POST['user_BSc']))
                    $user_BSc = $_POST['user_BSc'];
                
                $sql = "UPDATE user_info SET user_name=?, user_email=?, user_phone=?, user_father_name=?, user_birthday=?, user_address=? WHERE user_roll=?";
                $db->prepare($sql)->execute([$user_name, $user_email, $user_phone, $user_father_name, $user_birthday, $user_address, $user_roll]);

                $sql = "UPDATE user_qualification SET user_SSC=?, user_HSC=?, user_BSc=? WHERE user_roll=?";
                $db->prepare($sql)->execute([$user_SSC, $user_HSC, $user_BSc, $user_roll]);
                
				$message = "Thanks! information is Saved successfully.";
				echo "<script type='text/javascript'>alert('$message');</script>";
				//throw new Exception("Thanks! information is Saved.!");
                
                header("Location: Document.php");
                exit;
            }
        }
    }catch(Exception $e) {
        $error_message = $e->getMessage();
        echo($error_message);
    }
?>