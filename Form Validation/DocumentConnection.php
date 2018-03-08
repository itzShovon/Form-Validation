<?php
    require 'config.php';
    try{
        session_start();
        $temp = $_SESSION['admin_ID'];
        if($_SESSION['admin_ID'] == "_")
            header('Location: Default.php');
        else{
        
            $statement1 = $db->prepare("SELECT * FROM user_info");
            $statement1->execute();
            $result1 = $statement1->fetchAll(PDO::FETCH_OBJ);

            $statement2 = $db->prepare("SELECT * FROM  user_qualification");
            $statement2->execute();
            $result2 = $statement2->fetchAll(PDO::FETCH_OBJ);

            $statement = $db->prepare("SELECT admin_password FROM admin WHERE admin_ID=$temp");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_OBJ);
        
//        echo $_SESSION['admin_ID'];
        
            $temp = 0;
            foreach($result as $row){
//                echo $row->admin_password;
                if($row->admin_password == $_SESSION['admin_password'])
                    $temp = 1;
            }
            if($temp == 0)
                header('Location: Default.php');
        }
        
        
        
//        $statement = $db->prepare("SELECT admin_password FROM admin WHERE admin_ID=$temp");
//        $statement->execute();
//        $result = $statement->fetch();


//        $temp = 0;
//        echo $temp;
//        foreach($result as $row){
//            if($row->admin_password == $_SESSION['admin_password'])
//                $temp = 1;
//        }
//        if($temp == 0);
//            header('Location: Default.php');
        
//        $statement1 = $db->prepare("SELECT user_ID FROM user_info WHERE user_ID=$user_ID");
//        $statement1->execute();
//        $result1 = $statement1->fetchAll(PDO::FETCH_OBJ);
//        
//        $statement2 = $db->prepare("SELECT user_ID, person_no, person_birthday FROM person_about WHERE user_ID=$user_ID");
//        $statement2->execute();
//        $result2 = $statement2->fetchAll(PDO::FETCH_OBJ);
//        
//        $statement3 = $db->prepare("SELECT person_nick_name, person_website FROM person_contact WHERE user_ID=$user_ID");
//        $statement3->execute();												
//        $result3 = $statement3->fetchAll(PDO::FETCH_OBJ);
        
        
//        session_start();
//        $_SESSION["user_ID"] = "$user_ID";
//        $person_no = $_SESSION['person_no'];
    }
    catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>
