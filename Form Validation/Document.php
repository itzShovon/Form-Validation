<?php
    include("DocumentConnection.php");
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Contained Doc.</title>
        <link rel="icon" href="Data/Icon.png" type="image/png" sizes="16x16">
        <link rel="stylesheet" type="text/css" href="Data/DocumentStyle.css">
    </head>

    <body>
        <div class="Header" id="Header">
            <div class="HeaderX">
                <a class="Menu" href="Default.php">Logout</a>
                <a class="Menu" href="Login.php">Admin</a>
                <a class="Menu" href="Register.php">Student</a>
<!--                <a class="Menu" href="Search.php?id=<?php echo $user_roll; ?>">Search</a>-->
            </div>
        </div>
        <div class="Middle" id="Middle">
            <div class="MDocuments" id="MDocuments">
                <div class="MDTable">
                    <div class="MDTCol1">
                        <strong>Roll</strong><br>
                        <?php foreach($result1 as $row){ ?>
                        <?php if(empty($row->user_roll)){ ?>
                        <br>
                        <?php } ?>
                        <p>
                            <?php echo $row->user_roll ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="MDTCol2">
                        <strong>Name</strong><br>
                        <?php foreach($result1 as $row){ ?>
                        <?php if(empty($row->user_name)){ ?>
                        <br>
                        <?php } ?>
                        <p>
                            <?php echo $row->user_name; ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="MDTCol3">
                        <strong>E-Mail</strong><br>
                        <?php foreach($result1 as $row){ ?>
                        <?php if(empty($row->user_email)){ ?>
                        <br>
                        <?php } ?>
                        <p>
                            <?php echo $row->user_email ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="MDTCol4">
                        <strong>Father's Name</strong><br>
                        <?php foreach($result1 as $row){ ?>
                        <?php if(empty($row->user_father_name)){ ?>
                        <br>
                        <?php } ?>
                        <p>
                            <?php echo $row->user_father_name ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="MDTCol4">
                        <strong>Birthday</strong><br>
                        <?php foreach($result1 as $row){ ?>
                        <?php if(empty($row->user_birthday)){ ?>
                        <br>
                        <?php } ?>
                        <p>
                            <?php echo $row->user_birthday ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="MDTCol4">
                        <strong>Address</strong><br>
                        <?php foreach($result1 as $row){ ?>
                        <?php if(empty($row->user_address)){ ?>
                        <br>
                        <?php } ?>
                        <p>
                            <?php echo $row->user_address ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="MDTCol4">
                        <strong>Phone No.</strong><br>
                        <?php foreach($result1 as $row){ ?>
                        <?php if(empty($row->user_phone)){ ?>
                        <br>
                        <?php } ?>
                        <p>
                            <?php echo $row->user_phone ?>
                        </p>
                        <?php } ?>
                    </div>
<!--                    <h4>Educational Qualification</h4>-->
                    <div class="MDTCol4">
                        <strong>SSC</strong><br>
                        <?php foreach($result2 as $row){ ?>
                        <?php if(empty($row->user_SSC)){ ?>
                        <br>
                        <?php } ?>
                        <p>
                            <?php echo $row->user_SSC ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="MDTCol4">
                        <strong>HSC</strong><br>
                        <?php foreach($result2 as $row){ ?>
                        <?php if(empty($row->user_HSC)){ ?>
                        <br>
                        <?php } ?>
                        <p>
                            <?php echo $row->user_HSC ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="MDTCol4">
                        <strong>BSc</strong><br>
                        <?php foreach($result2 as $row){ ?>
                        <?php if(empty($row->user_BSc)){ ?>
                        <br>
                        <?php } ?>
                        <p>
                            <?php echo $row->user_BSc ?>
                        </p>
                        <?php } ?>
                    </div>
                    <div class="MDTCol6">
                        <strong>Action</strong><br>
                        <?php foreach($result2 as $row){ ?>
                        <?php if(empty($row->user_roll)){ ?>
                            <br>
                        <?php } ?>
                        
                        <?php $_SESSION['user_roll'] = $row->user_roll; ?>
                        
                        <div class="ActionTemp">
                            <a class="DeleteAction" href="Delete.php?id=<?php echo $_SESSION["user_roll"]; ?>">Delete</a>
                            <a class="DeleteAction" href="Update.php?id=<?php echo $_SESSION["user_roll"]; ?>">Update</a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
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
    </body>

    </html>
