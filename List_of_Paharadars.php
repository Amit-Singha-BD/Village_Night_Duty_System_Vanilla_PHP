<?php
    include "User_Components/Header.php";
    include "User_Components/Navbar.php";
    require "Database.php";

    $sql = "SELECT * FROM village_member_name";
    $result = mysqli_query($conn, $sql);
    $list = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $lastData = end($list);
    $lastId = $lastData['id'];

    $addValue = 29;
    $start = 0;

    $baseDate = "2025-12-01";

    while($start <= $lastId){

    $p1 = $list[$start]['id'] ?? null;
    $p2 = $list[$p1 + $addValue]['id'] ?? null;
    $p3 = $list[$p2 + $addValue]['id'] ?? null;
    $p4 = $list[$p3 + $addValue]['id'] ?? null;
    $p5 = $list[$p4 + $addValue]['id'] ?? null;

    $groupDate = date('Y-m-d', strtotime($baseDate . " + $start days"));
    $groupDay = date('l', strtotime($groupDate));
            
    if($lastId % 5 != 0 AND $lastId - $p5 == 1){
    $p6 = $list[$p5 + 1]['id'] ?? null;
    $groupSql = "INSERT INTO `group` (`p1_id`, `p2_id`, `p3_id`, `p4_id`, `p5_id`, `p6_id`, `date`, `day`) VALUES ('$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$groupDate', '$groupDay')";
    }
    elseif($lastId % 5 != 0 AND $lastId - $p5 == 2){
    $p6 = $list[$p5 + 1]['id'] ?? null;
    $p7 = $list[$p6 + 1]['id'] ?? null;
    $groupSql = "INSERT INTO `group` (`p1_id`, `p2_id`, `p3_id`, `p4_id`, `p5_id`, `p6_id`, `p7_id`, `date`, `day`) VALUES ('$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$groupDate', '$groupDay')";
    }
    elseif($lastId % 5 != 0 AND $lastId - $p5 == 3){
    $p6 = $list[$p5 + 1]['id'] ?? null;
    $p7 = $list[$p6 + 1]['id'] ?? null;
    $p8 = $list[$p7 + 1]['id'] ?? null;
    $groupSql = "INSERT INTO `group` (`p1_id`, `p2_id`, `p3_id`, `p4_id`, `p5_id`, `p6_id`, `p7_id`, `p8_id`, `date`, `day`) VALUES ('$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$groupDate', '$groupDay')";
    }
    else{
    $groupSql = "INSERT INTO `group` (`p1_id`, `p2_id`, `p3_id`, `p4_id`, `p5_id`, `date`, `day`) VALUES ('$p1', '$p2', '$p3', '$p4', '$p5', '$groupDate', '$groupDay')";
    }

    mysqli_query($conn, $groupSql);

    if($p1 == $lastId || $p2 == $lastId || $p3 == $lastId || $p4 == $lastId || $p5 == $lastId){
    break;
    }

    $start++;
    }
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
                    $sql = "SELECT * FROM village_member_name";
                    $result = mysqli_query($conn, $sql); 
                    $list = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    foreach($list as $paharadar){
                        echo "<tr>
                                <td class='text-light text-center'>".$paharadar['id']."</td>
                                <td class='text-light text-center'>".$paharadar['name']."</td>
                                <td class='text-light text-center'>".$paharadar['father_name']."</td>
                                <td class='text-light text-center'>".$paharadar['phone']."</td>
                                <td class='text-center'><a href='View.php?id=".$paharadar['id']."' target='_blank' class='btn btn-success'>View</a></td>
                              </tr>
                        ";
                    }
                ?>
                
            </tbody>
        </table>
    </div>

  <?php
    include "User_Components/Footer.php";
  ?>