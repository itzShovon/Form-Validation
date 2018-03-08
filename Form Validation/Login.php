<?php
    include ("LoginValidation.php");
?>

    <!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" type="text/css" href="Data/LoginStyle.css">
        <title>Login Page</title>
        <link rel="icon" type="image/png" href="Data/Icon.png" sizes="16x16">
        <script src="Data/Main.js"></script>
    </head>

    <body>
        <div class="SIBody">
            <form name="login_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
                <a href="Default.php">Back</a>
                <a href="Register.php">Student</a>
                <a href="Document.php">Document</a>
                <input type="text" id="admin_ID" name="admin_ID" class="admin_ID" placeholder="ID / E-mail" autofocus>
                <input type="password" id="admin_password" class="admin_password" name="admin_password" placeholder="Password">
                <button type="reset" id="SIReset" name="SIReset" class="SIReset">Reset</button>
                <button type="submit" class="SISubmit" id="SISubmit" name="SISubmit" onclick="return SigninValidation();">Login</button>
            </form>
        </div>
    </body>

    </html>
