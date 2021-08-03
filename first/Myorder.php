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
    <link rel="stylesheet" href="Myorder.css">
</head>
<body>
    <div class="nav-bar">
        <ul>
            <li><a  href="dashboard.php">Home</a></li>
            <li><a href="#">MyOrders</a></li>
            <li><a href="profile.php">profile</a></li>
            <li><a href="Help.php">Help</a></li>
        </ul>
</div>
<!---list-->
<div class="demo__live">
    <div style="align-items: center; display: flex; flex-direction: column; height: 100%; justify-content: center; padding: 8px;">
        <div style="border: 1px solid rgba(0, 0, 0, 0.3); height: 800px; overflow: auto; width: 80%;">
            <table style="border-collapse: collapse; width: 100%;">
                <thead>
                    <tr>
                        <th style="background-color: rgb(204, 34, 34); padding: 16px; position: sticky; top: 0px; z-index: 9999;">
                            <div ></div><p style="color: black;">SNO</p></div>
                        </th>
                        <th style="background-color: rgb(204, 34, 34); padding: 16px; position: sticky; top: 0px; z-index: 9999;">
                            <div><p style="color: black;">Order</p></div>
                        </th>
                        <th style="background-color: rgb(204, 34, 34); padding: 16px; position: sticky; top: 0px; z-index: 9999;">
                            <div><p style="color: black;">Status</p></div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-top: 1px solid rgba(0, 0, 0, 0.3);">
                        <td style="padding: 16px;">
                            <div style="display: flex; flex-wrap: wrap; justify-content: start; width: 100%;">
                           <p>1</p>
                            </div>
                        </td>
                        <td style="padding: 16px;">
                            <div style="display: flex; flex-wrap: wrap; justify-content: start; width: 100%;">
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 50%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 30%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 30%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                            </div>
                        </td>
                        <td style="padding: 16px;">
                            <div style="display: flex; flex-wrap: wrap; justify-content: start; width: 100%;">
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 40%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 20%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 40%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                            </div>
                        </td>
                    </tr>
                    <tr style="border-top: 1px solid rgba(0, 0, 0, 0.3);">
                        <td style="padding: 16px;">
                            <div style="display: flex; flex-wrap: wrap; justify-content: start; width: 100%;">
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 10%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 10%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 30%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                            </div>
                        </td>
                        <td style="padding: 16px;">
                            <div style="display: flex; flex-wrap: wrap; justify-content: start; width: 100%;">
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 50%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 50%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 30%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                            </div>
                        </td>
                        <td style="padding: 16px;">
                            <div style="display: flex; flex-wrap: wrap; justify-content: start; width: 100%;">
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 20%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 30%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 50%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                            </div>
                        </td>
                    </tr>
                    <tr style="border-top: 1px solid rgba(0, 0, 0, 0.3);">
                        <td style="padding: 16px;">
                            <div style="display: flex; flex-wrap: wrap; justify-content: start; width: 100%;">
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 40%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 50%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 40%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                            </div>
                        </td>
                        <td style="padding: 16px;">
                            <div style="display: flex; flex-wrap: wrap; justify-content: start; width: 100%;">
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 30%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 20%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 40%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                            </div>
                        </td>
                        <td style="padding: 16px;">
                            <div style="display: flex; flex-wrap: wrap; justify-content: start; width: 100%;">
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 20%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 10%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 40%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                            </div>
                        </td>
                    </tr>
                    <tr style="border-top: 1px solid rgba(0, 0, 0, 0.3);">
                        <td style="padding: 16px;">
                            <div style="display: flex; flex-wrap: wrap; justify-content: start; width: 100%;">
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 30%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 10%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 10%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                            </div>
                        </td>
                        <td style="padding: 16px;">
                            <div style="display: flex; flex-wrap: wrap; justify-content: start; width: 100%;">
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 30%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 20%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 20%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                            </div>
                        </td>
                        <td style="padding: 16px;">
                            <div style="display: flex; flex-wrap: wrap; justify-content: start; width: 100%;">
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 20%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 20%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 10%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                            </div>
                        </td>
                    </tr>
                    <tr style="border-top: 1px solid rgba(0, 0, 0, 0.3);">
                        <td style="padding: 16px;">
                            <div style="display: flex; flex-wrap: wrap; justify-content: start; width: 100%;">
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 20%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 40%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 40%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                            </div>
                        </td>
                        <td style="padding: 16px;">
                            <div style="display: flex; flex-wrap: wrap; justify-content: start; width: 100%;">
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 40%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 50%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 40%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                            </div>
                        </td>
                        <td style="padding: 16px;">
                            <div style="display: flex; flex-wrap: wrap; justify-content: start; width: 100%;">
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 30%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 10%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 10%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                            </div>
                        </td>
                    </tr>
                    <tr style="border-top: 1px solid rgba(0, 0, 0, 0.3);">
                        <td style="padding: 16px;">
                            <div style="display: flex; flex-wrap: wrap; justify-content: start; width: 100%;">
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 30%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 20%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 10%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                            </div>
                        </td>
                        <td style="padding: 16px;">
                            <div style="display: flex; flex-wrap: wrap; justify-content: start; width: 100%;">
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 40%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 10%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                                <div style="margin-bottom: 8px; margin-right: 8px; width: 40%;"><div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 9999px; height: 4px; width: 100%;"></div></div>
                            </div>
                        </td>
                        
                </tbody>
            </table>
        </div>
    </div>
</div>


</body>
</html>