<?php
    session_start();
    include "User_Components/Header.php";
    include "User_Components/Navbar.php";
    require "Database.php";

    $first_group  = [];
    $second_group = [];
    $third_group  = [];
    $fourth_group = [];
    $fifth_group  = [];

    $sql = "SELECT * FROM village_member_name";
    $result = mysqli_query($conn, $sql); 
    $list = mysqli_fetch_all($result, MYSQLI_ASSOC);

    foreach($list as $id){
        if($id['id'] >= 1 && $id['id'] <= 30){
            $first_group[] = $id;
        }
        elseif($id['id'] >= 31 && $id['id'] <= 60){
            $second_group[] = $id;
        }
        elseif($id['id'] >= 61 && $id['id'] <= 90){
            $third_group[] = $id;
        }
        elseif($id['id'] >= 91 && $id['id'] <= 120){
            $fourth_group[] = $id;
        }
        elseif($id['id'] >= 121 && $id['id'] <= 150){
            $fifth_group[] = $id;
        }
        else{
            echo "No data found in the table.";
        }
    }

    $new_groups = [];
    for($i = 0; $i < 30; $i++){
        $new_groups[$i + 1] = [
            'first_group'  => $first_group[$i]  ?? null,
            'second_group' => $second_group[$i] ?? null,
            'third_group'  => $third_group[$i]  ?? null,
            'fourth_group' => $fourth_group[$i] ?? null,
            'fifth_group'  => $fifth_group[$i]  ?? null,
        ];
    }

    $conn->close();

    $startDate = $_SESSION['date_set'];
    ?>

    <div class="container mt-5 pt-5">
        <h2 class="text-center text-light fw-bold">Calendar</h2>
        <div class="card mx-auto my-4" style="width: 70rem;">
            <div class="card-body">
                
                <?php foreach ($new_groups as $group_number => $members): ?>
                    
                    <table class="table mb-5">
                        <h4>Group <?php echo $group_number; ?></h4>
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">SR</th>
                                <th scope="col">Date</th>
                                <th scope="col">Day</th>
                                <th scope="col">Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sr = 1;
                            $baseDate = date('Y-m-d', strtotime($startDate . ' +' . ($group_number - 1) . ' days'));
                            $showDate = date('d/m/Y', strtotime($baseDate));
                            $showDay  = date('l', strtotime($baseDate));

                            foreach ($members as $group => $member):
                                if (!$member) continue;
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $sr++; ?></th>
                                    <td><?php echo $showDate; ?></td>
                                    <td><?php echo $showDay; ?></td>
                                    <td><?php echo $member['name']; ?></td>
                                </tr>
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