<?php
  include "User_Components/Header.php";
  include "User_Components/Navbar.php";
  require "Database.php";

  $today = date('Y-m-d');

  $sql = "SELECT * FROM `group` WHERE `date` = '$today'";
  $result = mysqli_query($conn, $sql);
  $groups = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
              foreach($groups as $group){
                $members = [
                    $group['p1_id'],
                    $group['p2_id'],
                    $group['p3_id'] ?? null,
                    $group['p4_id'] ?? null,
                    $group['p5_id'] ?? null,
                    $group['p6_id'] ?? null,
                    $group['p7_id'] ?? null,
                ];

                foreach($members as $member){
                  if(!$member) continue;
                  
                  $sql = "SELECT * FROM village_member_name WHERE id = $member LIMIT 1";
                  $result = mysqli_query($conn, $sql);
                  $paharadar = mysqli_fetch_assoc($result);

                  echo "<tr>
                          <th scope='row'>{$i}</th>
                          <td>{$paharadar['name']}</td>
                          <td>{$paharadar['father_name']}</td>
                          <td>{$paharadar['phone']}</td>
                        </tr>";
                        $i++;
                }
              }
              ?>
            </tbody>
        </table>
    </div>

    <?php
      include "User_Components/Footer.php";
    ?>