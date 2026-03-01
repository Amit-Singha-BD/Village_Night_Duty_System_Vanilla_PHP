<?php
include "User_Components/Header.php";
include "User_Components/Navbar.php";
require "Database.php";
?>

<div class="container my-5 py-4">
    <h2 class="text-center my-4 text-light fw-bold">List of Names</h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col" class="text-center">SR</th>
                <th scope="col" class="text-center">Name</th>
                <th scope="col" class="text-center">Father's Name</th>
                <th scope="col" class="text-center">Phone Number</th>
                <th scope="col" class="text-center" style="width: 250px;">Option</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Fetch all members from village_member_name
            $sql = "SELECT * FROM members ORDER BY id ASC";
            $result = mysqli_query($conn, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                while ($member = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td class='text-light text-center'>" . htmlspecialchars($member['id']) . "</td>
                            <td class='text-light text-center'>" . htmlspecialchars($member['name']) . "</td>
                            <td class='text-light text-center'>" . htmlspecialchars($member['father_name']) . "</td>
                            <td class='text-light text-center'>" . htmlspecialchars($member['phone']) . "</td>
                            <td class='text-center'>
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