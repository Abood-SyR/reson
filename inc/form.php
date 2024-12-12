<?php
include 'conn.php';
if(isset($_POST['submit'])){
echo 'ajslfnew;kjsdbgnawkers';
      
    
    // $username    = mysqli_real_escape_string($conn , $_POST['username']);
    $username    = $_POST['username'];
    // $phonenumber  = mysqli_real_escape_string($conn , $_POST['phonenumber']);
    $phonenumber  = $_POST['phonenumber'];
    $reportmassage  = $_POST['reportmassage'];
    

    $sql = "INSERT INTO reportlog( user_name , phone_number , report_log ) VALUES ( '$username', '$phonenumber' , '$reportmassage' )";
    if(empty($username )){
        echo 'يرجى ادخالالاسم الكامل';
    }elseif(empty( $phonenumber)){
        echo 'يرجى ادخال رقم الهاتف';
    }
    elseif(empty( $reportmassage)){
        echo 'لا يمكن ارسال بلاغ فارغ';
    }
    else{
    if(mysqli_query($conn, $sql)){
        header("Location: ./../index.php");
    }else{
        echo 'Error' . mysqli_error($conn);
    }
}
}


?>
