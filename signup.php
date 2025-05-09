<?php
include 'db.php';

$successMessage = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Secure password hashing

    // Check if email or username already exists
    $checkUser = $conn->prepare("SELECT * FROM users WHERE email = ? OR username = ?");
    $checkUser->bind_param("ss", $email, $username);
    $checkUser->execute();
    $result = $checkUser->get_result();

    if ($result->num_rows > 0) {
        $errorMessage = "Username or Email already exists!";
    } else {
        // Insert new user
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);

        if ($stmt->execute()) {
            $successMessage = "Signup successful! Redirecting to login...";
            header("refresh:3; url=login.php"); // Redirect after 3 seconds
        } else {
            $errorMessage = "Signup failed. Please try again.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Recipe Finder</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-image: url('images/background.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <header>
        <h1>Signup</h1>
    </header>

    <main class="container">
        <h2>Create an Account</h2>

        <?php if ($successMessage): ?>
            <p class="success"><?php echo $successMessage; ?></p>
        <?php elseif ($errorMessage): ?>
            <p class="error"><?php echo $errorMessage; ?></p>
        <?php endif; ?>

        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Signup</button>
        </form>

        <p>Already have an account? <a href="login.php">Login here</a></p>
    </main>
</body>
</html>
