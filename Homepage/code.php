<?php
session_start();
$con = mysqli_connect("localhost","root","","phptutorials");

if(isset($_POST['save_select']))
{
    $Name = $_POST['names'];
    $Email = $_POST['email'];
    $PhoneNumber = $_POST['pnum'];
    $gender = $_POST['Courses'];

    $query = "INSERT INTO demo (names,email,pnum,Courses) VALUES ('$Name','$Email','$PhoneNumber','$Courses')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo "<script type = 'text/javascript'> alert('Successfully created')</script>";

        header("Location: contactform.php");
    }
    else
    {
        echo "<script type = 'text/javascript'> alert('Please Enter Some Valid Information')</script>";
        header("Location: contactform.php");
    }
}
?>