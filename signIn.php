<html>
    <body>
<?php

    include('connection.php');

$email=$_POST['email'];
$password=$_POST['password'];

$query="SELECT * from accounts WHERE email='".$email."' AND password='".$password."'";
$result=mysqli_query($con,$query);
if($email=="admin" && $password=="1234")
{
?>
   <form action="index.php" method="post" id="form">
        <input type="hidden" name="user" value="admin">
   </form>
   <script>
    console.log("admin");
    document.getElementById("form").submit();
   </script>
   <?php
   //header("Location:adminindex.php");
}
elseif(mysqli_num_rows($result)==1)
{
    $row = mysqli_fetch_assoc($result);

    $user=$row["firstName"];
    ?>
    <form action="index.php" method="post" id="form">
        <input type="hidden" name="user" value="<?php echo $user ?>">
    </form>
    <script>
    document.getElementById("form").submit();
    </script>
<?php
}
else
{
    ?>
    <?php
    echo '<script>alert("Invalid Username or Password");</script>'; 
    header("Location:signUp.php");
}
?>
</body>
</html>