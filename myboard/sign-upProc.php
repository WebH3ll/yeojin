<?

    include "lib.php";


    $name= $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $query = "insert into board(name,email,pwd) values('$name','$email',password('$pwd'))";

    mysqli_query($connect, $query); 

    // print_r($data);

?>

