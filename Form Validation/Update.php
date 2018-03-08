<?php
    include("UpdateValidation.php");
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Input Data</title>
        <link rel="icon" href="Data/Icon.png" type="image/png" sizes="16x16">
        <link rel="stylesheet" type="text/css" href="Data/RegisterStyle.css">
        <script src="Data/Main.js"></script>
    </head>

    <body>
        <script src="Data/Main.js"></script>
        <form name="user_submit" method="post" action="Update.php?id=<?php echo $user_roll;?>" enctype="multipart/form-data">
            <div class="BodyX" id="BodyX">
                <div class="Body" id="Body">
                    <div class="BOption">
                        <a href="Default.php">Logout</a>
                        <a href="Document.php">Back</a>
                        <a href="Register.php">Register</a>
                    </div>

                    <div class="Header"></div>

                    <div class="Middle" id="Middle">
                        <div class="MTop" id="MTop">
                            <h3>Data Input Form</h3>
                        </div>
                        <div class="MBody" id="MBody">
                            <hr>
<!--                            <form name="user_submit" target="Update.php?id=<?php echo $user_ID; ?>&id2=<?php echo $person_no; ?>" method="post">-->
                                <table>
                                    <tr>
                                        <th colspan="4">User Information</th>
                                    </tr>
                                    <tr>
                                        <td>1.</td>
                                        <td>Name</td>
                                        <td><input class="user_name" id="user_name" name="user_name" type="text" value="<?php
                                                foreach($result1 as $row)
                                                    echo $row->user_name;
                                            ?>" placeholder="Name" autofocus></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Roll</td>
                                        <td><input class="user_roll" id="user_roll" name="user_roll" type="text" placeholder="Roll" value="<?php
                                                foreach($result1 as $row)
                                                    echo $row->user_roll;
                                            ?>"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>E-mail</td>
                                        <td><input class="user_email" id="user_email" name="user_email" type="email" value="<?php
                                                foreach($result1 as $row)
                                                    echo $row->user_email;
                                            ?>" placeholder="E-mail"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Father's Name</td>
                                        <td><input class="user_father_name" id="user_father_name" name="user_father_name" value="<?php
                                                foreach($result1 as $row)
                                                    echo $row->user_father_name;
                                            ?>" type="text" placeholder="Father's Name"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Birthday</td>
                                        <td><input class="user_birthday" id="user_birthday" name="user_birthday" type="date" value="<?php
                                                foreach($result1 as $row)
                                                    echo $row->user_birthday;
                                            ?>" placeholder="Birthday"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>Address</td>
                                        <td><input class="user_address" id="user_address" name="user_address" type="text" value="<?php
                                                foreach($result1 as $row)
                                                    echo $row->user_address;
                                            ?>" placeholder="Address"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>7.</td>
                                        <td>Phone No.</td>
                                        <td><input class="user_phone" id="user_phone" name="user_phone" type="tel" value="<?php
                                                foreach($result1 as $row)
                                                    echo $row->user_phone;
                                            ?>" placeholder="Phone No."></td>
                                        <td></td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <th colspan="4">Educational Information</th>
                                    </tr>
                                    <tr>
                                        <td>1.</td>
                                        <td>SSC</td>
                                        <td><input class="user_SSC" id="user_SSC" name="user_SSC" type="text" value="<?php
                                                foreach($result2 as $row)
                                                    echo $row->user_SSC;
                                            ?>" placeholder="SSC"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>HSC</td>
                                        <td><input class="user_HSC" id="user_HSC" name="user_HSC" type="text" value="<?php
                                                foreach($result2 as $row)
                                                    echo $row->user_HSC;
                                            ?>" placeholder="HSC"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>B.Sc</td>
                                        <td><input class="user_BSc" id="user_BSc" name="user_BSc" value="<?php
                                                foreach($result2 as $row)
                                                    echo $row->user_BSc;
                                            ?>" type="text" placeholder="B.Sc"></td>
                                        <td></td>
                                    </tr>
                                </table>
                                <hr>
                                <div class="Button">
<!--                                    <?php $_SESSION["roll_no"] = $person_no; ?>-->
                                    <button type="submit" name="user_submit" onclick="return RegisterValidation();">Submit</button>
                                    <button type="reset">Reset</button>
                                </div>
<!--                            </form>-->
                        </div>
                    </div>
                    <div class="Footer"></div>
                </div>
            </div>
        </form>
    </body>

    </html>
