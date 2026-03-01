<?php
include "User_Components/Header.php";
include "User_Components/Navbar.php";
require "Database.php";
?>

<div class="container my-5 py-4">
    <h2 class="text-center my-4 text-light fw-bold">Paharadar List</h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr class="text-center">
                <th scope="col">SR</th>
                <th scope="col">Name</th>
                <th scope="col">Father's Name</th>
                <th scope="col">Phone Number</th>
                <th scope="col" style="width: 250px;">Option</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Fetch all members from village_member_name
            $sql = "SELECT * FROM members ORDER BY id ASC";
            $result = mysqli_query($conn, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                while ($member = mysqli_fetch_assoc($result)) {
                    echo "<tr class='text-light text-center'>
                            <td>" . htmlspecialchars($member['id']) . "</td>
                            <td>" . htmlspecialchars($member['name']) . "</td>
                            <td>" . htmlspecialchars($member['father_name']) . "</td>
                            <td>" . htmlspecialchars($member['phone']) . "</td>
                            <td>
                                <a href='View.php?id=" . urlencode($member['id']) . "' target='_blank' class='btn btn-success'>View</a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5' class='text-center text-light'>No members found.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php
include "User_Components/Footer.php";
?>