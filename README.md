# Recipe Finder

A dynamic web application that allows users to search for recipes based on available ingredients. The project includes user authentication (login/signup) and allows users to browse, save, and view their favorite recipes.

## Features

- **User Authentication**: Login and signup functionality.
- **Recipe Search**: Search for recipes based on ingredients.
- **Recipe Management**: View and save your favorite recipes.
- **Responsive Design**: The app is responsive on both desktop and mobile devices.
- **Recipe Images**: Each recipe has an associated image for better visual identification.

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL (XAMPP)
- **Tools**: XAMPP (local development environment)

## Project Files

- **`dashboard.php`**: Displays the user's dashboard after they log in. Shows an overview of saved recipes and profile details.
- **`db.php`**: Contains the database connection setup for connecting to MySQL using PHP.
- **`index.php`**: The homepage of the application where users can see featured recipes and start searching for others.
- **`login.php`**: Handles user login, authenticates credentials, and starts a user session.
- **`logout.php`**: Logs the user out of the system and ends the session.
- **`recipes.php`**: Displays the list of recipes based on user search criteria (ingredients, name, etc.).
- **`recipes.sql`**: SQL script file containing the database schema and initial data for the recipes.
- **`signup.php`**: Handles user registration (signup) by collecting user details and storing them in the database.
- **`style.css`**: The main CSS file that styles the layout and appearance of the website (fonts, colors, responsive design, etc.).

## Setup Instructions

### Prerequisites

- XAMPP or any other local PHP server setup.
- A modern web browser (Chrome, Firefox, Safari, etc.).

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/vaishnavi23cseb26/recipe_finder.git
