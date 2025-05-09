<?php
include 'db.php';

$matchedRecipes = [];

if (isset($_GET['ingredients'])) {
    $userIngredients = strtolower($_GET['ingredients']);
    $ingredientArray = array_map('trim', explode(',', $userIngredients));

    $query = "SELECT * FROM recipes";
    $result = $conn->query($query);

    while ($row = $result->fetch_assoc()) {
        $recipeIngredients = array_map('trim', explode(',', strtolower($row['ingredients'])));

        // Check if all entered ingredients exist in the recipe
        if (count(array_intersect($ingredientArray, $recipeIngredients)) == count($ingredientArray)) {
            $matchedRecipes[] = $row;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Results</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-image: url('images/background.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <header>
        <h1>🍽️ Recipe Finder</h1>
    </header>

    <main class="container">
        <h2>Matching Recipes</h2>
        
        <?php if (!empty($matchedRecipes)): ?>
            <div class="recipe-list">
                <?php foreach ($matchedRecipes as $recipe): ?>
                    <div class="recipe-card">
                        <?php
                        $imageName = strtolower(str_replace(' ', '_', $recipe['name']));
                        $imagePath = "images/{$imageName}.jpeg";

                        // Try .jpg if .jpeg not found
                        if (!file_exists($imagePath)) {
                            $imagePath = "images/{$imageName}.jpg";
                        }

                        // Fallback to default if not found
                        if (!file_exists($imagePath)) {
                            $imagePath = "images/default.jpeg";
                        }
                        ?>
                        <img src="<?php echo $imagePath; ?>" alt="<?php echo $recipe['name']; ?>" style="width:200px;height:auto;">
                        <h3><?php echo $recipe['name']; ?></h3>
                        <p><strong>Ingredients:</strong> <?php echo $recipe['ingredients']; ?></p>
                        <p><strong>Instructions:</strong> <?php echo $recipe['instructions']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="no-results">No matching recipes found. Try different ingredients.</p>
        <?php endif; ?>

        <a href="index.php" class="back-btn">🔙 Back to Search</a>
    </main>
</body>
</html>
