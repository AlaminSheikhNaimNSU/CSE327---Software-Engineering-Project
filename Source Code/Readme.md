# Project 327 - GI Products E-commerce Platform

## 📦 Overview

Project 327 is a web-based e-commerce platform tailored for GI (Geographical Indications) products. The platform allows users to browse, search, and purchase authentic GI-tagged goods. It also includes an admin interface for managing products, users, and orders.

📦 Overview
This project is an online GI products e-commerce platform built using PHP and MySQL. It includes features like product browsing, user registration/login, shopping cart, and an admin panel.

🚀 Setup Instructions
1. Clone or Download the Project
Unzip the project folder to your desired local server directory (e.g., htdocs in XAMPP or www in WAMP).

bash
Copy
Edit
# Assuming you're using Git
git clone <repository-url>
2. Configure the Database
a. Create a MySQL Database
Create a database named:

sql
Copy
Edit
project_327
b. Import the SQL File
Import the project_327.sql file (located inside the project ZIP) into your database using phpMyAdmin or the MySQL CLI:

bash
Copy
Edit
mysql -u root -p project_327 < project_327.sql
3. Set Up Database Connection
Open the file:

pgsql
Copy
Edit
Project_327/server/connection.php
And verify the connection details:

php
Copy
Edit
$conn = mysqli_connect("localhost", "root", "", "project_299")
        or die("Couldn't connect to database");
If you're using a different username/password for MySQL, update the "root" and "" fields accordingly.

📁 Folder Structure
server/ — Contains backend PHP scripts for DB connection and product queries

layouts/ — Header/footer templates

admin/ — Admin login and dashboard

assets/ — Static assets (images, videos, stylesheets)

.php files — Frontend pages: index.php, shop.php, account.php, etc.

🔐 Admin Access
Admin credentials can be set directly in the admins table of the database. Make sure passwords are hashed appropriately (using password_hash in PHP).

🧪 Testing
Run the project using a local server (e.g., XAMPP)

Visit http://localhost/Project_327 in your browser
