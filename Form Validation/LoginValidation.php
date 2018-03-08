<?php
    try{
        include ("config.php");
        
        if(isset($_POST['SISubmit'])){
            if(empty($_POST['admin_ID']) AND empty($_POST['admin_password'])){
                $error_message = ("Give your ID/E-mail and your password");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['admin_ID'])){
                $error_message = ("Give your ID/E-mail");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else if(empty($_POST['admin_password'])){
                $error_message = ("Give your password");
                echo "<script type='text/javascript'>alert('$error_message');</script>";
            }
            else{
                $admin_ID = "_";
                $admin_password = "_";
                
                if(isset($_POST['admin_ID']))
                    $admin_ID = $_POST['admin_ID'];
                if(isset($_POST['admin_password']))
                    $admin_password = $_POST['admin_password'];
                
                $statement = $db->prepare("SELECT admin_password FROM admin WHERE admin_ID=$admin_ID");
                $statement->execute();
                $result = $statement->fetch();
                
                
                
                session_start();
                if(empty($admin_ID)){
                    $_SESSION['admin_ID'] = "_";
                    $_SESSION['admin_password'] = "_";
                }
                else{
                    $_SESSION['admin_ID'] = $admin_ID;
                    $_SESSION['admin_password'] = $admin_password;
                }
                
                
                if(empty($result))
                    echo "<script type='text/javascript'>alert('Non user... Try again...');</script>";
                else
                    foreach($result as $row){
                        if($admin_password == $row){
                            header ('Location: Document.php');
                        }
                        else;
    //                        header ('Location: Login.php');
                    }
            }
            
//            session_start();
//            if(empty($admin_ID)){
//                $_SESSION['admin_ID'] = "";
//                $_SESSION['admin_password'] = "";
//            }
//            else{
//                $_SESSION['admin_ID'] = $admin_ID;
//                $_SESSION['admin_password'] = $admin_password;
//            }
        }
    }catch(Exception $e) {
        $error_message = $e->getMessage();
        echo($error_message);
    }
?>
