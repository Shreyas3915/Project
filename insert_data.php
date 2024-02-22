<?php

    include("database_connection.php");

    // Get data from the form

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if($password != $cpassword){
        echo "<script>alert('Password And Confirm Password Not Matched!');</script>";
        
    }else{
    // SQL query to insert data into the database
    $sql = "INSERT INTO `student_register`(`name`, `email`, `password`) VALUES('$name ', '$email' , '$password')";
    $data = mysqli_query($conn, $sql);


    if ($data) {
        header("Location: StudentRegister.php?success=");

    } else {
        echo "Problem in inserting";
    }
    }
    // Close the database connection
    $conn->close();
    
?>