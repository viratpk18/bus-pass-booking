# Bus Pass Management System

## Overview
The Bus Pass Management System is a web-based application designed to simplify the process of applying for and managing bus passes. The project leverages PHP for backend logic, MySQL for database management, and includes features such as user registration, login, pass application, and PDF generation.

## Features
- User registration and login.
- Apply for new bus passes.
- Approve or reject bus pass applications (admin panel).
- Renewal of bus passes.
- PDF generation for bus pass details.
- Database-driven user and pass management.

## Technologies Used
- **Programming Language**: PHP
- **Database**: MySQL
- **Frontend**: HTML, CSS
- **PDF Generation**: FPDF library

## Installation

### Prerequisites
- A web server (e.g., Apache) with PHP installed.
- MySQL server.
- A tool like phpMyAdmin or MySQL CLI to manage the database.

### Steps
1. Clone the repository:
   ```bash
   git clone <repository_url>
   ```
2. Extract the files and place them in the web server's root directory (e.g., `htdocs` for XAMPP).
3. Create a database in MySQL named `bus_pass` (or your preferred name).
4. Import the SQL schema:
   ```bash
   mysql -u username -p bus_pass < path/to/bus.sql
   ```
5. Update the database configuration in `dbConfig.php`:
   ```php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'your_username');
   define('DB_PASSWORD', 'your_password');
   define('DB_DATABASE', 'bus_pass');
   ```
6. Start the web server and navigate to the application in your browser.

## Usage
1. Register as a new user.
2. Log in using the credentials.
3. Apply for a bus pass or renew an existing one.
4. Admins can log in to manage approvals and view user details.

## File Structure
- **PHP Files**: Contains core application logic (e.g., `admin.php`, `user_login.php`).
- **SQL File**: `bus.sql` for setting up the database.
- **CSS**: Styling located in `css/style.css`.
- **Assets**: Images and fonts used in the application.

## Contributions
Contributions are welcome! Please fork the repository and submit a pull request.
