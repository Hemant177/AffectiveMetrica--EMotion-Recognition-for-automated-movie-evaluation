<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['user']);
        $password = $_POST['pass'];

        $sql = "SELECT * FROM login WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if ($count == 1 && password_verify($password, $row['password'])) {
            header("Location: click.html");
        } else {
            echo '<script>
                    window.location.href = "index.php";
                    alert("Login failed. Invalid username or password!");
                  </script>';
        }
    }
?>