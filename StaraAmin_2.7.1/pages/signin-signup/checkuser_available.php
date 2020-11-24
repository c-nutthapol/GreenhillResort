<?php 
    include_once('../../../functions.php');
    
    $usernamecheck = new DB_con();

    $uname = $_POST['username'];

    $sql = $usernamecheck->usernameavaiable($uname);

    $num = mysqli_num_rows($sql);

    if($num > 0){
        echo "<span style='color: red; font-size: 12px;'> Username นี้มีบุคคลใช้งานแล้ว.</span>";
        echo "<script>$('#submit').prop('disabled',true);</script>";
    }else{
        echo "<span style='color: green; font-size: 12px;'> Username นี้สามารถใช้งานได้.</span>";
        echo "<script>$('#submit').prop('disabled',false);</script>";
    }
?>