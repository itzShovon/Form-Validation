<?php
    session_start();
    $_SESSION['admin_ID'] = "_";
    $_SESSION['admin_password'] = "_";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Home Page...</title>
    <link rel="icon" href="Data/Icon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="Data/Style.css">
</head>

<body>
    <div class="BodyX">
        <div class="Body">
            <div class="Header"></div>
            <div class="Middle">
                <div class="MBox">
                    <a href="Login.php">Admin</a>
                    <a href="Register.php">Student</a>
                    <a href="Document.php">Document</a>
                    <h2>Welcome to...</h2>
                    <h4>Shovon's Student Reg. Site</h4>
                </div>
            </div>
            <div class="Footer">
                <div class="FLeft">
                    <h3>Contact Me</h3>
                    <a href="http://github.com/itzShovon"><img src="Data/github.svg"></a>
                    <a href="mailto:zahidul.cse14@gmail.com?Subject=Hello%20again" target="_top"><img src="Data/Gmail_Icon.png"></a>
                </div>
                <div class="FRight">
                    <p>Copyright by &copy; Shovon</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>