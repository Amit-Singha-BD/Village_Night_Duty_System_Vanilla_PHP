<?php
// Start the session to access session variables if needed
session_start();

// Include user interface components and database connection
include "User_Components/Header.php";
include "User_Components/Navbar.php";
require "Database.php";

/* Fetch all groups from the 'group' table, ordered by date ascending.
   This ensures that groups are processed in chronological order.
*/
$group_sql = "SELECT * FROM `groups` ORDER BY `date` ASC";
$group_result = mysqli_query($conn, $group_sql);

// Initialize an array to store group data
$groups = [];

// Loop through each group and extract member IDs
while ($row = mysqli_fetch_assoc($group_result)) {
    $members = [];
    for ($i = 1; $i <= 8; $i++) {
        $member_id = $row["p{$i}_id"];
        if ($member_id) {
            $members[] = $member_id;
        }
    }
    // Store group information in the array
    $groups[] = [
        'group_id' => $row['id'],
        'date' => $row['date'],
        'day' => $row['day'],
        'members' => $members
    ];
}

/* Collect all unique member IDs from all groups.
   This prevents multiple queries for the same member.
*/
$all_member_ids = [];
foreach ($groups as $group) {
    $all_member_ids = array_merge($all_member_ids, $group['members']);
}
$all_member_ids = array_unique($all_member_ids);
$member_ids_str = implode(',', $all_member_ids);

/* Fetch member details from 'village_member_name' table for all relevant member IDs.
   This query retrieves data like name, father_name, phone, etc., for display.
*/
$members_sql = "SELECT * FROM `members` WHERE id IN ($member_ids_str)";
$members_result = mysqli_query($conn, $members_sql);

// Map member data by their ID for easy lookup
$members_data = [];
while ($row = mysqli_fetch_assoc($members_result)) {
    $members_data[$row['id']] = $row;
}

// Close the database connection as it is no longer needed
$conn->close();
?>

<div class="container mt-5 pt-5">
    <h2 class="text-center text-light fw-bold">Paharadar Groups</h2>
    <div class="card bg-transparent mx-auto my-4" style="width: auto;">
        <div class="card-body">

            <?php foreach ($groups as $group): ?>
                <table class="table table-striped table-bordered mb-5">
                    <div class="d-flex justify-content-between">
                        <h4 class="text-light fs-5">Group ID: <?php echo $group['group_id']; ?></h4>
                        <h4 class="text-light fs-5">Day: <?php echo $group['day']; ?></h4>
                        <h4 class="text-light fs-5">Date: <?php echo date('d/m/Y', strtotime($group['date'])); ?></h4>
                    </div>
                    <thead class="table-dark">
                        <tr class="text-center text-light">
                            <th>SR</th>
                            <th>Name</th>
                            <th>Father Name</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $sr = 1; ?>
                        <?php foreach ($group['members'] as $member_id): ?>
                            <?php if (isset($members_data[$member_id])): ?>
                                <tr class="text-center text-light">
                                    <td><?php echo $sr++; ?></td>
                                    <td><?php echo htmlspecialchars($members_data[$member_id]['name']); ?></td>
                                    <td><?php echo htmlspecialchars($members_data[$member_id]['father_name']); ?></td>
                                    <td><?php echo htmlspecialchars($members_data[$member_id]['phone']); ?></td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endforeach; ?>

        </div>
    </div>
</div>

<?php
include "User_Components/Footer.php";
?>