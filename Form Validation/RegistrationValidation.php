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
                $XTemp = 1;
                
                if(isset($_POST['user_name'])){
                    if (!preg_match("/^[a-zA-Z ]*$/",$_POST['user_name'])) {
//                        $Err = "Only letters and white space allowed";
                        echo '<script type="text/javascript">alert("Only letters and white space allowed");</script>';
                        $XTemp = 0;
                    }
                    else
                        $user_name = $_POST['user_name'];
                }
                if(isset($_POST['user_email'])){
                    if (!filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL)) {
//                        $Err = "Invalid email format";
                        echo '<script type="text/javascript">alert("Invalid email format");</script>';
                        $XTemp = 0;
                    }
                    else
                        $user_email = $_POST['user_email'];
                }
                if(isset($_POST['user_roll'])){
                    if (!preg_match("/^[0-9]{8}/",$_POST['user_roll'])) {
//                        $Err = "Only number allowed lengh 8";
                        echo '<script type="text/javascript">alert("Only number allowed with length 8 for roll");</script>';
                        $XTemp = 0;
                    }
                    else
                        $user_roll = $_POST['user_roll'];
                }
                if(isset($_POST['user_phone'])){
                    if (!preg_match("/^[0-9]{11}/",$_POST['user_phone'])) {
//                        $Err = "Only number allowed";
                        echo '<script type="text/javascript">alert("Only number allowed lenght 11 for phone no");</script>';
                        $XTemp = 0;
                    }
                    else
                        $user_phone = $_POST['user_phone'];
                }
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
                
                if($XTemp == 1){
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
                    echo "<script type='text/javascript'>alert('Math.random() * 10');</script>";
                    
//                    header("Location: Default.php");
//                    echo "<script type='text/javascript'>(Math.random();)</script>";
//                    exit;
                    
                    
                    echo "<script type='text/javascript'>alert(rand(10,100));</script>";
                    //throw new Exception("Thanks! information is Saved.!");
                }
                else;
            }
        }
    }catch(Exception $e) {
        $error_message = $e->getMessage();
        echo($error_message);
    }
?>
