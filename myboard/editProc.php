<? 
    include "lib.php";

    $idx = $_POST['idx'];
    $title = $_POST['title']; 
    $content = $_POST['content'];
    $cont_pwd = $_POST['cont_pwd'];
    $regdate = date("Y-m-d H:i:s");

    $data[]=$idx;
    $data[]=$title;
    $data[]=$content;
    $data[]=$cont_pwd;
    $data[]=$regdate;

    $query = "update post set title='$title', content='$content', cont_pwd='$cont_pwd', regdate='$regdate' where idx='$idx' ";


    
    mysqli_query($connect, $query); 
?>
 
<script>
    location.href="user-profile.php";
</script>