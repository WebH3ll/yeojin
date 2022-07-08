<?php

    session_start();
        
    include "dbClass.php";
    include "lib.php";

    $user_id = $_POST['user_id'];
    $pwd = $_POST['pwd'];


    $query = "select * from members where user_id='$user_id'";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($result);


    if($data && ($data['pwd'] == $pwd))
    {
        Header("Location: index.php"); 
    }elseif($data && ($data['pwd'] != $pwd)){
    ?>

    <script>
        alert('비밀번호가 틀렸습니다');
        history.back(1);
    </script>

    <?
    }elseif(!$data){ ?>
    <script>
        alert('등록된 정보가 없습니다 ');
        history.back(1);
    </script>
            
    <? }


    $_SESSION['isLoginId'] = $user_id;


   
    
    
    

