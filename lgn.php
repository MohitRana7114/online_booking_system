<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="lgnst.css">
</head>
<body class="body">
   
    <div class="container">
        <div class="form-box">
            <h1 id="title">Login</h1>
            <form action="" method="post">
                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <input type="text" placeholder="Name" name="nm">

                    </div>

                    <div class="input-field">
                        
                        <input type="password" placeholder="Password" name="ps">
                        
                    </div>
                        &nbsp&NonBreakingSpace;<p>Lost Password <a href="#"> Click Here!</a></p>
                    </div>
                <div class="btn-field">
                    <!-- <button type="submit" id="signupBtn" name="sbtn">Sign Up</button> -->
                    <a href="reg.php">New user</a>
                    <button type="submit" id="signinBtn" class="disable" name="lbtn">login</button>
                </div>
            </form>
        </div>
    </div>
 
</body>
</html>

<?php
        
        $cn=mysqli_connect('localhost','root',"","project");
        if($cn)
        {
            if(isset($_POST['lbtn']))
            {
                $nm=$_POST['nm'];
                $ps=$_POST['ps'];

                $qry="select * from user where username='$nm' and password='$ps'";
                $res=mysqli_query($cn,$qry);
                $n=mysqli_num_rows($res);

                if($n>0)
                {
                        // echo "<script> alert('Data inserted');</script>";
                        echo "<script> window.open('homepage.html'); </script>";
                        
                }
                else
                    echo "<script> alert('Wrong Username or Pass');</script>";
            }
                
        }
        else
        echo "<script> alert('not connected');</script>";
?>