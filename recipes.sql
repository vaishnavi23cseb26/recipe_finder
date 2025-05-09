CREATE DATABASE recipe_finder;
USE recipe_finder;

CREATE TABLE recipes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    ingredients TEXT NOT NULL,
    instructions TEXT NOT NULL
);

INSERT INTO recipes (name, ingredients, instructions) VALUES
('Pasta', 'pasta, tomato, garlic', 'Boil pasta. Cook tomatoes with garlic. Mix and serve.'),
('Omelette', 'eggs, onion, salt', 'Beat eggs. Fry with onions and salt.'),
('Salad', 'lettuce, tomato, cucumber', 'Chop all ingredients. Mix and serve.');
