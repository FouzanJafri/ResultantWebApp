<?php

    echo "this is test";

    //  $fullname = $_POST['fullname'];
//  $email = $_POST['email'];
//  $phonenumber = $_POST['phonenumber'];
//  $gender= $_POST['gender'];
//  $list = $_POST['list'];

//  if(!empty($fullname) || !empty($email) || !empty($phonenumber) || !empty($gender) || !empty($list)) {
//     $host = "localhost";
//     $dbUsername = "root";
//     $dbpassword = "";
//     $dbname = "resultantdb";

//  //connection
//     $conn = new mysqli('$host','$dbUsername','dbpassword','$dbname');
//     if(mysqli_connect_error()){
//         die('Connection Error(' . mysqli_connect_errno().')'. mysqli_connect_error());
//     }else{
//         $SELECT = "SELECT email from register Where email = ? Limit 1";
//         $INSERT = "INSERT Into  enrollment(fullname, email, phonenumber, gender, list) 
//          values(?,?,?,?,?)";

//     // Prepare Statemenent
//     $stmt = $conn->prepare($SELECT);
//     $stmt->bind_param("s" , $email);
//     $stmt->execute();
//     $stmt->store_result();
//     $rnum = $stmt->num_rows;

//     if($num==0) {
//         $stmt->close();

//         $stmt = $conn->prepare($INSERT);
//         $stmt->bind_param("ssiss" , $fullname, $email, $phonenumber, $gender, $list);
//         $stmt->execute();
//         echo"new record inserted succesfully";
//     }else{
//         echo"Already Registered";
//     }
//     $stmt->close();
//     $conn->close(); 
//     }
// }else {
//     echo "All feilds are required";
//     die();

// }
echo"working"
?>


//Connection



//  if($conn->connect_error){
//      die('Connection Failed : '.$conn->connect_error);
//  }else{
//     $stmt = $conn->prepare("Insert into enrollment(fullname, email, phonenumber, gender, list)
//         values(?,?,?,?,?)");
//     $stmt->bind_param("ssiss",$fullname, $email, $phonenumber, $gender, $list);
//     $stmt->execute();
//     echo "registration Successfully done.";
//     $stmt->close();
//     $conn->close();
//  }
// 
