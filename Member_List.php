<?php
include "Admin_Components/Header.php";
include "Admin_Components/Navbar.php";
include "Admin_Components/Sitebar.php";
require "Database.php";

$sql = "SELECT * FROM members";
$result = mysqli_query($conn, $sql);
$memberList = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!-- Main Content -->
<div class="container mt-2">
    <div class="container">
        <h2 class="text-center mb-3 fw-bold">List of Members</h2>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col" class="text-center">SR</th>
                    <th scope="col" class="text-center">Name</th>
                    <th scope="col" class="text-center">Father's Name</th>
                    <th scope="col" class="text-center">Phone Number</th>
                    <th scope="col" class="text-center" style="width: 250px;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($memberList as $member) {
                    echo "<tr>";
                    echo "<td class='text-center'>{$member['id']}</td>";
                    echo "<td class='text-center'>Name {$member['name']}</td>";
                    echo "<td class='text-center'>Father's Name {$member['father_name']}</td>";
                    echo "<td class='text-center'>{$member['phone']}</td>";
                    echo "<td class='text-center'>
                            <a href='View.php?id=".urlencode($member['id'])."' class='btn btn-success'>View</a>
                            <a href='Edit.php?id=".urlencode($member['id'])."' class='btn btn-info'>Edit</a>
                            <a href='Delete.php?id=".urlencode($member['id'])."' class='btn btn-danger'>Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>

        </table>
    </div>
</div>
</div>

<?php
include "Admin_Components/Footer.php";
?>