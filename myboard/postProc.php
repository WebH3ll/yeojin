<?
    session_start();
    include "dbClass.php";


    if(!isset($_SESSION['isLoginId'])){
        echo "로그인 후 이용해주세요";
        exit;
    }

    $error = $_FILES['file']['error'];
    $tmpfile = $_FILES['file']['tmp_name'];
    $filename = $_FILES['file']['name'];
    $folder = "upload/".$filename;


    $data[] = $_SESSION['isLoginId'];
    $data[] = $_POST['title'];
    $data[] = $_POST['content'];
    $data[] = $_POST['cont_pwd'];
    $data[] = $filename;
    $data[] = date("Y-m-d H:i:s");


    if( $error != UPLOAD_ERR_OK ){
        switch( $error ) {
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                    echo "<script>alert('파일이 너무 큽니다.');";
                        echo "window.history.back()</script>";
                        exit;
        }
    }

    $upload_result = move_uploaded_file($tmpfile, $folder);
    // move_uploaded_file($tmpfile, $folder);


    $query = 'insert into post(user_id,title,content,cont_pwd,filename,regdate) values(?,?,?,?,?,?) ';
    $db->query($query, $data);

    
    Header("Location: index.php");