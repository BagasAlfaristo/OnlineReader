<?php
if (isset($_POST['register'])) {
    include('../db.php');

    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    
    $query = mysqli_query($con,
    "UPDATE users SET 
        username = '$username', 
        password = '$password',
        name = '$name', 
        email = '$email'
        WHERE id = '$_POST[id]'");

    if ($query) {
        echo
        '<script>
        alert("Update Success"); window.location = "../page/showProfile.php"
        </script>';
    } else {
        echo
        '<script>
    alert("Update Failed");
    </script>';
    }
} else {
    echo
    '<script>
 window.history.back()
 </script>';
}
?>