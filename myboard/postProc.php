<?
    session_start();
    include "dbClass.php";


    if(!isset($_SESSION['isLoginId'])){
        echo "로그인 후 이용해주세요";
        exit;
    }

    $data[] = $_SESSION['isLoginId'];
    $data[] = $_POST['title'];
    $data[] = $_POST['content'];
    $data[] = $_POST['cont_pwd'];
    $data[] = date("Y-m-d H:i:s");

    $query = 'insert into post(user_id,title,content,cont_pwd,regdate) values(?,?,?,?,?) ';
    $db->query($query, $data);

    Header("Location: index.php");