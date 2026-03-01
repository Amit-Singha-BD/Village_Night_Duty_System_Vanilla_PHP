<?php
require "Database.php";

// Validate input
$member_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if ($member_id <= 0) {
    die("Invalid member ID.");
}

// Optional: Delete related attendance records first
$stmt1 = $conn->prepare("DELETE FROM member_attendance WHERE member_id = ?");
$stmt1->bind_param("i", $member_id);
$stmt1->execute();
$stmt1->close();

// Delete member from village_member_name
$stmt2 = $conn->prepare("DELETE FROM members WHERE id = ?");
$stmt2->bind_param("i", $member_id);

if ($stmt2->execute()) {
    echo "Member deleted successfully";
    exit;
} else {
    echo "Error deleting member: " . $stmt2->error;
}

$stmt2->close();
$conn->close();
