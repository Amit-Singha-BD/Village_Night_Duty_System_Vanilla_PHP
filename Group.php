<?php
include "Admin_Components/Header.php";
include "Admin_Components/Navbar.php";
include "Admin_Components/Sitebar.php";
require "Database.php";

$today = date('Y-m-d');

// Fetch all groups for today
$group_sql = "SELECT * FROM `groups` WHERE date = '$today'";
$group_result = mysqli_query($conn, $group_sql);

// Collect all member IDs from today's groups
$group_members = [];
while ($group = mysqli_fetch_assoc($group_result)) {
    for ($i = 1; $i <= 8; $i++) {
        if ($group["p{$i}_id"]) {
            $group_members[] = $group["p{$i}_id"];
        }
    }
}
$group_members = array_unique($group_members);

// Fetch member details
if (!empty($group_members)) {
    $ids_str = implode(',', $group_members);
    $members_sql = "SELECT * FROM `members` WHERE id IN ($ids_str)";
    $members_result = mysqli_query($conn, $members_sql);
    $members_data = mysqli_fetch_all($members_result, MYSQLI_ASSOC);
} else {
    $members_data = [];
}

?>

<div class="container mt-2">
    <h2 class="text-center text-dark mb-3">Today's Group</h2>

    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>SR</th>
                <th>Name</th>
                <th>Father's Name</th>
                <th>Phone</th>
                <th>Attendance</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sr = 1;
            foreach ($members_data as $member) {
                // Check if attendance already exists for today
                $check_sql = "SELECT * FROM member_attendance WHERE member_id = {$member['id']} AND date = '$today'";
                $check_result = mysqli_query($conn, $check_sql);
                $attendance = mysqli_fetch_assoc($check_result);

                echo "<tr>";
                echo "<td>{$sr}</td>";
                echo "<td>{$member['name']}</td>";
                echo "<td>{$member['father_name']}</td>";
                echo "<td>{$member['phone']}</td>";
                echo "<td>";

                if ($attendance) {
                    // Already marked
                    echo $attendance['present'] ? "<span class='text-success fw-bold'>✔️ Present</span>" : "<span class='text-danger fw-bold'>❌ Absent</span>";
                } else {
                    // Show buttons to mark attendance
                    echo "<a href='Both_Attendance.php?id={$member['id']}&status=1' class='btn btn-success btn-sm'>✔️</a> ";
                    echo "<a href='Both_Attendance.php?id={$member['id']}&status=0' class='btn btn-danger btn-sm'>❌</a>";
                }

                echo "</td>";
                echo "</tr>";
                $sr++;
            }
            ?>
        </tbody>
    </table>

</div>

<?php
include "Admin_Components/Footer.php";
?>