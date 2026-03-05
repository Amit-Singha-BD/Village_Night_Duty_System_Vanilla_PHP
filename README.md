# Village_Night_Duty_System_Vanilla_PHP

## Description
Village Night Duty System is a simple web application built using Vanilla PHP for practice after learning core PHP.

This project simulates a village night guard management system, where villagers are organized into groups to perform night duty (পাহাড়া). The system helps villagers easily check who is responsible for night duty on a specific day.

The website provides public pages where village members can view the duty schedule, while an admin panel allows administrators to manage members, create schedules, and monitor attendance.

This project was developed mainly to strengthen PHP fundamentals, CRUD operations, and real-world logic implementation.

## Features

### Frontend (Public Website)
#### Home Page
- Displays today’s night duty group members in a table format.

#### List of Paharadar
- Shows the complete list of village members who participate in night duty.

#### Calendar Page
- Displays the monthly night duty schedule.
- Members are divided into groups (e.g., 6 members per group).
- Each group is displayed in a table format grouped by duty schedule.

#### About Page
- Provides information about the system and its purpose.

### Backend (Admin Panel)
#### Dashboard
- Displays system statistics such as:
- Total Members
- Total Groups
- Total Admin Users

#### Create Member
- Add new village members who will participate in night duty.

#### Member List
- View all members in a table.
- Available actions:
- View
- Edit
- Delete

#### Group Page
- Shows today’s duty group.
- Admin can control attendance using:
- Present
- Absent

#### Start Date Setup
- Admin sets the starting date for the duty schedule.
- Groups are automatically generated based on this date.
- If the existing 30-group schedule is not finished, a new schedule cannot be created.

#### Logout
- Secure logout for admin users.

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
│   └── night_gourd.sql
│
├── index.php
├── calendar.php
├── night_guard_list.php
├── about.php
│
├── dashboard.php
├── create_member.php
├── member_list.php
├── view.php
├── edit.php
├── delete.php
├── group.php
├── start_date.php
├── logout.php
├── login.php
│
└── Database.php
```

## Technologies Used
- PHP (Vanilla PHP)
- MySQL
- HTML
- CSS
- Bootstrap

## Setup Instructions
- Follow these 5 simple steps to run the project locally:

### Step 1
#### Clone the Repository
```bash
git clone https://github.com/Amit-Singha-BD/Village_Night_Duty_System_Vanilla_PHP.git
```

### Step 2
#### Move Project Folder
- Run the project on your local server, or if using XAMPP, move the project folder to:
```
xampp/htdocs/
```

### Step 3
#### Create Database
- Open phpMyAdmin, click New, enter the database name:
```
night_gourd
```
and then click Create.

### Step 4
#### Import SQL File
- Import the database file:
```
night_gourd.sql
```
- You can find it inside:
```
SQL_File/
```

### Step 5
#### Run the Project
- Open your browser and visit:
```
http://localhost/Village_Night_Duty_System_Vanilla_PHP
```

## Purpose of the Project
This project was developed to:
- Practice Core PHP
- Understand CRUD operations
- Work with MySQL databases
- Implement date-based scheduling logic
- Build a real-world system using PHP
- Improve backend development skills

## Author
- Amit Singha
- Backend Developer (PHP & Laravel)

## License
- This project is created for learning and practice purposes.
