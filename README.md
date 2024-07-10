# BloodBank Management System

## Description
The Blood Bank Management System is a web-based application designed for efficiently managing blood donation operations. It provides comprehensive tools for tracking blood inventory, managing donor records, and facilitating blood requests from hospitals and other healthcare providers.

## Technologies Used
- **PHP**: Server-side scripting language for dynamic web content.
- **CSS**: Styling language for designing responsive and aesthetic user interfaces.
- **MySQL**: Relational database management system for data storage.
- **HTML**: Markup language for creating web pages and forms.
- **JavaScript**: Enhances user interactivity and form validation on the client-side.

## Purpose
To streamline blood donation management by:
- **Inventory Control**: Tracking blood types, quantities, and expiration dates.
- **Donor Management**: Maintaining donor information and donation history.
- **Recipient Services**: Facilitating requests and matching blood donors with recipients.
- **User Authentication**: Securing access to sensitive information and administrative functions.

## Workflow
1. **Data Management**: Store and retrieve blood donation records securely.
2. **User Interface**: Design intuitive interfaces for easy navigation and data entry.
3. **Authentication**: Ensure secure login and access control for administrators and donors.
4. **Search and Filtering**: Allow users to search for specific blood types and availability.
5. **Reports**: Generate reports on blood inventory, donor statistics, and donation trends.

## Setup Instructions
1. Install a local web server environment (e.g., XAMPP, WAMP).
2. Import the project files into the web server's document root directory.
3. Create a MySQL database and import the provided SQL schema.
4. Configure the database connection settings in `config.php`.
5. Access the application through a web browser to begin managing your blood bank.

## Example Usage
To add a new donor or update blood inventory, log in as an administrator and navigate to the respective modules in the dashboard.

```php
<?php
// Example PHP code snippet for adding a new donor
include 'config.php';

// Process form data and insert into MySQL database
// Example: Inserting new donor details into the donors table
?>

