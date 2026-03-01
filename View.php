<?php
include "User_Components/Header.php";
require "Database.php";

// Validate input
$list_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if ($list_id <= 0) {
    die("Invalid member ID.");
}

// Prepare statement to fetch member details
$stmt = $conn->prepare("SELECT * FROM members WHERE id = ?");
$stmt->bind_param("i", $list_id);
$stmt->execute();
$result = $stmt->get_result();
$member_data = $result->fetch_assoc();
$stmt->close();

if (!$member_data) {
    die("Member not found.");
}

// Prepare statement to fetch attendance of this member
$stmt2 = $conn->prepare("SELECT * FROM member_attendance WHERE member_id = ? ORDER BY date ASC");
$stmt2->bind_param("i", $list_id);
$stmt2->execute();
$attendance_result = $stmt2->get_result();
$attendance_data = [];
while ($row = $attendance_result->fetch_assoc()) {
    $attendance_data[] = $row;
}
$stmt2->close();

$conn->close();
?>

<div class="container">
    <h2 class="mt-5 pt-5 text-center text-light fw-bold">Gourd Info</h2>
    <div class="card my-4 mx-auto" style="width: 40rem;">
        <div class="card-body">
            <h4 class="text-center"><?php echo htmlspecialchars($member_data['name']); ?></h4>
            <h5 class="card-title text-center">Attendance</h5>
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">SR</th>
                            <th scope="col">Date</th>
                            <th scope="col">Present</th>
                            <th scope="col">Absent</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sr = 1;
                        foreach ($attendance_data as $att):
                        ?>
                            <tr>
                                <th scope="row"><?php echo $sr++; ?></th>
                                <td><?php echo date('d/m/Y', strtotime($att['date'])); ?></td>
                                <td><?php echo $att['present'] ? 'Yes' : ''; ?></td>
                                <td><?php echo $att['absent'] ? 'Absent' : ''; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
include "User_Components/Footer.php";
?>