<?php 
include 'DBconnection.php'; 

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])){

    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $phone = mysqli_real_escape_string($connect, $_POST['phone']);
    $message = mysqli_real_escape_string($connect, $_POST['message']);

    $query = mysqli_query($connect, "INSERT INTO contact_us(fullname, email, phone, message) VALUES ('$name','$email','$phone','$message')") or die(mysqli_error($connect)); 

    if($query){
        echo "sucess"; 
    }else{
        echo "error"; 
    }
}else{
    echo "EMPTY FIELDS error!";
}


?>