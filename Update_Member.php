<?php
require "Database.php";

if (isset($_POST['submit'])) {
    $id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $father_name = isset($_POST['father_name']) ? trim($_POST['father_name']) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';

    if ($id <= 0 || empty($name) || empty($father_name) || empty($phone)) {
        die("All fields are required.");
    }

    // Update member securely
    $stmt = $conn->prepare("UPDATE members SET name = ?, father_name = ?, phone = ? WHERE id = ?");
    $stmt->bind_param("sssi", $name, $father_name, $phone, $id);

    if ($stmt->execute()) {
        echo "Member updated successfully!";
    } else {
        echo "Error updating member: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
