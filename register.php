<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['user']);
        $password = $_POST['pass'];
        $confirm_password = $_POST['confirm_pass'];

        // Server-side validation
        if (empty($username) || empty($password) || empty($confirm_password)) {
            echo '<script>
                    window.location.href = "signup.php";
                    alert("All fields are required!");
                  </script>';
            exit();
        }

        if ($password !== $confirm_password) {
            echo '<script>
                    window.location.href = "signup.php";
                    alert("Passwords do not match!");
                  </script>';
            exit();
        }

        if (strlen($password) < 6) {
            echo '<script>
                    window.location.href = "signup.php";
                    alert("Password must be at least 6 characters long!");
                  </script>';
            exit();
        }

        // Check if username already exists
        $sql = "SELECT * FROM login WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo '<script>
                    window.location.href = "signup.php";
                    alert("Username already exists!");
                  </script>';
            exit();
        }

        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert new user
        $sql = "INSERT INTO login (username, password) VALUES ('$username', '$hashed_password')";
        if (mysqli_query($conn, $sql)) {
            echo '<script>
                    window.location.href = "index.php";
                    alert("Registration successful! Please login.");
                  </script>';
        } else {
            echo '<script>
                    window.location.href = "signup.php";
                    alert("Registration failed. Please try again.");
                  </script>';
        }
    }
?>