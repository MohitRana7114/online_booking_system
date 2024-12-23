<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="lgnst.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h1 id="title">Register Here!!</h1>
            <form action="" method="post">

                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <input type="text" placeholder="Name" name="nm" required>

                    </div>
                    <div class="input-field">
                       
                        <input type="email" placeholder="Email" name="eml" required>
                        
                    </div>
                    <div class="input-field">
                        
                        <input type="password" placeholder="Password" name="ps" required>
                        
                    </div>
                        &nbsp&NonBreakingSpace;<p>Lost Password <a href="#"> Click Here!</a></p>
                    </div>
                <div class="btn-field">
                <a href="lgn.php">Already have an account </a>
                    <button type="submit" id="signupBtn" name="sbtn">Sign Up</button>
                    <!-- <button type="submit" id="signinBtn" class="disable" name="lbtn">Sign In</button> -->
                </div>
            </form>
        </div>
    </div>
    <!-- <script>
        let signupBtn=document.getElementById("signupBtn");
        let signinBtn=document.getElementById("signinBtn");
        let nameField=document.getElementById("nameField");
        let title=document.getElementById("title");

        signinBtn.onclick = function(){
           nameField.style.maxHeight = "0";
           title.innerHTML = "Sign In";
           signupBtn.classList.add("disable");
           signinBtn.classList.remove("disable");
        }
        signupBtn.onclick = function(){
           nameField.style.maxHeight = "60px";
           title.innerHTML = "Sign Up";
           signupBtn.classList.remove("disable");
           signinBtn.classList.add("disable");
        }
    </script> -->
</body>
</html>

<?php

        $cn=mysqli_connect('localhost','root',"","project");
        if($cn)
        {
            if(isset($_POST['sbtn']))
            {
                $nm=$_POST['nm'];
                $eml=$_POST['eml'];
                $ps=$_POST['ps'];

                $qry="INSERT INTO `project`.`user` (`username` ,`email` ,`password`) VALUES ( '$nm', '$eml', '$ps')";
                $res=mysqli_query($cn,$qry);

                if($res)
                {
                        echo "<script> alert('Data inserted');</script>";
                        echo "<script> window.open('lgn.php'); </script>";
                        
                }
                else
                    echo "<script> alert('Data not inserted');</script>";
            }
                
        }
        else
        echo "<script> alert('not connected');</script>";


        // if(isset($_POST['sbtn']))
        // {
        //     // echo "<script> alert('sign up clicked');</script>";
        // }
        // if(isset($_POST['lbtn'])){

        //     // echo "<script> alert('login clicked');</script>";
        // }
        

?>