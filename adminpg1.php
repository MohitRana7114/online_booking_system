<?php
$cn=mysqli_connect('localhost','root',"","project");
if($cn)
{
    if(isset($_POST['lbtn']))
    {
        $anm=$_POST['anm'];
        $aps=$_POST['aps'];

        $qry="select * from admin where AdminName='$anm' and Password='$aps'";
        $res=mysqli_query($cn,$qry);
        $n=mysqli_num_rows($res);

        if($n>0)
        {
                // echo "<script> alert('Data inserted');</script>";
                // echo "<script> window.open('admin.php'); </script>";
                header("location:admin.php");  
        }
        else
        {
            echo "<script> alert('Wrong user or pass');</script>";
            echo "<script> window.open('adminpg.html'); </script>";
            // header("location:adminpg.html");
            
        }
    }
        
}
else
echo "<script> alert('not connected');</script>";
?>
