<?php
// Start the session
session_start();

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Replace these with your own validation/authentication logic
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Example hardcoded credentials for testing
    $valid_username = 'admin';
    $valid_password = 'admin123';

    if ($username == $valid_username && $password == $valid_password) {
        // Set session variables
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Redirect to admin dashboard or homepage
        header("Location:../dashboard/dashboard.php");
        exit;
    } else {
        $error_message = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - ReMed</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="login-container-out">
        <div class="login-container">
            <div class="login-left">
                <img src="../assest/ReMeD.png" alt="logo">
                <p>ONLINE PHARMACY LOCATOR <br> AND <br> MEDICINE TRACKER</p>
                <h3>ADMINISTRATOR</h3>
            </div>
            <div class="login-right">
               
                <form method="POST" action="">
                    <h2 class="login-header">Log in</h2>
                   <ul>
                    <li>
                        <label for="username">Username or Email Address:</label><br>
                        <input type="text" id="username" name="username" placeholder="value" required>
                    </li>
                    <li>
                        <label for="password">Password:</label><br>
                        <input type="password" id="password" name="password" placeholder="value" required>
                    </li>
                    <div class="remember">
                        <input type="checkbox" name="remember" id="remember" required>
                        <label for="remember">Remember me</label>
                    </div>
                   
                    <button type="submit">Login</button>
                    <?php if (isset($error_message)) { ?>
                        <p class="error"><?php echo $error_message; ?></p>
                    <?php } ?>

                    <p class="forget">Forget <span><a href="#"> Password</a></span>?</p>
                </form>
            </div>
        </div>
    </div>

</body>

</html>