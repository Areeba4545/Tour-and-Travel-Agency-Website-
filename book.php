<?php
$connection = mysqli_connect('localhost','root','','form_db');
if(isset($_POST['send'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $location= $_POST['location'];
    $guests= $_POST['guests'];
    $arrivals= $_POST['arrivals'];
    $leaving= $_POST['leaving'];
    $request= "insert into booking(name, email,	phone, location, guests,	arrivals, leaving) 
    values ('$name','$email','$phone','$location','$guests','$arrivals','$leaving')";
    mysqli_query($connection, $request);
    echo "Data Entered Succesfully";
    header('location:book.php');
}
else{
    echo 'Data Entered SuccessFully';
}
?>
