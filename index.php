<?php
// Include user interface components and database connection
include "User_Components/Header.php";
include "User_Components/Navbar.php";
require "Database.php";

// Get today's date in 'YYYY-MM-DD' format
$today = date('Y-m-d');

/* Fetch all members assigned to today's groups
   Join the 'group' table with 'village_member_name' table
   Match members from columns p1_id to p8_id
   Filter only groups where the date equals today
   Select member details: name, father_name, phone
*/
$sql = "SELECT vm.name, vm.father_name, vm.phone FROM `groups` g JOIN members vm ON vm.id IN (g.p1_id, g.p2_id, g.p3_id, g.p4_id, g.p5_id, g.p6_id, g.p7_id, g.p8_id) WHERE g.date = '$today'";
$result = mysqli_query($conn, $sql);

// Fetch all matching members as an associative array
$members = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<div class="container mt-5 pt-4">
  <h2 class="text-center text-light fw-bold mt-4">Recently Date</h2>
  <h2 class="d-flex justify-content-center text-light fw-bold my-4">Day</h2>
  <table class="table table-borderless">
    <thead class="table-dark">
      <tr>
        <th scope="col">SR</th>
        <th scope="col">Name</th>
        <th scope="col">Father's Name</th>
        <th scope="col">Phone Number</th>
      </tr>
    </thead>
    <tbody class="text-light">
      <?php
      $i = 1;
      foreach ($members as $member) {
        echo "<tr>
                <th scope='row'>{$i}</th>
                <td>{$member['name']}</td>
                <td>{$member['father_name']}</td>
                <td>{$member['phone']}</td>
              </tr>";
        $i++;
      }
      ?>
    </tbody>
  </table>
</div>

<?php
include "User_Components/Footer.php";
?>