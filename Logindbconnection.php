<?php
$con = mysqli_connect("localhost", "root", "", "entrydetails");
if (!$con) {
    die("Connection failed");
}

$email = $_POST['email'];
$password = $_POST['password'];

$rst = mysqli_query($con, "SELECT * FROM visitorsdata WHERE email='$email' AND password='$password'");
if (mysqli_num_rows($rst) > 0) {
    $row = mysqli_fetch_assoc($rst);

    if ($row['user_type'] == 'admin') {
        header("Location: admin.html");
    } else {
        header("Location: All courses.html");
    }
    exit();
} else {
    echo "No such Emailid & Password";
}

mysqli_close($con);
?>
