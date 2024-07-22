
    <?php
        include('connection.php');
        $fName = $_POST['firstName'];
        $lName = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT INTO accounts (firstName,lastName,email,password) VALUES ('$fName','$lName','$email','$password') ";
        mysqli_query($con,$query);

        header('Location:signIn.html');
    ?>