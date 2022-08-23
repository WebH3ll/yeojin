<? 
    include "lib.php";

    $idx = $_GET['idx'];

    $query = "delete from members where idx='$idx'";
    
    mysqli_query($connect, $query); 


?>
 
<script>
    location.href="logOut.php";
</script>