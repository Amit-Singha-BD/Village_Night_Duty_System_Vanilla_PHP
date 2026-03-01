<?php
include "Admin_Components/Header.php";
include "Admin_Components/Navbar.php";
include "Admin_Components/Sitebar.php";
require "Database.php";

// Fetch total members
$member_sql = "SELECT COUNT(*) AS total_members FROM members";
$member_result = mysqli_query($conn, $member_sql);
$total_members = mysqli_fetch_assoc($member_result)['total_members'];

// Fetch total groups
$group_sql = "SELECT COUNT(*) AS total_groups FROM `groups`";
$group_result = mysqli_query($conn, $group_sql);
$total_groups = mysqli_fetch_assoc($group_result)['total_groups'];

// Fetch total admins/users
$user_sql = "SELECT COUNT(*) AS total_users FROM users"; // adjust table name
$user_result = mysqli_query($conn, $user_sql);
$total_users = mysqli_fetch_assoc($user_result)['total_users'];
?>

<div class="container mt-5 pt-5">
    <h2 class="text-center text-light mb-5">Dashboard Overview</h2>
    <div class="row justify-content-center">

        <!-- Total Members -->
        <div class="col-md-3 mb-4">
            <div class="card text-center text-light" style="background-color: #512e5f;">
                <div class="card-body">
                    <h5 class="card-title">Total Members</h5>
                    <h2 class="fw-bold"><?php echo $total_members; ?></h2>
                </div>
            </div>
        </div>

        <!-- Total Groups -->
        <div class="col-md-3 mb-4">
            <div class="card text-center text-light" style="background-color: #2a3f54;">
                <div class="card-body">
                    <h5 class="card-title">Total Groups</h5>
                    <h2 class="fw-bold"><?php echo $total_groups; ?></h2>
                </div>
            </div>
        </div>

        <!-- Total Admin/Users -->
        <div class="col-md-3 mb-4">
            <div class="card text-center text-light" style="background-color: #1abc9c;">
                <div class="card-body">
                    <h5 class="card-title">Total Users</h5>
                    <h2 class="fw-bold"><?php echo $total_users; ?></h2>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
include "Admin_Components/Footer.php";
?>