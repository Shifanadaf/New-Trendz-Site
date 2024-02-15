<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
     <?php

session_start();?>
    <style>
        body{
            background-color: #F6F6F6; 
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
           background-color: #0d1033;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-white"> NEW TRENDZ</h1>
                </div>
                <div class="col-6">
                    <div class="company-details">
                        <p class="text-white">Akkalkot Road, Shanti Chowk</p>
                        <p class="text-white">Solapur-413006</p>
                        <p class="text-white">0217-2653922</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h5 class="sub-heading">Order Date: <?php echo date('d-m-Y')?> </p></h4>
                    <h5 class="sub-heading">Email Address: new@trendz.com </p></h4>
                </div>
                <div class="col-6">

                        <?php
                        include('connection.php');
                        $email='';

                            // session_start(); //gets session id from cookies, or prepa
                            if (isset($_SESSION['login'])) { //if sid exists and login for sid exists
                            $email=$_COOKIE['username'];}
                        $fetch=mysqli_query($connect,"SELECT * FROM `register` WHERE email='$email' ") or die(mysqli_error($connect));
                            while ($row = mysqli_fetch_array($fetch)) 
                            {
                                extract($row);
                            
                        ?>
                    <p class="sub-heading">Full Name: <?php echo $row['name']?> </p>
                    <p class="sub-heading">Address: <?php echo $row['address']?> </p>
                    <p class="sub-heading">Phone Number: <?php echo $row['ph_no']?> </p>
                <?php 
                        } 
                ?>
                </div>
            </div>
        </div>

        <div class="body-section">
            <h3 class="heading">Ordered Items</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th class="w-20">Price</th>
                        <th class="w-20">Quantity</th>
                        <th class="w-20">Total</th>
                    </tr>
                </thead>
                <?php 
                include('connection.php');
                $total_price=0;

                            $email='';

                            // session_start(); //gets session id from cookies, or prepa
                            if (isset($_SESSION['login'])) { //if sid exists and login for sid exists
                            $email=$_COOKIE['username'];}
         
                            $fetch=mysqli_query($connect,"SELECT * FROM `$email`") or die(mysqli_error($connect));
                            while ($row = mysqli_fetch_array($fetch)) 
                            {
                                extract($row);
                            
                        ?>
                <tbody>
                    <tr>
                        <td> <?php echo $row['name']?></td>
                        <td><?php echo $row['dealp']; ?>/-</td>
                        <td><?php echo $row['qty']?></td>
                        <td><?php $total=$row['dealp']*$row['qty'];
                        echo $total; 
                        $total_price+=$total;
                        ?></td>
                    </tr>
                    <?php 
                        } 
                    ?>
                    <tr>
                        <td>Grand Total:<?php echo $total_price;?></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <h3 class="heading">Payment Mode: Cash on Delivery</h3>
        </div>

        <div class="body-section">
            <p> <input type="button" name="submit" value="Go Back" onclick="window.location.href='index.php';">
                <input type="submit" name="submit" value="Click Here to Print" onclick="window.print();">

            </p>
        </div>      
    </div>      

</body>
</html>