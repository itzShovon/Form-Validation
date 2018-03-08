<?php
    require 'config.php';
    session_start();
    $user_roll = htmlspecialchars($_GET["id"]);

    echo $user_roll;
    

    $sql = "DELETE FROM user_info WHERE user_roll = $user_roll";

    try {
        $stmt = $db->prepare($sql);
        $stmt->bindValue(":user_roll", $user_roll);

        $stmt->execute();
        $res = $stmt->rowCount();
        if ($res > 0) {
            $_SESSION["errorType"] = "success";
            $_SESSION["errorMsg"] = "Contact deleted successfully.";
        } else {
            $_SESSION["errorType"] = "info";
            $_SESSION["errorMsg"] = "Failed to delete contact.";
        }
    } catch (Exception $ex) {
        $_SESSION["errorType"] = "danger";
        $_SESSION["errorMsg"] = $ex->getMessage();
    }

    $sql = "DELETE FROM user_qualification WHERE user_roll = $user_roll";

    try {
        $stmt = $db->prepare($sql);
        $stmt->bindValue(":user_roll", $user_roll);

        $stmt->execute();
        $res = $stmt->rowCount();
        if ($res > 0) {
            $_SESSION["errorType"] = "success";
            $_SESSION["errorMsg"] = "Contact deleted successfully.";
        } else {
            $_SESSION["errorType"] = "info";
            $_SESSION["errorMsg"] = "Failed to delete contact.";
        }
    } catch (Exception $ex) {
        $_SESSION["errorType"] = "danger";
        $_SESSION["errorMsg"] = $ex->getMessage();
    }

    header('Location: Document.php');
?>
