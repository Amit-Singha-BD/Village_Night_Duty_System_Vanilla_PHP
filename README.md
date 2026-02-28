# Village_Night_Duty_System_Vanilla_PHP

## Description
Night Duty System is a simple web application built using Vanilla PHP for practice purposes after learning core PHP.

This project is designed for managing village night duty schedules. It helps distribute night guard responsibilities among villagers and allows users to check who is assigned on a specific date. In case of any emergency, villagers can easily find and contact the assigned night guards.

The project was mainly developed to strengthen my PHP fundamentals through real-world practice.

## Features

### Frontend
- Home Page – Displays today's night duty members in a table.
- Night Guard List – Shows the complete list of village members in table format.
- Calendar Page – Displays the monthly night duty schedule.
- About Page – Provides information about the website.

### Backend (Admin Panel)
- Dashboard – Admin dashboard (currently basic structure).
- Create Member – Add new village members.
- Member List – View all members with options to:
 - View
 - Edit
 - Delete
- Start Date Setup – Set the starting date for night duty scheduling.
- Settings Page
- Logout Page

## Project Structure
```
Night_Duty_System/
│
├── Admin_Components/
│   ├── Navbar.php
│   ├── Header.php
│   ├── Sidebar.php
│   └── Footer.php
│
├── User_Components/
│   ├── Navbar.php
│   ├── Header.php
│   └── Footer.php
│
├── Assets/
│   ├── Custom CSS
│   └── Bootstrap Files
│
├── SQL_File/
│   ├── night_gourd.sql
|
├── index.php
├── calendar.php
├── night_guard_list.php
├── about.php
├── dashboard.php
├── create_member.php
├── member_list.php
├── view.php
├── edit.php
├── delete.php
├── start_date.php
├── settings.php
├── logout.php
├── login.php
└── Database.php
```

## Technologies Used
- PHP (Vanilla PHP)
- MySQL
- HTML
- CSS
- Bootstrap

## Setup Instructions
- Follow these steps to run the project locally:

### Clone the Repository
```bash
git clone https://github.com/Amit-Singha-BD/Village_Night_Duty_System_Vanilla_PHP.git
```

### Move Project Folder
- Move the project folder to:
```
xampp/htdocs/
```

### Create Database
- Create a new database named:
```
night_gourd
```

### Import SQL File
- Import the provided SQL file:
```
night_gourd.sql
```

### Run the Project
- Open your browser and visit:
```
http://localhost/Village_Night_Duty_System_Vanilla_PHP
```

## Purpose of the Project
- Practice core PHP
- Understand CRUD operations
- Work with MySQL database
- Build real-world logic using dates and scheduling
- Improve backend development skills

## Author
- Amit Singha
- Backend Developer (PHP & Laravel)

## License
- This project is created for learning and practice purposes.
