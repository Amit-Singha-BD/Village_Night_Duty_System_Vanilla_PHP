<?php
require "Database.php";

// Validate input
$member_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$status = isset($_GET['status']) ? (int)$_GET['status'] : null;
$today = date('Y-m-d');

if($member_id > 0 && ($status === 0 || $status === 1)){
    // Check if already marked
    $check_sql = "SELECT * FROM member_attendance WHERE member_id = $member_id AND date = '$today'";
    $check_result = mysqli_query($conn, $check_sql);

    if(mysqli_num_rows($check_result) == 0){
        // Insert attendance
        $insert_sql = "INSERT INTO member_attendance (member_id, present, absent, date) 
                       VALUES ($member_id, $status, " . ($status ? 0 : 1) . ", '$today')";
        mysqli_query($conn, $insert_sql);
    }
}

// Redirect back to groups page
header("Location: Group.php");
exit;
?>