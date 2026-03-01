<?php
include "User_Components/Header.php";
require "Database.php";

// Validate input
$member_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if ($member_id <= 0) {
    die("Invalid member ID.");
}

// Fetch existing member data
$stmt = $conn->prepare("SELECT * FROM members WHERE id = ?");
$stmt->bind_param("i", $member_id);
$stmt->execute();
$result = $stmt->get_result();
$member_data = $result->fetch_assoc();
$stmt->close();

if (!$member_data) {
    die("Member not found.");
}
?>

<div class="container mt-4">
    <div class="card mx-auto mt-3" style="width: 50rem; background-color: #512e5f;">
        <div class="card-body p-5">
            <h2 class="text-center text-light fw-bold">Member Update</h2>
            <form action="Update_Member.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $member_data['id']; ?>">

                <div class="mt-5">
                    <label class="form-label text-light">Name</label>
                    <input type="text" name="name" class="form-control rounded-pill"
                        value="<?php echo htmlspecialchars($member_data['name']); ?>">
                </div>

                <div class="mt-3">
                    <label class="form-label text-light">Father's Name</label>
                    <input type="text" name="father_name" class="form-control rounded-pill"
                        value="<?php echo htmlspecialchars($member_data['father_name']); ?>">
                </div>

                <div class="mt-3">
                    <label class="form-label text-light">Phone Number</label>
                    <input type="text" name="phone" class="form-control rounded-pill"
                        value="<?php echo htmlspecialchars($member_data['phone']); ?>">
                </div>

                <div class="mt-5 d-flex justify-content-center">
                    <button class="btn btn-light rounded-pill px-4 pb-2 fw-bold" type="submit" name="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include "User_Components/Footer.php";
?>