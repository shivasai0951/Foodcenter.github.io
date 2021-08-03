<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <div class="nav-bar">
        <ul>
            <li><a  href="dashboard.php">Home</a></li>
            <li><a href="Myorder.php">MyOrders</a></li>
            <li><a href="#">profile</a></li>
            <li><a href="Help.php">Help</a></li>
        
        </ul>
</div>
<!--profile-->

<div class="demo__live">
    <div style="align-items: flex-start; margin: 50px; display: flex; height: 100%; padding: 32px;">
        <div style="height: 128px; margin-right: 16px; width: 128px;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 0.25rem; height: 100%; width: 100%;"></div></div>
        <div style="flex: 1 1 0%;">
            <div style="margin-bottom: 32px; width: 50%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 0.25rem; height: 8px; width: 100%;"></div></div>
            <div style="margin-bottom: 32px;">
                <div style="display: flex; flex-wrap: wrap; justify-content: start; width: 100%;">
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 20%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 30%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 20%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 20%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 10%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 40%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 20%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 20%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 30%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 40%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 20%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 30%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 20%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 40%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 20%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 30%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 30%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 20%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 20%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 30%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                </div>
            </div>
            <div style="margin-bottom: 32px;">
                <div style="display: flex; flex-wrap: wrap; justify-content: start; width: 100%;">
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 30%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 30%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 10%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 20%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 20%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 20%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 30%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 40%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 20%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 50%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 20%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 20%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 10%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 10%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                    <div style="margin-bottom: 8px; margin-right: 8px; width: 20%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>