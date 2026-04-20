My Portfolio Project

Description:
This is a personal portfolio website named "My Portfolio" built using HTML, CSS, PHP, and MySQL. 
It includes a contact form that stores messages in a MySQL database.

Database:
- Database Name: portfolio_db
- Table: contact_messages
- SQL File: database/contact_messages.sql

Setup Instructions:
1. Import 'contact_messages.sql' into your MySQL server.
2. Update 'inc/db.php' with your database credentials.
3. Place the project folder in your local server (e.g., XAMPP's htdocs).
4. Open 'index.php' in your browser to view the portfolio.
5. Use 'contact.php' to send messages, which will be stored in the database.
6. Admin can view messages via 'admin_messages.php'.

Project Structure:
- assets/ : Contains CSS, JS, images.
- inc/ : Contains database connection file (db.php).
- database/ : Contains the SQL file for database creation and sample data.
- index.php, about.php, contact.php : Website pages.
- admin_messages.php : Admin page to view and delete messages.

Author:
Redoana Islam
