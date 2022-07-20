<?php
// form
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];



//database connection

$conn = new mysqli("localhost", "root", "", "form-data");
// $conn =new mysqli("localhost","root","","register");
if ($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO form(name,email,password) VALUES(?,?,?)");
    $stmt->bind_param("sss", $name, $email, $password);

    // register
    // $firstname=$_POST['name'];
    // $lastname=$_POST['lastname'];
    // $email=$_POST['email'];
    // $password=$_POST['password'];
    // $confirmpassword=$_POST['confirmpassword'];
    //register
    // $stmt=$conn->prepare("INSERT INTO form(fistname,lastname,email,password,confirmpassword) VALUES(?,?,?,?,?)");
    // $stmt->bind_param("sssss",$firstname,$lastname,$email,$password,$confirmpassword);

    $stmt->execute();
    echo "You have been registered submitted successfully";
    $stmt->close();
    $conn->close();
}