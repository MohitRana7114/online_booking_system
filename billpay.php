<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>गृHa Seva🏚️</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .nav1 {
            background-color: #555;
            padding: 10px 0;
            text-align: center;
        }

        .nav1 ul {
            list-style-type: none;
            padding: 0;
        }

        .nav1 ul li {
            display: inline;
            margin: 0 10px;
        }

        .nav1 ul li a {
            color: #fff;
            text-decoration: none;
        }

        .content {
            text-align: center;
            margin-top: 20px;
        }

        .bill-details {
            margin: 0 auto;
            width: 80%;
        }

        .bill-details table {
            width: 100%;
            border-collapse: collapse;
            border: 3px solid #333;
        }

        .bill-details th,
        .bill-details td {
            padding: 8px;
            border: 1px solid #333;
        }

        .bill-details th {
            background-color: #555;
            color: #fff;
            text-align: left;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="centered">
            <h1>गृHa Seva🏚️</h1>
        </div>
    </header>
    <nav class="nav1">
        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="homepage.html">ABOUT</a></li>
            <li><a href="homepage.html">SERVICES</a></li>
            <li><a href="adminpg.html">ADMIN</a></li>
            <li><a href="lgn.php">LOG OUT</a></li>
        </ul>
    </nav>
    
    <section class="content">
        <?php
        $id = $_GET['selectid'];
        $cn = mysqli_connect("localhost", "root", "", "project");
        $query = "select * from book where Customer_ID='$id'";
        $result = mysqli_query($cn, $query);

        while ($row = mysqli_fetch_row($result)) {
            echo "<div class='bill-details'>
                    <h2>INVOICE DETAILS</h2>
                    <table border='0'>
                        <tr>
                            <th>Customer ID:</th>
                            <td>$row[9]</td>
                        </tr>
                        <tr>
                            <th>Customer Name:</th>
                            <td>$row[0]</td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>$row[1]</td>
                        </tr>
                        <tr>
                            <th>Phone Number:</th>
                            <td>$row[2]</td>
                        </tr>
                        <tr>
                            <th>City:</th>
                            <td>$row[4]</td>
                        </tr>
                        <tr>
                            <th>Pincode:</th>
                            <td>$row[6]</td>
                        </tr>
                        <tr>
                            <th>Service:</th>
                            <td>$row[7]</td>
                        </tr>
                        <tr>
                            <th>Date:</th>
                            <td>$row[10]</td>
                        </tr>
                        <tr>
                            <td colspan='2'><b>Bill payable:</b> &#8377;250</td>
                        </tr>
                    </table>
                </div>";
        }
        ?> 
    </section>
</body>
</html>
