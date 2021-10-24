<?php
    $CN=mysqli_connect("localhost","root","");
    $DB=mysqli_select_db($CN,"cst");

    // $RollNo=$_POST['RollNo'];
    // $StudentName=$_POST['StudentName'];
    // $Course=$_POST['Course'];

    $EncodedData=file_get_contents('php://input'); //this access the data from react-native
    $DecodedData=json_decode($EncodedData,true);//this transform the json data into normal data

    $RollNo = $DecodedData['RollNo'];
    $StudentName = $DecodedData['StudentName'];
    $Course = $DecodedData['Course'];

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
