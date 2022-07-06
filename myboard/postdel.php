<? 
    include "lib.php";

    $idx = $_GET['idx'];

    $query = "delete from post where idx='$idx'";
    
    mysqli_query($connect, $query); 
?>
 
<script>
    location.href="user-profile.php";
</script>
