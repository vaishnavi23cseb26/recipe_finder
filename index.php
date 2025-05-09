<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Finder</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-image: url('images/background.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
<header>
    <h1>🍽️ Recipe Finder</h1>
    <nav>
        <a href="signup.php" class="nav-btn">Signup</a>
        <a href="login.php" class="nav-btn">Login</a>
    </nav>
</header>

<!-- Food Banner Section (Background Applied via CSS) -->
<section class="food-banner">
    <main class="container">
        <h2 style="color:black">Find Your Recipe</h2>
        <p  style="color:black">Enter ingredients (comma-separated) to discover recipes.</p>
        <form action="recipes.php" method="GET"  style="color:black">
            <input type="text" name="ingredients" placeholder="e.g. tomato, cheese, egg" required >
            <button type="submit">Search</button>
        </form>
    </main>
</section>

</body>
</html>
