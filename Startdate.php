<?php
// Include admin panel components and database connection
include "Admin_Components/Header.php";
include "Admin_Components/Navbar.php";
include "Admin_Components/Sitebar.php";
require "Database.php";

session_start();

// Initialize message variables
$error = '';
$success = '';

// Check if there are any unfinished group schedules
// Query groups table for any dates from today onwards
$check_sql = "SELECT COUNT(*) as total FROM `groups` WHERE date >= CURDATE()";
$check_result = mysqli_query($conn, $check_sql);
$check_row = mysqli_fetch_assoc($check_result);
$unfinished_count = $check_row['total'] ?? 0;

// Handle form submission for setting start date
if (isset($_POST['submit'])) {
    $date = $_POST['date'];

    // Validate if date is provided
    if (empty($date)) {
        $error = "Please select a start date.";
    }
    // Prevent creating new groups if existing schedule is not finished
    elseif ($unfinished_count > 0) {
        $error = "You cannot create a new group schedule. Your current schedule is not finished yet!";
    }
    // If no unfinished schedule, store start date in session
    else {
        $_SESSION['date_set'] = $date;
        $success = "Start date set successfully!";
    }
}

// Create groups only if start date is set and no unfinished schedule exists
if (isset($_SESSION['date_set']) && $unfinished_count == 0) {

    $startDate = $_SESSION['date_set'];

    // Fetch all members from the database, ordered by ID
    $sql = "SELECT id FROM members ORDER BY id ASC";
    $result = mysqli_query($conn, $sql);
    $members = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $totalMembers = count($members);
    $groupCount = 30; // total number of groups
    $perGroup = intdiv($totalMembers, $groupCount); // members per group
    $remainder = $totalMembers % $groupCount;       // leftover members

    $index = 0;

    // Loop through each group to assign members
    for ($i = 0; $i < $groupCount; $i++) {

        // Adjust current group size if there are leftover members
        $currentGroupSize = $perGroup;
        if ($i < $remainder) $currentGroupSize++;

        // Slice members array for current group
        $groupMembers = array_slice($members, $index, $currentGroupSize);
        $index += $currentGroupSize;

        // Skip group if no members left
        if (empty($groupMembers)) continue;

        // Extract member IDs
        $ids = [];
        foreach ($groupMembers as $m) $ids[] = $m['id'];

        // Fill remaining slots with NULL to ensure 8 member columns
        for ($x = count($ids); $x < 8; $x++) $ids[] = NULL;

        // Calculate group date and day
        $currentDate = date('Y-m-d', strtotime($startDate . " +$i days"));
        $dayName = date('l', strtotime($currentDate));

        // Prepare SQL query to insert group into database
        $insert = "INSERT INTO `groups`
            (p1_id, p2_id, p3_id, p4_id, p5_id, p6_id, p7_id, p8_id, date, day)
            VALUES
            ('$ids[0]', '$ids[1]', '$ids[2]', '$ids[3]',
            '$ids[4]', '$ids[5]', '$ids[6]', '$ids[7]',
            '$currentDate', '$dayName')";

        // Execute insert query
        mysqli_query($conn, $insert);
    }

    // Clear session start date after creating groups to prevent duplicates
    unset($_SESSION['date_set']);
    $success = "30 Days Group Successfully Saved!";
}
?>


<div class="container mt-4">
    <div class="container">
        <div class="card mx-auto mt-3" style="width: 50rem; background-color: #512e5f;">
            <div class="card-body p-5">
                <h2 class="text-center text-light fw-bold">Pahara Start Date</h2>

                <!-- Display error message if any -->
                <?php if (!empty($error)): ?>
                    <div class="alert alert-danger"><?php echo $error; ?></div>
                <?php endif; ?>

                <!-- Display success message if any -->
                <?php if (!empty($success)): ?>
                    <div class="alert alert-success"><?php echo $success; ?></div>
                <?php endif; ?>

                <!-- Start Date Form -->
                <form action="Startdate.php" method="POST">
                    <div class="mt-5">
                        <label for="exampleInputText1" class="form-label text-light">Date</label>
                        <input type="date" name="date" class="form-control rounded-pill" id="exampleInputText1" required>
                    </div>
                    <div class="mt-5 d-flex justify-content-center">
                        <button class="btn btn-light rounded-pill px-4 pb-2 fw-bold" type="submit" name="submit">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<?php
// Include footer
include "Admin_Components/Footer.php";
?>