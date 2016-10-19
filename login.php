<?php
    error_reporting(0);
    $connect = mysql_connect("localhost","root","");
    if($connect)
    {
        echo "db Connected";
        mysql_select_db("db_Login",$connect);
    }
    else
    {
        die("db not connected".mysql_error());
    }
    echo "<pre>";
        print_r($_POST);
    echo "</pre>";
    $login = $_POST["subLogin"];
    if(isset($login)&&($login == "Login"))
    {
        $uname = $_POST["txtname"];
        $pass = $_POST["txtpassword"];

        header("location: welcome.php? flag = user");

//        $sqlInsertlogin = "insert into tbl_login('username','password') values
  //                          '".$uname."',
    //                     '".$pass."'";

        //echo $select =  "select * from tbl_login
          //          WHERE
          //          username = '".$uname."'and password = '".$pass."'";

        //$sqlselectlogin = mysql_query($select);
        //echo  $sqlInsertlogin = "INSERT INTO `db_Login`.`tbl_login`(`username`, `password`) VALUES ( '".$uname."','".$pass."')";
        //$sqlInsertedlogin = mysql_query($sqlInsertlogin);
    }

?>
<head>
  <title></title>
</head>
<body>
    <form name="frmlogin" id="frmlogin" method="post" action="" target="" enctype="multipart/form-data">
        <div style="border: solid 1px #ccc; margin: 0 auto; margin-top: 100px; margin-left: 450px; width: 400px; height: 200px; background-color: #663300;">
                <div style="width: 400px; height: 20px; color: #CC9999; background-color: #330000; text-align: center; font-weight: bold;">
                     LOGIN
                </div>
                <div style="clear: both; float: left;"></div>
                <div style=" float: left; margin-left: 70px; margin-top: 30px;">
                    UserName:
                </div>
                <div style=" margin-top: 30px; margin-left: 150px;">
                    <input type="text" name="txtname" value="<?php echo $uname;?>" />
                </div>
                <div style=" float: left; margin-left: 70px; margin-top: 20px;">
                    Password:
                </div>
                <div style="margin-left: 150px; margin-top: 20px;">
                    <input type="password" name="txtpassword" value="<?php echo $pass?>" />
                </div>
                <div style="margin-top: 30px; margin-left: 150px;">
                    <input type="submit" name="subLogin" id="subLogin" value="Login" />
                    <span>
                    <a href="sign.php">Sign Up</a>
                    <a href="forget.php">Forget Password</a>
                    </span>
                </div>
        </div>
    </form>
</body>

</html>