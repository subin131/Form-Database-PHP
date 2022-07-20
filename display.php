<?php
$name = $_POST['Name'];
$email = $_POST['Email'];
$password = $_POST['Password'];


$conn = new mysqli("localhost", "root", "", "form-data");
$result = mysqli_query($conn, "SELECT * FROM form");
?>
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="style.css">
<html>

<head>
    <title> Display Data</title>
</head>

<body>
    <?php
    if (mysqli_num_rows($result) > 0) {
    ?>
    <table>
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>

        </tr>
        <?php

            while ($row = mysqli_fetch_array($result)) {
            ?>
        <tr>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['Password']; ?></td>
        </tr>
        <?php
            }
            ?>
    </table>
    <?php
    } else {
        echo "No result found";
    }
    ?>
</body>

</html>