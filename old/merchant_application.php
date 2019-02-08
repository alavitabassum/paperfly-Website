<?php
    include('config.php');
    $districtsql = "select districtId, districtName from tbl_district_info where districtId in (select distinct districtId from tbl_thana_info)";
    $districtresult = mysqli_query($conn,$districtsql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/jpg" href="image/favicon.jpg">
        <title>Paperfly | Merchant Application</title>
        <link rel="stylesheet" href="styles.css">
        <link href="css/bootstrap-combined.min.css" rel="stylesheet">
        <script src="js/jquery-2.2.0.min.js"></script>
        <style>
            div.img {
                margin: auto;
                width: 500px;
            }

            div.img img {
                width: 250px;
                height: auto;
                margin-left: 125px;
                margin-top: 30px;
            }
            div.container {
                margin: auto;
                height: 450px;
                width: 500px;
            }
            label {
                color: #16469E;
                font: 13px "paperfly roman";
            }
            input {
                width: 90%;
                height: 30px;
            }
            select {
                width: 94%;
                height: 30px;
            }
        </style>
    </head>
    <body>
        <br>
        <br>
        <div class="img">
            <a href="main">
                <img src="../image/paperfly.png" alt="Paperfly Logo"/>
            </a>
        </div>
        <br>
        <div class="container">
            <form action="" method="post">
                <br>
                <table border="0" style="width: 100%">
                    <tr>
                        <td style="width: 120px; text-align: right">
                            <label>Merchant name : </label>
                        </td>
                        <td>
                            <input type="text" name="merchantName" required>
                        </td>
                    </tr>
                        <td style="width: 120px; text-align: right">
                            <label>Business Type : </label>
                        </td>
                        <td>
                            <select name="shopMarket" required>
                                <option value="shop">Shop</option>
                                <option value="market">Market Place</option>
                            </select>
                        </td>
                    </tr>
                        <td style="width: 120px; text-align: right">
                            <label>Contact Person : </label>
                        </td>
                        <td>
                            <input type="text" name="contactPerson" required>
                        </td>
                    </tr>
                        <td style="width: 120px; text-align: right">
                            <label>Contact Number : </label>
                        </td>
                        <td>
                            <input type="text" name="contactNumber" required>
                        </td>
                    </tr>
                        <td style="width: 120px; text-align: right">
                            <label>Address : </label>
                        </td>
                        <td>
                            <input type="text" name="address" required>
                        </td>
                    </tr>
                        <td style="width: 120px; text-align: right">
                            <label>District : </label>
                        </td>
                        <td>
                            <select name="district" onchange="fetch_select(this.value);" required>
                                <option></option>
                                <?php foreach($districtresult as $districtRow){?>
                                    <option value="<?php echo $districtRow['districtId'];?>"><?php echo $districtRow['districtName']; ?></option>
                                <?php }?>
                            </select>
                        </td>
                    </tr>
                        <td style="width: 120px; text-align: right">
                            <label>Thana : </label>
                        </td>
                        <td>
                            <select id="thana" name="thanaid" required>
                                <option></option>
                            </select>
                        </td>
                    </tr>
                </table>
                <input class="btn btn-default" type="submit" name="submit" value="Apply" style="width: 450px; margin-left: 25px">
                <div style="text-align: right; width: 95%">
                    <a style="left: 10%; color: #16469E; font: 10px 'paperfly italic'" href="http://paperfly.com.bd/main">back to Home</a>
                </div>
            </form>
            <?php
                if (isset($_POST['submit'])){
                   $merchantName = trim($_POST['merchantName']);
                   $merchantName = mysqli_real_escape_string($conn, $merchantName);
                   $shopMarket = trim($_POST['shopMarket']);
                   $contactPerson = trim($_POST['contactPerson']);
                   $contactPerson = mysqli_real_escape_string($conn, $contactPerson);
                   $contactNumber = trim($_POST['contactNumber']);
                   $contactNumber = mysqli_real_escape_string($conn, $contactNumber);
                   $address = trim($_POST['address']);
                   $address = mysqli_real_escape_string($conn, $address);
                   $district = trim($_POST['district']); 
                   $thanaid = trim($_POST['thanaid']);
                   $insertsql ="INSERT INTO tbl_merchant_application (merchantName, shopMarket, contactPerson, contactNumber, address, 
                   district, thanaid, creation_date) values ('$merchantName', '$shopMarket', '$contactPerson', '$contactNumber', '$address', 
                   '$district', '$thanaid', NOW() + INTERVAL 6 HOUR)";
                    if (!mysqli_query($conn,$insertsql))
                            {
                                $error ="Insert Error : " . mysqli_error($conn);
                                echo "<div class='alert alert-danger'>";
                                    echo "<strong>Error!</strong>".$error; 
                                echo "</div>";
                            } else {
                                $tdQuery ="select thanaName, districtName from tbl_thana_info, tbl_district_info where tbl_thana_info.districtId = tbl_district_info.districtId and tbl_thana_info.thanaId = $thanaid";
                                $tdResult = mysqli_query($conn, $tdQuery);
                                $tdRow = mysqli_fetch_array($tdResult);
                                $to = "info@paperfly.com.bd";
                                $subject = "Merchant Application from"." ".$merchantName;
                                $message = "Application Received from :"." ".$merchantName."  Business Type ".$shopMarket."  Contact Person :"." ".$contactPerson."  Contact Number :".$contactNumber."  Address ".$address.",".$tdRow['thanaName'].",".$tdRow['districtName'];
                                $from = "noreply@paperfly.com.bd";
                                $headers = "From:" . $from;
                                mail($to,$subject,$message,$headers);
                                echo "<div class='alert alert-success'>";
                                    echo "Thank you for your interest. One of our relationship manager will contact you soon.";
                                echo "</div>";
                           }
                mysqli_close($conn);
                }
            ?>
        </div>
    <script type="text/javascript">
        function fetch_select(val)
        {
            $.ajax({
                type: 'post',
                url: 'fetch_thana.php',
                data: {
                    get_thanaid: val
                },
                success: function (response)
                {
                    document.getElementById("thana").innerHTML = response;
                }
            });
        }
    </script>
    </body>
</html>
