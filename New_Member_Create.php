<?php
include "Admin_Components/Header.php";
include "Admin_Components/Navbar.php";
include "Admin_Components/Sitebar.php";
require "Database.php";

if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $father_name = trim($_POST['father_name']);
    $phone = trim($_POST['phone']);

    // Simple validation
    if (empty($name) || empty($father_name) || empty($phone)) {
        $error = "All fields are required.";
    } else {
        // Use prepared statement for security
        $stmt = $conn->prepare("INSERT INTO members (name, father_name, phone) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $father_name, $phone);

        if ($stmt->execute()) {
            $success = "New member created successfully!";
        } else {
            $error = "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>

<div class="container mt-4">
    <div class="card mx-auto mt-3" style="width: 50rem; background-color: #512e5f;">
        <div class="card-body p-5">
            <h2 class="text-center text-light fw-bold">New Member Create</h2>

            <!-- Feedback Messages -->
            <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>
            <?php if (isset($success)): ?>
                <div class="alert alert-success"><?php echo htmlspecialchars($success); ?></div>
            <?php endif; ?>

            <form action="" method="POST">
                <div class="mt-5">
                    <label for="nameInput" class="form-label text-light">Name</label>
                    <input type="text" name="name" class="form-control rounded-pill" id="nameInput" required>
                </div>
                <div class="mt-3">
                    <label for="fatherNameInput" class="form-label text-light">Father's Name</label>
                    <input type="text" name="father_name" class="form-control rounded-pill" id="fatherNameInput" required>
                </div>
                <div class="mt-3">
                    <label for="phoneInput" class="form-label text-light">Phone Number</label>
                    <input type="text" name="phone" class="form-control rounded-pill" id="phoneInput" required>
                </div>
                <div class="mt-5 d-flex justify-content-center">
                    <button class="btn btn-light rounded-pill px-4 pb-2 fw-bold" type="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include "Admin_Components/Footer.php";
?>