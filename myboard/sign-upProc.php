<?
    session_start();
    include "dbClass.php";
    include "lib.php";


    $name= $_POST['name'];
    $user_id = $_POST['user_id'];
    $phone_num = $_POST['phone_num'];
    $pwd = $_POST['pwd'];

    $data[]=$name;
    $data[]=$phone_num;
    $data[]=$user_id;
    $data[]=$pwd;

    $query = "insert into members(name,phone_num,user_id,pwd) values('$name','$phone_num','$user_id',password('$pwd'))";
    echo $query;
    
    mysqli_query($connect, $query); 
?>

