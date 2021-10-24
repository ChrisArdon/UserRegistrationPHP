<?php
    $CN=mysqli_connect("localhost","root","");
    $DB=mysqli_select_db($CN,"cst");

    // $RollNo=$_POST['RollNo'];
    // $StudentName=$_POST['StudentName'];
    // $Course=$_POST['Course'];

    $RollNo = isset($_POST['RollNo']) ? $_POST['RollNo'] : '';
    $StudentName = isset($_POST['StudentName']) ? $_POST['StudentName'] : '';
    $Course = isset($_POST['Course']) ? $_POST['Course'] : '';

    $IQ="insert into studentmaster(RollNo,StudentName,Course) values($RollNo,'$StudentName','$Course')";

    $R=mysqli_query($CN,$IQ); //Return 0 if failed, Return 1 if success

    if($R)
    {
        $Message="Student has been registered successfully";
    }
    else
    {
        $Message="Server Error... Please try later";
    }
    // echo($Message);

    //transforming the message to JSON for react-native to read
    $Respose[]=array("Message"=>$Message);
    echo json_encode($Respose);
?>
