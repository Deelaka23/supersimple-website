<?php 
    $uname = $_POST['name'];
    $password = $_POST['pw'];

    $conn = mysqli_connect('localhost','root','','database');

    if (!$conn){
            die ("connection failed:".mysqli_connect_error());
    }
    else{
        echo "working!!!";
    }

    $sql="INSERT INTO user VALUES ($uname,$password);";
    
    $result = $conn->query($sql);
    if ($result) {
        echo "data entered!!!";
    }
    





?>
