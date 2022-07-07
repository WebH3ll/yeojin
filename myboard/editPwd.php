<? 
    session_start();
    include "dbClass.php";
    include "lib.php";

    $user_id = $_SESSION['isLoginId'];
    $oldPwd = $_POST['oldPwd']; 
    $newPwd = $_POST['newPwd'];
    $newPwdChk = $_POST['newPwdChk'];

    $query = "select pwd from members where user_id='$user_id' ";

    $result = mysqli_query($connect, $query); 
    $data= mysqli_fetch_array($result);

    if($oldPwd==$data['pwd'])
    {
        if($newPwd==$newPwdChk){
            $query2 = "update members set pwd='$newPwd' where user_id='$user_id' ";
            mysqli_query($connect, $query2);
        }
        else{ ?>
            <script>
                alert('비밀번호 확인이 올바르지 않습니다. ');
            </script>
                <? 
        }
    }else{ ?>
        <script>
            alert('원래 비밀번호가 올바르지 않습니다. ');
        </script>

        <?
    }
?>
 
<script>
    location.href="user-profile.php";
</script>