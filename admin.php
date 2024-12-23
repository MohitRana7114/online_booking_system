<?php
    /*require_once('book.php');*/
    $cn=mysqli_connect("localhost","root","","project");
    $query="select * from book";
    $result=mysqli_query($cn,$query);
    
    // echo $row[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
            body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table th, table td {
    padding: 10px;
    border: 1px solid #ddd;
}

table th {
    background-color: #f2f2f2;
    font-weight: bold;
    text-align: left;
}

table tr:nth-child(even) {
    background-color: #f9f9f9;
}

table tr:hover {
    background-color: #f0f0f0;
}
.nav1{
            font-family: myfirstfont;
            /*position: fixed;*/
            overflow: hidden;
            padding: 23px;
            opacity: 50%;
            
        }
        .header {
            padding: 80px;
            text-align: center;
            /*background: #1abc9c;*/
            color: rgb(8, 8, 8);
            background-image: url(banner-bg.png);
            position: relative;
        }
        .centered{
            
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family:monospace;
            font-size: 35px;
            font-family: Gabriola;
            opacity: 80%;
            /*color: rgba(0, 0, 0, 0.5);*/
        }
        
        nav {
            background-color: #333;
            color: #fff;
            padding: 25px;
            text-align: right;
            font-size: 25px;
            text-align: center;
            padding: 20px;
            
        }
        
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            padding: 10px 20px;
        }

        nav ul li a:hover {
            background-color: #555;
            
        }

        table thead tr th{
            border:4px solid grey; 
            font-family : Bahnschrift;    
        }

        table tbody tr td{
            border-bottom:2px solid grey;     
        }

    </style>
</head>
<body>
<div class="header">
        <div class="centered">
            <h1>गृHa Seva🏚️</h1>
        </div>
    </div>
    <nav class="nav1">
       <ul>
            
            <li><a href="homepage.html">HOME</a></li>
            
            <li><a href="#abt">ABOUT</a></li>
            <li><a href="#cnt">SERVICES</a></li>
            <li><a href="adminpg.html">ADMIN</a></li>
            <li><a href="homepage.html">LOGOUT</a></li>
        </ul>
    </nav>

    <h2>Admin Panel </h2>
    <table>
        <thead>
            <tr>
                <th>Customer ID</th>
                <th>Name</th>
                <th>Last_Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Contact_Address</th>
                <th>City</th>
                <th>Pin_Code</th>
                <th>Service</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
                
            </tr>
        </thead>
        
        <tbody>
            <tr>
            <?php
    while ($row = mysqli_fetch_row($result)) {
        $id=$row[9];
        $cnm=$row[0];
        $cst_id = $row[9];
        echo "<tr>
            <td>$row[9]</td>
            <td>$row[0]</td>
            <td>$row[8]</td>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td>$row[6]</td>
            <td>$row[7]</td>
            <td>$row[10]</td>
            <td>$row[12]</td>
            <td>";

            if($row[11]=='p')
            {        
                ?>  
               <form method='post' action='admin.php'>
                    <input type='hidden' name='cst_id' value='$cst_id'>
                    <input type='submit' name='accept_<?=$cst_id?>' value='ACCEPT' style='background-color:green;' ><br>
                    <input type='submit' name='decline_<?=$cst_id?>' value='DECLINE'  style='background-color:red;' >
                </form>
            <?php
            }
            if($row[11]=='a')
            {
                echo "APPROVED";  
                ?>
                <form method='POST' action='billpay.php'>
                <input type='hidden' name='hidden_email' id='hidden_email'>
                <button type='submit' name='bill' value='BILL'><a href='billpay.php?selectid=<?=$cst_id;?>'>Bill<a></button></form>
                <?php
            }
            if($row[11]=='d')
            {
                echo "REJECTED";
            }
        
            echo "</td>
        </tr>";

        if (isset($_POST['accept_'.$cst_id])) {
            // $cn = mysqli_connect("localhost", "root", "", "project");
            
            $update1 = "UPDATE book SET Status='a' WHERE Customer_ID='$cst_id'";
            if($update1)
            {
                echo"Service Accepted";
            }
            else{
                echo"Service Declined";
            }
            mysqli_query($cn, $update1);
            
        }
        if (isset($_POST['decline_'.$cst_id])) {
            // $cn = mysqli_connect("localhost", "root", "", "project");
            
            $update1 = "UPDATE book SET Status='d' WHERE Customer_ID='$cst_id'";
            if($update1)
            {
                echo"Service Accepted";
            }
            else{
                echo"Service Declined";
            }
            mysqli_query($cn, $update1);
            
        }
        
    }
?>


        
            
        </tbody>
    </table>
    <?php
  
    
    ?>
    <!-- <script>
            function bill1(email)
            {
                var email1=email;
                var hidden_email=document.getElementById('hidden_email');
                hidden_email.value=email1;
            }
            
        </script> -->
</body>
</html>
